@include('layouts._header')

<body>
    @include('layouts._navbar')


    <div class="med-history">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-12 col-lg-6">
                    <h2>{{$data->nama_kamar}}</h2>
                    <p></p>
                    <p>Data dokter : {{$data->title_akademis}} {{$data->nama_lengkap}}, Spesialis {{$data->spesialsi}} Pengalaman {{$data->lama_pengalaman}}
                    </p>
                    <p>
                        Data Kamar : {{$data->nama_kamar}}, kelas {{$data->kelas_kamar}} harga Rb {{number_format($data->price,00)}} / Malam
                    </p>
                    <p>{{$data->keterangan_kamar}}</p>
                    <form action="{{url('booked')}}" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{$data->id}}">
                        <textarea name="keterangan" class="form-control" id="" cols="30" rows="10"></textarea>

                        <button type="submit" class="d-inline-block button gradient-bg">Pesan</button>
                    </form>
                </div>

                <div class="col-12 col-lg-6 mt-5 mt-lg-0">
                    <img class="responsive" src="{{asset('storage/'.$data->foto)}}" alt="">
                </div>
            </div>
        </div>
    </div>


    @include('layouts._footer')

    @include('layouts._script')
</body>

</html>