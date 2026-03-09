<?php

namespace Database\Factories;

use App\Models\Order;
use App\Models\Review;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Review>
 */
class ReviewFactory extends Factory
{
    protected $model = Review::class;

    public function definition(): array
    {
        $order = Order::factory()->create();
        return [
            'order_id' => $order->id,
            'customer_id' => $order->customer_id,
            'provider_id' => $order->provider_id,
            'rating' => fake()->numberBetween(1, 5),
            'comment' => fake()->optional(0.8)->paragraph(),
        ];
    }

    /**
     * For an existing order.
     */
    public function forOrder(Order $order): static
    {
        return $this->state(fn (array $attributes) => [
            'order_id' => $order->id,
            'customer_id' => $order->customer_id,
            'provider_id' => $order->provider_id,
        ]);
    }
}
