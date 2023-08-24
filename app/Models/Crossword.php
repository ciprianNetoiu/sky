<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Crossword extends Model
{
    protected $fillable = [
        'created_at'
    ];

    /**
     * @return HasManyThrough
     */
    public function items():HasManyThrough
    {
        return $this->hasManyThrough(Item::class, CrosswordItem::class);
    }

    public function crosswordItem(): HasMany
    {
        return $this->hasMany(CrosswordItem::class);
    }


}
