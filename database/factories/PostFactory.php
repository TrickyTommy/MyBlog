<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'tittle' => $this->faker->sentence(mt_rand(2,8)),
            'slug' => $this->faker->slug(),
            'excerpt' => $this->faker->paragraph(mt_rand(1,5)),
            'body' => $this->faker->paragraph(mt_rand(10,30)),
            'user_id' => $this->faker->numberBetween(1,5),
            'category_id' => $this->faker->numberBetween(1,3)
            // 'user_id' =>1,
            // 'category_id' => 1

        ];
    }
}