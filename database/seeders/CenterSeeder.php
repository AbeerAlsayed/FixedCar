<?php

namespace Database\Seeders;

use App\Models\Center;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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


            for($i=0;$i<=3;$i++){
                DB::table('center_service')
                    ->insert(['center_id'=>1,'service_id' =>$i]);
            }
        for($i=0;$i<=3;$i++){
            DB::table('center_service')
                ->insert(['center_id'=>2,'service_id' =>$i]);
        }
        for($i=0;$i<=3;$i++){
            DB::table('center_service')
                ->insert(['center_id'=>3,'service_id' =>$i]);
        }
    }
}
