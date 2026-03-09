<?php

namespace Database\Seeders;

use App\Models\Order;
use App\Models\Review;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    public function run(): void
    {
        $orders = Order::whereIn('status', ['completed'])->get();

        foreach ($orders->random(min(10, $orders->count())) as $order) {
            Review::factory()->forOrder($order)->create();
        }

        if ($orders->isEmpty()) {
            Review::factory(5)->create();
        }
    }
}
