<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id' => $this->faker->unique()->numberBetween(1,10),
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'address' => [
                'city' => $this->faker->city(),
            ],
        ];
    }
}
