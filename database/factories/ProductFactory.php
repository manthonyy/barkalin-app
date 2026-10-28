<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $category = fake()->randomElement(['high', 'medium', 'low']);
        $calorieRange = match ($category) {
            'high' => 'GAR ' . fake()->numberBetween(5800, 6500) . ' kcal/kg',
            'medium' => 'GAR ' . fake()->numberBetween(5000, 5799) . ' kcal/kg',
            'low' => 'GAR ' . fake()->numberBetween(3800, 4999) . ' kcal/kg',
        };

        return [
            'name' => ucfirst($category) . ' Grade Coal ' . fake()->word(),
            'category' => $category,
            'calorie_range' => $calorieRange,
            'description' => fake()->paragraph(),
            'specifications' => 'TM: ' . fake()->numberBetween(10, 35) . '%, Ash: ' . fake()->numberBetween(4, 12) . '%, TS: <1%',
            'active' => fake()->boolean(80),
        ];
    }
}
