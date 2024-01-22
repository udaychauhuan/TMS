<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
        return  back()->with(['failed' => "Invalid UserName/Password !!"]);
    }

    /** this function is used to store the resourse
     *
     *  @param request
     *  @return response
     */
    public function StoreUser(Request $request)
    {
        $user = [
            'name' => 'uday pratap',
            'user_type' => 3,
            'phone' => 9808240734,
            'email' => 'pratap.uday.chauhan@gmail.com',
            'gender' => 1,
            'password' => Hash::make('12345678'),
        ];

        User::create($user);

        redirect()->route('login')->with('message', 'User created successfully.');
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
