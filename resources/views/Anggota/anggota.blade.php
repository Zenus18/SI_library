@extends("layouts.table-fragment")
@section('table-fragment')
        <div class="scroll" style='max-height: 500px; overflow: scroll;'>
            <table class="table" style="text-align: center;">
                <tr>
                    <th>No</th>
                    <th>kode</th>
                    <th>nama</th>
                    <th>jurusan</th>
                    <th>no telp</th>
                    <th>alamat</th>
                    <th>Action</th>
                </tr>
                @foreach($data as $da)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$da->kode_anggota}}</td>
                        <td>{{$da->nama_anggota}}</td>
                        <td>{{$da->jurusan_anggota}}</td>
                        <td>{{$da->no_telp_anggota}}</td>
                        <td>{{$da->alamat_anggota}}</td>
                        <td><a href="{{route('edit_formAnggota')}}?id={{$da->id_anggota}}" class="btn btn-primary"><i class="bi bi-pencil-square"></i></a> <a onclick="return confirm('Yakin dekk?')" href="{{route('deleteAnggota')}}?id={{$da->id_anggota}}" class="btn btn-danger"><i class="bi bi-trash-fill"></a></td>
                    </tr>
                @endforeach
            </table>
        </div>
        <a href="{{Route('tambah_formAnggota')}}" class="btn btn-primary">tambah</a>
@endsection