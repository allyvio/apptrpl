@include('layouts._header')

<body>
    @include('layouts._navbar')


    <div class="med-history">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-12 col-lg-6">
                    <h2>{{$data->judul}}</h2>
                    <p></p>
                    <p>Tanggal : {{$data->created_at}}</p>
                    <p>{{$data->isi}}</p>

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