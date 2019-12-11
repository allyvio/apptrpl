@extends('admin.master')
@section('content')

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">{{Auth::user()->name}} Detail Book Kamar</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>
    <div class="container">
        <div class="row mb-3">
            <div class="card">
                <div class="card-header">
                    @php
                    $username = \DB::table('users')->where('id', $data->user_id)->value('name');
                    $user_id = \DB::table('users')->where('id', $data->user_id)->value('id');
                    @endphp
                    {{$username}}
                </div>
                <div class="card-body">
                    <blockquote class="blockquote mb-0">
                        <p>{{$data->keterangan}}</p>

                        <footer class="blockquote-footer">Tanggal Book : {{ date('d M Y', $data->created_at->timestamp) }}</footer>

                        <footer class="blockquote-footer">Tanggal Masuk : {{ $data->tanggal }}</footer>
                        <footer class="blockquote-footer">Status : {{ $data->status }}</footer>
                    </blockquote>
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <div class="card">
                <div class="card-header">

                </div>
                <div class="card-body">
                    <blockquote class="blockquote mb-0">
                        <p>{{$data->keterangan}}</p>

                        <footer class="blockquote-footer">Tanggal Book : {{ date('d M Y', $data->created_at->timestamp) }}</footer>

                        <footer class="blockquote-footer">Tanggal Masuk : {{ $data->tanggal }}</footer>
                        <footer class="blockquote-footer">Status : {{ $data->status }}</footer>
                    </blockquote>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <form action="{{url('skl/store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="input-group mt-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroupFileAddon01">Pdf FIle</span>
                        </div>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="foto" aria-describedby="inputGroupFileAddon01">
                            <input type="hidden" name="id" value="{{$data->id}}">

                            <label class="custom-file-label" for="inputGroupFile01">Pilih Surat Keterangan Lahir</label>
                        </div>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary">Upload</button>
                    @if($data->foto != null)
                    <a href="{{url('pdf/'.$data->id)}}">
                        Lihat skl
                    </a>
                    @endif
                </form>
            </div>

        </div>


    </div>
</div>
@endsection