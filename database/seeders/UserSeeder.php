<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin'),
            'center_id' => 0,

        ]);

        User::create([
            'name' => 'ahmad',
            'email' => 'ahmad@gmail.com',
            'password' => Hash::make('ahmad'),
            'center_id' => 0,
//            'warehouse_id'=>0
        ]);
        User::create([
            'name' => 'anas',
            'email' => 'asna@gmail.com',
            'password' => Hash::make('anas'),
            'center_id' => 0,
//            'warehouse_id'=>0
            ]);


        User::create([
            'name' => 'abeer',
            'email' => 'abeer@gmail.com',
            'password' => Hash::make('abeer'),
            'center_id' => 0,
//            'warehouse_id'=>0
        ]);


        User::create([
            'name' => 'tamador',
            'email' => 'tamador@gmail.com',
            'password' => Hash::make('123'),
            'center_id' => 1,

        ]);
        User::create([
            'name' => 'samer',
            'email' => 'samer@gmail.com',
            'password' => Hash::make('samer'),
            'center_id' => 1,

        ]);

        User::create([
            'name' => 'hani',
            'email' => 'hani@gmail.com',
            'password' => Hash::make('hani'),
            'center_id' => 1,

        ]);
        DB::table('user_role')->insert([
            'user_id' =>1,'role_id'=>1]);

        DB::table('user_role')->insert([
            'user_id' =>6,'role_id'=>3]);

        DB::table('user_role')->insert([
            'user_id' =>7,'role_id'=>3]);

        DB::table('user_role')->insert([
            'user_id' =>5,'role_id'=>2]);

    }
}
