<?php

namespace Database\Factories;

use App\Models\Order;
use App\Models\Service;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    protected $model = Order::class;

    public function definition(): array
    {
        $service = Service::factory()->create();
        return [
            'customer_id' => User::factory(),
            'service_id' => $service->id,
            'provider_id' => $service->provider_id,
            'scheduled_date' => fake()->dateTimeBetween('now', '+1 month'),
            'address' => fake()->address(),
            'total_price' => $service->price,
            'status' => fake()->randomElement(['pending', 'accepted', 'in_progress', 'completed', 'cancelled']),
        ];
    }

    /**
     * Use an existing service for the order.
     */
    public function forService(Service $service): static
    {
        return $this->state(fn (array $attributes) => [
            'service_id' => $service->id,
            'provider_id' => $service->provider_id,
            'total_price' => $service->price,
        ]);
    }
}
