<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class AgreementFactory extends Factory
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
            'name' => $name,
            'slug' => Str::slug($name),
            'brand' => 'Agreements/default/dev_agreement_default.svg',
        ];
    }
}
