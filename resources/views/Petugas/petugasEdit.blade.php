@extends('layouts.form-fragment')
@section('form-fragment')
<div class="container">
    <form action="{{route('edit_petugas')}}" method="post">
     {{csrf_field()}}
     <table class="table">
        <td><input type="text" value="{{$data[0]->id_petugas}}" hidden></td>
        <tr>
            <th>Id petugas: </th>
            <td><input type="text" class="form-control" value="{{$data[0]->id_petugas}}" name="id" readonly></td>
        </tr>
         <tr>
             <th>Kode: </th>
             <td><input type="text" class="form-control" value="{{$data[0]->kode_petugas}}" name="kode"></td>
         </tr>
         <tr>
             <th>Nama: </th>
             <td><input type="text" class="form-control" value="{{$data[0]->nama_petugas}}" name="nama"></td>
         </tr>
         <tr>
             <th>Jabatan: </th>
             <td><input type="text" class="form-control" value="{{$data[0]->jurusan_petugas}}" name="jurusan"></td>
         </tr>
         <tr>
             <th>NO Telp: </th>
             <td><input type="text" class="form-control" value="{{$data[0]->no_telp_petugas}}" name="notelp"></td>
         </tr>
         <tr>
             <th>Alamat: </th>
             <td><input type="text" class="form-control" value="{{$data[0]->alamat_petugas}}" name="alamat"></td>
         </tr>
     </table>
     <input type="submit" name="submit" value="submit" class="btn btn-primary" id="">
     <a href="{{route('petugas')}}" class="btn btn-primary">kembali</a>
 </form>
 </div>
@endsection