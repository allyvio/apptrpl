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
            @foreach($data as $item)
            <div class="card">
                <div class="card-header">
                    @php
                    $username = \DB::table('users')->where('id', $item->user_id)->value('name');
                    @endphp
                    {{$username}}
                </div>
                <div class="card-body">
                    <blockquote class="blockquote mb-0">
                        <p>{{$item->keterangan}}</p>

                        <footer class="blockquote-footer">Tanggal Book : {{ date('d M Y', $item->created_at->timestamp) }}</footer>

                        <footer class="blockquote-footer">Tanggal Masuk : {{ $item->tanggal }}</footer>
                        <footer class="blockquote-footer">Status : {{ $item->status }}</footer>
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
                            <input type="hidden" name="id" value="{{$item->id}}">

                            <label class="custom-file-label" for="inputGroupFile01">Pilih Surat Keterangan Lahir</label>
                        </div>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary">Upload</button>
                    @if($item->foto != null)
                    <a href="{{url('pdf/'.$item->id)}}">
                        Lihat skl
                    </a>
                    @endif
                </form>
            </div>

        </div>

        @endforeach
    </div>
</div>
@endsection