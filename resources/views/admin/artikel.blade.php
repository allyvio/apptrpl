@extends('admin.master')
@section('content')

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Artikel</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>

    <div class="container">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Add Artikel
        </button>
        <table class="table table-hover mt-3" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr class="bg-primary text-light">
                    <th scope="col">No</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Aksi</th>
                    <!-- <th scope="col">Handle</th> -->
                </tr>
            </thead>
            <tbody>
                <?php
                $number = 1;
                ?>
                @php
                $pivot = DB::table('artikel')->whereNotNull('isi')->get();
                @endphp

                @foreach($pivot as $artc)
                <tr>
                    <th scope="row">{{$number}}</th>
                    <th scope="row">{{$artc->judul}}</th>
                    <th scope="row">{{$artc->created_at}}</th>
                    <th>
                        <!-- <a href="">
                            <button class="btn btn-outline-primary">Detail</button>
                        </a> -->
                        <a href="{{url('artikel/'.$artc->id)}}">
                            <button class="btn btn-outline-primary">
                                <i class="fas fa-info"></i>
                            </button>
                        </a>
                        <a href="{{url('artikel/hapus/'.$artc->id)}}">
                            <button class="btn btn-outline-danger">
                                <i class="fas fa-trash"></i>
                            </button>
                        </a>
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
                <form action="{{url('artikel/store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="text" name="judul" class="form-control @error('judul') is-invalid @enderror" placeholder="judul">
                        @error('judul') <span class="badge badge-danger">{{$message}}</span> @enderror
                    </div>
                    <textarea name="isi" cols="30" rows="10" class="form-control @error('isi') is-invalid @enderror" placeholder="isi"></textarea>
                    @error('isi') <span class="badge badge-danger">{{$message}}</span> @enderror
                    <div class="input-group mb-3">
                        <input type="file" name="foto" class="form-control @error('judul') is-invalid @enderror" placeholder="foto">
                        @error('isi') <span class="badge badge-danger">{{$message}}</span> @enderror
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
<script>
    window.open = function() {
        window.open("pdf", "_blank"); // will your open new tab on load window.onload
    }
</script>
@endsection