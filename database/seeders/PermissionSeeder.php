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
//        Permission for Role accountant  edit [bill,service,SparePart] [1,8]

        // Permission Service
        Permission::create(['name' => 'View_service']);
        Permission::create(['name' => 'Store_service']);
        Permission::create(['name' => 'Edit_service']);

        // Permission for SparePart

        Permission::create(['name' => 'View_SparePart']);
        Permission::create(['name' => 'Store_SparePart']);
        Permission::create(['name' => 'Edit_SparePart']);
        //      Permission Bill
        Permission::create(['name' => 'View_bill']);
        Permission::create(['name' => 'Store_bill']);


        // Permission for Role Technical[Report,bill,edit inspection]

        // Permission for Report
        Permission::create(['name' => 'View_Report']);
        Permission::create(['name' => 'Create_Report']);
        Permission::create(['name' => 'Delete_Report']);
        Permission::create(['name' => 'Store_Report']);
        Permission::create(['name' => 'Edit_Report']);


//        Permission for Role manager_center

        // Permission Inspection
        Permission::create(['name' => 'View_inspection']);
        Permission::create(['name' => 'Edit_inspection']);
        Permission::create(['name' => 'Store_inspection']);
        Permission::create(['name' => 'Create_bill']);
        Permission::create(['name' => 'Delete_bill']);
        Permission::create(['name' => 'Edit_bill']);


        Permission::create(['name' => 'Create_inspection']);
        Permission::create(['name' => 'Delete_inspection']);
        Permission::create(['name' => 'Create_service']);
        Permission::create(['name' => 'Delete_service']);

        Permission::create(['name' => 'Create_SparePart']);
        Permission::create(['name' => 'Delete_SparePart']);

        // Permission Client
        Permission::create(['name' => 'View_client']);
        Permission::create(['name' => 'Create_client']);
        Permission::create(['name' => 'Delete_client']);
        Permission::create(['name' => 'Store_client']);
        Permission::create(['name' => 'Edit_client']);
//


        // Permission for Role
        Permission::create(['name' => 'View_Role']);
        Permission::create(['name' => 'Create_Role']);
        Permission::create(['name' => 'Delete_Role']);
        Permission::create(['name' => 'Store_Role']);
        Permission::create(['name' => 'Edit_Role']);

        // Permission for Vehicle
        Permission::create(['name' => 'View_Vehicle']);
        Permission::create(['name' => 'Create_Vehicle']);
        Permission::create(['name' => 'Delete_Vehicle']);
        Permission::create(['name' => 'Store_Vehicle']);
        Permission::create(['name' => 'Edit_Vehicle']);

        // Permission for User
        Permission::create(['name' => 'View_User']);
        Permission::create(['name' => 'Create_User']);
        Permission::create(['name' => 'Delete_User']);
        Permission::create(['name' => 'Store_User']);
        Permission::create(['name' => 'Edit_User']);

//        Permission for Role Admin

//        Permission Center
        Permission::create(['name' => 'View_center']);
        Permission::create(['name' => 'Create_center']);
        Permission::create(['name' => 'Delete_center']);
        Permission::create(['name' => 'Store_center']);
        Permission::create(['name' => 'Edit_center']);

        // Permission for Warehouse
        Permission::create(['name' => 'View_Warehouse']);
        Permission::create(['name' => 'Create_Warehouse']);
        Permission::create(['name' => 'Delete_Warehouse']);
        Permission::create(['name' => 'Store_Warehouse']);
        Permission::create(['name' => 'Edit_Warehouse']);

        // Permission for Permission
        Permission::create(['name' => 'View_permission']);
        Permission::create(['name' => 'Create_permission']);
        Permission::create(['name' => 'Delete_permission']);
        Permission::create(['name' => 'Store_permission']);
        Permission::create(['name' => 'Edit_permission']);

    }
}
