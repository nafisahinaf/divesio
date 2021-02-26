<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view ('home');
    }
    
    public function divesites()
    {
        return view ('divesites');
    }

    public function detaildivecenter()
    {
        return view ('detaildivecenter');
    }
    public function detailpaket()
    {
        return view ('detailpaket');
    }
    public function about()
    {
        return view ('about');
    }
    public function artikel()
    {
        return view ('artikel');
    }
    public function detailartikel()
    {
        return view ('detailartikel');
    }
    

}
