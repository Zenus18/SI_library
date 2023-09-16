<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class bukuController extends Controller
{
    public function show(){
        $title = "Buku";
        $data  = DB::select('select * from buku');
        return view('Buku/buku', ['data'=> $data, 'title'=> $title]);
    }
    public function insert(Request $req){
        $kode = $req->kode;
        $judul = $req->judul;
        $jenis = $req->jenis;
        $penulis = $req->penulis;
        $penerbit = $req->penerbit;
        $tahun = $req->tahun;
        $stok = $req->stok;
        DB::insert('insert into buku values (null,?,?,?,?,?,?,?)', [$kode, $judul, $jenis,  $penulis, $penerbit, $tahun, $stok]);
        return redirect('buku');
    }
    public function del(Request $req){
        $id = $req->id;
        DB::delete("delete from buku where id_buku = ?", [$id]);
        return redirect("buku");
    }

    public function editForm(Request $req){
        $id = $req->id;
        $data = DB::select("select * from buku where id_buku = ?", [$id]);
        return view("Buku/editBuku", ['data' => $data, "id" => $id]);
    }
    public function edit(Request  $req){
        $id = $req->id;
        $kode = $req->kode;
        $judul = $req->judul;
        $jenis = $req->jenis;
        $penulis = $req->penulis;
        $penerbit = $req->penerbit;
        $tahun = $req->tahun;
        $stok = $req->stok;
        DB::update("update buku set kode_buku=?, judul_buku =?, jenis_buku = ?, penulis_buku = ?, penerbit=?, tahun_terbit=?, stok = ? where id_buku = ?", [$kode, $judul, $jenis, $penulis, $penerbit, $tahun, $stok, $id]);
        return redirect("buku");
    }
}
