<?php

namespace App\Helpers;

use App\Models\Crossword;
use App\Models\CrosswordItem;
use App\Models\Item;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class CrosswordHelper
{

    public static function createCrossword ($date): Crossword
    {
        $crossword = new Crossword();
        DB::transaction(function() use ($date, $crossword) {
            $crossword->setCreatedAt($date);
            $crossword->save();
            $items = Item::all()->take(11);
            if ($items) {
                foreach ($items as $item) {
                    $crosswordItem = new CrosswordItem();
                    $crosswordItem->crossword()->associate($crossword);
                    $crosswordItem->item()->associate($item);
                    $crosswordItem->save();
                }
            }
        });
        return $crossword;
    }

}
