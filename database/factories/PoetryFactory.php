<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\\Poetry>
 */
class PoetryFactory extends Factory
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
            'description' => 'Elizabeth Bishop was an American poet and short-story writer. She was Consultant in Poetry to the Library of Congress from 1949 to 1950, the Pulitzer Prize winner for Poetry in 1956, the National Book Award winner in 1970, and the recipient of the Neustadt International Prize for Literature in 1976.',
            'image' => 'postcart1.png',
        ];
    }
}
