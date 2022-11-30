<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id' => $this->faker->unique()->numberBetween(1, 50),
            'user_id' => $this->faker->numberBetween(1,15),
            'userId' => $this->faker->numberBetween(1,15),
            'body' => $this->faker->sentences(5, true),
            'title' => $this->faker->sentences(2, true),
            'rating' => $this->faker->randomNumber,
        ];
    }
}
