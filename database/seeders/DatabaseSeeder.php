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
            'name' => 'Test Super Admin User',
            'email' => 'superadmin@example.com',
            'password' => bcrypt('password'),
            'role' => 'super_admin',
        ]);

        User::factory()->create([
            'name' => 'Test Admin User',
            'email' => 'admin@example.com',
            'password' => bcrypt('password'),
            'role' => 'admin',
            'barbershop_id' => 1,
        ]);

        User::factory()->create([
            'name' => 'Test Employee User',
            'email' => 'employee@example.com',
            'password' => bcrypt('password'),
            'barbershop_id' => 1,
        ]);

        Barbershop::factory()->createMany($records);
        Employee::factory()->createMany($records * $this->random());
        Service::factory()->createMany($records * $this->random());
    }

    private function random()
    {
        return random_int(2, 30);
    }
}
