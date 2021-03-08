<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BerkasPendaftaran;
use Validator;
use Auth;

class UserController extends Controller
{ 
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
                
                // if($user->id_role == 4){
                    $users = $user->toArray();
                    return response()->json([
                        'status' => 'Success',
                        'token' => $tokenResult->accessToken,
                        // 'id_role' =>array_values($users)[0]['id_role'],
                    ]);
                // }
            }else{
                return response()->json([   
                    'status' => 'Failed',
                    'message' => 'Your Credintial are wrong!'
                ], 401);
            }
        }
    }

    public function createBerkasPendaftaran(request $request)
    {
        $auth = Auth::user();
        $id = $auth->id_user;

        $diveCenter = DiveCenter::where('id_user',$id)->first();
        
        $berkaspendaftaran= new BerkasPendaftaran;
        $berkaspendaftaran->id_dive_center = $request->id_dive_center;
        $berkaspendaftaran->nama_berkas = $request->nama_berkas;
        $berkaspendaftaran->file_berkas = $request->file_berkas;
        $berkaspendaftaran->save();

        return response()->json([
            'status' => 'Success',
            'message' => 'Berkas Pendaftaran berhasil dibuat'
       ]);
        // dd($auth);
    }
    
    public function updateBerkasPendaftaran(Request $request, $id)
    {
        $nama_berkas = $request->nama_berkas;
        $file_berkas = $request->file_berkas;

        $berkaspendaftaran = BerkasPendaftaran::find($id);
        $berkaspendaftaran->nama_berkas = $nama_berkas;
        $berkaspendaftaran->file_berkas = $file_berkas;
        $berkaspendaftaran->save();

        return response()->json([
            'status' => 'Success',
            'message' => 'Berkas pendaftaran berhasil di update'
       ]);
       
    }

    public function deleteBerkasPendaftaran($id)
    {
        $berkaspendaftaran=  BerkasPendaftaran::find($id);
        $berkaspendaftaran->delete();

        return response()->json([
            'status' => 'Success',
            'message' => 'Artikel berhasil di hapus'
       ]);
    }
}
