@extends('layouts.form-fragment')
@section('form-fragment')
<div class="container">
    <form action="{{route("tambah-peminjaman")}}" method="post">
     {{csrf_field()}}
     <table class="table">
         <tr>
             <th>Tanggal: </th>
             <td><input type="date" class="form-control" name="tanggal"></td>
         </tr>
         <tr>
             <th>Buku: </th>
             <td><select class="form-control" name="idbuku">
                <option selected disabled>---</option>
                @foreach($buku as $da)
                <option value="{{$da->id_buku}}">{{$da->judul_buku}} | {{$da->id_buku}}</option>
                @endforeach
             </select></td>
         </tr>
         <tr>
             <th>Anggota: </th>
             <td><select class="form-control" name="idanggota">
                <option selected disabled>---</option>
                @foreach($anggota as $da)
                <option value="{{$da->id_anggota}}">{{$da->nama_anggota}} | {{$da->id_anggota}}</option>
                @endforeach
             </select></td>
         </tr>
         <tr>
             <th>Petugas: </th>
             <td><select class="form-control" name="idpetugas">
                <option selected disabled>---</option>
                @foreach($petugas as $da)
                <option value="{{$da->id_petugas}}">{{$da->nama_petugas}} | {{$da->id_petugas}}</option>
                @endforeach
             </select></td>
         </tr>
     </table>
     <input type="submit" name="submit" value="submit" class="btn btn-primary" id="">
     <a href="/" class="btn btn-primary">kembali</a>
 </form>
 </div>
@endsection