<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
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
            'center_id' => 0,
//            'warehouse_id'=>0
        ]);

    }
}
