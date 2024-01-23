<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
use Nette\Utils\Image;
use Illuminate\Support\Facades\Crypt;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::all();
        return view('pages.users', ['user' => $user]);
    }


    /** this function is used to store the resourse
     *
     *  @param request
     *  @return response
     */
    public function StoreUser(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'Password' => 'required|min:8',
            'CPassword' => 'required_with:Password|same:Password',
            'user_type' => 'required',
            'gender' => 'required',
            'phone' => 'required',
        ]);

        if($request->hasFile('profile_image')){
            $profile_image = $request->file('profile_image');
            $filename = time() . '.' . $profile_image->getClientOriginalExtension();
            Image::make($profile_image)->resize(300, 300)->save( storage_path('/public/assets/' . $filename ) );
        };

        $user = [
            'name' => $request->name,
            'user_type' => $request->user_type,
            'phone' => $request->phone,
            'email' => $request->email,
            'gender' => $request->gender,
            'profile_image' => $filename ?? null,
            'password' => Hash::make($request->Password),
        ];

        $result =  User::create($user);

        if ($result) {
            return redirect()->route('users')->with('sucesss', 'User created successfully.');
        } else {
            return redirect()->route('users')->with('error', 'some thing went wrong, try again.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        $id = $request->id;
        if (!empty($id)) {
            $user = User::find($id);
            return $user;
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $userArr[] = $request->all() ?? [];
        $id = $userArr[0]['id'];

        if ($userArr[0]['_token']) {
            unset($userArr[0]['_token']);
        }
        if ($userArr[0]['id']) {
            unset($userArr[0]['id']);
        }
        if ($userArr[0]['CPassword']) {
            unset($userArr[0]['CPassword']);
        }

        $result = User::whereId($id)->update($userArr[0]);

        if ($result) {
            return redirect()->route('users')->with('sucesss', 'User Updated successfully.');
        } else {
            return redirect()->route('users')->with('error', 'some thing went wrong, try again.');
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $result = User::whereId($id)->delete();

        if ($result) {
            return redirect()->route('users')->with('sucesss', 'User deleted successfully.');
        } else {
            return redirect()->route('users')->with('error', 'some thing went wrong, try again.');
        }
    }
}
