<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\\Art>
 */
class ArtFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->name,
            'user_id' => 1,
            'size' => 'cm',
            'height' => '120',
            'width' => '150',
            'image' => 'postcart1.png',
            'price' => $this->faker->randomFloat(2, 0, 10000),
        ];
    }
}
