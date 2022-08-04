<?php

namespace Database\Factories;

use App\Models\Motor;
use Illuminate\Database\Eloquent\Factories\Factory;

class MotorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $this->faker->addProvider(new \Faker\Provider\Fakecar($this->faker));
        return [
            'name' => $this->faker->unique()->vehicleFuelType
        ];
    }
}
