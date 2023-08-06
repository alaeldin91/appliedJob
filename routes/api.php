<?php

use App\Http\Controllers\applyJob\ApplyJobController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\experience\IndustryController;
use App\Http\Controllers\experience\JobTitleController;
use App\Http\Controllers\RoleController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


/***  this Route User  */

Route::post('user/register',[AuthController::class,'registerUser']);

Route::post('user/login',[AuthController::class,'login']);

<<<<<<< HEAD
//Route::get('user/search',[AuthController::class,'searchUser'])->middleware('auth:sanctum');


/** Route Experience */

Route::middleware(['auth:sanctum'])->group(function () {
    Route::post('experience/storejob',[JobTitleController::class,'storeJob']);

    Route::get('experience/getjob',[JobTitleController::class,'index'])->middleware('auth:sanctum');
    
    Route::get('user/search',[AuthController::class,'searchUser']);

    Route::get('/users',[AuthController::class,'index'])->middleware('auth:sanctum');
   
    Route::post('experience/storeindustry',[IndustryController::class,'storeIndustry'])->middleware('auth:sanctum');
    
    Route::get('experience/getindustry',[IndustryController::class,'index'])->middleware('auth:sanctum');
    
    Route::get('experience/getalljob',[JobTitleController::class,'getAllJob'])->middleware('auth:sanctum');
    
    Route::post('experience/update/{id}',[JobTitleController::class,'updateJob'])->middleware('auth:sanctum');

    Route::get('user/byname/{id}',[AuthController::class,'getUserNameById'])->middleware('auth:sanctum');
});



Route::post('app/apply',[ApplyJobController::class,'applyJob'])->middleware('auth:sanctum');
=======
Route::get('user/search',[AuthController::class,'searchUser'])
           ->middleware('auth:sanctum');

/** Route Experience */

Route::post('experience/storejob',[JobTitleController::class,'storeJob'])
            ->middleware('auth:sanctum');

Route::get('experience/getjob',[JobTitleController::class,'index'])
            ->middleware('auth:sanctum');

Route::post('experience/storeindustry',[IndustryController::class,'storeIndustry'])
            ->middleware('auth:sanctum');

Route::get('experience/getindustry',[IndustryController::class,'index'])
           ->middleware('auth:sanctum');

Route::get('experience/getalljob',[JobTitleController::class,'getAllJob'])
            ->middleware('auth:sanctum');

Route::post('experience/updateJob/{id}',[JobTitleController::class,'updateJob'])
            ->middleware('auth:sanctum');
>>>>>>> 593b3a4949249cd5ee8d6743c5cfb750ac92efd5

Route::post('app/apply',[ApplyJobController::class,'applyJob'])
            ->middleware('auth:sanctum');

/**Route Apply Job */

