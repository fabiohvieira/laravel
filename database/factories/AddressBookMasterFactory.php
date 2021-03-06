<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AddressBookMasterFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'search_type' => strtoupper($this->faker->randomLetter()),
            'name' => $this->faker->name(),
            'tax_id' => $this->faker->unique()->randomNumber(9, true),
        ];
    }
}
