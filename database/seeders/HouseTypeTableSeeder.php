<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HouseTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('house_types')->delete();

        \DB::table('house_types')->insert([
            0 => [
                'name'=> 'Apartment',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            1 => [
                'name'=> 'Detached',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            2 => [
                'name'=>'Main-House',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            3 => [
                'name'=>'Semi-Detached',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ]);
    }
}
