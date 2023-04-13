<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TestResource extends JsonResource
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
            'test_type_id' => $this->test_type_id,
            'type' => $this->type,
            'category' => $this->category,
            'number' => $this->number,
            'introduction' => $this->introduction,
            'conditions' => $this->conditions,
            'question' => $this->question,
            'answers' => $this->answers,
            'correct' => $this->correct,
            'image' => $this->image,
        ];
    }
}
