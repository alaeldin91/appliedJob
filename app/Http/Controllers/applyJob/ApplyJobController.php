<?php

namespace App\Http\Controllers\applyJob;

use App\Http\Controllers\Controller;
use App\Models\experience\UserApplication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ApplyJobController extends Controller
{

    public function applyJob(Request $request)
    {

        try {
            $validator = Validator::make($request->all(), [
                'name' => 'required|string|min:2',

                'numberPhone' => 'required|string',

                'cvText' => 'required',

                'cv' => 'required',

                'jobTitleId' => 'required',

                'company' => 'required|string',

                'dateStart' => 'required|string',

                'industry' => 'required',

                'higestLevel' => 'required|string',

                'school' => 'required|string|max:250',

                'dateComplated' => 'required',

                'nameSkills' => 'required',


            ]);






            if ($validator->fails()) {
                return response()->json(['status' => false, 'message' =>

                'validation error', 'error' => $validator->errors()], 401);
            }




            $file = $request->file('cv');
            //$filename = $file->hashName();

            //  $fileName = time(). '-'.$file->getClientOriginalName();


            // File upload location
            $location = 'uploads';

            // Upload file
            //$file->move($location, $filename);

            // File path
            //$filepath = url('uploads/' . $filename);

            $insertDataArray = array(

                'name' => $request->name,

                'numberPhone' => $request->numberPhone,

                'cvText' => $request->cvText,

                'cv' => $request->cv,
               
                'jobTitleId'=>$request->jobTitleId,

                'company' => $request->company,

                'dateStart' => $request->dateStart,

                'industry' => $request->industry,

                'higestLevel' => $request->higestLevel,

                'school' => $request->school,

                'dateComplated' => $request->dateComplated,

                'nameSkills' => $request->nameSkills,

                'userId' => Auth::user()->id








            );

            $userApplication = UserApplication::create($insertDataArray);





            return response()->json(['user' => $userApplication, 200]);
        }

        //   $userApplication  = UserApplication::create($requestapplication->all());
        catch (\Exception $e) {

            return response()->json(['message' => 'Failed to create . Please try again later.' . $e->getMessage(), 500]);
        }
    }
}
