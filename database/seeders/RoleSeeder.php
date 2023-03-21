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

        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin'),
            'center_id' => 0,
//            'warehouse_id'=>0
        ]);

        $role = Role::all();
        $user = User::all();


        foreach ($role as $rol) {
            if ($rol->name == 'Admin') {
                for ($p = 1; $p <= 60; $p++) {
                    DB::table('role_permission')->insert([
                        'role_id' => $rol->id,
                        'permission_id' => $p]);
                }
            foreach ($user as $usr) {
                if ($usr->name == 'admin') {
                    DB::table('user_role')->insert([
                        'user_id' => $usr->id,
                        'role_id' => $rol->id]);
                }}
            }
        }
    }
}
