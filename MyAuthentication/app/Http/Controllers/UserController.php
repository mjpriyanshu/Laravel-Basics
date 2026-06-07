<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function register(Request $request){
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|confirmed',
        ]);


        $user = User::create($data);

        if($user){
            return redirect()->route('login');
        }
    }



    public function login(Request $request){
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if(Auth::attempt($credentials)){
            return redirect()->route('dashboard');
        }
    }

    public function dashboardPage(){
        if(Auth::check()){
            return view('dashboard');
        }else{
            return redirect()->route('login');
        }
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }

    public function innerPage(){
        if(Auth::check()){
            return view('inner');
        }else{
            return redirect()->route('login');
        }
    }
}
