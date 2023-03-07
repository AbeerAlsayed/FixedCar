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
        User::create([
            'name' => 'ahmad',
            'email' => 'ahmad@gmail.com',
            'password' => Hash::make('ahmad')
        ]);
<<<<<<< HEAD
        User::created([
            'name' => 'abeer',
            'email' => 'abeer@gmail.com',
=======
        User::create([
            'name' => 'tamador',
            'email' => 'tamador@gmail.com',
>>>>>>> 1483caea70734846ee0dcad5e57c204c0c167e83
            'password' => Hash::make('123')
        ]);
    }
}
