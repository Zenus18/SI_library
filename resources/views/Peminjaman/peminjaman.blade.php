@extends("layouts.table-fragment")
@section('table-fragment')
<div class="container">
    <div class="scroll" style='max-height: 500px; overflow: scroll;'>
        <table class="table" style="text-align: center">
            <tr>
                <th>No</th>
                <th>id peminjaman</th>
                <th>Tanggal Peminjaman</th>
                <th>Judul buku</th>
                <th>Nama Anggota</th>
                <th>Nama Petugas</th>
                <th colspan="3">option</th>
            </tr>
            @foreach($data as $da)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$da->id_peminjaman}}</td>
                    <td>{{$da->tanggal_peminjaman}}</td>
                    <td>{{$da->judul_buku}}</td>
                    <td>{{$da->nama_anggota}}</td>
                    <td>{{$da->nama_petugas}}</td>
                    <td><a href="form-editPeminjaman?id={{$da->id_peminjaman}}" class="btn btn-warning text-light"><i class="bi bi-pencil-square"></i></a> </td>    
                    <td><a onclick="return confirm('Yakin dekk?')" href="hapus-peminjaman?id={{$da->id_peminjaman}}" class="btn btn-danger"><i class="bi bi-trash-fill"></i></a></td>    
                    <td><a href="form-tambah-pengembalian?id={{$da->id_peminjaman}}"  class="btn btn-primary"><i class="bi bi-arrow-up-right-square"></i></a></td>
                </tr>
            @endforeach
        </table>
    </div>
    <a href="form-tambah" class="btn btn-primary">tambah</a>
</div>
@endsection