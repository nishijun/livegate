<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;


class LivehousesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table("livehouses")->insert([
        "name" => "東京ドーム",
        "email" => "junya4318629@yahoo.co.jp",
        "province_id" => 1,
        "capacitie_type" => 2,
        "price" => 50000,
        "smoking_type" => 3,
        "test" => 1,
        "created_at" => Carbon::now(),
        "updated_at" => Carbon::now(),
      ]);

      DB::table("livehouses")->insert([
        "name" => "日産スタジアム",
        "email" => "user@example.com",
        "province_id" => 35,
        "capacitie_type" => 1,
        "price" => 30000,
        "smoking_type" => 2,
        "test" => 2,
        "created_at" => Carbon::now(),
        "updated_at" => Carbon::now(),
      ]);
    }
}
