<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class SparePartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     * @throws \Exception
     */
    public function run()
    {
        DB::table('spare_parts')->insert([
            'type' => 'wheels',
            'price' => random_int(1000, 9999),
        ]);
        DB::table('spare_parts')->insert([
            'type' => 'Lighting',
            'price' => random_int(1000, 9999),
        ]);
        DB::table('spare_parts')->insert([
            'type' => 'Electrical',
            'price' => random_int(1000, 9999),
        ]);
        DB::table('spare_parts')->insert([
            'type' => 'Belt $Chin Drive',
            'price' => random_int(1000, 9999),
        ]);
        DB::table('spare_parts')->insert([
            'type' => 'Engine Parts',
            'price' => random_int(1000, 9999),
        ]);
        DB::table('spare_parts')->insert([
            'type' => 'Body Parts',
            'price' => random_int(1000, 9999),
        ]);
    }
}
