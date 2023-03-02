<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TechnologiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $technologies = ['HTML5', 'CSS3', 'SCSS', 'Bootstrap 5.2', 'JS', 'Vue 3', 'PHP8', 'Laravel 9', 'Node.js'];
        foreach ($technologies as $technologyName) {
            $technology = new Technology();
            $technology->name = $technologyName;
            $technology->save();
        }
    }
}

