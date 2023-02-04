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
            'id' => '1',
            'name' => 'Bahasa Indonesia'

        ]);
        DB::table('skills')->insert([
            'id' => '2',
            'name' => 'Bahasa Inggris'

        ]);
        DB::table('skills')->insert([
            'id' => '3',
            'name' => 'Laravel'

        ]);
        DB::table('skills')->insert([
            'id' => '4',
            'name' => 'Lorem Ipsum'

        ]);        
        DB::table('skills')->insert([
            'id' => '5',
            'name' => 'Lupa Dah'
        ]);
        DB::table('skills')->insert([
            'id' => '6',
            'name' => 'UDANG'
        ]);
        DB::table('skills')->insert([
            'id' => '7',
            'name' => 'LUUna'
        ]);
    }
}