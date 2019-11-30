@extends('admin.master')
@section('content')

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Bidan</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>

    <div class="container">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Add Bidan
        </button>
        <table class="table table-hover mt-3" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr class="bg-primary text-light">
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Handphone</th>
                    <th scope="col">Email</th>
                    <th scope="col">Kota</th>
                    <th scope="col">Status</th>
                    <th scope="col">Aksi</th>
                    <!-- <th scope="col">Handle</th> -->
                </tr>
            </thead>
            <tbody>
                <?php
                $number = 1;
                ?>
                @php
                $pivot = DB::table('users')->where('role', 'bidan')->get()->all();
                @endphp

                @foreach($pivot as $user)


                <tr>
                    <th scope="row">{{$number}}</th>
                    <td>{{$user->name}}</td>
                    <td>{{$user->hp}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->kota}}</td>
                    <td>{{$user->status}}</td>
                    <td>
                        <!-- <a href="">
                            <button class="btn btn-outline-primary">Detail</button>
                        </a> -->
                        <a href="{{url('terima/'.$user->id)}}">
                            <button class="btn btn-outline-primary">Terima</button>
                        </a>
                        <a href="{{url('tolak/'.$user->id)}}">
                            <button class="btn btn-outline-danger">Tolak</button>

                        </a>
                    </td>

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
                <form action="{{url('bidan/store')}}" method="post">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="text" name="nama" class="form-control" placeholder="Nama">
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" name="email" class="form-control" placeholder="Email">
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="password" class="form-control" placeholder="Password">
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" name="hp" class="form-control" placeholder="No hp">
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" name="kota" class="form-control" placeholder="alamat kerja">
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