@extends("layouts.table-fragment")
@section('table-fragment')
<div class="container">
    <div class="scroll" style='max-height: 500px; overflow: scroll;'>
        <table class="table" style="text-align: center;">
            <tr >
                <th>No</th>
                <th>kode</th>
                <th>Judul</th>
                <th>Jenis</th>
                <th>Penulis</th>
                <th>Penerbit</th>
                <th>Tahun Terbit</th>
                <th>Stok</th>
                <th colspan="2">Option</th>
            </tr>
            @foreach($data as $da)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$da->kode_buku}}</td>
                    <td>{{$da->judul_buku}}</td>
                    <td>{{$da->jenis_buku}}</td>
                    <td>{{$da->penulis_buku}}</td>
                    <td>{{$da->penerbit}}</td>
                    <td>{{$da->tahun_terbit}}</td>
                    <td>{{$da->stok}}</td> 
                    <td><a href="editBuku-form?id={{$da->id_buku}}" class="btn btn-primary"><i class="bi bi-pencil-square"></i></a></td>
                    <td><a onclick="return confirm('Yakin dekk?')" href="hapus-buku?id={{$da->id_buku}}" class="btn btn-danger"><i class="bi bi-trash-fill"></a></td>
                </tr>
            @endforeach
        </table>
    </div>
    <a href="form-tambahBuku" class="btn btn-primary">tambah</a>
</div>
@endsection