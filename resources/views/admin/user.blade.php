@extends('admin.master')
@section('content')

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Kota</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>
    <div class="container">
        <div class="row mb-3">
            <!-- Button trigger modal -->
            <div>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                    Tambah user
                </button>
                <br>
                @if ($message = Session::get('success'))
                <div class="alert alert-success alert-block mt-3">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{{ $message }}</strong>
                </div>
                @endif
            </div>



            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="{{url('kota/store')}}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <!-- <label for="nama">Nama</label> -->
                                    <input type="text" name="nama" class="form-control form-control-user @error('nama') is-invalid @enderror" id="nama" placeholder="nama">
                                    @error('nama') <div class="invalid-feedback">{{$message}}</div> @enderror
                                </div>
                                <div class="form-group">
                                    <!-- <label for="email">email</label> -->
                                    <input type="text" name="email" class="form-control form-control-user @error('email') is-invalid @enderror" id="email" placeholder="email">
                                    @error('email') <div class="invalid-feedback">{{$message}}</div> @enderror
                                </div>
                                <div class="form-group">
                                    <!-- <label for="email">email</label> -->
                                    <input type="text" name="email" class="form-control form-control-user @error('email') is-invalid @enderror" id="email" placeholder="email">
                                    @error('email') <div class="invalid-feedback">{{$message}}</div> @enderror
                                </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
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