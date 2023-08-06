<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert(['roleId'=>1,
        
        'name'=>'alaeldin',
        
        'email'=>'alaeldinmusa91@gmail.com',
        
        'password'=>bcrypt('1234567'),
        
    ]);
      
    DB::table('users')->insert(['roleId'=>2
    ,'name'=>'suliman',
    
    'email'=>'suliman91@gmail.com',
    
    'password'=>bcrypt('1234567'),
    ]);
      
    }
}
