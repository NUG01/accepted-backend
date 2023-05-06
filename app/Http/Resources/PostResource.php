<?php

namespace App\Http\Resources;

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
            'liked' => $this->likes->where('user_id', Auth::user()->id)->first() ? 'true' : 'false'
        ];
    }
}
