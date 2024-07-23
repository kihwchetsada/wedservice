<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TitleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('titles')->insert([ 
            [
                'title' => 'นาย',
                'created_at' => now(),
                ],

                [
                    'title' => 'นาง',
                    'created_at' => now(),
                    ],

                    
                [
                    'title' => 'นางสาว',
                    'created_at' => now(),
                    ],
        ]);
    }
}
