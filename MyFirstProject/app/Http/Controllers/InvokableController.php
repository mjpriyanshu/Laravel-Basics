<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InvokableController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        //
    }
}


/*Methods for invokable controllers -
 1. invoke() method, we can write the logic to handle the incoming request and return a response.


*/