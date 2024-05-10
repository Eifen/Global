<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Definimos solo dos estados
        Status::create(["status_description" => "Activo"]);
        Status::create(["status_description" => "Inactivo"]);
    }
}
