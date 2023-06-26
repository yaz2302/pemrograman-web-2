<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    use HasFactory;
    protected $table = 'pesanan';
    public $timestamps = false;
    protected $primarykey = 'id';

    protected $fillable = [
        'tanggal',
        'nama_pesanan',
        'alamat_pesanan',
        'no_hp',
        'email',
        'jumlah_pesanan',
        'deskripsi',
        'produk_id',
    ];
    public function produk(){
        return $this->belongsTo(Produk::class);
    }

    public function getAllData(){
        $alldata = DB::table('produk')
        ->join('produk','pesanan.produk_id','=','produk.id')
        ->select('pesanan.*','produk.nama as nama_produk')
        ->get();
        return $alldata;
    }
}
