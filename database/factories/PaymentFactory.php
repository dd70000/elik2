<?php

namespace Database\Factories;

use App\Models\Order;
use App\Models\Payment;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Payment>
 */
class PaymentFactory extends Factory
{
    protected $model = Payment::class;

    public function definition(): array
    {
        $order = Order::factory()->create();
        $status = fake()->randomElement(['pending', 'paid', 'failed']);
        return [
            'order_id' => $order->id,
            'amount' => $order->total_price,
            'payment_method' => fake()->randomElement(['cash', 'wallet', 'card']),
            'payment_status' => $status,
            'paid_at' => $status === 'paid' ? fake()->dateTimeBetween('-1 month', 'now') : null,
        ];
    }

    /**
     * For an existing order.
     */
    public function forOrder(Order $order): static
    {
        return $this->state(fn (array $attributes) => [
            'order_id' => $order->id,
            'amount' => $order->total_price,
        ]);
    }
}
