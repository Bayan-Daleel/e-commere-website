<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->name,
            'price'=>$this->faker->numberBetween('0',10000),
            'description'=>$this->faker->paragraph(1),
            'category_id'=>Category::factory(),
            'no-pieces'=>$this->faker->numberBetween(0,1000)
        ];
    }
}
