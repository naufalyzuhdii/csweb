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
            'name' => 'Bahasa Indonesia'
        ]);
        DB::table('skills')->insert([
            'name' => 'Bahasa Inggris'
        ]);
        DB::table('skills')->insert([
            'name' => 'Laravel'
        ]);
        DB::table('skills')->insert([
            'name' => 'ReactJs'
        ]);        
        DB::table('skills')->insert([
            'name' => 'HTML/CSS/Javascript'
        ]);
        DB::table('skills')->insert([
            'name' => 'Operating System'
        ]);
        DB::table('skills')->insert([
            'name' => 'Algebra'
        ]);
    }
}