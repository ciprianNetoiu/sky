<?php

namespace App\Http\Controllers;

use App\Helpers\CrosswordHelper;
use App\Models\Crossword;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CrosswordController extends Controller
{
    public function getWords(Request $request){

        $validator = Validator::make($request->toArray(), ['date' => 'date']);

        if ($validator->fails()) {
            return response()->json(['errors'=>$validator->errors()]);
        }

        $crossWordDate = $request->input('date') ?? now();

        $crossword = Crossword::where('created_at', $crossWordDate)->first();

        if(!$crossword) {
            try {
                $crossword = CrosswordHelper::createCrossword($crossWordDate);;
            } catch (\Exception $e) {
                return [
                    'error' => $e->getMessage()
                ];
            }
        }
        return $crossword->crosswordItem;
    }
}
