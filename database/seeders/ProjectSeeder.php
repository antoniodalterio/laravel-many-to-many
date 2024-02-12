<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 20; $i++) {
            $project = new Project();
            $project->title = $faker->sentence(3);
            $project->created_date = $faker->dateTimeThisYear();
            $project->description = $faker->paragraph();
            $project->save();
        }
    }
}
