<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\anggotaController;
use App\Http\Controllers\petugasController;
use App\Http\Controllers\bukuController;
use App\Http\Controllers\peminjamanController;
use App\Http\Controllers\pengembalianController;
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

// Anggota
Route::get("anggota", [anggotaController::class, "show"])->name('anggota');


Route::get("tambah_form", function(){
    return view('Anggota/tambahAnggota');
})->name('tambah_formAnggota');
Route::post("tambah/", [anggotaController::class, "tambah"])->name('tambah');

Route::get('Edit_form', [anggotaController::class, "showEdit"])->name('edit_formAnggota');
Route::post('edit', [anggotaController::class, "editAnggota"])->name('edit');

Route::get('delete', [anggotaController::class, "deleteAnggota"])->name('deleteAnggota');

// petugas
$petugas = petugasController::class;
Route::get('petugas', [$petugas, "show"])->name('petugas');
Route::get('petugas/tambah-form', function (){
    return view('Petugas/tambahPetugas');
})->name('petugas/tambah-form');
Route::post('petugas/tambah', [$petugas, "tambah"])->name('petugas/tambah');
Route::get('petugas/form-edit', [$petugas, "getedit"])->name('form-edit');
Route::post('petugas/edit', [$petugas, "edit"])->name('edit_petugas');
Route::get('hapus-petugas', [$petugas, "del"])->name('hapus-petugas');

// buku
$buku = bukuController::class;
Route::get('buku', [$buku, "show"]);
Route::get('form-tambahBuku', function(){
    return view('Buku/tambahBuku');
});
Route::post('tambah-buku', [$buku, "insert"])->name('tambah-buku');
Route::get('hapus-buku', [$buku, "del"]);
Route::get("editBuku-form", [$buku, "editForm"]);
Route::post("editBuku", [$buku, "edit"])->name("editBuku");

// peminjaman

$peminjaman = peminjamanController::class;
Route::get("/", [$peminjaman, "show"]);
Route::get('hapus-peminjaman', [$peminjaman, "del"]);
Route::get('form-tambah', [$peminjaman, "formTambah"]);
Route::post('tambah-peminjaman', [$peminjaman, "tambah"])->name("tambah-peminjaman");
Route::get('form-editPeminjaman', [$peminjaman, "formEdit"]);
Route::post("edit-peminjaman", [$peminjaman, "Edit"])->name("editPeminjaman");

// pengembalian
$pengembalian = pengembalianController::class;
Route::get('pengembalian', [$pengembalian, "show"]);
Route::get('form-tambah-pengembalian', [$pengembalian, 'form_tambah']);
Route::post('tambah-pengembalian', [$pengembalian, 'tambah']);
Route::get('hapus-pengembalian', [$pengembalian, 'del']);
Route::get('edit-formPengembalian', [$pengembalian, 'form_edit']);
Route::post('edit-pengembalian', [$pengembalian, 'editPengembalian']);