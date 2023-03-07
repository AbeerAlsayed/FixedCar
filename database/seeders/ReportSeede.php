<?php

namespace Database\Seeders;

use App\Models\Report;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReportSeede extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Report::create([
            'description'=>'Car oil change',
            'vehicle_id'=>1,
            'inspection_id'=>1,
            'service_id'=>1,
            'spare_part_id'=>1
        ]);
    }
}
