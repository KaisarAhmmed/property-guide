<?php

namespace Database\Factories;

use App\Models\Location;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Property>
 */
class PropertyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'              => $this->faker->sentence,
            'featured_image'    =>  'https://picsum.photos/1200/800',
            'location_id'       => Location::all()->random()->id,
            'price'             => rand(50000, 200000),
            'sale'              => rand(0, 1),
            'type'              => rand(0, 2),
            'bedrooms'          => rand(1, 6),
            'bathrooms'         => rand(1, 3),
            'net_sqm'           => rand(55, 350),
            'gross_sqm'         => rand(65, 450),
            'overview'          => $this->faker->text(300),
            'why_buy'           => $this->faker->text(500),
            'pool'              => rand(0, 3),
            'description'       => $this->faker->text(1000)
        ];
    }
}
