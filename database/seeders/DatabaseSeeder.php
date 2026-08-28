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

        Setting::factory()->createMany([
            [
                'name' => 'email',
                'value' => 'info@sarat-sy.com',
            ],
            [
                'name' => 'address',
                'value' => 'Syria - Rif Dimashq -  Deir Atiyah',
            ],
            [
                'name' => 'phone',
                'value' => '995365317',
            ],
            [
                'name' => 'landLine',
                'value' => '117875050',
            ],
            [
                'name' => 'social_whatsapp',
                'value' => '#link_to_whatsapp',
            ],
            [
                'name' => 'social_facebook',
                'value' => '#link_to_facebook',
            ],
            [
                'name' => 'social_telegram',
                'value' => '#link_to_telegram',
            ],

        ]);
    }
}
