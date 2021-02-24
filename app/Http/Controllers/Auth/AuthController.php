<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'phone' => 'required',
            'address' => 'required',
            'nik' => 'required',
            'name' => 'required',
            'email' => 'required|string|email|unique:user',
            'password' => 'required|string|confirmed',
        ]);
        DB::beginTransaction();
        try{
            $user = new User;
            $user->email = $request->email;
            $user->password = bcrypt($request->password);
            $user->id_role=4;
            $user->is_active = true;
            $user->save();
            
        }catch(\Exception $e){
            DB::rollback();
            return response()->json(['status' => 'Register User Failed', 'message' => $e->getMessage()]);
        }
        try{
            $civilian = new Civilian;
            $civilian->id_user = $user->id_user;
            $civilian->name = $request->name;
            $civilian->phone = $request->phone;
            $civilian->address = $request->address;
            $civilian->nik = $request->nik;
            $civilian->save();
        }catch(\Exception $e){
            DB::rollback();
            return response()->json(['status' => 'Register Failed', 'message' => $e->getMessage()]);
        }
        DB::commit();
        
        return response()->json([
            'status'  =>  'Created',
            'message' => 'Successfully registered as civilians!'
        ], 201);
    }
    /**
     * Login user and create token
     *
     * @param  [string] email
     * @param  [string] password
     * @param  [boolean] remember_me
     * @return [string] access_token
     * @return [string] token_type
     * @return [string] expires_at
     */
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);
        $credentials = request(['email', 'password']);
        if ($validator->fails()) {    
            return response()->json([
                'status' => 'Failed',
                'message' => $validator->messages()
            ],422);
        }else{
            if(Auth::attempt($credentials)){
                $user = $request->user();
                $tokenResult = $user->createToken('Personal Access Token');
                $token = $tokenResult->token;
                $token->save();
                
                if($user->id_role == 4){
                    $users = $user->toArray();
                    return response()->json([
                        'status' => 'Success',
                        'token' => $tokenResult->accessToken,
                        'id_role' =>array_values($users)[0]['id_role'],
                    ]);
                
                }else if($user->id_role == 3){
                    $ambulanceStaff = AmbulanceStaff::where('id_user', '=', $user->id_user )->get();
                    $user = User::where('id_user', '=', $user->id_user )->get();
                    $users = $user->toArray();
                    $ambulanceStaffs = $ambulanceStaff->toArray();
                    return response()->json([
                        'status' => 'Success',
                        'token' => $tokenResult->accessToken,
                        'id_role' =>array_values($users)[0]['id_role'],
                        'name' =>array_values($ambulanceStaffs)[0]['name'],
                    ]);
                }
                else if($user->id_role == 2){
                    $adminIgd = AdminIgd::where('id_user', '=', $user->id_user )->get();
                    $user = User::where('id_user', '=', $user->id_user )->get();
                    $users = $user->toArray();
                    $adminIgds = $adminIgd->toArray();
                    return response()->json([
                        'status' => 'Success',
                        'token' => $tokenResult->accessToken,
                        'id_role' =>array_values($users)[0]['id_role'],
                        'name' => 'adminIgd',
                    ]);
                }
                else if($user->id_role == 1){
                    return response()->json([
                        'status' => 'Success',
                        'id_role' => 1,
                        'token' => $tokenResult->accessToken,
                        'name' => 'Super Admin'
                    ]);
                }
            }else{
                return response()->json([   
                    'status' => 'Failed',
                    'message' => 'Your Credintial are wrong!'
                ], 401);
            }
        }
    }
  
    /**
     * Logout user (Revoke the token)
     *
     * @return [string] message
     */
    public function logout(Request $request)
    {
        $request->user()->token()->revoke();
        return response()->json([
            'status' => 'Success',
            'message' => 'Successfully logged out'
        ]);
    }
  
    /**
     * Get the authenticated User
     *
     * @return [json] user object
     */
    public function user(Request $request)
    {
        return response()->json($request->user());
    }
}