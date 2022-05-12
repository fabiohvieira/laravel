<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SaleDetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'addressbook_id' => $this->faker->numberBetween(0, 100),
            'item_id' => $this->faker->numberBetween(0,50),
            'quantity' => $this->faker->randomDigitNot(0),
            'unit_price' => $this->faker->randomNumber(),
            'total_price' => $this->faker->randomNumber(),
        ];
    }
}
