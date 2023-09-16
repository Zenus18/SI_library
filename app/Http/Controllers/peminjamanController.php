<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class peminjamanController extends Controller
{
    public function show(){
        $data = DB::select('select * from peminjaman  INNER JOIN buku on peminjaman.id_buku = buku.id_buku INNER JOIN anggota on peminjaman.id_anggota = anggota.id_anggota INNER JOIN petugas  on peminjaman.id_petugas = petugas.id_petugas');
        return view("Peminjaman/peminjaman", ["data"=>$data]);
    }
    public function del(Request $req){
        $id = $req->id;
        DB::delete("delete from peminjaman where id_peminjaman = ?", [$id]);
        return redirect("/");
    }
    public function formTambah(){
        $buku = DB::select('select * from buku');
        $anggota = DB::select('select * from Anggota');
        $petugas = DB::select('select * from Petugas');
        return view("Peminjaman/tambahPeminjaman", compact('buku','anggota','petugas'));
    }
    public function tambah(Request $req){
        $tanggal = $req->tanggal;
        $id_buku = $req->idbuku;
        $id_anggota = $req->idanggota;
        $id_petugas = $req->idpetugas;
        $stok_sebelum = DB::select('select * from buku where id_buku = ?', [$id_buku]);
        $stok = $stok_sebelum[0]->stok;
        $stok_sesudah = $stok - 1;
        DB::update('update buku set stok = ? where id_buku = ?', [$stok_sesudah, $id_buku]);
        DB::insert("insert into peminjaman values(null, ?,?,?,?)", [$tanggal, $id_buku,  $id_anggota, $id_petugas]);
        return redirect('/');
    }

    public function formEdit(Request $req){
        $id = $req->id;
        $buku = DB::select('select * from buku');
        $anggota = DB::select('select * from Anggota');
        $petugas = DB::select('select * from Petugas');
        $dataPinjam = DB::select('select * from peminjaman  left  join buku on peminjaman.id_buku = buku.id_buku left  join anggota on peminjaman.id_anggota = anggota.id_anggota left  join petugas  on peminjaman.id_petugas = petugas.id_petugas where id_peminjaman = ?', [$id]);
        return view("Peminjaman/editPeminjaman", compact('buku','anggota','petugas', 'dataPinjam'));
    }
    public function Edit(Request $req){
        $id = $req->id_peminjaman;
        $tanggal = $req->tanggal;
        $id_buku = $req->idbuku;
        $id_anggota = $req->idanggota;
        $id_petugas = $req->idpetugas;
        DB::update("update peminjaman set tanggal_peminjaman = ?, id_buku = ?, id_anggota = ?, id_petugas = ? where id_peminjaman = ?", [$tanggal, $id_buku, $id_anggota, $id_petugas, $id]);
        return redirect("/");
    }
}
