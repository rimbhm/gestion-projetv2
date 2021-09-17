<?php

namespace Database\Factories;

use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Employee::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'cin' => $this->faker->cin(),
            'nomEmp' => $this->faker->nomEmp(),
            'prénomEmp' => $this->faker->prénomEmp(),
            'email' => $this->faker->email(),
            'tel' => $this->faker->tel(),
            'adresse' => $this->faker->adresse(),
            'role' => $this->faker->role()
        ];
    }
}
