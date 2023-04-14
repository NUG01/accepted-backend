<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Text extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
    ];




    public function testType(): BelongsTo
    {
        return $this->BelongsTo(TestType::class);
    }
}
