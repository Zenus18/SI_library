@extends('layouts.main')
@section('container')
    <div class="container">
        <div class="row">
            <div class="col-4">
                <img src="{{asset('img/reading.jpg')}}" style="width: 95%" alt="gambar-perpus">
            </div>
            <div class="col-8">
                @yield('form-fragment')
            </div>
        </div>
    </div>
@endsection