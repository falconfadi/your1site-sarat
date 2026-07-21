<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Setting;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

final class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->createMany([
            [
                'name' => 'S_Ad',
                'email' => 'S_Ad@admin.com',
            ],
            [
                'name' => 'Test User',
                'email' => 'test@example.com',
            ],
        ]);

        Setting::factory(5)->create();
    }
}
