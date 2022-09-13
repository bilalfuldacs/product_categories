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
            'name' => fake()->name(),
            'price' => rand(1,100),
            'category_id' =>Category::factory(),// it will add in category tables records also as many times as it ad din product table
            //you may also dont write anything for category in fsctory columns will be filled automatically
            ];
    }
}
