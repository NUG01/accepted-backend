<?php

namespace App\Http\Controllers;

use App\Events\NotificationReceived;
use App\Http\Requests\AddPostRequest;
use App\Http\Requests\CommentRequest;
use App\Http\Resources\CommentResource;
use App\Http\Resources\PostResource;
use App\Models\Comment;
use App\Models\Gallery;
use App\Models\Like;
use App\Models\Notification;
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



        $post =  Post::create([
            'user_id' => Auth::user()->id,
            'body' => $request->question,
            'created_at' => now(),
            'updated_at' => now(),
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
            'created_at' => now(),
            'images' => $post->images,
            'comments' => CommentResource::collection($post->comments),
            'liked' => 'false',
            'users_who_liked' => []
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
            $this->createNotification(null, $postId, 'like');


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
            'parent_id' => $request->parent_id,

        ]);

        $this->createNotification($request, $postId, 'comment');

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
        if ($comment->user_id != Auth::user()->id) return response()->json('Only author can delete it!');
        $comment->delete();
        return response()->noContent();
    }

    private static function currentTime()
    {
        $current_time = Carbon::now();

        $new_time = $current_time->addMinutes(40);

        return $new_time;
    }
    private static function createNotification($request, $postId, $type)
    {
        $notification = Notification::create([
            'body' => $type == 'comment' ?  $request->body : null,
            'post_id' => $postId,
            'user_id' => Auth::user()->id,
            'created_at' => now()

        ]);

        event(new NotificationReceived($notification));
    }
}
