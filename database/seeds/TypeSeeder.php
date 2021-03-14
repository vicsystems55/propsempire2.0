<?php

use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('types')->insertOrIgnore([
            [
                'name' => 'Rent',
            ],
            [
                'name' => 'Sale',
            ],
            [
                'name' => 'Shortlet',
            ],
            [
                'name' => 'Joint Venture',
            ],
           
        ]);
    }
}
