<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Type;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 20; $i++) { 
            $newProject = new Project();
            $newProject->type_id = Type::inRandomOrder()->first()->id;
            $newProject->user_id = User::inRandomOrder()->first()->id;
            $newProject->title = $faker->unique()->sentence(5);
            $newProject->thumb = $faker->imageUrl();
            $newProject->link = $faker->url();
            $newProject->save();
        }
    }
}
