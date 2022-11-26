<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Project::create([
            "title" => "Laracamp",
            "slug" => "laracamp",
            "hero_image" => "default.jpg",
            "description" => "website dari BuildwithAngga",
            "category" => "Course",
            "status" => "Launched",
            "url" => "www.123.com"
        ]);
    }
}
