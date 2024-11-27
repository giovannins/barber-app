<?php

namespace Database\Seeders;

use App\Models\Barbershop;
use App\Models\Employee;
use App\Models\Service;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        $records = 16;

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => bcrypt('password'),
        ]);

        Barbershop::factory()->createMany($records);
        Employee::factory()->createMany($records**2);
        Service::factory()->createMany($records**2);
    }
}
