<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('products.index', ['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     * Data dibuar disini dari form
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     * Lalu ini untuk menyimpan ke storage dari form
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /* Cara pertama untuk memasukkan data dari form tambah kedalam database */
        // $product = new Product;
        // $product->nama = $request->nama;
        // $product->nomor = $request->nomor;
        // $product->designer = $request->designer;
        // $product->harga = $request->harga;
        // $product->save();

        /* Cara kedua untuk memasukkan data dari form tambah kedalam database, tapi harus menggunakan fillable terlebih dahulu di modelnya */
        // Product::create([
        //     'nama' => $request->nama,
        //     'nomor' => $request->nomor,
        //     'designer' => $request->designer,
        //     'harga' => $request->harga
        // ]);

        /* Untuk validasi form */
        $request->validate([
            'nama'  => 'required',
            'nomor' => 'required|min:9',
            'designer' => 'required',
            'harga' => 'required'
        ]);

        /* atau kalo udah make fungsi fillable bisa diubah supaya lebih praktis */
        Product::create($request->all());
        return redirect('/products')->with('status', 'Data berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('products.show', ['product' => $product]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('products.edit', ['product' => $product]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        Product::where('id', $product->id)
            ->update([
                'nama' => $request->nama,
                'nomor' => $request->nomor,
                'designer' => $request->designer,
                'harga' => $request->harga
            ]);

        return redirect('/products')->with('status', 'Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        Product::destroy($product->id);
        return redirect('/products')->with('status', 'Data berhasil dihapus!');
    }
}
