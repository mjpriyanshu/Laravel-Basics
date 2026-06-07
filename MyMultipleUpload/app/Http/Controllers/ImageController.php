<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;

class ImageController extends Controller
{
    // Display the upload form
    public function index()
    {
        $images = Image::latest()->get();
        return view('upload', compact('images'));
    }

    // Handle the file upload
    public function store(Request $request)
    {
        // Validate that files are uploaded and are images
        $request->validate([
            'images' => 'required',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $file) {
                // Save the file to storage/app/public/uploads
                $path = $file->store('uploads', 'public');

                // Save the path to the SQLite database
                Image::create([
                    'path' => $path
                ]);
            }
        }

        return back()->with('success', 'Images uploaded successfully!');
    }
}
