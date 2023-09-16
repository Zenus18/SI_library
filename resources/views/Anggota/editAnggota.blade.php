@extends('layouts.form-fragment')
@section('form-fragment')
<div class="container">
    <form action="{{Route("edit")}}" method="post">
     {{csrf_field()}}
     <table class="table">
         <tr>
             <th>Kode: </th>
             <td><input type="text" class="form-control" value="{{$da[0]->kode_anggota}}" name="kode"></td>
         </tr>
         <tr>
             <th>Nama: </th>
             <td><input type="text" class="form-control" value="{{$da[0]->nama_anggota}}" name="nama"></td>
         </tr>
         <tr>
             <th>Jurusan: </th>
             <td><input type="text" class="form-control" value="{{$da[0]->jurusan_anggota}}" name="jurusan"></td>
         </tr>
         <tr>
             <th>NO Telp: </th>
             <td><input type="text" class="form-control" value="{{$da[0]->no_telp_anggota}}" name="notelp"></td>
         </tr>
         <tr>
             <th>Alamat: </th>
             <td><input type="text" class="form-control" value="{{$da[0]->alamat_anggota}}" name="alamat"></td>
         </tr>
     </table>
     <input type="text" value="{{$da[0]->id_anggota}}" name="id" hidden>
     <input type="submit" name="submit" value="submit" class="btn btn-primary" id="">
     <a href="anggota" class="btn btn-primary">kembali</a>
 </form>
 </div>
@endsection