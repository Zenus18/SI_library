<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class pengembalianController extends Controller
{
    public function show(){
        $data =  DB::select('select * from pengembalian inner join petugas on pengembalian.id_petugas = petugas.id_petugas order by id_penggembalian ASC');
        return view('Pengembalian.pengembalian', ['data' => $data]);    
    }
    public function form_tambah(Request $req){
        $petugas = DB::select('select * from Petugas');
        $peminjaman = $req->id;
        $data =  DB::select('select tanggal_peminjaman from peminjaman where id_peminjaman = ?', [$peminjaman]);
        return view("Pengembalian/tambahPengembalian", compact('peminjaman','petugas', 'data'));
    }
    public function tambah(Request $req){
        $id_peminjaman = $req->id_peminjaman;
        $tgl_kembali = $req->tgl_kembali;
        $id_petugas = $req->id_petugas;
        // penghitungan denda
        $tanggal_peminjaman = DB::select('select tanggal_peminjaman from peminjaman  where id_peminjaman = ?', [$id_peminjaman]);
        $tgl_pinjam = $tanggal_peminjaman[0]->tanggal_peminjaman;
        $diff  = date_diff( date_create($tgl_pinjam), date_create($tgl_kembali) );
        $jarak = $diff->d;
        $rentang = 5;
        $denda = 0;
        if($jarak >= $rentang ){
            $denda = ($jarak - $rentang) * 2000;
        }
        // penghitungan stok
        $id = DB::select("SELECT id_buku from peminjaman where id_peminjaman = ?",  [$id_peminjaman]);
        $id_buku = $id[0]->id_buku;
        $stok_sebelum = DB::select('select stok from buku where id_buku = ?', [$id_buku]);
        $stok = $stok_sebelum[0]->stok;
        $stok_sesudah = $stok + 1;
        DB::update('update buku set stok = ? where id_buku = ?', [$stok_sesudah, $id_buku]);
        DB::delete('delete from peminjaman where id_peminjaman = ?', [$id_peminjaman]);
        DB::insert('insert into pengembalian values(null, ?, ?, ?, ?, ?)', [$id_peminjaman, $tgl_kembali,  $tgl_pinjam, $id_petugas, $denda ]);
        return redirect('pengembalian');
    }
    public function del(Request $req){
        $id = $req->id;
        DB::delete("delete from pengembalian where id_penggembalian = ?", [$id]);
        return redirect("pengembalian");
    }
    
    public function form_edit(Request $req){
        $id = $req->id;
        $petugas = DB::select('select * from Petugas');
        $peminjaman = DB::select('select * from peminjaman');
        $data = DB::select('select * from pengembalian inner join petugas on pengembalian.id_petugas = petugas.id_petugas where id_penggembalian = ?', [$id]);
        return view("Pengembalian/editPengembalian", compact('data','peminjaman','petugas'));
    }
    public function editPengembalian(Request $req){
        $id_pengembalian = $req->id_pengembalian;
        $id_peminjaman = $req->id_peminjaman;
        $tgl_kembali = $req->tgl_kembali;
        $id_petugas = $req->id_petugas;
        $tgl_pinjam = $req->tgl_pinjam;
        $diff  = date_diff( date_create($tgl_pinjam), date_create($tgl_kembali) );
        $jarak = $diff->d;
        $rentang = 5;
        $denda = 0;
        if($jarak >= $rentang ){
            $denda = ($jarak - $rentang) * 2000;
        }
        DB::update('update pengembalian set id_peminjaman = ?, tanggal_kembali = ?, id_petugas =?, denda = ? where id_penggembalian = ?', [$id_peminjaman, $tgl_kembali, $id_petugas, $denda, $id_pengembalian ]);
        return redirect('pengembalian');
    }
}
