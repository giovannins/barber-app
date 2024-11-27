<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Service>
 */
class ServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'barbershop_id' => $this->faker->numberBetween(1, 10),
            'name' => $this->faker->word,
            'description' => $this->faker->paragraph,
            'price' => $this->faker->randomFloat(2, 10, 100),
            'time' => $this->faker->numberBetween(15, 120),
            'photo' => $this->faker->imageUrl(width: 1920, height:1080, randomize: false, format:'jpg'),
        ];
    }
}
