@include('layouts._header')

<body>
    @include('layouts._navbar')


    <div class="faq-stuff">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Pengaturan</h2>
                </div>

                <div class="col-12 col-lg-6 mb-5 mb-lg-0">
                    <div class="accordion-wrap type-accordion">
                        <h3 class="entry-title d-flex justify-content-between align-items-center active">Profile<span class="arrow-r"></span></h3>

                        <div class="entry-content">
                            <p>
                                Nama : {{$data->name}}
                                <br>
                                Email : {{$data->email}}
                                <br>
                                Kota : {{$data->kota}}
                                <br>
                                Status User : {{$data->status}}
                                <br>
                                <form class="user" action="{{url('user/update')}}" method="post">
                                    @csrf
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="name" class="text-light">Nama</label>
                                            <input type="text" class="form-control form-control-user @error('name') is-invalid @enderror" name="name" id="name" value="{{$data->name}}">
                                            <input type="hidden" name="id" value="{{$data->id}}">
                                            @error('name') <div class="invalid-feedback">{{$message}}</div> @enderror
                                        </div>


                                        <div class="form-group">
                                            <label for="kota" class="text-light">Kota</label>
                                            <input type="text" name="kota" class="form-control form-control-user @error('kota') is-invalid @enderror" kota="kota" id="kota" value="{{$data->kota}}">
                                            @error('kota') <div class="invalid-feedback">{{$message}}</div> @enderror
                                        </div>
                                        <button class="btn btn-primary" type="submit">Ubah</button>
                                    </div>
                                </form>
                            </p>

                        </div>

                        <h3 class="entry-title d-flex justify-content-between align-items-center">Password<span class="arrow-r"></span></h3>

                        <div class="entry-content">
                            <p>
                                <form class="user" action="{{url('password/update')}}" method="post">
                                    @csrf
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="password" class="text-light">Ubah Password</label>
                                            <input type="password" class="form-control form-control-user @error('password') is-invalid @enderror" name="password" id="password">
                                            @error('password') <div class="invalid-feedback">{{$message}}</div> @enderror
                                            <input type="hidden" name="id" value="{{$data->id}}">
                                        </div>
                                        <button class="btn btn-primary" type="submit">Ubah</button>
                                    </div>
                                </form>
                            </p>
                        </div>

                        <h3 class="entry-title d-flex justify-content-between align-items-center">SKL<span class="arrow-r"></span></h3>

                        <div class="entry-content">
                            @php
                            $skl = \DB::table('bookkamar')->where('user_id', Auth::user()->id)->get()->all();
                            @endphp
                            <p>
                                @foreach($skl as $item)
                                SKL status : {{$item->status}}
                                <br>
                                @if($item->foto != null)
                                <li class="text-light">Lihat Skl : <a class="text-light" href="{{url('pdf/'.$item->id)}}">Surat Keterangan Lahir</a></li>
                                @endif
                                @endforeach
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-6 mt-5 mt-lg-0">

                </div>
            </div>
        </div>
    </div>




    @include('layouts._footer')

    @include('layouts._script')
</body>

</html>