<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            "name" => "Christianus Yoga Wibisono",
            "email" => "christianuswibisono@gmail.com",
            "password" => bcrypt("Yoga1234$")
        ]);
    }
}
