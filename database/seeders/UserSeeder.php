<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
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
        DB::table('users')->insert([
            'name' => "Admin",
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin'),
            'is_admin' => true,
        ]);

        DB::table('users')->insert([
            'name' => "fernando",
            'email' => 'fernando@gmail.com',
            'password' => Hash::make('fernando'),
            'is_admin' => true,
        ]);

        DB::table('users')->insert([
            'name' => "user",
            'email' => 'user@gmail.com',
            'password' => Hash::make('user'),
            'is_admin' => false,
        ]);
    }
}
