<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insertOrIgnore([
            [
                'name' => 'Sample Agent',
                'email' => 'sampleagent@props.com',
                'password' => Hash::make('passmyword'),
                'user_code' => 'PE/'.rand(110000,999900),
                'role' => 'agent',
            ],

            [
                'name' => 'Sample Administrator',
                'email' => 'sampleadmin@props.com',
                'password' => Hash::make('passmyword'),
                'user_code' => 'PE/'.rand(110000,999900),
                'role' => 'admin',
            ],

            [
                'name' => 'Sample Agency',
                'email' => 'sampleagency@props.com',
                'password' => Hash::make('passmyword'),
                'user_code' => 'PE/'.rand(110000,999900),
                'role' => 'agent',
            ],

            [
                'name' => 'Sample Vendor',
                'email' => 'samplevendor@props.com',
                'password' => Hash::make('passmyword'),
                'user_code' => 'PE/'.rand(110000,999900),
                'role' => 'vendor',
            ],
        ]);
    }
}
