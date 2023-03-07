<?php

namespace Database\Seeders;

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
        User::created([
            'name' => 'ahmad',
            'email' => 'ahmad@gmail.com',
            'password' => Hash::make('ahmad')
        ]);
        User::created([
            'name' => 'abeer',
            'email' => 'abeer@gmail.com',
            'password' => Hash::make('123')
        ]);
    }
}
