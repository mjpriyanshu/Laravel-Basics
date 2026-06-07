<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index()
    {
        $products = [
            ['name' => 'Laptop', 'price' => 50000],
            ['name' => 'Mobile', 'price' => 20000],
            ['name' => 'Tablet', 'price' => 15000],
        ];

        return view('q10products', compact('products'));
    }
}
