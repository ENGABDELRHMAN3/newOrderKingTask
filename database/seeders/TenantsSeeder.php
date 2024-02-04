<?php

namespace Database\Seeders;

use App\Models\SuperAdmin\Tenants;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TenantsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tenants::insert([
            [
                'name'=> 'Kfc',
                'domain'=>'kfc.test',
                'ApiKey'=>'kfc'
            ],
            [
                'name'=> 'Mackdonaled',
                'domain'=>'mac.test',
                'ApiKey'=>'mac'
            ],
            [
                'name'=> 'BuregerKing',
                'domain'=>'BuregerKing.test',
                'ApiKey'=>'BuregerKing'
            ],
            [
                'name'=> 'crepeyano',
                'domain'=>'crepeyano.test',
                'ApiKey'=>'crepeyano'
            ],
            [
                'name'=> 'pizza Hut',
                'domain'=>'pizza.test',
                'ApiKey'=>'pizzahut'
            ],
            [
                'name'=> 'Bafflo Buerger',
                'domain'=>'Bafflo.test',
                'ApiKey'=>'Bafflo'
            ],
            [
                'name'=> 'test1',
                'domain'=>'test1.test',
                'ApiKey'=>'test1'
            ],
            [
                'name'=> 'test2',
                'domain'=>'test2.test',
                'ApiKey'=>'test2'
            ],
            [
                'name'=> 'test3',
                'domain'=>'test3.test',
                'ApiKey'=>'test3'
            ],

            [
                'name'=> 'test4',
                'domain'=>'test4.test',
                'ApiKey'=>'test4'
            ],
            [
                'name'=> 'test5',
                'domain'=>'test5.test',
                'ApiKey'=>'test5'
            ], [
                'name'=> 'test6',
                'domain'=>'test6.test',
                'ApiKey'=>'test6'
            ], [
                'name'=> 'test7',
                'domain'=>'test7.test',
                'ApiKey'=>'test7'
            ], [
                'name'=> 'test8',
                'domain'=>'test8.test',
                'ApiKey'=>'test8'
            ], [
                'name'=> 'test9',
                'domain'=>'test9.test',
                'ApiKey'=>'test9'
            ], [
                'name'=> 'test10',
                'domain'=>'test10.test',
                'ApiKey'=>'test10'
            ],
        ]);
    }
}
