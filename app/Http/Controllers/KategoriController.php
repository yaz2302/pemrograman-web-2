<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KategoriProduk;
use Illuminate\Support\Facades\DB;

class KategoriController extends Controller
{
    public function index()
    {
        $kategori_produk = new KategoriProduk();
        return view('admin.kategori.kategori', ['kategori_produk' =>getAllData()]);
    }

    public function create()
    {
        //tampilkan seluruh data table kategori produk
        $kategori_produk = KategoriProduk::all();
        return view('admin.kategori.create', compact('kategori_produk'));
    }

    public function store(Request $request)
    {
        // buat instans class baru dari model yang bernama produk 1
        // ambil data yang diinputkan user dengan menggunakan parameter request 2
        // Lalu masukkan ke dalam kolom table produk 3
        // save data yang sudah di ambil menggunakan parameter request dengan method save() 4 
        // kembalikan ke tampilan view produk setelah mengklik button simpan 5
        $kategori_produk = new KategoriProduk(); // 1
        $kategori_produk->kode = $request->kode;
        $kategori_produk->nama = $request->nama;
        $kategori_produk->harga_jual = $request->harga_jual;
        $kategori_produk->harga_beli = $request->harga_beli;
        $kategori_produk->stok = $request->stok;
        $kategori_produk->min_stok = $request->min_stok; // 2
        $kategori_produk->deskripsi = $request->deskripsi;
        $kategori_produk->kategori_produk_id = $request->kategori_produk_id; // 3
        $kategori_produk->save(); // 4
        return redirect('admin/kategori'); //5
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $kategori_produk = DB::table('kategori_produk')->where('id', $id)->get();
        return view('admin.kategori.edit', compact('kategori_produk'));
    }

    public function update(Request $request, string $id)
    {
        $kategori_produk = KategoriProduk::find($request->id);
        $kategori_produk->kode = $request->kode;
        $kategori_produk->nama = $request->nama;
        $kategori_produk->harga_jual = $request->harga_jual;
        $kategori_produk->harga_beli = $request->harga_beli;
        $kategori_produk->stok = $request->stok;
        $kategori_produk->min_stok = $request->min_stok;
        $kategori_produk->deskripsi = $request->deskripsi;
        $kategori_produk->kategori_produk_id = $request->kategori_produk_id;
        $kategori_produk->save();
        return redirect('admin/kategori');
    }

    public function destroy(string $id)
    {
        DB::table('kategori_produk')->where('id',$id)->delete();
        return redirect('admin/kategori');
    }
}
