<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(HistoriesTableSeeder::class);
    }
}
