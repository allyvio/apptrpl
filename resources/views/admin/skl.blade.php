@extends('admin.master')
@section('content')

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">User</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>
    <div class="container">
        <div class="row mb-3">
        </div>
        <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr class="bg-primary text-light">
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Status</th>
                    <th scope="col">Skl</th>
                    <th scope="col" class="text-center">Aksi</th>
                    <!-- <th scope="col">Handle</th> -->
                </tr>
            </thead>
            <tbody>
                <?php
                $number = 1;
                ?>
                @foreach($data as $skl)
                <tr>
                    <th scope="row">{{$number}}</th>
                    @php
                    $username = \DB::table('users')->where('id', $skl->user_id)->value('name');
                    @endphp
                    <td>{{$username}}</td>
                    <td>
                        <a href="{{url('pdf/'.$skl->id)}}">
                            SKL
                        </a>
                    </td>
                    <td>
                        {{$skl->status}}
                    </td>
                    <td class="text-center">
                        <a href="{{url('notif/'.$skl->id)}}">
                            <button class="btn btn-outline-primary">
                                Konfirmasi Selesai
                            </button>
                        </a>
                    </td>


                </tr>
                <?php $number++; ?>
                @endforeach
            </tbody>
        </table>


    </div>
</div>
@endsection