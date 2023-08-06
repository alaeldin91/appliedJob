<?php

namespace App\Http\Controllers\experience;

use App\Http\Controllers\Controller;
use App\Http\Requests\Request\IndustryRequest;
use App\Models\experience\Industry;

class IndustryController extends Controller
{
    /**
     * Function Store Industry
     */
    
     public function storeIndustry(IndustryRequest  $industryRequest){
    
        /** Cheack Industry Is Already Exist */

        $existingIndustry = Industry::where('name',$industryRequest->input('name'))
            ->first(); 
        
        if($existingIndustry){
            
            return response()->json(['message'=>'the Industry is Already Exist']);
         
        }

        try{

            $industry = Industry::create($industryRequest->all());
            
            return response()->json($industry,201);
           
        }

        catch(\Exception $e){
         
        return response()->json(['message'=>'Failed to create Industry. 
        Please try again later.',500]);

    }
    

    }

       /**
 * function get All Industry
 */
   
 public function index(){
    try{

     $industries = Industry::all();
   
     return response()->json($industries);

    }
    catch(\Exception $e){

        return response()->json(['message'
        =>'Failed to Get Industry. Please try again later.'],500);

    }
  
}
}
