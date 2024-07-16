<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        DB::table('countries')->insert([
            [
            'name' => "ไทย",
            'created_at' => now(),
            ],

            [
              'name' => "พม่า",
              'created_at' => now(),
            ],
            
            [
                'name' => "มาเลเซีย",
                'created_at' => now(),
            ],
            
            [
                'name' => "เยอรมันตะวันออก",
                'created_at' => now(),
            ],
            
            [
                'name' => "เยอรมันตะวันตก",
                'created_at' => now(),
            ],
        ]);
    }
}
