<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Routing\Controller as RoutingController;

class ProdukController extends RoutingController
{
    // GET /api/produk
    public function index()
    {
        $produks = Product::all();

        return response()->json([
            'status' => 'success',
            'message' => 'Data produk berhasil diambil',
            'data' => $produks
        ]);
    }

    // POST /api/produk
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'harga' => 'required|numeric',
            'deskripsi' => 'nullable|string'
        ]);

        $produk = Product::create($validated);

        return response()->json([
            'status' => 'success',
            'message' => 'Data produk berhasil disimpan',
            'data' => $produk
        ]);
    }
}
