@extends('admin.master')
@section('content')

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Menu kamar {{Auth::user()->name}}</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>
    <div class="container">

        <div class="row mb-3">
            <table class="table table-hover mt-3" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr class="bg-primary text-light">
                        <th scope="col">No</th>
                        <th>Nama Kamar</th>
                        <th>Nama Pasien</th>
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
                        @php
                        $id_ = \DB::table('bookkamar')->where('id', $kamar->id)->value('user_id');
                        $username = \DB::table('users')->where('id', $id_)->value('name');
                        $nama_kamar = \DB::table('kamar')->where('id', $kamar->kamar_id)->value('nama_kamar');
                        $kelas_kamar = \DB::table('kamar')->where('id', $kamar->kamar_id)->value('kelas_kamar');
                        $pj = \DB::table('kamar')->where('id', $kamar->kamar_id)->value('nama_lengkap');
                        $price = \DB::table('kamar')->where('id', $kamar->kamar_id)->value('price');

                        @endphp
                        <th scope="row">{{$nama_kamar}}</th>
                        <th scope="row">{{$username}}</th>
                        <th scope="row">{{$kelas_kamar}}</th>
                        <th scope="row">Rp {{number_format($price,00)}}</th>
                        <th scope="row">{{$pj}}</th>
                        <th scope="row">{{$kamar->status}}</th>
                        <th>
                            <a href="{{url('detailbook/'.$kamar->id)}}">
                                <button class="btn btn-outline-primary">Detail</button>
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

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
            </form>
        </div>
    </div>
</div>
@endsection