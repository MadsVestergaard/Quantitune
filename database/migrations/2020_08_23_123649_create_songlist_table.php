<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSonglistTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('songlist', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->text('songname');
            $table->interger('songlength');
            $table->text('radiostation');
            $table->text('artist')
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('songlist');
    }
}
