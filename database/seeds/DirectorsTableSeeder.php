<?php

use Illuminate\Database\Seeder;
use App\Director;

class DirectorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $director_name = 'Steven Spielberg';
        Director::create([
            'name' => $director_name,
            'slug' => str_slug($director_name)
        ]);
        $director_name = 'Woody Allen';
        Director::create([
            'name' => $director_name,
            'slug' => str_slug($director_name)
        ]);
    }
}
