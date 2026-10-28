<?php

namespace Database\Factories;

use App\Models\Facility;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Facility>
 */
class FacilityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $types = ['Stockpile', 'Maritim / Pengapalan', 'Dermaga / Jetty', 'Inspeksi & QC'];

        return [
            'name' => 'Fasilitas ' . fake()->company(),
            'type' => fake()->randomElement($types),
            'location' => fake()->city() . ', Jawa Timur',
            'description' => fake()->sentence(12),
            'active' => fake()->boolean(85),
        ];
    }
}
