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
            'age' => 'required|integer|min:1|max:150',
            'role' => 'required|string|max:50',
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
        return view('dashboard');
        /*Here we removed the single check for this route and we will use middleware */
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }

    public function innerPage(){
        return view('inner');
        /*Here we removed the single check for this route and we will use middleware */
    }
}
