<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Exception;
use Illuminate\Http\Request;

class ProductApiController extends Controller
{
    public function index()
    {
        try {
            $products = Product::all();
            return response(['message' => 'success', 'data' => $products]);
        } catch (Exception $error) {
            return response(['message' => 'failed', 'data' => null]);
        }
    }

    public function show($id)
    {
        try {
            $products = Product::findOrFail($id);
            return response(['message' => 'success', 'data' => $products]);
        } catch (Exception $error) {
            return response(['message' => 'failed', 'data' => null]);
        }
    }

    public function store(Request $request)
    {
        try {
            $product = Product::create($request->all());
            return response(['message' => 'Berhasil Menambahkan Data', 'data' => $product]);
        } catch (Exception $error) {
            return response(['message' => 'failed', 'data' => null]);
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $product = Product::findOrFail($id);
            $product->update($request->all());
            return response(['message' => 'Berhasil Mengubah Data', 'data' => $product]);
        } catch (Exception $error) {
            return response(['message' => 'failed', 'data' => null]);
        }
    }

    public function destroy($id)
    {
        try {
            $products = Product::findOrFail($id);
            $products->delete();
            return response(['message' => 'Berhasil Menghapus Data']);
        } catch (Exception $error) {
            return response(['message' => 'failed', 'data' => null]);
        }
    }
}
