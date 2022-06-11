<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SalesDetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'address_book_id' => $this->faker->numberBetween(0, 100),
            'item_id' => $this->faker->numberBetween(0,50),
            'quantity' => $this->faker->randomDigitNot(0),
            'unit_price' => $this->faker->randomFloat(2,0,100),
            'total_price' => $this->faker->randomFloat(2,0,100),
        ];
    }
}
