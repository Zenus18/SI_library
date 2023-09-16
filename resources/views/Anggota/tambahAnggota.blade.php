@extends('layouts.form-fragment')
@section('form-fragment')
    <div class="container">
       <form action="{{route('tambah')}}" method="post">
        {{csrf_field()}}
        <table class="table">
            <tr>
                <th>Kode: </th>
                <td><input type="text" class="form-control" name="kode"></td>
            </tr>
            <tr>
                <th>Nama: </th>
                <td><input type="text" class="form-control" name="nama"></td>
            </tr>
            <tr>
                <th>Jurusan: </th>
                <td><input type="text" class="form-control" name="jurusan"></td>
            </tr>
            <tr>
                <th>NO Telp: </th>
                <td><input type="text" class="form-control" name="notelp"></td>
            </tr>
            <tr>
                <th>Alamat: </th>
                <td><input type="text" class="form-control" name="alamat"></td>
            </tr>
        </table>
        <input type="submit" name="submit" value="submit" class="btn btn-primary" id="">
        <a href="anggota" class="btn btn-primary">kembali</a>
    </form>
    </div>
@endsection