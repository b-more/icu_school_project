<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $phones = ['0975020473', '0972959023', '0969893182'];

        DB::table('users')->insert([
            [
                "name" => "Administrator",
                "role_id" => 1,
                "email" => "admin@ontech.co.zm",
                "phone" => "0975020473",
                "password" => Hash::make("Admin.1234"),
                "is_active" => 1,
            ],
            [
                "name" => "Blessmore",
                "role_id" => 1,
                "email" => "blessmore@ontech.co.zm",
                "phone" => "0975020473",
                "password" => Hash::make("Admin.1234"),
                "is_active" => 1,
            ]
        ]);
    }
}
