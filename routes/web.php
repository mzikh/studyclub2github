<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/dashboard', function () {
    return view('index');
});

use App\Models\Kategori;

// use App\Http\Controllers\KategoriController; 
// Route::get('kategori/semua', [KategoriController::class, 'semua']);

/*
Route::get('kategori/tambah', function () {
    Kategori::create([
        'nama_kategori' => "pakaian baru",
        'deskripsi' => "semua jenis pakaian baru"
    ]);
});

Route::get('kategori/update/{id}', function ($id) {
    Kategori::find($id)->update([
        'nama_kategori'=> "pakaian anak",
        'deskripsi' => "semua jenis pakaian anakk"
    ]); 
});

Route::get('kategori/hapus/{id}', function ($id) {
    Kategori::find($id)->delete(); 
});

use App\Models\Mahasiswa;
Route::get('mahasiswa/semua', function () {
    $mahasiswa = Mahasiswa::all();
    foreach ($mahasiswa as $data) {
        echo $data->id.". ".$data->nim.". ".$data->nama.". ".$data->kelas."</br>";
    } 
});
*/
use App\Http\Controllers\KategoriController2;
Route::resource('kategori',KategoriController2::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
