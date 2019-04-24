<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLivehousesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('livehouses', function (Blueprint $table) {
          $table->increments('id');
          $table->string('email')->unique();
          $table->unsignedInteger('province_id');
          $table->unsignedInteger('genre_id');
          $table->integer('capacitie_type');
          $table->integer('price');
          $table->integer('smoking_type');
          $table->integer('test');
          $table->string('img');
          $table->string('catchcopy');
          $table->string('homepage');
          $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('livehouses');
    }
}
