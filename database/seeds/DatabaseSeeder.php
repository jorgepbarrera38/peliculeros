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
        $this->call(UsersTableSeeder::class);
        $this->call(DirectorsTableSeeder::class);
        $this->call(CountriesTableSeeder::class);
        $this->call(GendersTableSeeder::class);
        $this->call(MoviesTableSeeder::class);
        
    }
}
