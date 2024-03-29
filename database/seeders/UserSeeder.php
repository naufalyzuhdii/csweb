<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin'),
            'dob' =>  '2000-01-01',
            'phone' => '08111255517',
            'role' => 'admin',
            'certification_document' => '-'
        ]);
        DB::table('users')->insert([
            'name' => 'talent',
            'email' => 'talent@gmail.com',
            'password' => bcrypt('talent'),
            'dob' =>  '2000-01-01',
            'phone' => '08111255518',
            'role' => 'learner',
            'certification_status'=> 'valid',
            'certification_document' => '-'
        ]);

        
        // DB::table('users')->insert([
        //     'name' => 'nopal',
        //     'email' => 'test1@gmail.com',
        //     'password' => bcrypt('test1'),
        //     'dob' =>  '2000-01-01',
        //     'phone' => '0811125522',
        //     'role' => 'learner',
        //     'certification_status' => 'valid',
        //     'certification_document' => '-'
        // ]);

        // DB::table('users')->insert([
        //     'name' => 'calvin',
        //     'email' => 'calvin@gmail.com',
        //     'password' => bcrypt('calvin'),
        //     'dob' =>  '2000-01-01',
        //     'phone' => '08111255512',
        //     'role' => 'learner',
        //     'certification_status'=> 'valid',
        //     'certification_document' => '-'
        // ]);
        // DB::table('users')->insert([
        //     'name' => 'jeje',
        //     'email' => 'jeje@gmail.com',
        //     'password' => bcrypt('jeje'),
        //     'dob' =>  '2000-01-01',
        //     'phone' => '08111255516',
        //     'role' => 'learner',
        //     'certification_status'=> 'valid',
        //     'certification_document' => '-'
        // ]);

    }
}