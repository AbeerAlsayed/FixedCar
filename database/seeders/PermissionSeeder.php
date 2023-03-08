<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //      Permission Bill
        Permission::create(['name' => 'View_bill']);
        Permission::create(['name' => 'Create_bill']);
        Permission::create(['name' => 'Delete_bill']);
        Permission::create(['name' => 'store_bill']);
        Permission::create(['name' => 'Edit_bill']);

//      Permission Center
        Permission::create(['name' => 'Create_center']);
        Permission::create(['name' => 'Delete_center']);
        Permission::create(['name' => 'Store_center']);
        Permission::create(['name' => 'Edit_center']);

        // Permission Service
        Permission::create(['name' => 'Create_service ']);
        Permission::create(['name' => 'Delete_service']);
        Permission::create(['name' => 'Store_service']);
        Permission::create(['name' => 'Edit_service']);
//
    }
}
