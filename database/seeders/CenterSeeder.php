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
<<<<<<< HEAD
        Center::create(['name' => 'center_one','address'=>'sy']);
        Center::create(['name' => 'center_two','address'=>'us']);
=======
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
>>>>>>> 1483caea70734846ee0dcad5e57c204c0c167e83
    }
}
