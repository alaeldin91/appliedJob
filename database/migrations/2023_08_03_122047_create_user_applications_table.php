<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('user_applications', function (Blueprint $table) {
           
            $table->id();
            
            $table->string('name');
            
            $table->string('numberPhone');
            
            $table->string('cvText');
            
            $table->string('cv'); 
            
            $table->integer('jobTitleId')->refrence('id')->on('job_titles');
           
            $table->string('company');
            
            $table->string('dateStart');

            $table->integer('industry');
            
            $table->string('higestLevel');
              
            $table->string('school');

            $table->string('dateComplated');

            $table->string('nameSkills');

            $table->integer('userId')->refrence('id')->on('users');        
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_applications');
    }
};
