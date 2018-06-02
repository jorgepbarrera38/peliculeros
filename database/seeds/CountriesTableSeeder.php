<?php

use Illuminate\Database\Seeder;
use App\Country;

class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $country_name = 'España';
        Country::create([
            'name' => $country_name,
            'slug' => str_slug($country_name)
        ]); 
        $country_name = 'Estados Unidos';
        Country::create([
            'name' => $country_name,
            'slug' => str_slug($country_name)
        ]); 
    }
}
