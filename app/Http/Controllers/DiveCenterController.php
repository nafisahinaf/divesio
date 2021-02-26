<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Paketselam;
use App\Models\DiveCenter;

class DiveCenterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $paketselam = DB::table('paketselam')->get();
        // dd($paketselam);
        $paketselam = Paketselam::all();
        return view ('divesites',['paketselam' => $paketselam]);
        // return Paketselam::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(request $request)
    {
        $divecenter= new DiveCenter;
        $divecenter->nama = $request->nama;
        $divecenter->lokasi = $request->lokasi;
        $divecenter->about = $request->about;
        $divecenter->informasi_kontak = $request->informasi_kontak;
        $divecenter->foto_dive_center = $request->foto_dive_center;
        $divecenter->save();

        return 'Data berhasil masuk';
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $nama = $request->nama;
        $lokasi = $request->lokasi;
        $about = $request->about;
        $informasi_kontak = $request->informasi_kontak;
        $foto_dive_center = $request->foto_dive_center;

        $divecenter = DiveCenter::find($id);
        $divecenter->nama = $nama;
        $divecenter->lokasi = $lokasi;
        $divecenter->about = $about;
        $divecenter->informasi_kontak = $informasi_kontak;
        $divecenter->foto_dive_center = $foto_dive_center;
        $divecenter->save();

        return 'Data berhasil diupdate';
    }

    public function delete($id)
    {
        $divecenter=  DiveCenter::find($id);
        $divecenter->delete();

        return 'Data berhasil dihapus';
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

    

    //daftar dive center
    public function getDaftarDiveCenter(){
        $auth = Auth::user()->dive_center;
        $id = $auth->id_dive_center;

        $daftarDiveCenter = DaftarDiveCenter::with('divecenter.users')
                        ->where('id_dive_center',$id)
                        ->get();

        return response()->json([
            'status' => 'Success',
            'data' => [
                'daftar_dive_center' => $daftarDiveCenter
            ],
        ]);
    }

    //detail dive center
    public function detailDiveCenter($id_dive_center){
        $anggota = User::with('anggota')
                  ->select('username','email','id_user') 
                  ->findOrFail($id_user);

        return response()->json([
            'status' => 'Success',
            'data' => [
                'anggota' => $anggota
            ],
        ]);
    }
}
