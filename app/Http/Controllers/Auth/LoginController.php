<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
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

    use AuthenticatesUsers;

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
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function showFormLogin(){
        return view('auth.login');
    }
    public function logout(){
//        dd('dfghj');
        Auth::logout();
        return redirect('/home');
    }
    public function loginStore(Request $request)
    {
//        dd($request);
        $email = $request->get('email');
        $password = $request->get('password');

        if (Auth::attempt(['email' => $email, 'password' => $password, 'role' => 2])) {
            // email admin mới được xác thực thành công
            return redirect()->intended('/admin');
        }
        if (Auth::attempt(['email' => $email, 'password' => $password, 'role' => 1])) {
            // email admin mới được xác thực thành công
            return redirect()->intended('/home');
        }


    }
}
