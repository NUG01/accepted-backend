<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddPostRequest;
use App\Http\Requests\CommentRequest;
use App\Http\Resources\PostResource;
use App\Models\Comment;
use App\Models\Gallery;
use App\Models\Like;
use App\Models\Post;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{

    public function index()
    {
        return PostResource::collection(Post::latest()->get());
        // return PostResource::collection(Post::latest()->paginate(5));
    }


    public function store(AddPostRequest $request)
    {


        $current_time = Carbon::now();

        $new_time = $current_time->addMinutes(40);
        $post =  Post::create([
            'user_id' => Auth::user()->id,
            'body' => $request->question,
            'created_at' => $new_time,
            'updated_at' => $new_time,
        ]);

        if (request()->has('images')) {
            for ($i = 0; $i < count(request()->file('images')); $i++) {
                $currentImage = request()->file('images')[$i]->store('gallery');
                Gallery::create(['image' => $currentImage, 'post_id' => $post->id]);
            };
        }

        $data = [
            'id' => $post->id,
            'body' => $post->body,
            'user' => Auth::user(),
            'created_at' => $new_time,
            'images' => $post->images,
            'liked' => $post->likes->where('user_id', Auth::user()->id)->first() ? 'true' : 'false',
            'users_who_liked' => User::whereIn('id', $post->pluck('user_id'))->get(['surname', 'name'])
        ];


        return response()->json($data);
    }


    public function like($postId)
    {

        $likeIsPresent = Like::where([
            ['post_id', $postId],
            ['user_id', Auth::user()->id]
        ]);

        if (!$likeIsPresent->first()) {
            Like::create([
                'post_id' => $postId,
                'user_id' => Auth::user()->id
            ]);

            return response()->json('Liked!');
        }

        if ($likeIsPresent->first()) $likeIsPresent->delete();
        return response()->json('Unliked!');
    }

    public function comment(CommentRequest $request, $postId)
    {

        $comment = Comment::create([
            'body' => $request->body,
            'post_id' => $postId,
            'user_id' => Auth::user()->id,
            'parent_id' => $request->parent_id

        ]);

        $payload = [
            'id' => $comment->id,
            'body' => $comment->body,
            'post_id' => $comment->post_id,
            'author' => $comment->user->get(['name', 'surname', 'image', 'id']),
            'replies' => Comment::where('parent_id',  $comment->id)->get()
        ];

        return response()->json($payload);
    }

    public function destroyComment(Comment $comment)
    {
        $comment->delete();
        return response()->noContent();
    }
}