<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //  \App\Models\User::factory(10)->create();
         \App\Models\Barber::factory(4)->create();
         \App\Models\Service::factory()->create([
            'name' => 'Silver',
            'price' => 40.77,
        ]);

        \App\Models\Service::factory()->create([
            'name' => 'Golden',
            'price' => 45.05,
        ]);

        \App\Models\Service::factory()->create([
            'name' => 'Diamond',
            'price' => 20.05,
        ]);
        \App\Models\Appointment::factory(3)->create();
        //  \App\Models\Service::factory(3)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
