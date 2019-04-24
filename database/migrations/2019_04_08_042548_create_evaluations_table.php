<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEvaluationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evaluations', function (Blueprint $table) {
          $table->increments('id');
          $table->unsignedInteger('livehouse_id');
          $table->string('body');
          $table->integer('equipment');
          $table->integer('acoustic');
          $table->integer('staff');
          $table->integer('access');
          $table->integer('facility');
          $table->integer('food');
          $table->timestamps();

          // 外部キー制約
          $table->foreign('livehouse_id')
                    ->references('id')
                    ->on('livehouses')
                    ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('evaluations');
    }
}
