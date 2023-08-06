<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class JobsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('job_titles')->insert([
        'name'=>'Software Developer',
        'numberJob'=>123344,
        'description'=>'this is software developer ...',
        'userId'=>2

        ]);

        DB::table('job_titles')->insert([
            'name'=>'Web Developer',
            'numberJob'=>1344,
            'description'=>'this is Web developer ...',
            'userId'=>2
    
            ]);

            DB::table('job_titles')->insert([
                'name'=>'Android Developer',
                'numberJob'=>144,
                'description'=>'this is Android developer ...',
                'userId'=>2
        
                ]);
    }
}
