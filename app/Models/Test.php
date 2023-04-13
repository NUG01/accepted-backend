<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Test extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
    ];


    protected $casts = [
        'conditions' => 'array',
        'asnwers' => 'array'
    ];


    public function testType(): BelongsTo
    {
        return $this->BelongsTo(TestType::class);
    }
}
