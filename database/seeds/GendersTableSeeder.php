<?php

use Illuminate\Database\Seeder;
use App\Gender;

class GendersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $gender_name = 'Ciencia ficción';
        Gender::create([
            'name' => $gender_name,
            'slug' => str_slug($gender_name)
        ]);
        $gender_name = 'Acción';
        Gender::create([
            'name' => $gender_name,
            'slug' => str_slug($gender_name)
        ]);
        $gender_name = 'Romance';
        Gender::create([
            'name' => $gender_name,
            'slug' => str_slug($gender_name)
        ]);
        $gender_name = 'Terror';
        Gender::create([
            'name' => $gender_name,
            'slug' => str_slug($gender_name)
        ]);
    }
}
