@extends('layouts.form-fragment')
@section('form-fragment')
    <div class="container">
        <form action="{{route('tambah-buku')}}" method="post">
            {{csrf_field()}}
            <table class="table">
                <tr>
                    <th>Kode: </th>
                    <td><input type="text" class="form-control" name="kode"></td>
                </tr>
                <tr>
                    <th>Judul: </th>
                    <td><input type="text" class="form-control" name="judul"></td>
                </tr>
                <tr>
                    <th>Jenis: </th>
                    <td><input type="text" class="form-control" name="jenis"></td>
                </tr>
                <tr>
                    <th>Penulis: </th>
                    <td><input type="text" class="form-control" name="penulis"></td>
                </tr>
                <tr>
                    <th>Penerbit: </th>
                    <td><input type="text" class="form-control" name="penerbit"></td>
                </tr>
                <tr>
                    <th>Tahun Terbit: </th>
                    <td><input type="text" class="form-control" name="tahun"></td>
                </tr>
                <tr>
                    <th>Stok Buku: </th>
                    <td><input type="text" class="form-control" name="stok"></td>
                </tr>
            </table>
            <input type="submit" name="submit" value="submit" class="btn btn-primary" id="">
            <a href="buku" class="btn btn-primary">kembali</a>
        </form>
    </div>
@endsection