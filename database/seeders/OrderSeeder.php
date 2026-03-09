<?php

namespace Database\Seeders;

use App\Models\Order;
use App\Models\Service;
use App\Models\User;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    public function run(): void
    {
        $services = Service::with('provider')->get();
        $customerIds = User::whereDoesntHave('serviceProvider')->pluck('id');

        if ($customerIds->isEmpty()) {
            $customerIds = User::factory(10)->create()->pluck('id');
        }

        $statuses = ['pending', 'accepted', 'in_progress', 'completed', 'cancelled'];

        for ($i = 0; $i < 25; $i++) {
            $service = $services->random();
            Order::factory()
                ->forService($service)
                ->create([
                    'customer_id' => $customerIds->random(),
                    'scheduled_date' => now()->addDays(rand(1, 60)),
                    'address' => fake()->address(),
                    'status' => $statuses[array_rand($statuses)],
                ]);
        }
    }
}
