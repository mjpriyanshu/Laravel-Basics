<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(){
        $value = session()->all(); // it gets all the session data and store in $value variable
        echo '<pre>';
        print_r($value);
        echo '</pre>';

        // $value = session()->get('name'); // it gets the value of 'name' key from session and store in $value variable
        $value2 = session('name'); //does the same work
        echo $value2;
    }

    public function setSession(){
        //session()->put('name', 'John Doe'); // it sets the value of 'name' key to 'John Doe' in session
        session(['name' => 'Priyanshu']); // does the same work
        return redirect('/'). 'Session has been set'; // it redirects to '/' route and display 'Session has been set' message
    }

    public function deleteSession(){
        //session()->forget('name'); // it deletes the 'name' key from session
        session()->flush(); // it deletes all the session data
        return redirect('/').'Session has been deleted';
    }
}
