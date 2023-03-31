<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create(['name' => 'Admin']);
        Role::create(['name' => 'Manager_Center']);
        Role::create(['name' => 'Technical']);
        Role::create(['name' => 'accountant']);



// permission for Admin

        $role = Role::all();
        $user = User::all();


//            for ($p = 1; $p <= 60; $p++) {
//                DB::table('role_permission')->insert(['role_id'=>1,'permission_id' => $p]);
//            }}

//permission for accountant

        for ($p = 1; $p <= 8; $p++) {
            DB::table('role_permission')->insert(['role_id'=>4,'permission_id' => $p]);
        }
        foreach ($user as $usr) {
            if ($usr->Roles == 'accountant') {
                DB::table('user_role')->insert([
                    'user_id' => $usr->id]);
            }
        }
//   permission for Technical
        for ($p = 7; $p <= 19; $p++) {
            DB::table('role_permission')->insert(['role_id'=>3,'permission_id' => $p]);
        }

        DB::table('role_permission')->insert(['role_id'=>3,'permission_id' => 33]);
        foreach ($user as $usr) {
            if ($usr->Roles == 'Technical') {
                DB::table('user_role')->insert([
                    'user_id' => $usr->id]);
            }
        }
//   permission for manager center
        for ($p = 7; $p <= 45; $p++) {
            DB::table('role_permission')->insert(['role_id'=>2,'permission_id' => $p]);
        }

        DB::table('role_permission')->insert(['role_id'=>2,'permission_id' => 60]);
        foreach ($user as $usr) {
            if ($usr->Roles == 'Manager_Center') {
                DB::table('user_role')->insert([
                    'user_id' => $usr->id]);
            }
        }


    }}




