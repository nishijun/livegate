<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGenreLivehouseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('genre_livehouse', function (Blueprint $table) {
          $table->increments('id');
          $table->unsignedInteger('genre_id');
          $table->foreign('genre_id')->references('id')->on('genres');
          $table->unsignedInteger('livehouse_id');
          $table->foreign('livehouse_id')->references('id')->on('livehouses');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('genre_livehouse');
    }
}
