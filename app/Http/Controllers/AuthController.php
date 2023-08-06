<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{

    /**
     * function Register New User
     * 
     */

    public function registerUser(Request $request)
    {
        try {

            $validator = Validator::make($request->all(), [
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|unique:users|max:255',
                'password' => 'required|string|min:6',
                'mobileNumber' => 'required'
            ]);


            if ($validator->fails()) {

                return response()->json(['status' => false, 'message'
                                        => 'validation error', 'error'
                                        => $validator->errors()]);
            }

            $user = User::create([
                'roleId' => 1,
                'name' => $request->name,
                'email' => $request->email,
                'password' => $request->password,
<<<<<<< HEAD
                'mobileNumber' => $request->mobileNumber

            ]);




            return response()->json(['message' => 'user Registered Successfully', 'user' => $user]);
        } catch (\Throwable $th) {
=======
                'mobileNumber'=>$request->mobileNumber

            ]);

           return response()->json(['message' => 'user Registered Successfully', 'user' => $user]);
        } 
        
        catch (\Throwable $th) {
>>>>>>> 593b3a4949249cd5ee8d6743c5cfb750ac92efd5

            return response()->json(['status' => false, 'message' 
                                    => $th->getMessage()], 500);
        }
    }

    /**
     * login function Generate Token jwt
     *
     * @param Request $request
     * @return void
     * 
     */

    public function login(Request $request)
    {

        try {

            $validateUser = Validator::make($request->all(), [
                'email' => 'required|email',
                'password' => 'required|string'

            ]);

            if ($validateUser->fails()) {

                return response()->json(['status' => false, 'message' =>
                'validation error', 'error' => $validateUser->errors()], 401);
            }

            if (!Auth::attempt($request->only(['email', 'password']))) {

                return response()->json(['status' => false, 'message' =>
                'Email & Password does not match with our record.'], 401);
            }

            $user = User::where('email', $request->email)
<<<<<<< HEAD
                ->first();

=======
              ->first();
            
>>>>>>> 593b3a4949249cd5ee8d6743c5cfb750ac92efd5
            return response()->json([
                'status' => true,
                'message' => 'User Logged In Successfully',
                'token' => $user->createToken("API TOKEN")
                    ->plainTextToken, 'user' => $user
            ], 200);
<<<<<<< HEAD
        } catch (\Throwable $th) {

            return response()->json(['status' => false, 'message' => $th->getMessage()], 500);
        }
    }

    public function getUserNameById(int $id)
    {
        try {
            $user = User::find($id);
            return response()->json(['user' => $user], 200);
        } catch (\Throwable $th) {

            return response()->json(['message' => $th->getMessage()], 500);
        }
=======
        }
        
        catch (\Throwable $th) {
    
            return response()->json(['status' => false, 'message' 
                                    => $th->getMessage()], 
                                    500);
        }
    }
        
    
    public function searchUser(Request $request){
    
            $query = User::query();
          
            /**
            * Filtering base email 
            */
             
            $email = $request->input('email');
        
            if($email !== null){
        
                $query->where('email', '>=', $email);
            }
        
                    // Searching based on keyword
             $keyWord = $request->input('keyword');
        
             if ($keyWord !==null){
             
                $query->where(function($query) use ($keyWord){
                
                    $query ->where('name', 'like',"%$keyWord%")
                        ->orWhere('description','like',"%$keyWord%");
                });
             }
>>>>>>> 593b3a4949249cd5ee8d6743c5cfb750ac92efd5
    }

    public function searchUser(Request $request)
    {

<<<<<<< HEAD
        $query = User::query();

        /**
         * Filtering base Price 
         */

        $email = $request->input('email');

        if ($email !== null) {

            $query->where('email', '>=', $email);
        }

        // Searching based on keyword
        $keyWord = $request->input('keyword');

        if ($keyWord !== null) {

            $query->where(function ($query) use ($keyWord) {

                $query->where('name', 'like', "%$keyWord%")->orWhere('description', 'like', "%$keyWord%");
            });
        }
    }

    /**
     * function get All Users
     */

    public function index()
    {
        try {

            $users = User::paginate(10);

            return response()->json($users);
        }
        
        catch (\Exception $e) {

            return response()->json(['message' => 'Failed to Get All Users. Please try again later.'], 500);
        }
    }
=======
>>>>>>> 593b3a4949249cd5ee8d6743c5cfb750ac92efd5
}
