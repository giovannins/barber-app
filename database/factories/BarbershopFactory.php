<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Barbershop>
 */
class BarbershopFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->company,
            'phone' => $this->faker->phoneNumber,
            'email' => $this->faker->unique()->safeEmail,
            'address' => $this->faker->address,
            'employee_limit' => $this->faker->numberBetween(5, 20),
            'banner' => $this->faker->imageUrl(width: 2400, height: 800, randomize: false, format:'jpg'),
            'icon' => $this->faker->imageUrl(width: 64, height:64, randomize: false, format:'jpg'),
            'color' => $this->faker->hexColor,
        ];
    }
}
