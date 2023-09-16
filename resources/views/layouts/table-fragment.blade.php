@extends('layouts.main')
@section('container')
    <div class="container-fluid">
        <div class="row">
            <div class="col-4">
                <img src="{{asset('img/library.jpg')}}" style="width: 95%" alt="gambar-perpus">
            </div>
            <div class="col-8">
                @yield('table-fragment')
            </div>
        </div>
    </div>
@endsection