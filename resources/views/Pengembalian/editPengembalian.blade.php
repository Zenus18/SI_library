@extends('layouts.form-fragment')
@section('form-fragment')
<div class="container">
    <form action="edit-pengembalian" method="post">
        {{csrf_field()}}
        <table class="table">
            <tr>
                <th>Id Pengembalian: </th>
                <td><input type="text" class="form-control" value = "{{$data[0]->id_penggembalian}}" name="id_pengembalian" readonly></td>
            </tr>
            <tr>
                <th>Id peminjaman: </th>
                <td><select class="form-control" name="id_peminjaman" @readonly(true)>
                   <option selected value="{{$data[0]->id_peminjaman}}">{{$data[0]->id_peminjaman}}</option>
                   @foreach($peminjaman as $peminjaman)
                   <option value="{{$peminjaman->id_peminjaman}}">{{$peminjaman->id_peminjaman}}</option>
                   @endforeach
                </select></td>
            </tr>
            <tr>
                <th>Tanggal Pinjam</th>
                <td><input type="date" name="tgl_pinjam" value="{{$data[0]->tanggal_pinjam}}" id="" class="form-control" readonly></td>
            </tr>
            <tr>
                <th>Tanggal Kembali </th>
                <td><input type="date" name="tgl_kembali" value="{{$data[0]->tanggal_kembali}}" id="" class="form-control"></td>
            </tr>
            <tr>
                <th>Petugas: </th>
                <td><select class="form-control" name="id_petugas">
                   <option selected value="{{$data[0]->id_petugas}}">{{$data[0]->nama_petugas}} | {{$data[0]->id_petugas}}</option>
                   @foreach($petugas as $petugas)
                   <option value="{{$petugas->id_petugas}}">{{$petugas->nama_petugas}} | {{$petugas->id_petugas}}</option>
                   @endforeach
                </select></td>
            </tr>
        </table>
        <input type="submit" name="submit" value="submit" class="btn btn-primary" id="">
        <a href="pengembalian" class="btn btn-primary">kembali</a>
    </form>
</div>
@endsection 