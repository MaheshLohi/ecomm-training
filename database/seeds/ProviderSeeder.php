<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ProviderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         
         DB::table('providers')->insert([
            'address'=>'bankopen',
            'name'=>'princy',
            'email'=>'princy@gmail.com',
            'password'=>Hash::make('12345'),
            'phone_number'=>'123456789',
            'category'=>'fashion'
        ]);

        DB::table('providers')->insert([
            'address'=>'bankopen',
            'name'=>'anandhu',
            'email'=>'anandhu@gmail.com',
            'password'=>Hash::make('12345'),
            'phone_number'=>'0123456789',
            'category'=>'food'
        ]);

        DB::table('providers')->insert([
            'address'=>'bankopen',
            'name'=>'robin',
            'email'=>'robin@gmail.com',
            'password'=>Hash::make('12345'),
            'phone_number'=>'2345678901', 
            'category'=>'electronics'
        ]);
    }

}
