<?php

namespace Database\Seeders;

use App\Models\Departments;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartmentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Definimos los departamentos
        Departments::create(['department_name' => 'Administración']);
        Departments::create(['department_name' => 'Financiera']);
        Departments::create(['department_name' => 'Compras']);
        Departments::create(['department_name' => 'Infraestructura']);
        Departments::create(['department_name' => 'Operación']);
        Departments::create(['department_name' => 'Talento Humano']);
        Departments::create(['department_name' => 'Servicios varios']);
    }
}
