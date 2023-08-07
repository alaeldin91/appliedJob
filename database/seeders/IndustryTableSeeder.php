<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IndustryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('industries')->insert(['name'=>'Technology and Computer']);
        DB::table('industries')->insert(['name'=>'Doctor']);
        DB::table('industries')->insert(['name'=>'Civil']);
        DB::table('industries')->insert(['name'=>'Machnical']);
        DB::table('industries')->insert(['name'=>'Learn']);
        DB::table('industries')->insert(['name'=>'ManageMent']);
    }
}
