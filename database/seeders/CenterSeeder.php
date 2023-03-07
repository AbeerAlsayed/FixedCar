<?php

namespace Database\Seeders;

use App\Models\Center;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CenterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Center::create(['name' => 'center_one','address'=>'sy']);
        Center::create(['name' => 'center_two','address'=>'us']);
    }
}
