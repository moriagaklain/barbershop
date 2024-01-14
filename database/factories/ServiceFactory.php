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
        $categories = ['silver', 'golden', 'diamond'];

        // Get a random key from the array
        $category = array_values($categories);
        return [
            'name' =>  "silver",
            'price' => fake()->randomFloat(2),
        ];
    }
}
