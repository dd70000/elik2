<?php

namespace Database\Factories;

use App\Models\ServiceProvider;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ServiceProvider>
 */
class ServiceProviderFactory extends Factory
{
    protected $model = ServiceProvider::class;

    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'national_id' => fake()->numerify('##########'),
            'bio' => fake()->paragraph(),
            'experience_years' => fake()->numberBetween(1, 15),
            'is_verified' => fake()->boolean(70),
            'average_rating' => fake()->randomFloat(2, 1, 5),
        ];
    }
}
