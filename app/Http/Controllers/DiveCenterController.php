<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Paketselam;
use App\Models\DiveCenter;
use Auth; 

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

        // return $diveCenter;
        
        $paketselam= new PaketSelam;
        $paketselam->id_dive_center = $diveCenter->id_dive_center;
        $paketselam->nama_paket = $request->nama_paket;
        $paketselam->deskripsi = $request->deskripsi;
        $paketselam->ketersediaan = $request->ketersediaan;
        $paketselam->kuota_peserta = $request->kuota_peserta;
        $paketselam->foto = $request->foto;
        $paketselam->harga = $request->harga;
        $paketselam->save();

        return response()->json([
            'status' => 'Success',
            'message' => 'Paket selam berhasil dibuat'
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
