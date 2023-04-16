<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Result extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
    ];

    protected $casts = [
        'incorrect' => 'array',
    ];

    public function user(): BelongsTo
    {
        return $this->BelongsTo(User::class);
    }
    public function testType(): BelongsTo
    {
        return $this->BelongsTo(TestType::class);
    }
}
