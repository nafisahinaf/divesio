<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use App\Models\Paketselam;

class PageController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');
    }

    public function home()
    {
        // $paketselam = DB::table('paketselam')->get();
        // dd($paketselam);
        $paketselam = Paketselam::all();
        return view ('pages/home',['paketselam' => $paketselam]);
        // return Paketselam::all();
    }
    
    public function divecenter()
    {
        return view ('pages/divecenter');
    }

    public function detaildivecenter()
    {
        // $paketselam = DB::table('paketselam')->get();
        // dd($paketselam);
        $paketselam = Paketselam::all();
        return view ('pages/detaildivecenter',['paketselam' => $paketselam]);
        // return Paketselam::all();
    }
    public function detailpaket()
    {
        // return view ('pages/detailpaket');
        $paketselam = Paketselam::all();
        return view ('pages/detailpaket',['paketselam' => $paketselam]);
    }
    public function about()
    {
        return view ('pages/about');
    }
    public function artikel()
    {
        return view ('pages/artikel');
    }
    public function detailartikel()
    {
        return view ('pages/detailartikel');
    }

    public function login()
    {
        return view ('pages/login');
    }
        
    public function register()
    {
        return view ('pages/register');
    }

    public function formpesan()
    {
        return view ('pages/formpesan');
    }

    public function formpesan2()
    {
        return view ('pages/formpesan2');
    }

    public function profil()
    {
        return view ('pages/profil');
    }

    public function pengajuandivecenter()
    {
        return view ('pages/pengajuan');
    }

    // Dashboard
    public function dashboard(){return view ('dashboard/layout/base');}

    public function users(){return view ('dashboard/content/admin/users');}
    public function listdivecenter(){return view ('dashboard/content/admin/divecenter');}
    public function listtransaksi(){return view ('dashboard/content/admin/listtransaksi');}

    public function profildivecenter(){return view ('dashboard/content/divecenter/profil');}
    public function paketselam(){return view ('dashboard/content/divecenter/paketselam');}
    public function addpaket(){return view ('dashboard/content/divecenter/addpaket');}
    public function transaksidivecenter(){return view ('dashboard/content/transaksi-divecenter/');}
    // end dashboard
}

