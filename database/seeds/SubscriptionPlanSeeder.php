<?php

use Illuminate\Database\Seeder;

class SubscriptionPlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('subscription_plans')->insertOrIgnore([
            [
                'plan_name' => 'Free Plan',
                'cost_per_month' => '0',
                'max_listings' => 'unlimited',
                'premium_listings' => 'unlimited',
                'auto_boost' => 'nil'
            ],

            [
                'plan_name' => 'Business 10',
                'cost_per_month' => '1200',
                'max_listings' => '6',
                'premium_listings' => '0',
                'auto_boost' => '0'
            ],

            [
                'plan_name' => 'Business 20',
                'cost_per_month' => '2500',
                'max_listings' => '22',
                'premium_listings' => '0',
                'auto_boost' => '0'
            ],

            [
                'plan_name' => 'Business 30',
                'cost_per_month' => '3500',
                'max_listings' => '32',
                'premium_listings' => '6',
                'auto_boost' => '0'
            ],

            [
                'plan_name' => 'Business 40',
                'cost_per_month' => '4500',
                'max_listings' => '52',
                'premium_listings' => '10',
                'auto_boost' => '0'
            ],

            [
                'plan_name' => 'Business 50',
                'cost_per_month' => '6500',
                'max_listings' => '102',
                'premium_listings' => '22',
                'auto_boost' => '0'
            ],

            [
                'plan_name' => 'Advanced 10',
                'cost_per_month' => '9500',
                'max_listings' => '152',
                'premium_listings' => '32',
                'auto_boost' => '36'
            ],

            [
                'plan_name' => 'Advanced 20',
                'cost_per_month' => '12500',
                'max_listings' => '202',
                'premium_listings' => '42',
                'auto_boost' => '35'
            ],

            [
                'plan_name' => 'Advanced 30',
                'cost_per_month' => '15500',
                'max_listings' => '252',
                'premium_listings' => '52',
                'auto_boost' => '34'
            ],

            [
                'plan_name' => 'Advanced 40',
                'cost_per_month' => '18500',
                'max_listings' => '302',
                'premium_listings' => '62',
                'auto_boost' => '33'
            ],

            [
                'plan_name' => 'Advanced 50',
                'cost_per_month' => '21500',
                'max_listings' => '352',
                'premium_listings' => '70',
                'auto_boost' => '32'
            ],

            [
                'plan_name' => 'Pro 10',
                'cost_per_month' => '24500',
                'max_listings' => '402',
                'premium_listings' => '82',
                'auto_boost' => '31'
            ],

            [
                'plan_name' => 'Pro 20',
                'cost_per_month' => '27500',
                'max_listings' => '452',
                'premium_listings' => '92',
                'auto_boost' => '30'
            ],

            [
                'plan_name' => 'Pro 30',
                'cost_per_month' => '30500',
                'max_listings' => '502',
                'premium_listings' => '102',
                'auto_boost' => '29'
            ],


            [
                'plan_name' => 'Pro 40',
                'cost_per_month' => '33500',
                'max_listings' => '552',
                'premium_listings' => '112',
                'auto_boost' => '28'
            ],

            [
                'plan_name' => 'Pro 50',
                'cost_per_month' => '36500',
                'max_listings' => '602',
                'premium_listings' => '122',
                'auto_boost' => '27'
            ],

            [
                'plan_name' => 'Pro 50',
                'cost_per_month' => '39500',
                'max_listings' => '602',
                'premium_listings' => '122',
                'auto_boost' => '27'
            ],

            [
                'plan_name' => 'VIP 10',
                'cost_per_month' => '39500',
                'max_listings' => '652',
                'premium_listings' => '132',
                'auto_boost' => '26'
            ],

            [
                'plan_name' => 'VIP 20',
                'cost_per_month' => '42500',
                'max_listings' => '702',
                'premium_listings' => '142',
                'auto_boost' => '25'
            ],

            [
                'plan_name' => 'VIP 30',
                'cost_per_month' => '45500',
                'max_listings' => '752',
                'premium_listings' => '152',
                'auto_boost' => '24'
            ],

            [
                'plan_name' => 'VIP 40',
                'cost_per_month' => '48500',
                'max_listings' => '802',
                'premium_listings' => '162',
                'auto_boost' => '23'
            ],

            [
                'plan_name' => 'VIP 50',
                'cost_per_month' => '51500',
                'max_listings' => '852',
                'premium_listings' => '172',
                'auto_boost' => '22'
            ],

            [
                'plan_name' => 'Pawn 10',
                'cost_per_month' => '54500',
                'max_listings' => '900',
                'premium_listings' => '182',
                'auto_boost' => '21'
            ],


            
            [
                'plan_name' => 'Pawn 20',
                'cost_per_month' => '57500',
                'max_listings' => '952',
                'premium_listings' => '182',
                'auto_boost' => '20'
            ],

            [
                'plan_name' => 'Pawn 30',
                'cost_per_month' => '60500',
                'max_listings' => '1002',
                'premium_listings' => '202',
                'auto_boost' => '19'
            ],

            [
                'plan_name' => 'Pawn 40',
                'cost_per_month' => '63500',
                'max_listings' => '1052',
                'premium_listings' => '212',
                'auto_boost' => '18'
            ],

            [
                'plan_name' => 'Pawn 50',
                'cost_per_month' => '66500',
                'max_listings' => '1102',
                'premium_listings' => '222',
                'auto_boost' => '17'
            ],

            [
                'plan_name' => 'Knight 10',
                'cost_per_month' => '69500',
                'max_listings' => '1152',
                'premium_listings' => '232',
                'auto_boost' => '16'
            ],

            [
                'plan_name' => 'Knight 20',
                'cost_per_month' => '72500',
                'max_listings' => '1202',
                'premium_listings' => '242',
                'auto_boost' => '15'
            ],

            [
                'plan_name' => 'Knight 30',
                'cost_per_month' => '75500',
                'max_listings' => '1252',
                'premium_listings' => '252',
                'auto_boost' => '14'
            ],

            [
                'plan_name' => 'Knight 40',
                'cost_per_month' => '78500',
                'max_listings' => '1302',
                'premium_listings' => '260',
                'auto_boost' => '13'
            ],

            [
                'plan_name' => 'Knight 50',
                'cost_per_month' => '81500',
                'max_listings' => '1352',
                'premium_listings' => '272',
                'auto_boost' => '12'
            ],

            [
                'plan_name' => 'Bishop 10',
                'cost_per_month' => '84500',
                'max_listings' => '1452',
                'premium_listings' => '282',
                'auto_boost' => '11'
            ],

            [
                'plan_name' => 'Bishop 20',
                'cost_per_month' => '84500',
                'max_listings' => '1452',
                'premium_listings' => '282',
                'auto_boost' => '11'
            ],


            [
                'plan_name' => 'Bishop 30',
                'cost_per_month' => '90500',
                'max_listings' => '1502',
                'premium_listings' => '302',
                'auto_boost' => '9'
            ],

            [
                'plan_name' => 'Bishop 40',
                'cost_per_month' => '93500',
                'max_listings' => '1552',
                'premium_listings' => '310',
                'auto_boost' => '8'
            ],

            [
                'plan_name' => 'Bishop 50',
                'cost_per_month' => '96500',
                'max_listings' => '1602',
                'premium_listings' => '322',
                'auto_boost' => '7'
            ],

            [
                'plan_name' => 'Queen 10',
                'cost_per_month' => '99500',
                'max_listings' => '1652',
                'premium_listings' => '332',
                'auto_boost' => '6'
            ],

            [
                'plan_name' => 'Queen 20',
                'cost_per_month' => '102500',
                'max_listings' => '1702',
                'premium_listings' => '342',
                'auto_boost' => '5'
            ],

            [
                'plan_name' => 'Queen 30',
                'cost_per_month' => '105500',
                'max_listings' => '1752',
                'premium_listings' => '352',
                'auto_boost' => '4'
            ],

            [
                'plan_name' => 'Queen 40',
                'cost_per_month' => '108500',
                'max_listings' => '1802',
                'premium_listings' => '362',
                'auto_boost' => '3'
            ],

            [
                'plan_name' => 'Queen 50',
                'cost_per_month' => '11500',
                'max_listings' => '1852',
                'premium_listings' => '372',
                'auto_boost' => '2'
            ],

            [
                'plan_name' => 'King 50',
                'cost_per_month' => '114500',
                'max_listings' => '1902',
                'premium_listings' => '382',
                'auto_boost' => '1.5'
            ],

            [
                'plan_name' => 'King 100',
                'cost_per_month' => '117500',
                'max_listings' => '1952',
                'premium_listings' => '392',
                'auto_boost' => '1'
            ],

        ]);

        
    }
}
