<?php

namespace App\Http\Controllers\applyJob;

use App\Http\Controllers\Controller;
use App\Http\Requests\Request\UserApplicationRequest;
use App\Models\experience\UserApplication;

class ApplyJobController extends Controller
{

    public function applyJob(UserApplicationRequest $requestapplication){
        
        
        try{
           // $destinationPath = 'uploads';

            //$requestapplication->file('image')->move($destinationPath,
                                                      $requestapplication->file('file')
        
            //->getClientOriginalName());
            
        
           $userApplication  = UserApplication::create($requestapplication->all());
         
        
          
            return response()->json($userApplication,201);
         
        
        }
        catch(\Exception $e){
       
        return response()->json(['message'=>'Failed to create . Please try again later.'.$e->getMessage(),500]);

        }
    }
    
}
