<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'position' => $this->faker->jobTitle(10),
            'office' => $this->faker->city(),
            'age' => $this->faker->numberBetween(20,60),
            'day' => $this->faker->dayOfWeek(),
            'salary' => $this->faker->numberBetween(10000,18000),
        ];
    }
}
