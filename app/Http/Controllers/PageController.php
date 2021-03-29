<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paketselam;


class PageController extends Controller
{
    // public function home()
    // {
    //     return view ('pages/home');
    // }

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
}

