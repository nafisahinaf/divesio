<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Paketselam;
use App\Models\DiveCenter;
use App\Models\JadwalPaket;
use App\Models\persyaratanPaket;
use App\Models\FasilitasPaket;
use App\Models\User;
use Illuminate\Support\Carbon; 
use Auth; 
use Validator; 

class DiveCenterController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function createPaketSelam(request $request)
    {
        $auth = Auth::user();
        $id = $auth->id_user;
        $diveCenter = DiveCenter::where('id_user',$id)->first(); 

        $validator = Validator::make($request->all(),[
            'nama_paket' => 'required',
            'deskripsi' => 'required',
            'ketersediaan' => 'required',
            'kuota_peserta' => 'required',
            'foto' => 'required',
            'harga' => 'required',
        ]);
        
        $data = $request->all();
        $data['id_dive_center']=$diveCenter->id_dive_center;
        // $paketselam->id_dive_center = $diveCenter->id_dive_center;
        PaketSelam::create($data);

        return response()->json([
            'status' => 'Success',
            'message' => 'Paket selam berhasil dibuat'
       ]);
    }

    public function editPaketSelam(Request $request, $id)
    {  $auth = Auth::user();
        $id = $auth->id_user;
        $divecenter = DiveCenter::where('id_user',$id)->first(); 

        $validator = Validator::make($request->all(),[
        "nama_paket" => 'required',
        "deskripsi" => 'required',
        "ketersediaan" => 'required',
        "kuota_peserta" => 'required',
        "foto" => 'required',
        "harga" => 'required',
        ]);

        $data = Paketselam::find($id);
        $data['id_dive_center']=$divecenter;
        $data = $request->all();
        
        // $paketselam->id_dive_center = $diveCenter->id_dive_center;
        
        PaketSelam::where("id_paket",$id)->update($data);

        return response()->json([
            'status' => 'Success',
            'message' => 'Paket selam berhasil diubah'
       ]);
    }

    public function deletePaketSelam($id)
    {
        $paketselam=  PaketSelam::find($id);
        $paketselam->delete();

        return response()->json([
            'status' => 'Success',
            'message' => 'Paket Selam berhasil di hapus'
       ]);
    }

    public function createJadwalPaket(request $request)
    {
        $auth = Auth::user();
        $id = $auth->id_user;
        $diveCenter = DiveCenter::where('id_user',$id)->first();
        //where yg mana tabel divecenter kolom id_user sama dg id_user user yg sdg login
        //first untuk objek pertama bukan bentuk array
        
        $validator = Validator::make($request->all(),[
            'id_paket' => 'required',
            'tanggal' => 'required',
            'jam_berangkat' => 'required',
            'durasi' => 'required',
        ]);
        // return $diveCenter;
        
        $data = $request->all();
        $data['id_dive_center']=$diveCenter;
        // $paketselam->id_dive_center = $diveCenter->id_dive_center;

        jadwalPaket::create($data);

        return response()->json([
            'status' => 'Success',
            'message' => 'Jadwal Paket berhasil dibuat'
       ]);
    }
   
    
    //get semua jadwal paket yang dimiliki dive center login
    public function getAllJadwalPaketDiveCenter(){
        $auth = Auth::user();
        $id = $auth->id_user;
        $divecenter = DiveCenter::where('id_user',$id)->first();

        $AllJadwalPaket = PaketSelam::find($divecenter)
                        // ->whereHas('jadwal_pakets', function($q) use($divecenter) {
                        //     $q->where('id_dive_center', '=', $divecenter); 
                        // })
                        // ->where('id_dive_center',$divecenter)
                        ;

        return response()->json([
            'status' => 'Success',
            'data' => [
                'all_jadwal_paket' => $AllJadwalPaket
            ],
        ]);
    }

    //get jadwal paket mendatang yang dimiliki dive center login
    public function getJadwalPaketMendatang()
    {
        $datenow = Carbon::now(); 
        $auth = Auth::user();
        $id = $auth->id_user;
        // ::with('dive_center')->where('id_dive_center',$divecenter);
        $divecenter = DiveCenter::where('id_user',$id)->first();
        
        $jadwalPaket = PaketSelam::where('id_dive_center',$divecenter->id_dive_center)
                    ->whereHas('jadwal_pakets', function($q) use($datenow) {
                        $q->where('tanggal', '>=', $datenow); 
                        })
                        // ->whereDate('tanggal', '>=', $datenow)
                    ->get();

                        return response()->json([
                            'status' => 'Success',
                            'data' => [
                                'jadwal_paket' =>$jadwalPaket 
                            ],
                        ]);

                       
    }
    
    public function updateJadwalPaket(Request $request, $id)
    {
        $validator = Validator::make($request->all(),[
        // 'id_paket' => 'required',
        'tanggal' => 'required',
        'jam_berangkat' => 'required',
        'durasi' => 'required',
        ]);
        $id_paket = $request->id_paket;
        $data = JadwalPaket::find($id);
        // $data['id_dive_center']=$divecenter;
        $data = $request->all();
        
        // $paketselam->id_dive_center = $diveCenter->id_dive_center;
        
        JadwalPaket::where("id_jadwal",$id)->update($data);
        return response()->json([
            'status' => 'Success',
            'message' => 'Jadwal Paket berhasil di update'
       ]);
       
    }

    public function deleteJadwalPaket($id)
    {
        $jadwalpaket=  JadwalPaket::find($id);
        $jadwalpaket->delete();

        return response()->json([
            'status' => 'Success',
            'message' => 'Jadwal Paket berhasil di hapus'
       ]);
    }

    //get persyaratan paket tertentu
    public function getPersyaratanPaket($id_paket)
    {
        $persyaratanpaket = PersyaratanPaket::with('paket_selam')
                         ->where('id_paket',$id_paket)
                        //  ->where('id_status',7)
                         ->get();
        
        return response()->json([
            'status' => 'Success',
            'size'  => sizeof($persyaratanpaket),
            'data' => [
                'persyaratanpaket' => $persyaratanpaket
            ],
        ]);
    }

    public function createPersyaratanPaket(request $request)
    {
        $auth = Auth::user();
        $id = $auth->id_user;

        $diveCenter = DiveCenter::where('id_user',$id)->first();
        //where yg mana tabel divecenter kolom id_user sama dg id_user user yg sdg login
        //first untuk objek pertama bukan bentuk array


        $validator = Validator::make($request->all(),[
        'id_paket' =>'required',
        'nama_persyaratan' =>'required',
        ]);

        $data = $request->all();
        $data['id_dive_center']=$diveCenter;
        // $paketselam->id_dive_center = $diveCenter->id_dive_center;

        PersyaratanPaket::create($data);
        return response()->json([
            'status' => 'Success',
            'message' => 'Persyaratan Paket berhasil dibuat'
       ]);
    }
    
    public function updatePersyaratanPaket(Request $request, $id)
    {
        $id_paket = $request->id_paket;
        $nama_persyaratan = $request->nama_persyaratan;

        $persyaratanpaket = PersyaratanPaket::find($id);
        $persyaratanpaket->id_paket = $id_paket;
        $persyaratanpaket->nama_persyaratan = $nama_persyaratan;
        $persyaratanpaket->save();

        return response()->json([
            'status' => 'Success',
            'message' => 'Persyaratan Paket berhasil di update'
       ]);
       
    }

    public function deletePersyaratanPaket($id)
    {
        $persyaratanpaket=  PersyaratanPaket::find($id);
        $persyaratanpaket->delete();

        return response()->json([
            'status' => 'Success',
            'message' => 'Persyaratan Paket berhasil di hapus'
       ]);
    }

    //func lihat paket selamnya sndr  
    public function getPaketSelam(){
        $auth = Auth::user();
        $id = $auth->id_user;
        $diveCenter = DiveCenter::where('id_user',$id)->first();

        $listPaketSelam = PaketSelam::where('id_dive_center',$diveCenter)
                        ->get();

             return response()->json([
            'status' => 'Success',
            'data' => [
                'list_paket_selam' => $listPaketSelam
            ],
        ]);
    }
    

     //edit info dive center
     public function editDiveCenter(Request $request, $id)
    {  $auth = Auth::user();
        $id = $auth->id_user;
        $divecenter = DiveCenter::where('id_user',$id)->first(); 

        $validator = Validator::make($request->all(),[
        "nama" => 'required',
        "lokasi" => 'required',
        "about" => 'required',
        "no_hp" => 'required',
        "email" => 'required',
        "foto_dive_center" => 'required',
        ]);
        
        $diveCenter->id_user = $id;
        // $diveCenter->status = '';
        // $diveCenter->nama_persyaratan = $nama_persyaratan;
        // $data = DiveCenter::find($id);
        // $data['id_user']=$id;
        $data['id_dive_center']=$divecenter;
        $data = $request->all();
        
        // $paketselam->id_dive_center = $diveCenter->id_dive_center;
        
        DiveCenter::where("id_dive_center",$divecenter)->update($data);

        return response()->json([
            'status' => 'Success',
            'message' => 'Dive Center berhasil diubah'
       ]);
    }

    public function editProfil(Request $request, $id)
    {  $auth = Auth::user();
        $id = $auth->id_user;
        $divecenter = DiveCenter::where('id_user',$id)->first(); 

        $validator = Validator::make($request->all(),[
            "nama" => 'required',
            "lokasi" => 'required',
            "about" => 'required',
            "no_hp" => 'required',
            "email" => 'required',
            "foto_dive_center" => 'required',
        ]);
        
        $data = $request->all();
        
        DiveCenter::where("id_dive_center",$id)->update($data);

        return response()->json([
            'status' => 'Success',
            'message' => 'Profil berhasil diubah'
       ]);
    }
    
   
}
