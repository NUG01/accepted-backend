<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Like extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
    ];


    public function user(): BelongsTo
    {
        return $this->BelongsTo(User::class);
    }
    public function post(): BelongsTo
    {
        return $this->BelongsTo(Post::class);
    }
    public function notification(): HasOne
    {
        return $this->HasOne(Notification::class);
    }
}
