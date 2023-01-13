<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Project;
use Illuminate\Support\Str;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {
            $project = new Project();
            $project->title = $faker->sentence(3);
            $project->slug = Str::slug($project->title, '-');
            $project->cover_image = 'placeholders/' . $faker->image('storage/app/public/placeholders', 600, 300, 'Project', false, true);
            $project->difficulty = $faker->randomElement(['Easy', 'Medium', 'Difficult']);
            $project->languages = $faker->randomElement(['HTML', 'CSS', 'JS', 'PHP']);
            $project->save();
        }
    }
}
