<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class anggotaController extends Controller
{
    public function show(){
        $title = "Anggota";
        $data = DB::select("select * from anggota");
        return view('Anggota/anggota', ['data' => $data, 'title'=>$title]);
    }

    public function tambah(Request $req){
        $kode = $req->kode;
        $nama = $req->nama;
        $jurusan = $req->jurusan;
        $notelp = $req->notelp;
        $alamat = $req->alamat;
        DB::insert("insert into anggota values (null,?,?,?,?,?)", [$kode, $nama, $jurusan, $notelp, $alamat]);
        return redirect("anggota");
    }

    public function showEdit(Request $req){
        $id = $req->id;
        $data =  DB::select('select * from anggota where id_anggota = ?', [$id]);
        return view("Anggota/editAnggota", ["da" => $data]);
    }
    public function editAnggota(Request $req){
        $id = $req->id;
        $kode = $req->kode;
        $nama = $req->nama;
        $jurusan = $req->jurusan;
        $notelp = $req->notelp;
        $alamat = $req->alamat;
        DB::update("update anggota set kode_anggota = ?, nama_anggota = ?, jurusan_anggota = ?, no_telp_anggota = ?, alamat_anggota = ? where id_anggota = ?", [$kode, $nama, $jurusan, $notelp, $alamat, $id]);
        return redirect("anggota");
    }
    public function deleteAnggota(Request $req){
        $id = $req->id;
        DB::delete('delete from anggota where id_anggota = ?', [$id]);
        return redirect('anggota');
    }
}
