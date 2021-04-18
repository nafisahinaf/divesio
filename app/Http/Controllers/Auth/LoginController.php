<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Validator,Response;
use Session;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
     /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    // use AuthenticatesUsers;

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $rules = [
            'email'                 => 'required|email',
            'password'              => 'required|string'
        ];
 
        $messages = [
            'email.required'        => 'Email wajib diisi',
            'email.email'           => 'Email tidak valid',
            'password.required'     => 'Password wajib diisi',
            'password.string'       => 'Password harus berupa string'
        ];
 
        $validator = Validator::make($request->all(), $rules, $messages);
 
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput($request->all);
        }
 
        $data = [
            'email'     => $request->input('email'),
            'password'  => $request->input('password'),
        ];
        // dd(Auth::attempt($data));
        Auth::attempt($data);
 
        if (Auth::check()) {
            $user = $request->user();
            $tokenResult = $user->createToken('Personal Access Token');
                $token = $tokenResult->token;
                $token->save();
            // dd($user->id_role);
            if($user->id_role == 1){
                // $request->session()->put('id_role',$user->id_role );
                // $request->session()->put('name','SuperAdmin' );
                return redirect()->route('home');
            }else if($user->id_role == 2){
                // $request->session()->put('name',$user->name);
                // $request->session()->put('id_role',$user->id_role );
                return redirect()->route('login');
            }else if($user->id_role == 3){
                // $request->session()->put('name',$user->name);
                // $request->session()->put('id_role',$user->id_role );
                return redirect()->route('home');
            } 
            
        } else {
            // Session::flash('errors', 'Email atau password salah');
            session([
                'error'  => [('Email atau password salah')],
            ]);
            return redirect()->route('login');
        }
 
    }

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function logout(Request $request)
    {
        $this->guard()->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        if ($response = $this->loggedOut($request)) {
            return $response;
        }

        return $request->wantsJson()
            ? new JsonResponse([], 204)
            : redirect('/');
    }

    /**
     * The user has logged out of the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return mixed
     */
    protected function loggedOut(Request $request)
    {
        //
    }

    protected function guard()
    {
        return Auth::guard();
    }
}
