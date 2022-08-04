<?php

namespace Database\Factories;

use App\Models\Drive;
use Illuminate\Database\Eloquent\Factories\Factory;

class DriveFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $this->faker->addProvider(new \Faker\Provider\Fakecar($this->faker));
        return [ 'name' => $this->faker->unique()->vehicleGearBoxType];
    }
}
