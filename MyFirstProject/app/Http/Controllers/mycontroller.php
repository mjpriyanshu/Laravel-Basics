<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mycontroller extends Controller
{
    //returning a string from controller
    public function index(){
        return "Hello World, welcome to Laravel from Controller!";
    }

    public function show($name){
        return "Hello " . $name . ", welcome to Laravel from Controller!";
    }
    /*To use this controller - Define routes in routes/web.php that map to these methods */
}
