@include('layouts._header')

<body>
    @include('layouts._navbar')


    <div class="the-news">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Artikel</h2>
                    <div class="row">
                        @foreach($data as $art)

                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="the-news-wrap">
                                <figure class="post-thumbnail">
                                    <a href="#"><img style="position: relative;padding: 10px;height: 200px;display: block;overflow: hidden;" src="{{asset('storage/'.$art->foto)}}" alt=""></a>
                                </figure>

                                <header class="entry-header">
                                    <h3>{{$art->judul}}</h3>

                                    <div class="post-metas d-flex flex-wrap align-items-center">
                                        <div class="posted-date"><label>Nama: </label><a href="#">Admin</a>
                                        </div>

                                        <div class="posted-by"><label>Tanggal: </label><a href="#">{{$art->created_at}}</a>
                                        </div>
                                    </div>
                                </header>

                                <div class="entry-content " style="position: relative;padding: 10px;height: 100px;display: block;overflow: hidden;">
                                    <p>{{substr($art->isi, 0, 100)}}[. .]</p>
                                </div>
                                <footer class="entry-footer mt-5">
                                    <a class="button gradient-bg" href="{{url('read/'.$art->id)}}">Read More</a>
                                </footer>
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