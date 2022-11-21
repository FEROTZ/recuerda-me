<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiciosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('servicios')->insert([
            [
                'name' => "Económico",
                'price'             => 3300.99,
                'num_images'        => 0,
                'num_videos'        => 0,
                'num_recipients'    => 1,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
            [
                'name' => "Básico",
                'price'             => 4500.00,
                'num_images'        => 1,
                'num_videos'        => 1,
                'num_recipients'    => 2,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
            [
                'name' => "Premium",
                'price'             => 9700.99,
                'num_images'        => 3,
                'num_videos'        => 2,
                'num_recipients'    => 4,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
            [
                'name' => "Platinum",
                'price'             => 14000.99,
                'num_images'        => 5,
                'num_videos'        => 3,
                'num_recipients'    => 6,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
        ]);
    }
}
