<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class KategoriProduk extends Model
{
    use HasFactory;
    protected $table = 'kategori_produk';
    public $timestamps = false;
    protected $primarykey = 'id';

    protected $fillable = [
        'nama',  
    ];

    public function produk(){
        return $this->hasMany(Produk::class);
    }

    public function getAllData(){
        $alldata = DB::table('kategori_produk')
        ->select('kategori_produk.*')
        ->get();
        return $alldata;
    }
}

