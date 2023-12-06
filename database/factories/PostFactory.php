<?php

namespace Database\Factories;

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
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(mt_rand(2, 4)),
            'slug' => $this->faker->slug(),
            'city' => $this->faker->citySuffix(),
            'country' => $this->faker->country(),
            'desc' => $this->faker->paragraph(mt_rand(2, 4)),
            'whattsap'=> $this->faker->randomNumber(2,15),
            'instagram'=> $this->faker->word(),
            'alamat' => $this->faker->address(),
            'email' => $this->faker->safeEmail(),
            'user_id' => mt_rand(1,3),
            'category_id' => mt_rand(1,2),
        ];
    }
}
