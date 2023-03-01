<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SkillsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('skills')->insert([
            ['name' => 'Bahasa Indonesia',
                'status' => 'valid'],
            ['name' => 'Laravel',
            'status' => 'valid'],
            ['name' => 'Graphic Design',
            'status' => 'valid'],
            ['name' => 'HTML & CSS',
                'status' => 'valid'],
            ['name' => 'Javascript',
                'status' => 'valid'],
            ['name' => 'ReactJs',
                'status' => 'valid'],
            ['name' => 'Vue Js/Node Js',
                'status' => 'valid'],
            ['name' => 'PHP',
                'status' => 'valid'],
            ['name' => 'Flutter',
                'status' => 'valid'],
            ['name' => 'Guitar Music',
                'status' => 'valid'],
            ['name' => 'Cooking',
                'status' => 'valid'],
            ['name' => 'Teaching/Leading',
                'status' => 'valid'],
        ]);

    }
}