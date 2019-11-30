@extends('admin.master')
@section('content')

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Kontrol</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>

    <div class="container">

        <table class="table table-hover mt-3" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr class="bg-primary text-light">
                    <th scope="col">No</th>
                    <th scope="col">Nama Pasien</th>
                    <th scope="col" class="text-center">Kehamilan ke-</th>
                    <th scope="col">Keterangan</th>
                    <th scope="col">Aksi</th>
                    <!-- <th scope="col">Handle</th> -->
                </tr>
            </thead>
            <tbody>
                <?php
                $number = 1;
                ?>

                @foreach($data as $kntl)

                <tr>
                    <th scope="row">{{$number}}</th>
                    @php
                    $pasien = \DB::table('users')->where('id', $kntl->user_id)->value('name')
                    @endphp
                    <th>{{$pasien}}</th>
                    <th class="text-center">{{$kntl->kehamilan}}</th>
                    <th>{{$kntl->keterangan}}</th>
                    <th>
                        <a href="">
                            <a href="{{url('cek/'.$kntl->id)}}">
                                <button class="btn btn-outline-primary">Ceck</button>
                            </a>
                        </a>
                    </th>



                </tr>
                <?php $number++; ?>

                @endforeach
            </tbody>
        </table>


    </div>
</div>
@endsection