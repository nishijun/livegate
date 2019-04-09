<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;


class EvaluationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table("evaluations")->insert([
        "livehouse_id" => 1,
        "body" => "店員の対応がクソ",
        "equipment" => 3,
        "acoustic" => 3,
        "staff" => 3,
        "access" => 3,
        "facility" => 3,
        "food" => 3,
        "ave_evaluation" => 3,
        "created_at" => Carbon::now(),
        "updated_at" => Carbon::now(),
      ]);
      
      DB::table("evaluations")->insert([
        "livehouse_id" => 2,
        "body" => "飯が超美味い",
        "equipment" => 2,
        "acoustic" => 2,
        "staff" => 2,
        "access" => 2,
        "facility" => 2,
        "food" => 2,
        "ave_evaluation" => 2,
        "created_at" => Carbon::now(),
        "updated_at" => Carbon::now(),
      ]);
    }
}
