<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view ('pages/home');
    }
    
    public function divecenter()
    {
        return view ('pages/divecenter');
    }

    public function detaildivecenter()
    {
        return view ('pages/detaildivecenter');
    }
    public function detailpaket()
    {
        return view ('pages/detailpaket');
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

