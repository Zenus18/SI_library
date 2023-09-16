@extends('layouts.form-fragment')
@section('form-fragment')
<div class="container">
    <form action="{{route("editBuku")}}" method="post">
        {{csrf_field()}}
        <table class="table">
            <tr>
                <th>Kode: </th>
                <td><input type="text" class="form-control" value ="{{$data[0]->kode_buku}}" name="kode"></td>
            </tr>
            <tr>
                <th>Judul: </th>
                <td><input type="text" class="form-control" value ="{{$data[0]->judul_buku}}" name="judul"></td>
            </tr>
            <tr>
                <th>Jenis: </th>
                <td><input type="text" class="form-control" value ="{{$data[0]->jenis_buku}}" name="jenis"></td>
            </tr>
            <tr>
                <th>Penulis: </th>
                <td><input type="text" class="form-control" value ="{{$data[0]->penulis_buku}}" name="penulis"></td>
            </tr>
            <tr>
                <th>Penerbit: </th>
                <td><input type="text" class="form-control" value ="{{$data[0]->penerbit}}" name="penerbit"></td>
            </tr>
            <tr>
                <th>Tahun Terbit: </th>
                <td><input type="text" class="form-control" value ="{{$data[0]->tahun_terbit}}" name="tahun"></td>
            </tr>
            <tr>
                <th>Stok Buku: </th>
                <td><input type="text" class="form-control" value ="{{$data[0]->stok}}" name="stok"></td>
                <input type="text" value="{{$id}}" name="id" id="" hidden>
            </tr>
        </table>
        <input type="submit" name="submit" value="submit" class="btn btn-primary" id="">
        <a href="buku" class="btn btn-primary">kembali</a>
    </form>
</div>
@endsection