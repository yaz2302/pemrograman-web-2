<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KategoriProduk;
Use App\Models\Produk;
use Illuminate\Support\Facades\DB;

class ProdukController extends Controller
{
    public function index()
    {
        $produk = new Produk();
        return view('admin.produk.produk', ['produk' =>getAllData()]);
    }

    public function create()
    {
        //tampilkan seluruh data table kategori produk
        $kategori_produk = KategoriProduk::all();
        //tampilkan seluruh data table produk
        $produk = Produk::all();
        return view('admin.produk.create', compact('kategori_produk','produk'));
    }
    public function store(Request $request)
    {
        // buat instans class baru dari model yang bernama produk 1
        // ambil data yang diinputkan user dengan menggunakan parameter request 2
        // Lalu masukkan ke dalam kolom table produk 3
        // save data yang sudah di ambil menggunakan parameter request dengan method save() 4 
        // kembalikan ke tampilan view produk setelah mengklik button simpan 5
        $produk = new Produk(); // 1
        $produk->kode = $request->kode;
        $produk->nama = $request->nama;
        $produk->harga_jual = $request->harga_jual;
        $produk->harga_beli = $request->harga_beli;
        $produk->stok = $request->stok;
        $produk->min_stok = $request->min_stok; // 2
        $produk->deskripsi = $request->deskripsi;
        $produk->kategori_produk_id = $request->kategori_produk_id; // 3
        $produk->save(); // 4
        return redirect('admin/produk'); //5
    }
    public function show(string $id)
    {
        //
    }
    public function edit(string $id)
    {
        $kategori_produk = DB::table('kategori_produk') ->get();
        $produk = DB::table('produk')->where('id', $id) ->get();
        return view('admin.produk.edit', compact('produk','kategori_produk'));
    }
    public function update(Request $request, string $id)
    {
        $produk = Produk::find($request->id);
        $produk->kode = $request->kode;
        $produk->nama = $request->nama;
        $produk->harga_jual = $request->harga_jual;
        $produk->harga_beli = $request->harga_beli;
        $produk->stok = $request->stok;
        $produk->min_stok = $request->min_stok;
        $produk->deskripsi = $request->deskripsi;
        $produk->kategori_produk_id = $request->kategori_produk_id;
        $produk->save();
        return redirect('admin/produk');
    }
    public function destroy(string $id)
    {
        DB::table('produk')->where('id',$id)->delete();
        return redirect('admin/produk');
    }
}
