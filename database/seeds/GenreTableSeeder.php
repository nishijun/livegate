<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class GenreTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $genres = ["ロック", "メタル", "ポップス", "R&B", "V系", "レゲエ", "ラップ", "クラシック", "アニソン", "ボカロ", "アイドル"];

      foreach ($genres as $genre) {
        DB::table("genres")->insert([
          "name" => $genre,
          "created_at" => Carbon::now(),
          "updated_at" => Carbon::now(),
        ]);
      }
    }
}
