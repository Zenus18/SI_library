@extends("layouts.table-fragment")
@section('table-fragment')
<div class="container">
    <div class="scroll" style='max-height: 500px; overflow: scroll;'>
        <table class="table" style="text-align: center;">
            <tr>
                <th>No</th>
                <th>kode</th>
                <th>nama</th>
                <th>jabatan</th>
                <th>no telp</th>
                <th>alamat</th>
                <th>Action</th>
            </tr>
            @foreach($data as $da)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$da->kode_petugas}}</td>
                    <td>{{$da->nama_petugas}}</td>
                    <td>{{$da->jurusan_petugas}}</td>
                    <td>{{$da->no_telp_petugas}}</td>
                    <td>{{$da->alamat_petugas}}</td>
                    <td><a href="{{route('form-edit')}}?id={{$da->id_petugas}}" class="btn btn-primary"><i class="bi bi-pencil-square"></i></a> <a onclick="return confirm('Yakin dekk?')" href="{{route('hapus-petugas')}}?id={{$da->id_petugas}}" class="btn btn-danger"><i class="bi bi-trash-fill"></a></td>
                </tr>
            @endforeach
        </table>
    </div>
    <a href="{{route('petugas/tambah-form')}}" class="btn btn-primary">tambah</a>
</div>
   
@endsection 