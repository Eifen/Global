<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'password' => '123456',
            'email' => 'test@example.com',
        ]);

        //Llamamos a los Seeders personalizados
        $this->call([
            CountrySeeder::class,
            IdentifySeeder::class,
            DepartmentsSeeder::class,
            StatusSeeder::class,
            EmployeesSeeder::class
        ]);
    }
}
