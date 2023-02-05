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
            'name' => 'Lorem Ipsum'
        ]);        
        DB::table('skills')->insert([
            'name' => 'Lupa Dah'
        ]);
        DB::table('skills')->insert([
            'name' => 'UDANG'
        ]);
        DB::table('skills')->insert([
            'name' => 'LUUna'
        ]);
    }
}