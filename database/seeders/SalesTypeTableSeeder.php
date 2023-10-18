<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SalesTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void

    {
        \DB::table('sale_types')->delete();

        \DB::table('sale_types')->insert([
            0 => [
                'name'=> 'Rent',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            1 => [
                'name'=> 'Sale',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            2 => [
                'name'=>'Share',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

        ]);
    }
}
