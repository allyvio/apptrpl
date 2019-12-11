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
                <img src="{{asset('storage/'.$data->foto)}}" class="card-img-top" alt="...">
            </div>
        </div>
        <form action="{{url('artikel/update')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="col-md-8 justify-content-center">
                <div class="form-group">
                    <label for="name" class="text-dark">Judul</label>
                    <input type="text" class="form-control form-control-user @error('judul') is-invalid @enderror" name="judul" id="name" value="{{$data->judul}}">
                    <input type="hidden" name="id" value="{{$data->id}}">
                    @error('judul') <div class="invalid-feedback">{{$message}}</div> @enderror
                </div>
                <label for="kota" class="text-dark">Isi</label>
                <textarea name="isi" class="form-control form-control-user @error('isi') is-invalid @enderror" isi="isi" id="isi">{{$data->isi}}</textarea>
                @error('isi') <div class="invalid-feedback">{{$message}}</div> @enderror
                <br>
                <div class="form-group">
                    <!-- <label for="name" class="text-dark">Judul</label> -->
                    <input type="file" class="form-control form-control-user @error('foto') is-invalid @enderror" name="foto" value="{{$data->foto}}">
                    <input type="hidden" name="id" value="{{$data->id}}">
                    @error('judul') <div class="invalid-feedback">{{$message}}</div> @enderror
                </div>
                <br>
                <button class="btn btn-primary" type="submit">Ubah</button>
            </div>
        </form>
    </div>
</div>
@endsection