<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        return view('Auth.register');
    }

    public function store(Request $request){
        // validate user;
        $this->validate($request, [
            'name'=>'required|max:255',
            'username'=>'required',
            'email'=>'required|email',
            'role'=>'required',
            'password'=>'required'
        ]);

        // register user
        User::create([
           'name'=>$request->name,
           'username'=>$request->username,
           'email'=>$request->email,
           'role'=>$request->role,
           'password'=>Hash::make($request->password)
        ]);

        return redirect()->route('login');
    }
}
