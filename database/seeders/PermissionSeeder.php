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
        Permission::create(['name' => 'Edit']);
        Permission::create(['name' => 'Delete']);
        Permission::create(['name' => 'Add']);
        Permission::create(['name' => 'Update']);
    }
}
