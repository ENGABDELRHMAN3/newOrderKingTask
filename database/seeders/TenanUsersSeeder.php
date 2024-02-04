<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TenanUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $tenants = DB::table('tenants')->get();
        User::create([
            'name' => 'Super Admin',
                'email' => 'SuperAdmin@test.com',
                'password' => bcrypt('123456789'),
                'role' => 1, //type 2 for Super Admin
        ]);
        User::create([
            'name' => 'Super Admin',
                'email' => 'SuperAdmin@email.com',
                'password' => bcrypt('123456789'),
                'role' => 1, //type 2 for Super Admin
        ]);

        foreach ($tenants as $tenant) {

           User::create([
                'name' => 'Admin '.$tenant->name,
                'email' => fake()->unique()->safeEmail,
                'password' => bcrypt('123456789'),
                'role' => 2, //type 2 for tenant Admin
                'ApiKey' => $tenant->ApiKey,

            ]);
            

            for ($i = 0; $i < 100; $i++) {
                $email = fake()->unique()->safeEmail;
               User::create([
                    'name' => fake()->name(),
                    'email' => $email,
                    'password' => bcrypt('123456789'),
                    'ApiKey' => $tenant->ApiKey,
                ]);
            }
    }
    }
}
