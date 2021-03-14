<?php

use Illuminate\Database\Seeder;

class SubTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('listing_sub_types')->insertOrIgnore([
            [
                'name' => 'Mini Flat',
            ],
            [
                'name' => 'Self Contain',
            ],
            [
                'name' => 'Detached Bungalow',
            ],
            [
                'name' => 'Detached Duplex',
            ],

            [
                'name' => 'Semi Detached Duplex',
            ],

            [
                'name' => 'Semi Detached Bungalow',
            ],

            [
                'name' => 'Terraced Bnungalow',
            ],

            [
                'name' => 'Terraced Duplex',
            ],

            [
                'name' => 'Terraced Duplex',
            ],

            [
                'name' => 'Commercial Land',
            ],

            [
                'name' => 'Industrial Land',
            ],

            [
                'name' => 'Mixed us Land',
            ],

            [
                'name' => 'Residential Land',
            ],

            [
                'name' => 'Residential Bar',
            ],

            [
                'name' => 'School',
            ],

            [
                'name' => 'Shop',
            ],

            [
                'name' => 'Church',
            ],

            [
                'name' => 'Factory',
            ],

            [
                'name' => 'Filling Station',
            ],

            [
                'name' => 'Hotel/Guest House',
            ],
            [
                'name' => 'Office Space',
            ],

            [
                'name' => 'Plaza Complex/Mall',
            ],

            [
                'name' => 'Tank Farm',
            ],

            [
                'name' => 'Warehouse',
            ],

            [
                'name' => 'Conference/Metting/Training Room',
            ],

           
        ]);
    }
}
