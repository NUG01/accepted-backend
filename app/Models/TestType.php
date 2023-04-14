<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TestType extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
    ];

    public function tests(): HasMany
    {
        return $this->HasMany(Test::class);
    }
    public function texts(): HasMany
    {
        return $this->HasMany(Text::class);
    }

    // public function answers(): Attribute
    // {
    //     return new Attribute(
    //         get: fn ($value) => json_encode($value)
    //     );
    // }
}
