<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Gallery extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
    ];

    public function post(): BelongsTo
    {
        return $this->BelongsTo(Post::class);
    }
}
