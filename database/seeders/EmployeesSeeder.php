<?php

namespace Database\Seeders;

use App\Models\Country;
use App\Models\Employees;
use Database\Factories\EmployeesFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmployeesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Asignamos manual el numero maximo de iteracciones
        for ($i = 1; $i <= 5; $i++) {
            EmployeesFactory::setActualId($i);
            Employees::factory()->create();
        }
    }
}
