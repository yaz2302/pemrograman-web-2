<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Auth;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/salam', function () {
    return view('salam', [
        "nama"=>"Yazid Nabil Mubarok",
        "umur"=>18        
    ]);
});

Route::get('/nilai', function (){
    return view('nilai');
});

Route::get('/form',[FormController::class, 'index']);
Route::post('/hasil',[FormController::class, 'hasil']);

//admin
Route::group(['middleware' => ['auth', 'peran:admin-manager']], function(){
    Route::prefix('admin')->group(function(){
        Route::get('/dashboard',[DashboardController::class, 'index']);
        Route::get('/logout', [DashboardController::class, 'logout']);

        Route::get('/produk',[ProdukController::class, 'index']);
        Route::get('/produk/create',[ProdukController::class, 'create']);
        Route::post('/produk/store',[ProdukController::class, 'store']);
        Route::get('/produk/edit/{id}',[ProdukController::class, 'edit']);
        Route::post('/produk/update/{id}',[ProdukController::class, 'update']);
        Route::get('/produk/delete/{id}', [ProdukController::class, 'destroy']);

        Route::get('/kategori',[KategoriController::class, 'index']);
        Route::get('/kategori/create',[KategoriController::class, 'create']);
        Route::post('/kategori/store',[KategoriController::class, 'store']);
        Route::get('/kategori/edit/{id}',[KategoriController::class, 'edit']);
        Route::post('/kategori/update/{id}',[KategoriController::class, 'update']);
        Route::get('/kategori/delete/{id}', [KategoriController::class, 'destroy']);

        Route::get('/pesanan',[PesananController::class, 'index']);
        Route::get('/pesanan/create',[PesananController::class, 'create']);
        Route::post('/pesanan/store',[PesananController::class, 'store']);
        Route::get('/pesanan/edit/{id}',[PesananController::class, 'edit']);
        Route::post('/pesanan/update/{id}',[PesananController::class, 'update']);
        Route::get('/pesanan/delete/{id}', [PesananController::class, 'destroy']);
    });
});

Route::prefix('frontend')->group(function(){
    Route::get('/dashboard',[FrontendController::class, 'index']);
    Route::get('/about',[FrontendController::class, 'about']);
    
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
