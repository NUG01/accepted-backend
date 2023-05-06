<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddPostRequest;
use App\Http\Resources\PostResource;
use App\Models\Gallery;
use App\Models\Like;
use App\Models\Post;
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
            'created_at' => $post->created_at,
            'images' => $post->images
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
}
