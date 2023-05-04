<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddPostRequest;
use App\Http\Resources\PostResource;
use App\Models\Gallery;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{

    public function index()
    {
        return PostResource::collection(Post::latest()->get());
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


        return response()->json($post);
    }
}
