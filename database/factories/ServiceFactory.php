<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Service;
use App\Models\ServiceProvider;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Service>
 */
class ServiceFactory extends Factory
{
    protected $model = Service::class;

    public function definition(): array
    {
        return [
            'provider_id' => ServiceProvider::factory(),
            'category_id' => Category::factory(),
            'title' => fake()->sentence(3),
            'description' => fake()->paragraph(),
            'price' => fake()->randomFloat(2, 20, 500),
            'price_type' => fake()->randomElement(['fixed', 'hourly']),
            'is_available' => fake()->boolean(85),
        ];
    }
}
