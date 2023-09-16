@extends("layouts.table-fragment")
@section('table-fragment')
<div class="container">
    <div class="scroll" style='max-height: 500px; overflow: scroll;'>
        <table class="table" style="text-align: center">
            <tr>
                <th>No</th>
                <th>Id pengembalian</th>
                <th>Id Peminjaman</th>
                <th>Tanggal Pinjam</th>
                <th>Tanggal Kembali</th>
                <th>Nama petugas</th>
                <th>Denda</th>
                <th>option</th>
            </tr>
            @foreach($data as $da)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$da->id_penggembalian}}</td>
                    <td>{{$da->id_peminjaman}}</td>
                    <td>{{$da->tanggal_pinjam}}</td>
                    <td>{{$da->tanggal_kembali}}</td>
                    <td>{{$da->nama_petugas}}</td>
                    <td>{{$da->denda}}</td>
                    <td><a href="edit-formPengembalian?id={{$da->id_penggembalian}}" class="btn btn-primary mt-1"><i class="bi bi-pencil-square"></i></a> <a onclick="return confirm('Yakin dekk?')" href="hapus-pengembalian?id={{$da->id_penggembalian}}" class="btn btn-danger mt-1"><i class="bi bi-trash-fill"></a></td>
                </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection