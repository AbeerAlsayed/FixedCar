<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     * @throws \Exception
     */
    public function run()
    {
        DB::table('services')->insert([
            'type'=>'Car oil change',
            'price' => random_int(1000, 9999),
        ]);
        DB::table('services')->insert([
            'type'=>'Changing car tires',
            'price' => random_int(1000, 9999),
        ]);
        DB::table('services')->insert([
            'type'=>'Car engine repair',
            'price' => random_int(1000, 9999),
        ]);
    }
}
