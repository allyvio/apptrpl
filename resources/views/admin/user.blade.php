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
                    <th scope="col">Email</th>
                    <th scope="col">role</th>
                    <th scope="col">status</th>
                    <th scope="col">Aksi</th>
                    <!-- <th scope="col">Handle</th> -->
                </tr>
            </thead>
            <tbody>
                <?php
                $number = 1;
                ?>
                @foreach($data as $user)
                <tr>
                    <th scope="row">{{$number}}</th>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->role}}</td>
                    <td>{{$user->status}}</td>
                    <td>
                        <!-- <a href="">
                            <button class="btn btn-outline-primary">Detail</button>
                        </a> -->
                        <a href="{{url('user/id')}}">
                            <button class="btn btn-outline-primary">
                                <i class="fas fa-info"></i>
                            </button>
                        </a>
                        <a href="{{url('user/id')}}">
                            <button class="btn btn-outline-danger">
                                <i class="fas fa-trash"></i>
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