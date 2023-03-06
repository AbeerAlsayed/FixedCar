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
        Center::create([
            'name'=>'Fix car',
            'address'=>'Almeedain'
        ]);

        Center::create([
            'name'=>'Rplie cars',
            'address'=>'ALmazaa'
        ]);
        Center::create([
            'name'=>'fixing cars',
            'address'=>'Barza',
        ]);
    }
}
