@extends('admin.master')
@section('content')

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Setting</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="card" style="width: 18rem;">
                <img src="{{asset('sb/img/icon.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title text-center">{{$data->name}}</h5>
                    <p class=" card-text">{{$data->email}}</p>
                    <p class="card-text">{{$data->hp}}</p>
                    <p class="card-text">{{$data->kota}}</p>
                </div>
            </div>
        </div>
        <form class="user" action="{{url('user/update')}}" method="post">
            @csrf
            <div class="col-md-8 justify-content-center">
                <div class="form-group">
                    <label for="name" class="text-dark">Nama</label>
                    <input type="text" class="form-control form-control-user @error('name') is-invalid @enderror" name="name" id="name" value="{{$data->name}}">
                    <input type="hidden" name="id" value="{{$data->id}}">
                    @error('name') <div class="invalid-feedback">{{$message}}</div> @enderror
                </div>


                <div class="form-group">
                    <label for="kota" class="text-dark">Kota</label>
                    <input type="text" name="kota" class="form-control form-control-user @error('kota') is-invalid @enderror" kota="kota" id="kota" value="{{$data->kota}}">
                    @error('kota') <div class="invalid-feedback">{{$message}}</div> @enderror
                </div>
                <button class="btn btn-primary" type="submit">Ubah</button>
            </div>
        </form>
    </div>
</div>
@endsection