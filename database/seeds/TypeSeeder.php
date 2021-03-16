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
                'name' => 'Flat',
            ],
            [
                'name' => 'House',
            ],
            [
                'name' => 'Land',
            ],
            [
                'name' => 'Commercial Property',
            ],

            [
                'name' => 'Event Center/venue',
            ],
           
        ]);
    }
}
