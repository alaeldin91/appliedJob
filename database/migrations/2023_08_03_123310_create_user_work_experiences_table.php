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
        Schema::create('user_work_experiences', function (Blueprint $table) {
           
            $table->id();
            
            $table->integer('jobTitleId')->refrence('id')->on('job_titles');

            $table->string('company');
            
            $table->date('dateStart');

            $table->integer('industryId')->refrence('id')->on('industries');
            
            $table->string('cvText')->nullable();
           
            $table->string('fileName')->nullable();
           
            $table->integer('userId')->refrence('id')->on('users');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_work_experiences');
    }
};
