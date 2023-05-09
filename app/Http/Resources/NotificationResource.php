<?php

namespace App\Http\Resources;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class NotificationResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'author' => User::where('id',  $this->user_id)->get('name', 'surname', 'image', 'id'),
            'body' => $this->body,
            'post_id' => $this->post_id,
            'created_at' => $this->created_at,
        ];
    }
}
