<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Item;
use Illuminate\Database\Seeder;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
   {
         User::factory()->create([
             'name' => 'Sky User',
             'email' => 'sky@example.com',
             'password' => '0b33f5f61868faaccab1e2bfe0a977a8ba2b72d156e62f47ab7d9313ebe0a240',
             'api_token' => 'f684dd2a-f72d-4bc4-b24f-445a54f1763b',
             'email_verified_at' => now(),
         ]);

         Item::factory()->createMany([
             [
                 "answer"=> "SNOB",
                 "clue" => "Haughty person",
                 "length" => 4,
                 "date" => "2023-07-25",
                 "direction" => "across"
            ],
             [
                 "answer"=> "ATONED",
                 "clue" => "Apologized for one's sins",
                 "length" => 6,
                 "date" => "2023-07-25",
                 "direction" => "across"
             ],
             [
                 "answer"=> "PORTER",
                 "clue" => "Luggage carrier at a hotel",
                 "length" => 6,
                 "date" => "2023-07-25",
                 "direction" => "across"
             ],
             [
                 "answer"=> "TUTORS",
                 "clue" => "One-on-one teachers",
                 "length" => 6,
                 "date" => "2023-07-25",
                 "direction" => "across"
             ],
             [
                 "answer"=> "STEPS",
                 "clue" => "Studies recommend taking 8,000+ of these each day",
                 "length" => 5,
                 "date" => "2023-07-25",
                 "direction" => "across"
             ],
             [
                 "answer"=> "STOUT",
                 "clue" => "Sturdy",
                 "length" => 5,
                 "date" => "2023-07-25",
                 "direction" => "down"
             ],
             [
                 "answer"=> "NORTE",
                 "clue" => "Direction from Mexico to the U.S., en español",
                 "length" => 5,
                 "date" => "2023-07-25",
                 "direction" => "down"
             ],
             [
                 "answer"=> "ONTOP",
                 "clue" => "Victorious",
                 "length" => 5,
                 "date" => "2023-07-25",
                 "direction" => "down"
             ],
             [
                 "answer"=> "BEERS",
                 "clue" => "7-Across and 1-Down, by different meanings",
                 "length" => 5,
                 "date" => "2023-07-25",
                 "direction" => "down"
             ],
             [
                 "answer"=> "APTS",
                 "clue" => "Many N.Y.C. dwellings: Abbr.",
                 "length" => 4,
                 "date" => "2023-07-25",
                 "direction" => "down"
             ],
             [
                 "answer"=> "DRS",
                 "clue" => "Hosp. personnel",
                 "length" => 3,
                 "date" => "2023-07-25",
                 "direction" => "down"
             ],
         ]);
    }
}
