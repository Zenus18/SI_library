@extends('layouts.form-fragment')
@section('form-fragment')
<div class="container">
    <form action="{{route("editPeminjaman")}}" method="post">
     {{csrf_field()}}
     <table class="table">
         <tr>
             <th>Tanggal: </th>
             <td><input type="date" class="form-control" value="{{$dataPinjam[0]->tanggal_peminjaman}}" name="tanggal"></td>
         </tr>
         <tr>
             <th>Buku: </th>
             <td><select class="form-control" name="idbuku">
                <option selected value="{{$dataPinjam[0]->id_buku}}">{{$dataPinjam[0]->judul_buku}}</option>
                <option disabled>---</option>
                @foreach($buku as $da)
                <option value="{{$da->id_buku}}">{{$da->judul_buku}}</option>
                @endforeach
             </select></td>
         </tr>
         <tr>
             <th>Anggota: </th>
             <td><select class="form-control" name="idanggota">
                <option selected value="{{$dataPinjam[0]->id_anggota}}">{{$dataPinjam[0]->nama_anggota}}</option>
                <option disabled>---</option>
                @foreach($anggota as $da)
                <option value="{{$da->id_anggota}}">{{$da->nama_anggota}}</option>
                @endforeach
             </select></td>
         </tr>
         <tr>
             <th>Petugas: </th>
             <td><select class="form-control" name="idpetugas">
                <option selected value="{{$dataPinjam[0]->id_petugas}}">{{$dataPinjam[0]->nama_petugas}}</option>
                <option disabled>---</option>
                @foreach($petugas as $da)
                <option value="{{$da->id_petugas}}">{{$da->nama_petugas}}</option>
                @endforeach
             </select></td>
         </tr>
         <input type="text" value="{{$dataPinjam[0]->id_peminjaman}}" name="id_peminjaman" id="" hidden>
     </table>
     <input type="submit" name="submit" value="submit" class="btn btn-primary" id="" >
     <a href="/" class="btn btn-primary">kembali</a>
 </form>
 </div>
@endsection