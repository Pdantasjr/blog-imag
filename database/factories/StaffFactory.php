<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class StaffFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->name;
        return [
            'name' => $name,
            'slug' => Str::slug($name),
            'avatar' => 'staff/default/avatar_default.svg',
            'office' => $this->faker->jobTitle,
            'crm' => $this->faker->numberBetween('11111', '99999'),
            'email' => $this->faker->email,
            'serviceTime' => $this->faker->time('H:i:s', 'now'),
            'about' => $this->faker->text(250),
        ];
    }
}
