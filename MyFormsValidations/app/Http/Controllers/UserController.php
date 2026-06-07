<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rules\Uppercase;

/*for closure method */
// use Closure;
// use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function addUser(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'age' => 'required|numeric|min:18|max:50',
            'city' => 'required',
        ]);

        // Code to add user to the database goes here

        return $request->all();
    }

    public function customValidation(Request $request)
    {
        $request->validate([
            'username' => ['required', new Uppercase],
            'email' => 'required|email',
        ]);

        return $request->all();
    }

    /*Closure Method */
    /*
        public function customValidation(Request $request)
        {
            $request->validate([
                'username' => ['required',
                    function($attribute, $value, $fail) {
                        if(strtoupper($value) !== $value) {
                            $fail('The :attribute must be uppercase.');
                        }
                    }
                ],
                'email' => 'required|email',
            ]);

            return $request->all();
        }
    
    */
}
