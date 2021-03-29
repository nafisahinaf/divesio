<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BerkasPendaftaran;
use App\Models\Artikel;
use App\Models\User;
use App\Models\ArtikelUser;
use App\Models\Order;
use App\Models\DiveCenter;
use Validator;
use Auth;

class UserController extends Controller
{ 
    public function register(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email|unique:users',
            'password' => 'required|string|confirmed',
            'username' => 'required|string'
        ]);
        DB::beginTransaction();
        try{
            $users = new User;
            $users->email = $request->email;
            $users->username = $request->username;
            $users->password = bcrypt($request->password);
            $users->id_role=3;
            $users->save();
            
        }catch(\Exception $e){
            DB::rollback();
            return response()->json(['status' => 'Register Failed', 'message' => $e->getMessage()]);
        }
        DB::commit();
        
        return response()->json([
            'message' => 'Successfully registered as User!'
        ], 201);
    }
    
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
        
        $validator = Validator::make($request->all(),[
            'id_dive_center' => 'required',
            'nama_berkas' => 'required',
            'file_berkas' => 'required',
        ]);


        $data = $request->all();
       
        // $paketselam->id_dive_center = $diveCenter->id_dive_center;

        BerkasPendaftaran::create($data);
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

        $request->validate([
            'id_dive_center' => 'required',
            'nama_berkas' => 'required',
            'file_berkas' => 'required',
        ]);

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

    public function createOrder(request $request)
    {
        $auth = Auth::user();
        $id = $auth->id_user;

        $order = Order::where('id_user',$id)->first();
        
        $request->validate([
            'id_transaksi' => 'required',
            'id_user' => 'required',
            'id_paket' => 'required',
            'id_jadwal' => 'required',
            'jumlah_paket' => 'required',
            'status' => 'required',
        ]); 

        $order= new Order;
        $order->id_transaksi = $request->id_transaksi;
        $order->id_user = $request->id_user;
        $order->id_paket = $request->id_paket;
        $order->id_jadwal = $request->id_jadwal;
        $order->jumlah_paket = $request->jumlah_paket;
        $order->status = $request->status;
        $order->save();

        return response()->json([
            'status' => 'Success',
            'message' => 'Order berhasil dibuat'
       ]);
        // dd($auth);
    }

    public function updateOrder(Request $request, $id)
    {
        $nama_berkas = $request->nama_berkas;
        $file_berkas = $request->file_berkas;

        $request->validate([
            'id_order' => 'required',
            'id_transaksi' => 'required',
            'id_user' => 'required',
            'id_paket' => 'required',
            'id_jadwal' => 'required',
            'jumlah_paket' => 'required',
            'status' => 'required',
        ]); 

        $berkaspendaftaran = BerkasPendaftaran::find($id);
        $berkaspendaftaran->nama_berkas = $nama_berkas;
        $berkaspendaftaran->file_berkas = $file_berkas;
        $berkaspendaftaran->save();

        return response()->json([
            'status' => 'Success',
            'message' => 'Berkas pendaftaran berhasil di update'
       ]);
       
    }
    

    //get 8 artikel teratas 
    public function listTopArtikel(){
        $auth = Auth::user();
        $id = $auth->id_user;

        $listArtikel = Artikel::with('users')
                        ->whereHas('users', function($q) use($id) {
                            $q->where('users.id_user', '=', $id); 
                        })
                        // ->where('id_role',3)
                        ->paginate(8);

        // dd($listArtikel);
                        return response()->json([
            'status' => 'Success',
            'data' => [
                'list_artikel' => $listArtikel
            ],
        ]);
    }

    //get 8 artikel teratas blm
    public function listTopDiveCenter(){
        $auth = Auth::user();
        $id = $auth->id_user;

        $listDiveCenter = DiveCenter::with('user')
                        ->whereHas('user', function($q) use($id) {
                            $q->where('id_user', '=', $id); 
                        })
                        // ->where('id_role',3)
                        ->paginate(8);

        // dd($listArtikel);
                        return response()->json([
            'status' => 'Success',
            'data' => [
                'list_dive_center' => $listDiveCenter
            ],
        ]);
    }

}
