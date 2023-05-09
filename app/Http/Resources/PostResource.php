<?php

namespace App\Http\Resources;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Auth;

class PostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'user' => $this->user,
            'body' => $this->body,
            'created_at' => $this->created_at,
            'images' => $this->images,
            'comments' => CommentResource::collection($this->comments),
            'liked' => $this->likes->where('user_id', Auth::user()->id)->first() ? 'true' : 'false',
            'users_who_liked' => User::whereIn('id', $this->likes->pluck('user_id'))->get(['surname', 'name', 'id', 'image']),
        ];
    }
}
