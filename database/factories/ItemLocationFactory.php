<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ItemLocationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'item_id' => $this->faker->numberBetween(0,100),
            'location_id' => 1,
            'quantity_hand' => $this->faker->randomNumber(2),
            'quantity_backorder' => $this->faker->randomNumber(2),
        ];
    }
}
