<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ProvincesTableSeeder::class);
        $this->call(LivehousesTableSeeder::class);
        $this->call(GenreTableSeeder::class);
        $this->call(EvaluationTableSeeder::class);
    }
}
