<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class consumerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('consumers')->insert(
          [
               
            [
                'username' => 'sam',
                'address' => 'open',
                'email' => 'sam@gmail.com',
                'phone' => 88488848812,
                'password' => Hash::make('sam123')
            ],
             
            [
                'username' => 'princy',
                'address' => 'open',
                'email' => 'princy@gmail.com',
                'phone' => 884888488123,
                'password' => Hash::make('princy123')
            ]
          ]
        );
    }
}
