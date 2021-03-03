<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;

class PageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function home()
    {
        $auth = Auth::user();
        // dd($auth->id_user);
        return view ('home');
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
