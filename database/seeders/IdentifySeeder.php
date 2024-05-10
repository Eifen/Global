<?php

namespace Database\Seeders;

use App\Models\Identify;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IdentifySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Identify::create(["identify_name" => "Cédula Ciudadana"]);
        Identify::create(["identify_name" => "Cédula Extranjera"]);
        Identify::create(["identify_name" => "Pasaporte"]);
        Identify::create(["identify_name" => "Permiso Especial"]);
    }
}
