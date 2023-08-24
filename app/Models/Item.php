<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Item extends Model
{
    use HasFactory;

    protected $fillable = [
        'answer',
        'clue',
        'length',
        'date',
        'direction'
    ];

    protected $hidden = [
      'id',
      'created_at',
      'updated_at'
    ];
}
