<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function display(){
        return view('form');
    }
    public function submit(Request $request){
        $request->validate([
            'file' => 'required|file|mimes:jpg,png,pdf|max:2048',
        ]);

        $file = $request->file('file');
        $file->store('uploads'); // saved in storage/app/uploads directory 
        return response("File uploaded successfully and saved in uploads directory!");
    }
}
