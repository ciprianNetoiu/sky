<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class CrosswordItem extends Model
{
    protected $fillable = [
        'crossword_id',
        'item_id',
    ];

    public function crossword():BelongsTo
    {
        return $this->belongsTo(Crossword::class, 'crossword_id', 'id');
    }

    public function item():BelongsTo
    {
        return $this->belongsTo(Item::class);
    }
}
