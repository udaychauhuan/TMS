<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    /** this function will display the login view
     *
     *  @return view
     */
    public function Login()
    {
        if (auth()->user()) {
            return redirect()->route('home');
        }else {
            return view('auth.login');
        }
    }

    /** this function check if user is authrized or not
     *
     *  @param request
     *  @return repsone
     */
    public function LoginCheck(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);


        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {

            $request->session()->regenerateToken();
            $request->session()->put('name', Auth::user()->name);
            return redirect()->route('home');
        }
        return  back()->with(['Error' => "Invalid UserName/Password !!"]);
    }

    /** this function will logout the user from the sytem
     *
     *  @return view
     */
    public function LogOut(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerate();
        return redirect("/login");
    }
}
