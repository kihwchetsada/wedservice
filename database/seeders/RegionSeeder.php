<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() : void
    {
        DB::table('regions')->insert([
            [
            'name' => 'ภาคกลาง',
            'created_at' => now(),
            'country_id'=> 1,
            ],

            [
                'name' => 'พม่าตอนใต้',
                'created_at' => now(),
                'country_id'=> 2,
            ],

            [
                    'name' => 'มาเลเซียตะวันออกเฉียงเหนือ',
                    'created_at' => now(),
                    'country_id'=> 3,
            ],

            [
                'name' => 'เยอรมันตะวันออก',
                'created_at' => now(),
                'country_id'=> 4,
            ],

            [
                'name' => 'เยอรมันตะวันตก',
                'created_at' => now(),
                'country_id'=> 5,
            ],
        ]); 
    }
}
