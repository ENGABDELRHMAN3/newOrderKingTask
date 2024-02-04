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
                'email' => $tenant->name.'@email.com',
                'password' => bcrypt('123456789'),
                'role' => 2, //type 2 for tenant Admin
                'ApiKey' => $tenant->ApiKey,

            ]);
            

            for ($i = 0; $i < 20; $i++) {
                $email = fake()->unique()->safeEmail;
               User::create([
                    'name' => fake()->name(),
                    'email' => $tenant->name.'user-'.$i.'@email.com',
                    'password' => bcrypt('123456789'),
                    'ApiKey' => $tenant->ApiKey,
                ]);
            }
    }
    }
}
