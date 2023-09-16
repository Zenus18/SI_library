<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class petugasController extends Controller
{
    public function show(){
        $title = "Petugas";
        $data = DB::select("select * from petugas");
        return view('Petugas/petugas', ['data' => $data,'title'=>$title]);
    }

    public function tambah(Request $req){
        $kode = $req->kode;
        $nama = $req->nama;
        $jurusan = $req->jurusan;
        $notelp = $req->notelp;
        $alamat = $req->alamat;
        DB::insert("insert into petugas values (null,?,?,?,?,?)", [$kode, $nama, $jurusan, $notelp, $alamat]);
        return redirect("petugas");
    }
    public function getedit(Request $req){
        $id = $req->id;
        $data = DB::select("select  *  from petugas where id_petugas = ?", [$id]);
        return view("Petugas/petugasEdit", ["data" => $data]);
    }
    public function edit(Request $req){
        $id = $req->id;
        $kode = $req->kode;
        $nama = $req->nama;
        $jurusan = $req->jurusan;
        $notelp = $req->notelp;
        $alamat = $req->alamat;
        DB::update('update petugas set kode_petugas = ?, nama_petugas = ?, jurusan_petugas = ?, no_telp_petugas =  ?, alamat_petugas = ? where id_petugas = ?', [ 
        $kode,
        $nama,
        $jurusan,
        $notelp,
        $alamat,
        $id]);
        return redirect('petugas');
    }
    public function del(Request $req){
        $id = $req->id;
        DB::delete("delete from petugas where id_petugas = ?", [$id]);
        return redirect("petugas");
    }
}
