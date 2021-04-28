<?php

namespace App\Http\Controllers;
// namespace Midtrans;


use Illuminate\Http\Request;
use App\Models\BerkasPendaftaran;
use App\Models\Artikel;
use App\Models\User;
use App\Models\ArtikelUser;
use App\Models\Order;
use App\Models\DiveCenter;
use App\Models\PaketSelam;
use App\Models\DataDiriPemesan;
use Illuminate\Support\Carbon; 
use Validator;
use Auth;

// require_once dirname(__FILE__) . '/../../Midtrans.php';
// //Set Your server key
// Config::$serverKey = "<SB-Mid-server-A3AGqtzgqdTEvnqEmPPo2lHR>";
// // Uncomment for production environment
// // Config::$isProduction = true;
// Config::$isSanitized = Config::$is3ds = true;

// // Required
// $transaction_details = array(
//     'order_id' => rand(),
//     'gross_amount' => 94000, // no decimal allowed for creditcard
// );

// // Fill transaction details
// $transaction = array(
//     'transaction_details' => $transaction_details,
//     'customer_details' => $customer_details,
//     'item_details' => $item_details,
// );

// $snapToken = Snap::getSnapToken($transaction);
// echo "snapToken = ".$snapToken;


class UserController extends Controller
{ 
    public function register(Request $request)
    {
        
        $validator = Validator::make($request->all(),[
            'email' => 'required|string|email|unique:users',
            'password' => 'required|string|confirmed',
            'username' => 'required|string'
        ]);

        // DB::beginTransaction();
        // try{
        //     $users = new User;
        //     $users->email = $request->email;
        //     $users->username = $request->username;
        //     $users->password = bcrypt($request->password);
        //     $users->id_role=3;
        //     $users->save();
            
        // }catch(\Exception $e){
        //     DB::rollback();
        //     return response()->json(['status' => 'Register Failed', 'message' => $e->getMessage()]);
        // }
        // DB::commit();
        $data = $request->all();
        // $data->id_role = 3;
        $data['id_role']=3;
        User::create($data);
        return response()->json([
            'message' => 'Successfully registered as User!', 
            'data'=>$data
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

    public function createDataDiriPemesan(request $request)
    {
        $auth = Auth::user();
        $id = $auth->id_user;
        
        $validator = Validator::make($request->all(),[
            'id_order' => 'required',
            'nama_lengkap' => 'required',
            'jenis_tanda_pengenal' => 'required',
            'nomor_tanda_pengenal' => 'required',
            'alamat' => 'required',
        ]);

        $data = $request->all();

        DataDiriPemesan::create($data);
        return response()->json([
            'status' => 'Success',
            'message' => ' Data diri pemesan berhasil dibuat'
       ]);
        // dd($auth);
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
        $messages = [
            'nama.required' => 'Nama penyetor wajib diisi.',
            'tanggal_transaksi.required' => 'Tanggal setor wajib diisi.',
            'uraian.required' => 'Uraian wajib diisi.',
        ];

        $validator = $request->validate([
            'id_dive_center' => 'required',
            'nama_berkas' => 'required',
            'file_berkas' => 'required',
        ],$messages);

        $berkaspendaftaran = BerkasPendaftaran::find($id);
        $berkaspendaftaran->update($request->all());

        return response()->json([
            'status' => 'Success',
            'message' => 'Berkas pendaftaran berhasil di update'
       ]);
    }

    public function update(Request $request, $id)
    {
        $messages = [
            'nama.required' => 'Nama penyetor wajib diisi.',
            'tanggal_transaksi.required' => 'Tanggal setor wajib diisi.',
            'uraian.required' => 'Uraian wajib diisi.',
        ];

        $validator = $request->validate([
            'nama' => 'required',
            'tanggal_transaksi' => 'required',
            'uraian' => 'required',
        ], $messages);

        $daftar_setor = DaftarSetor::find($id);
        $daftar_setor->update($request->all());
        return redirect()->route('daftar_setor.index')
                        ->with('success','Data berhasil diubah');
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

        // $order = Order::where('id_user',$id)->first();

         $validator = Validator::make($request->all(),[
            'id_transaksi' => 'required',
            'id_paket' => 'required',
            'id_jadwal' => 'required',
            'jumlah_paket' => 'required',
        ]);

        $data['id_user']=$id;
        // $data['status']=$id;
        $data = $request->all();
        // $paketselam->id_dive_center = $diveCenter->id_dive_center;

        Order::create($data);

        return response()->json([
            'status' => 'Success',
            'message' => 'Order berhasil dibuat'
       ]);
        // dd($auth);
    }

    public function updateTransaksi(Request $request, $id)
    {
      
        $request->validate([
            'id_user' => 'required',
            'nominal' => 'required',
            'batas_wkt_pembayaran' => 'required',
            'id_paket' => 'required',
            'id_jadwal' => 'required',
            'jumlah_paket' => 'required',
            'status' => 'required',
        ]); 

        return response()->json([
            'status' => 'Success',
            'message' => 'Berkas pendaftaran berhasil di update'
       ]);
    }
    
    //get 8 artikel teratas 
    public function listTopArtikel(){
        $auth = Auth::user();
        $id = $auth->id_user;

        $listArtikel = Artikel::paginate(8);

        // dd($listArtikel);
                        return response()->json([
            'status' => 'Success',
            'data' => [
                'list_artikel' => $listArtikel
            ],
        ]);
    }

    //get 8 divecenter teratas
    public function listTopDiveCenter(){
        $auth = Auth::user();
        $id = $auth->id_user;

        $listDiveCenter = DiveCenter::paginate(8);
                        
        // dd($listArtikel);
                        return response()->json([
            'status' => 'Success',
            'data' => [
                'list_dive_center' => $listDiveCenter
            ],
        ]);
    }

    //get 8 paketselam teratas all
    public function listTopPaketSelam(){
        $auth = Auth::user();
        $id = $auth->id_user;

        $listPaketSelam = PaketSelam::paginate(8);
                             
        // dd($listArtikel);
                        return response()->json([
            'status' => 'Success',
            'data' => [
                'list_paket_selam' => $listPaketSelam
            ],
        ]);
    }

    //get 8 paketselam milik divecenter yang dipilih 
    public function listTopPaketSelamDiveCenterPilihan($id_dive_center){
        $auth = Auth::user();
        $id = $auth->id_user;

        $listPaketSelamDiveCenterPilihan = PaketSelam::with('dive_center')
                        ->where('id_dive_center',$id_dive_center)
                        ->paginate(8);
                             
        // dd($listArtikel);
                        return response()->json([
            'status' => 'Success',
            'data' => [
                'list_paket_selam_dive_center_pilihan' => $listPaketSelamDiveCenterPilihan
            ],
        ]);
    }

    //get detail divecenter
    public function detailDiveCenter($id_dive_center){
        $auth = Auth::user();
        $id = $auth->id_user;

        $detaildivecenter = DiveCenter::where('id_dive_center',$id_dive_center)
                        ->get();
        
                        return response()->json([
            'status' => 'Success',
            'data' => [
                'detail_dive_center' => $detaildivecenter
            ],
        ]);
    }

    //get detail pemesan
    public function detailPemesan($id_data_diri){
        $auth = Auth::user();
        $id = $auth->id_user;

        $detailpemesan = DataDiriPemesan::where('id_data_diri',$id_data_diri)
                        ->get();
        
                        return response()->json([
            'status' => 'Success',
            'data' => [
                'detail_pemesan' => $detailpemesan
            ],
        ]);
    }

    //get detail paketselam
    public function detailPaketSelam($id_paket){
        $auth = Auth::user();
        $id = $auth->id_user;

        $detailpaketselam = PaketSelam::where('id_paket',$id_paket)
                        ->get();
        
                        return response()->json([
            'status' => 'Success',
            'data' => [
                'detail_paket_selam' => $detailpaketselam
            ],
        ]);
    }

    //get detail histori
    public function getDetailHistori($id_order){
        $datenow = Carbon::now(); 
        $auth = Auth::user();
        $id = $auth->id_user;

        $detailHistorilOrder = Order::with('user','paket_selam','jadwal_paket')
                        ->where('id_user',$id)
                        ->where('id_order',$id_order)
                        ->whereHas('jadwal_paket', function($q) use($datenow) {
                            $q->where('tanggal', '<=', $datenow); 
                        })
                        ->get();

        // $arrayIdPaket = Order::with('id_jadwal')
        //                 ->where('id_user',$id)
        //                ->where('id_order',$id_order)
        //                ->get();

        // $jadwalPakets = DB::table('jadwal_pakets')
        //                 ->whereIn('id_jadwal',$arrayIdPaket )->get();
        
            return response()->json([
            'status' => 'Success',
            'data' => [
                'detail_histori_order' => $detailHistorilOrder
            ],
        ]);
    }

    //
    public function listKegiatanBerjalan(){
        $datenow = Carbon::now(); 

        $auth = Auth::user();
        $id = $auth->id_user;

        $listKegiatan = Event::with('detail_event.waktu_event','users','kategori')
                        ->where('id_user',$id)
                        ->whereHas('detail_event', function($q) use($datenow) {
                            $q->where('tgl_mulai', '>=', $datenow); 
                        })
                        ->get();

        return response()->json([
            'status' => 'Success',
            'size'  => sizeof($listKegiatan),
            'data' => [
                'list_kegiatan' => $listKegiatan
            ],
        ]);
    }


    //func edit profil
    // public function editProfil (Request $request, $id_user)
    // {
    //     $auth = Auth::user();
    //     $id = $auth->id_user;

    //     $validator = Validator::make($request->all(),[
    //         'name' => 'required|string',
    //         'email' => 'required|string',
    //     ]);
    //     $data = $request->all();

    //     $user = User::find($id);
    //     user::update($data);
    //     return response()->json([
    //         'status' => 'Success',
    //         'message' => ' Profil berhasil diperbarui'
    //    ]);
    // }
    public function editProfil(Request $request, $id)
    {  $auth = Auth::user();
        $id = $auth->id_user;
        // $divecenter = DiveCenter::where('id_user',$id)->first(); 

        $validator = Validator::make($request->all(),[
        "name" => 'required',
        "email" => 'required',
        ]);
        
        // $data['id_user']=$id;
        // $data['id_dive_center']=$divecenter;
        $data = $request->all();
        
        // $paketselam->id_dive_center = $diveCenter->id_dive_center;
        
        User::where("id_user",$id)->update($data);

        return response()->json([
            'status' => 'Success',
            'message' => 'Profil berhasil diubah'
       ]);
    }
    
    // func liat profil
    public function lihatProfil(){
        $auth = Auth::user();
        $id = $auth->id_user;

        $dataprofil = User::where('id_user',$id)
                    ->get();

             return response()->json([
            'status' => 'Success',
            'data' => [
                'data_profil' => $dataprofil
            ],
        ]);
    }



    //func lihat histori pemesanan
    public function getHistori(){
        // $datenow = Carbon::now(); 

        $auth = Auth::user();
        $id = $auth->id_user;

        $histori = Order::where('id_user',$id)
                        ->whereHas('jadwal_paket', function($q) use($datenow) {
                            $q->where('tanggal', '<=', $datenow); 
                        })
                        ->get();

        return response()->json([
            'status' => 'Success',
            'size'  => sizeof($histori),
            'data' => [
                'histori' => $histori
            ],
        ]);
    }
 
    //func ajukan divecenter
    public function ajukanDiveCenter(request $request)
    {
        $auth = Auth::user();
        $id = $auth->id_user;
        // $diveCenter = DiveCenter::where('id_user',$id)->first();

        // $validator = Validator::make($request->all(),[
        //     'nama' => 'required|string',
        //     'lokasi' => 'required|string',
        //     'about' => 'required|string',
        //     'no_hp' => 'required|string',
        //     'email' => 'required|string|email|unique:users',
        //     'foto_dive_center' => 'required|image|mimes:jpeg,png,jpg|max:2000',
        // ]);

        DB::beginTransaction();
        try{
            $diveCenter = new Divecenter;
            $diveCenter->nama = $request->nama;
            $diveCenter->lokasi = $request->lokasi;
            $diveCenter->about = $request->about;
            $diveCenter->no_hp = $request->no_hp;
            $diveCenter->email = $request->email;
            $diveCenter->foto_dive_center = $request->foto_dive_center;
            $diveCenter->save();
          }catch (\Exception $e) {
            DB::rollback();
            return response()->json(['status' => 'Ajukan Dive Center Failed', 'message' => $e->getMessage()]);
        }
          try{
            $berkaspendaftaran = new BerkasPendaftaran;
            $berkaspendaftaran->id_dive_center = $diveCenter->id_dive_center;
            $berkaspendaftaran->nama = $request->nama;
            $berkaspendaftaran->file_berkas = $request->file_berkas;
            $berkaspendaftaran->save();
          }catch (\Exception $e) {
            DB::rollback();
            return response()->json(['status' => 'Ajukan Dive Center Failed', 'message' => $e->getMessage()]);
        }
          DB::commit();

    //     $data = $request->all();
       
    //     // $paketselam->id_dive_center = $diveCenter->id_dive_center;
    //     $data['id_user']=$id;
    //     $data['status']='pending';
    //     DiveCenter::create($data);
            return response()->json([
                'status' => 'Success',
                'message' => ' Dive center berhasil diajukan'
            ]);
        // dd($auth);
    }

    //func edit pass
    public function ubahPassword(Request $request){
        // dd($request);
        $request_data = $request->all();
        $current_password = Auth::user()->password;
        $validator = Validator::make($request->all(), [
            'old_password' => 'required',
            'password' => 'required|confirmed|min:8|different:old_password'
        ]);
        if ($validator->fails()) {    
            return response()->json($validator->messages(), 422);
        }
        $old_password = $request->old_password;
        
        if(Hash::check($old_password, $current_password))
        {           
            $user_id = Auth::user()->id;                       
            $obj_user = User::find($user_id);
            $obj_user->password = Hash::make($request->password);
            $obj_user->save(); 
            return response()->json([
                'status' => 'Success',
                'message' => 'Password Berhasil diubah'
           ]);
        }else {
            return response()->json([
                'status' => 'Error',
                'message' => 'Password lama anda tidak sesuai'
            ]);

        }
    }

    //func edit profil


}

?>
