<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'name' => fake()->text(20),
            'cover' =>'https://product.hstatic.net/200000549029/product/21_ceb94e849bdc41efbc8b8573fc093001_master.jpg',
            
        ];
    }
}
