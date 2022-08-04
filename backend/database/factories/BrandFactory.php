<?php

namespace Database\Factories;

use App\Models\Brand;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Faker\Generator as Faker;
class BrandFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */protected $model = Brand::class;

    public function definition()
    {
        $this->faker->addProvider(new \Faker\Provider\Fakecar($this->faker));
        $v = $this->faker->vehicleArray();
        return [
            'name' => $v['brand']
        ];
    }
}
