<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
         /**
          * This is seeder Roles User
          */

        DB::table('roles')->insert(['name'=>'user',
        'slug'=>'User'
         ]);
        
         /**
          * This is seeder Roles Admin
          */
       
          DB::table('roles')->insert([
         
            'name'=>'admin',
            'slug'=>'Admin'

        ]);

       



    }
}
