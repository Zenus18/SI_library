@extends('layouts.form-fragment')
@section('form-fragment')
<div class="container">
    <form action="tambah-pengembalian" method="post">
     {{csrf_field()}}
     <table class="table">
         <tr>
             <th>Id Pengembalian: </th>
             <td><input type="text" class="form-control" name="id_pengembalian" readonly></td>
         </tr>
         <tr>
             <th>Id peminjaman: </th>
             <td><input type="text" class="form-control" value = "{{$peminjaman}}" name="id_peminjaman" readonly></td>
         </tr>
         <tr>
             <th>Tanggal Pinjam </th>
             <td><input type="date" name="tgl_pinjam" value="{{$data[0]->tanggal_peminjaman}}" id="" class="form-control" readonly></td>
         </tr>
         <tr>
            <th>Tanggal Kembali </th>
            <td><input type="date" name="tgl_kembali" id="" class="form-control"></td>
        </tr>
         <tr>
             <th>Petugas: </th>
             <td><select class="form-control" name="id_petugas">
                <option selected disabled>---</option>
                @foreach($petugas as $petugas)
                <option value="{{$petugas->id_petugas}}">{{$petugas->nama_petugas}} | {{$petugas->id_petugas}}</option>
                @endforeach
             </select></td>
         </tr>
     </table>
     <input type="submit" name="submit" value="submit" class="btn btn-primary" id="">
     <a href="/" class="btn btn-primary">kembali</a>
     <script language=javascript src="></script>
 </form>
 </div>
@endsection