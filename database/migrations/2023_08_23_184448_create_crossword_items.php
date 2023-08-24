<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('crossword_items', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('crossword_id');
            $table->foreignId('item_id');

            $table->foreign('crossword_id', 'foreign_crossword_items_crossword_id')->references('id')->on('crosswords')->onDelete('cascade');
            $table->foreign('item_id', 'foreign_crossword_items_item_id')->references('id')->on('items')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('crossword_items', function (Blueprint $table) {
          $table->dropForeign('foreign_crossword_items_crossword_id');
          $table->dropForeign('foreign_crossword_items_item_id');
        });
        Schema::dropIfExists('crossword_items');
    }
};
