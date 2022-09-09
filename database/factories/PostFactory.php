<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->sentence;
        return [
            'title' => $title,
            'slug' => Str::slug($title).rand(1, 100),
            'subtitle' => $this->faker->sentence,
            'post_content' => $this->faker->text,
            'author' => 1,
            'category' => 1,
            'post_cover' => env('IMAGE_COVER_POST_DEFAULT'),
        ];
    }
}
