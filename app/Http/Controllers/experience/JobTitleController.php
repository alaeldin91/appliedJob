<?php

namespace App\Http\Controllers\experience;

use App\Http\Controllers\Controller;
use App\Http\Requests\Request\JobTitleRequest;
use App\Models\experience\JobTitle;

class JobTitleController extends Controller
{
    /**
     * Function Store JobTitle
     */
    
    public function storeJob(JobTitleRequest $jobTitleRequest){
    
               
        /** Cheack Job Title Is Already Exist */

        $existingJobTitle = JobTitle::where('name',$jobTitleRequest
                                            ->input('name'))->first(); 
        
        if($existingJobTitle){
            
            return response()->json(['message'
                                    =>'the Job Title is Already Exist']);
         
        }

        try{

            $jobTitle = JobTitle::create($jobTitleRequest->all());
            
            return response()->json($jobTitle,201);
           
        }
        
        catch(\Exception $e){
         
        return response()->json(['message'=>'Failed to create Job Title.
                                  Please try again later.',500]);

    }
    

    }

     /**
 * function get All JobTitle
 */

 
 public function index(){
    try{

     $jobTitles = JobTitle::all();
   
     return response()->json($jobTitles);

    }
    catch(\Exception $e){

        return response()->json(['message'=>'Failed to Get Job Title. Please try again later.'],500);

    }
  
}

/**  Updatae Job Title */

public function updateJob(JobTitleRequest $jobTitleRequest,int $id){

    try{
    $jobTitle = JobTitle::find($id);
    
    if(!$jobTitle){
        
        return response()->json(['message'=>'the Job is not Found']);

    }

    $jobTitle->update($jobTitleRequest->all());

    return response()->json($jobTitle,200);
        
}

catch(\Throwable $th){
  
    return response()->json(['status' => false, 'message' => $th->getMessage()], 500);
}    
}

  /**
 * function get All Jobs response Pagination And filtering and Sorting 
 */

 public function getAllJob(){
    try{

     $jobTitles = JobTitle::paginate(10);
    
     return response()->json($jobTitles);

    }
    catch(\Exception $e){
        
        return response()->json(['message'=>'Failed to Get Job. Please try again later.'],500);

    }
  
}
}
