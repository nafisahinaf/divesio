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
use Auth; 
use Validator; 

class DiveCenterController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function getAllPaketSelam()
    {
        // $paketselam = DB::table('paketselam')->get();
        // dd($paketselam);
        // $paketselam = Paketselam::all();
        // return view ('divesites',['paketselam' => $paketselam]);
        return PaketSelam::all();
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
        // return $diveCenter;
       
        //where yg mana tabel divecenter kolom id_user sama dg id_user user yg sdg login
        //first untuk objek pertama bukan bentuk array
        $data = $request->all();
        $data['id_dive_center']=$diveCenter->id_dive_center;
        // $paketselam->id_dive_center = $diveCenter->id_dive_center;

        PaketSelam::create($data);

        return response()->json([
            'status' => 'Success',
            'message' => 'Paket selam berhasil dibuat'
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
    
    public function editPaketSelam(Request $request, $id)
    {  
        $nama_paket = $request->nama_paket;
        $deskripsi = $request->deskripsi;
        $ketersediaan = $request->ketersediaan;
        $kuota_peserta = $request->kuota_peserta;
        $foto = $request->foto;
        $harga = $request->harga;

        $paketselam = PaketSelam::find($id);
        $paketselam->nama_paket = $nama_paket;
        $paketselam->deskripsi = $deskripsi;
        $paketselam->ketersediaan = $ketersediaan;
        $paketselam->kuota_peserta = $kuota_peserta;
        $paketselam->foto = $foto;
        $paketselam->harga = $harga;
        $paketselam->save();

        return response()->json([
            'status' => 'Success',
            'message' => 'Paket selam berhasil di update'
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
    //get jadwal paket yang dimiliki dive center login
    public function listJadwalPaketDiveCenter(){
        $auth = Auth::user();
        $id = $auth->id_user;

        $listJadwalPaket = PaketSelam::with('jadwal_pakets','dive_center')
                        ->whereHas('dive_center', function($q) use($id) {
                            $q->where('id_user', '=', $id); 
                        })
                        // ->where('id_role',2)
                        ->paginate(3);

        return response()->json([
            'status' => 'Success',
            'data' => [
                'listjadwalpaket' => $listJadwalPaket
            ],
        ]);
    }
    public function getAllJadwalPaket()
    {
        // $paketselam = DB::table('paketselam')->get();
        // dd($paketselam);
        // $paketselam = Paketselam::all();
        // return view ('divesites',['paketselam' => $paketselam]);
        return JadwalPaket::all();
    }

    
    
    public function updateJadwalPaket(Request $request, $id)
    {
        $id_paket = $request->id_paket;
        $tanggal = $request->tanggal;
        $jam_berangkat = $request->jam_berangkat;
        $durasi = $request->durasi;

        $jadwalpaket = JadwalPaket::find($id);
        $jadwalpaket->id_paket = $id_paket;
        $jadwalpaket->tanggal = $tanggal;
        $jadwalpaket->jam_berangkat = $jam_berangkat;
        $jadwalpaket->durasi = $durasi;
        $jadwalpaket->save();

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

    





    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

}
