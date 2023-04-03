<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class UserCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @return array<int|string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'surname' => $this->surname,
            'email' => $this->email,
            'verified' => $this->email_verified_at ? true : false,
            'role' => $this->role($this->role_id),
        ];
    }


    private static function role($id)
    {
        if ($id == 1) return 'entrant';
        if ($id == 2) return 'student';
        if ($id == 3) return 'teacher';
    }
}
