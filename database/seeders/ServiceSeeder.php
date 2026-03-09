<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Service;
use App\Models\ServiceProvider;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    public function run(): void
    {
        $categories = Category::all();
        $providers = ServiceProvider::all();

        foreach ($providers as $provider) {
            Service::factory(rand(2, 5))->create([
                'provider_id' => $provider->id,
                'category_id' => $categories->random()->id,
            ]);
        }
    }
}
