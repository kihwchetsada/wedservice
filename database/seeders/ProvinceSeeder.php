<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProvinceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() :void
    {
        DB::table('provinces')->insert([
            [
            'name' => 'กรุงเทพมหานคร',
            'created_at' => now(),
            'region_id'=> 1,
            ],

            [
                'name' => 'กำแพงเพชร ',
                'created_at' => now(),
                'region_id'=> 1,
            ],

            [
                    'name' => 'ชัยนาท',
                    'created_at' => now(),
                    'region_id'=> 1,
            ],

            [
                'name' => 'นครนายก',
                'created_at' => now(),
                'region_id'=> 1,
        ],

        [
            'name' => 'นครปฐม',
            'created_at' => now(),
            'region_id'=> 1,
    ],

    [
        'name' => 'นครสวรรค์',
        'created_at' => now(),
        'region_id'=> 1,
],

[
    'name' => 'นนทบุรี',
    'created_at' => now(),
    'region_id'=> 1,
],

[
    'name' => 'ปทุมธานี',
    'created_at' => now(),
    'region_id'=> 1,
],

[
    'name' => 'พระนครศรีอยุธยา',
    'created_at' => now(),
    'region_id'=> 1,
],

[
    'name' => 'พิจิตร',
    'created_at' => now(),
    'region_id'=> 1,
],
// 2 พม่า
[
    'name' => 'ตะนาวศร๊',
    'created_at' => now(),
    'region_id'=> 2,
    ],

    [
        'name' => 'มอญ',
        'created_at' => now(),
        'region_id'=> 2,
    ],

    [
            'name' => 'กะเหรี่ยง',
            'created_at' => now(),
            'region_id'=> 2,
    ],
    // 3 มาเลเซีย
      [
        'name' => 'กูจิง',
        'created_at' => now(),
        'region_id'=> 3,
        ],
    
        [
            'name' => 'มีรี',
            'created_at' => now(),
            'region_id'=> 3,
        ],
    
        [
                'name' => 'โกตากีนาบาลู',
                'created_at' => now(),
                'region_id'=> 3,
        ],
        //4 เยอรมันตะวันออก
        [
            'name' => 'เมคเลินบวร์ค-ฟอร์พ็อมเมิร์น',
            'created_at' => now(),
            'region_id'=> 4,
            ],
        
            [
                'name' => 'บรันเดินบวร์ค',
                'created_at' => now(),
                'region_id'=> 4,
            ],
        
            [
                    'name' => 'ซัคเซิน-อันฮัลท์',
                    'created_at' => now(),
                    'region_id'=> 4,
            ],
        //5 เยอรมันตะวันตก
        [
            'name' => 'บาเดิน-เวือร์ทเทิมแบร์ค',
            'created_at' => now(),
            'region_id'=> 5,
            ],
        
            [
                'name' => 'ไบเอิร์น',
                'created_at' => now(),
                'region_id'=> 5,
            ],
        
            [
                    'name' => 'นีเดอร์ซัคเซิน',
                    'created_at' => now(),
                    'region_id'=> 5,
            ],
        ]); 
    }
}
