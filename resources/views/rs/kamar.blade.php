@extends('admin.master')
@section('content')

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Menu kamar {{Auth::user()->name}}</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>
    <div class="container">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Tambah hasil
        </button>
        <div class="row mb-3">
            <table class="table table-hover mt-3" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr class="bg-primary text-light">
                        <th scope="col">No</th>
                        <th>Nama Kamar</th>
                        <th scope="col">Kelas</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Penanggung Jawab</th>
                        <th scope="col">Status</th>
                        <th scope="col">Aksi</th>
                        <!-- <th scope="col">Handle</th> -->
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $number = 1;
                    ?>
                    @foreach($data as $kamar)
                    <tr>
                        <th scope="row">{{$number}}</th>
                        <th scope="row">{{$kamar->nama_kamar}}</th>
                        <th scope="row">{{$kamar->kelas_kamar}}</th>
                        <th scope="row">Rp {{number_format($kamar->price,00)}}</th>
                        <th scope="row">{{$kamar->nama_lengkap}}</th>
                        <th scope="row">{{$kamar->status}}</th>
                        <th>
                            <a href="{{url('foto/hapus/')}}">
                                <button class="btn btn-outline-primary">Hapus</button>
                            </a>
                        </th>




                    </tr>
                    <?php $number++; ?>
                    @endforeach
                </tbody>
            </table>
        </div>
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
                <form action="{{url('kamar/store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="input-group mb-3">
                        @php
                        $rumahsakit_id = \DB::table('rumahsakit')->where('user_id', $_id)->value('id');
                        @endphp
                        <input type="hidden" name="id" value="{{$rumahsakit_id}}">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" name="nama_kamar" placeholder="Nama kamar">
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" name="kelas" placeholder="Kelas Kamar">
                        </div>
                        <div class="input-group mb-3">
                            <input type="number" class="form-control" name="price" placeholder="Harga kamar / malam">
                        </div>
                        <textarea name="keterangan" cols="30" rows="10" class="form-control @error('keterangan') is-invalid @enderror mb-3" placeholder="Keterangan Kamar"></textarea>
                        @error('keterangan') <span class="badge badge-danger">{{$message}}</span> @enderror

                        <div class="input-group mb-3">
                            <input type="text" class="form-control" name="dokter" placeholder="Nama Dokter">
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" name="spesialis" placeholder="spesialis">
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" name="title" placeholder="Tittle akademis">
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" name="lama" placeholder="Lama pengalaman">
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" name="e-dok" placeholder="Email Dokter">
                        </div>
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