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
        Schema::create('user_work_education', function (Blueprint $table) {
           
            $table->id();
            
            $table->string('HigestLevel');
            
            $table->string('school');
            
            $table->string('dateCompleted');

            $table->string('userId')->refrence('id')->on('users');
  
            $table->timestamps();
        
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_work_education');
    }
};
