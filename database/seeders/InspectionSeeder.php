<?php

namespace Database\Seeders;

use App\Models\Inspection;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InspectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Inspection::create([
            'name'=>'Car oil change',
            'status' =>'Pending',
//            'Client_id'=>1,
            'center_id'=>1,
            'vehicle_id'=>1,
            'user_id'=>1
        ]);
        Inspection::create([
            'name'=>'Car engine repair',
            'status' =>'Process',
//            'Client_id'=>2,
            'vehicle_id'=>1,
            'center_id'=>2,
            'user_id'=>2
        ]);
        Inspection::create([
            'name'=>'Changing car tires',
            'status' =>'Finished',
//            'Client_id'=>3,
            'vehicle_id'=>3,
            'center_id'=>1,
            'user_id'=>3
        ]);
    }
}
