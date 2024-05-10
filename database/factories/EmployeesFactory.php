<?php

namespace Database\Factories;

use App\Models\Country;
use App\Models\Departments;
use App\Models\Employees;
use App\Models\Identify;
use App\Models\Status;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employees>
 */
class EmployeesFactory extends Factory
{
    protected static int $actualId;

    public static function setActualId(int $value)
    {
        self::$actualId = $value;
    }
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        //Almacenamos nombres para creacion de correo
        $id = self::$actualId;
        $domRandom = $this->faker->randomElement(['co', 'us']);
        $lastname = $this->faker->lastName();
        $firstname = $this->faker->firstName();
        $identify_number = $this->faker->numberBetween(1000000, 22000000);

        //Convertimos los nombres a url amigables
        $slugFirstName = Str::slug($firstname);
        $slugLastName = Str::slug($lastname);

        return [
            "first_lastname" => $lastname,
            "first_name" => $firstname,
            "country_id" => Country::all()->shuffle()->first()->country_id,
            "identify_id" => Identify::all()->shuffle()->first()->identify_id,
            "identify_number" => $identify_number,
            "email" => strtolower("$slugFirstName.$slugLastName.$id@global.com.$domRandom"),
            "admission_date" => $this->faker->date('Y-m-d', 'now'),
            "department_id" => Departments::all()->shuffle()->first()->department_id,
            "status_id" => 1,
        ];
    }
}
