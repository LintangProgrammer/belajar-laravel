<?php

use App\Http\Controllers\MyController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\Relasicontroller;
use Illuminate\Support\Facades\Route;  
use App\Http\Controllers\BiodataController; 


Route::get('test-model', function () {
    //menampilkan semua data dari model post
    $data = App\Models\Post::all();
    return $data;
});

Route::get('create-data-post', function () {
    //membuat data baru melalui model
    $data = App\Models\Post::create();([
    'title'=>'Belajar PHP',
    'content'=>'lorem ipsum'
]);
return $data;
});

Route::get('show-data', function ($id) {
    //menampilkan semua data dari model post
    $data = App\Models\Post::find($id);
    return $data;
});

Route::get('edit-data/{id}', function ($id) {
    //menampilkan semua data dari model post
    $data = App\Models\Post::find($id);
    $data->title = "membangun Project dengan Laravel";
    $data->save();
    return $data;
});

Route::get('delete-data/{id}', function ($id) {
    //menampilkan semua data dari model post
    $data = App\Models\Post::find($id);
    $data->delete();
    return redirect('test-model');
});

Route::get('search/{cari}', function ($query) {
    //mencari data berdasarkan title yang mirip seperti (like)
    $data = App\Models\Post::where('title','like','%'. $query .'%')->get();
    return $data;   
});

// pemanggilan url menggunakan controller
Route::get('greetings', [MyController::class, 'hello']);
Route::get('student', [MyController::class, 'siswa']);
Route::get('post', [PostController::class, 'index']);

Auth::routes(); 

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// post
Route::get('post', [PostController::class, 'index'])->name('post.index');
// tambah data post
Route::get('post/create', [PostController::class, 'create'])->name('post.create');
Route::post('post', [PostController::class, 'store'])->name('post.store');
// edit data post
Route::get('post/{id}/edit', [PostController::class, 'edit'])->name('post.edit');
Route::put('post/{id}', [PostController::class, 'update'])->name('post.update');

// show data
Route::get('post/{id}', [PostController::class, 'show'])->name('post.show');
// hapus data
Route::delete('post/{id}', [PostController::class, 'destroy'])->name('post.delete');

Route::resource('produk', App\Http\Controllers\ProdukController::class)->middleware('auth');

Route::resource('biodata', BiodataController::class);

Route::get('/one-to-one', [
    Relasicontroller::class,
    'oneToOne'
]);

// routes/web.php
use App\Models\Wali;

Route::get('/wali-ke-mahasiswa', function () {
    $wali = Wali::with('mahasiswa')->first();
    return "{$wali->nama} adalah wali dari {$wali->mahasiswa->nama}";
});

// routes/web.php
Route::get('/one-to-many', [RelasiController::class, 'oneToMany']);

// routes/web.php
Route::get('/many-to-many', [RelasiController::class, 'manyToMany']);

// 
Route::get('eloquent', [RelasiController::class, 'eloquent']);










