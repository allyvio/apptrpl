@include('layouts._header')

<body>
    @include('layouts._navbar')


    <div class="the-news">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Rumah Sakit</h2>
                    <div class="row">
                        <div class="col-12">
                            <a href="{{url('mykamar/'.Auth::user()->id)}}">
                                <button class="btn btn-primary float-right mb-3">Kamar Saya</button>
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        @foreach($data as $rs)
                        @php
                        $user_id = \DB::table('rumahsakit')->where('id', $rs->id)->value('user_id');
                        $name = \DB::table('users')->where('id', $user_id)->value('name');
                        @endphp
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="the-news-wrap">
                                <figure class="post-thumbnail">
                                    <a href="#"><img src="{{asset('medart/images/news-1.png')}}" alt=""></a>
                                </figure>

                                <header class="entry-header">
                                    <h3>{{$name}}</h3>

                                    <div class="post-metas d-flex flex-wrap align-items-center">
                                        <div class="posted-date"><label>alamat: </label><a href="#"> {{$rs->alamat}}</a>
                                        </div>

                                        <div class="posted-by"><label>By: </label><a href="#">{{$rs->jam_buka}} jam</a>
                                        </div>
                                    </div>
                                </header>

                                <div class="entry-content">
                                    <p>{{$name}} adalah rumah sakit yang berada di {{$rs->alamat}} dengan service {{$rs->jam_buka}} siap melayani persalinan anda. </p>
                                </div>
                                <a href="{{url('pesan/'.$rs->id)}}">Pesan</a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>



    @include('layouts._footer')

    @include('layouts._script')
</body>

</html>