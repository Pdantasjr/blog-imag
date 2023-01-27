<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class FaqFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $question = $this->faker->sentence;
        return [
            'question' => $question,
            'slug' => Str::slug($question).rand(1, 100),
            'answer' => $this->faker->sentence,
        ];
    }
}
