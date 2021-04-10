<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $mknn = Product::where('kategori', 'Makanan')->get();
        $mnmn = Product::where('kategori', 'Minuman')->get();
        return view('welcome', compact('products', 'mknn', 'mnmn'));
    }

    public function coba()
    {
        return view('coba');
    }
}
