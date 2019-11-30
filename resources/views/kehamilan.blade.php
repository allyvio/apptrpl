@include('layouts._header')

<body>
    @include('layouts._navbar')


    <div class="medical-team">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Petugas kesehatan</h2>
                    <a href="{{url('mycontrol/'.Auth::user()->id)}}">
                        <button class="btn btn-primary float-right mb-3">Kontrol Saya</button>
                    </a>
                    <br>
                </div>
                @foreach($data as $bidan)
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="medical-team-wrap">
                        <img src="{{asset('medart/images/team-1.jpg')}}" alt="">

                        <h4>{{$bidan->name}}</h4>
                        <h5>{{$bidan->kota}}</h5>
                        <a href="{{url('pick/bidan/'.$bidan->id)}}" class="badge badge-primary w-25 text-light">Pilih</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>




    @include('layouts._footer')

    @include('layouts._script')
</body>

</html>