<?php

namespace Database\Seeders;

use App\Models\ServiceProvider;
use App\Models\User;
use Illuminate\Database\Seeder;

class ServiceProviderSeeder extends Seeder
{
    public function run(): void
    {
        $users = User::factory(5)->create();
        foreach ($users as $user) {
            ServiceProvider::factory()->create(['user_id' => $user->id]);
        }
    }
}
