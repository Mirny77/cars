<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CarModelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $this->faker->addProvider(new \Faker\Provider\Fakecar($this->faker));
        $v = $this->faker->vehicleArray();
        return [
            'name' => $v['model'],
            'brand_id' => rand(1,10),
            'motor_id' => rand(1,3),
            'drive_id' => rand(1,2),
        ];
    }
}
