<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            ['name' => 'Website Development'],
            ['name' => 'Graphic Design'],
            ['name' => 'Interior Design'],
            ['name' => 'Music'],
            ['name' => 'Marketing'],
            ['name' => 'Social Media'],
            ['name' => 'Mathematics'],
        ]);

    }
}