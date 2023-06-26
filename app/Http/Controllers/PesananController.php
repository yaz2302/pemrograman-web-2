<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pesanan;
Use App\Models\Produk;
use Illuminate\Support\Facades\DB;

class ProdukController extends Controller
{
    public function index()
    {
        $pesanan = new Pesanan();
        return view('admin.pesanan.pesanan', ['pesanan' =>getAllData()]);
    }

    public function create()
    {
        //tampilkan seluruh data table kategori produk
        $pesanan = Pesanan::all();
        //tampilkan seluruh data table produk
        $produk = Produk::all();
        return view('admin.pesanan.create', compact('pesanan','produk'));
    }
    public function store(Request $request)
    {
        // buat instans class baru dari model yang bernama produk 1
        // ambil data yang diinputkan user dengan menggunakan parameter request 2
        // Lalu masukkan ke dalam kolom table produk 3
        // save data yang sudah di ambil menggunakan parameter request dengan method save() 4 
        // kembalikan ke tampilan view produk setelah mengklik button simpan 5
        $pesanan = new Pesanan(); // 1
        $pesanan->kode = $request->kode;
        $pesanan->nama = $request->nama;
        $pesanan->harga_jual = $request->harga_jual;
        $pesanan->harga_beli = $request->harga_beli;
        $pesanan->stok = $request->stok;
        $pesanan->min_stok = $request->min_stok; // 2
        $pesanan->deskripsi = $request->deskripsi;
        $pesanan->kategori_produk_id = $request->kategori_produk_id; // 3
        $pesanan->save(); // 4
        return redirect('admin/pesanan'); //5
    }
    public function show(string $id)
    {
        //
    }
    public function edit(string $id)
    {
        $pesanan = DB::table('pesanan')->where('id', $id)->get();
        $produk = DB::table('produk')->get();
        return view('admin.pesanan.edit', compact('produk','pesanan'));
    }
    public function update(Request $request, string $id)
    {
        $pesanan = Pesanan::find($request->id);
        $pesanan->kode = $request->tanggal;
        $pesanan->nama = $request->nama_pesanan;
        $pesanan->harga_jual = $request->alamat_pemesanan;
        $pesanan->harga_beli = $request->no_hp;
        $pesanan->stok = $request->email;
        $pesanan->min_stok = $request->jumlah_pesanan;
        $pesanan->deskripsi = $request->deskripsi;
        $pesanan->kategori_produk_id = $request->produk_id;
        $pesanan->save();
        return redirect('admin/pesanan');
    }
    public function destroy(string $id)
    {
        DB::table('pesanan')->where('id',$id)->delete();
        return redirect('admin/pesanan');
    }
}
