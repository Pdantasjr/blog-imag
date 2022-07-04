<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ExamsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->jobTitle;
        return [
            'diagnostics_id' => rand('1', '8'),
            'name' => $name,
            'slug' => Str::slug($name),
            'synonym' => $this->faker->name,
            'what_is' => $this->faker->text,
            'how_it_is_done' => $this->faker->text,
            'average_duration' => $this->faker->text,
            'contraindications_or_relative_restrictions' => $this->faker->text,
            'service_guidelines' => $this->faker->text,
            'achievement_orientation_or_preparation' => $this->faker->text,
            'deadline' => $this->faker->text,
        ];
    }
}
