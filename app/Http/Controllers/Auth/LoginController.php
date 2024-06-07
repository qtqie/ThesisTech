<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
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

    public function LoginView()
    {
        return view('auth.login');
    }

    use AuthenticatesUsers;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('auth')->only('logout');
    }

    public function login(Request $request, User $user)
    {
        $input = $request->all();
        $this->validate($request,[
            'email'=>'required|email',
            'password'=>'required'
        ]);
        if(auth()->attempt(['email'=>$input["email"],'password'=>$input['password']]))
        {
            $user = Auth::user();
            return redirect()->route('profile.index', compact('user'));
            // if(auth()->user()->role == 'platinum')
            // {
            //     return redirect()->route('home.platinum');
            // }
            // else if(auth()->user()->role == 'staff')
            // {
            //     return redirect()->route('home.staff');
            // }
            // else if(auth()->user()->role == 'mentor')
            // {
            //     return redirect()->route('home.mentor');
            // }
        }
        else
        {
            return redirect()->route("login")
            ->with("error",'Incorrect email or password');
        }
    }
}
