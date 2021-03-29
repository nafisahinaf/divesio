<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Paketselam;
use App\Models\DiveCenter;
use App\Models\Artikel;
use App\Models\User;
use App\Models\BerkasPendaftaran;
use Validator;
use Auth; 

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function getAllDiveCenter()
    {
        // $paketselam = DB::table('paketselam')->get();
        // dd($paketselam);
        // $paketselam = Paketselam::all();
        // return view ('divesites',['paketselam' => $paketselam]);
        return Divecenter::all();
    }

    public function createDiveCenter(request $request)
    {
        $auth = Auth::user();
        $id = $auth->id_user;

        // $user = User::where('id_user',$id)->first();

        $validator = Validator::make($request->all(),[
        'id_user' =>'required',
        'nama' => 'required',
        'lokasi' => 'required',
        'about'  => 'required',
        'no_hp'  => 'required',
        'email' => 'required',
        'foto_dive_center'  => 'required',
        ]);

        // $data['id_user']=$user;
        $data = $request->all();
        // $paketselam->id_dive_center = $diveCenter->id_dive_center;

        DiveCenter::create($data);

        return response()->json([
            'status' => 'Success',
            'message' => 'Dive Center Berhasil dibuat'
       ]);
        // dd($auth);
    }
    
    public function editDiveCenter(Request $request, $id)
    {
        $nama = $request->nama;
        $lokasi = $request->lokasi;
        $about = $request->about;
        $no_hp = $request->no_hp;
        $email = $request->email;
        $foto_dive_center = $request->foto_dive_center;

        $divecenter = DiveCenter::find($id);
        $divecenter->nama = $nama;
        $divecenter->lokasi = $lokasi;
        $divecenter->about = $about;
        $divecenter->no_hp = $no_hp;
        $divecenter->email = $email;
        $divecenter->foto_dive_center = $foto_dive_center;
        $divecenter->save();

        return response()->json([
            'status' => 'Success',
            'message' => 'Dive Center Berhasil di update'
       ]);
       
    }

    //func edit role  user
    

    public function deleteDiveCenter($id)
    {
        $divecenter=  DiveCenter::find($id);
        $divecenter->delete();

        return response()->json([
            'status' => 'Success',
            'message' => 'Dive Center Berhasil di hapus'
       ]);
    }

    public function getAllArtikel()
    {
        // $paketselam = DB::table('paketselam')->get();
        // dd($paketselam);
        // $paketselam = Paketselam::all();
        // return view ('divesites',['paketselam' => $paketselam]);
        return Artikel::all();
    }

    public function createArtikel(request $request)
    {
        $auth = Auth::user();
        $id = $auth->id_user;
        
        $artikel= new Artikel;
        $artikel->judul = $request->judul;
        $artikel->penulis = $request->penulis;
        $artikel->kategori = $request->kategori;
        $artikel->isi = $request->isi;
        $artikel->foto = $request->foto;
        $artikel->durasi_baca = $request->durasi_baca;
        $artikel->save();

        return response()->json([
            'status' => 'Success',
            'message' => 'Artikel berhasil dibuat'
       ]);
        // dd($auth);
    }
    
    public function updateArtikel(Request $request, $id)
    {
        $judul = $request->judul;
        $penulis = $request->penulis;
        $kategori = $request->kategori;
        $isi = $request->isi;
        $foto = $request->foto;
        $durasi_baca = $request->durasi_baca;

        $artikel = Artikel::find($id);
        $artikel->judul = $judul;
        $artikel->penulis = $penulis;
        $artikel->kategori = $kategori;
        $artikel->isi = $isi;
        $artikel->foto = $foto;
        $artikel->durasi_baca = $durasi_baca;
        $artikel->save();

        return response()->json([
            'status' => 'Success',
            'message' => 'Artikel berhasil di update'
       ]);
       
    }

    public function deleteArtikel($id)
    {
        $artikel=  Artikel::find($id);
        $artikel->delete();

        return response()->json([
            'status' => 'Success',
            'message' => 'Artikel berhasil di hapus'
       ]);
    }

    public function getAllBerkasPendaftaran()
    {
        // $paketselam = DB::table('paketselam')->get();
        // dd($paketselam);
        // $paketselam = Paketselam::all();
        // return view ('divesites',['paketselam' => $paketselam]);
        return BerkasPendaftaran::all();
    }

    public function createBerkasPendaftaran(request $request)
    {
        $auth = Auth::user();
        $id = $auth->id_user;
        
        $artikel= new Artikel;
        $artikel->judul = $request->judul;
        $artikel->penulis = $request->penulis;
        $artikel->kategori = $request->kategori;
        $artikel->isi = $request->isi;
        $artikel->foto = $request->foto;
        $artikel->durasi_baca = $request->durasi_baca;
        $artikel->save();

        return response()->json([
            'status' => 'Success',
            'message' => 'Artikel berhasil dibuat'
       ]);
        // dd($auth);
    }
    
    public function updateBerkasPendaftaran(Request $request, $id)
    {
        $judul = $request->judul;
        $penulis = $request->penulis;
        $kategori = $request->kategori;
        $isi = $request->isi;
        $foto = $request->foto;
        $durasi_baca = $request->durasi_baca;

        $artikel = Artikel::find($id);
        $artikel->judul = $judul;
        $artikel->penulis = $penulis;
        $artikel->kategori = $kategori;
        $artikel->isi = $isi;
        $artikel->foto = $foto;
        $artikel->durasi_baca = $durasi_baca;
        $artikel->save();

        return response()->json([
            'status' => 'Success',
            'message' => 'Artikel berhasil di update'
       ]);
       
    }

    public function deleteBerkasPendaftaran($id)
    {
        $artikel=  Artikel::find($id);
        $artikel->delete();

        return response()->json([
            'status' => 'Success',
            'message' => 'Artikel berhasil di hapus'
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
