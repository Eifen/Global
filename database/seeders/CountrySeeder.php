<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Colombia
        Country::create([
            "country_name" => 'Colombia',
            "country_iso" => 'COL',
        ]);

        //USA
        Country::create([
            "country_name" => 'United State of America',
            "country_iso" => 'USA',
        ]);
    }
}
