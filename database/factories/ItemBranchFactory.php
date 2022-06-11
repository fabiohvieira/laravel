<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ItemBranchFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'second_number' => $this->faker->word(),
            'third_number' => $this->faker->word(),
            'description1' => $this->faker->sentence(),
            'description2' => $this->faker->sentence(),
            'price' => $this->faker->randomFloat(2,0,100),
        ];
    }
}
