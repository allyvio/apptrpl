@extends('admin.master')
@section('content')

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        @php
        $id_user = \DB::table('bookbidan')->where('id', $id_book)->value('user_id');
        $nama = \DB::table('users')->where('id', $id_user)->value('name');
        @endphp
        <h1 class="h3 mb-0 text-gray-800">Check Up ibu {{$nama}}</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>

    <div class="container">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Tambah hasil
        </button>
        <table class="table table-hover mt-3" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr class="bg-primary text-light">
                    <th scope="col">Id Periksa</th>
                    <th>Tanggal Cek</th>
                    <th scope="col" class="text-center">Keterangan</th>
                    <th scope="col" class="text-center">Hasil Cek</th>
                    <!-- <th scope="col">Handle</th> -->
                </tr>
            </thead>
            <tbody>
                <?php
                $number = 1;
                ?>
                @foreach($data as $cek)
                <tr>
                    <th scope="row">{{$number}}</th>
                    <th scope="row">{{ date('d M Y', $cek->created_at->timestamp) }}</th>
                    <th>{{$cek->keterangan}}</th>
                    <th class="text-center w-50">
                        <img style="width: 20%;" src="{{asset('storage/'.  $cek->foto)}}">
                    </th>



                </tr>
                <?php $number++; ?>
                @endforeach
            </tbody>
        </table>


    </div>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{url('cek/store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="hidden" name="id" value="{{$id_book}}">
                        <textarea name="keterangan" cols="30" rows="10" class="form-control @error('keterangan') is-invalid @enderror" placeholder="Keterangan"></textarea>
                        @error('keterangan') <span class="badge badge-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="input-group mb-3">
                        <input type="file" name="foto" class="form-control @error('keterangan') is-invalid @enderror" placeholder="Email">
                        @error('foto') <span class="badge badge-danger">{{$message}}</span> @enderror
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
            </form>
        </div>
    </div>
</div>
@endsection