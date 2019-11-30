@include('layouts._header')

<body>
    @include('layouts._navbar')


    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8">
                <div class="the-news">
                    <div class="row">
                        @foreach($data as $cek)
                        <div class="col-12 col-md-6">
                            <div class="the-news-wrap">
                                <figure class="post-thumbnail" style="position: relative;padding: 10px;height: 200px;display: block;overflow: hidden">
                                    <a href="#"><img src="{{asset('storage/'.  $cek->foto)}}" alt=""></a>
                                </figure>
                                <header class="entry-header">
                                    <h3>{{$cek->nama_kamar}}</h3>

                                    <div class="post-metas d-flex flex-wrap align-items-center">
                                        <div class="posted-date"><label>Harga: </label><a href="#"> Rp {{number_format($cek->price,00)}}</a></div>

                                        <div class="posted-by"><label>Status: </label><a href="#">{{$cek->status}}</a></div>

                                        <div class="post-comments"><a href="#">2 Comments</a></div>
                                    </div>
                                </header>

                                <div class="entry-content">
                                    <p>
                                        {{$cek->keterangan_kamar}}
                                    </p>
                                </div>

                                <footer class="entry-footer mt-5">
                                    <a class="button gradient-bg" href="{{url('pesan/kamar/'.$cek->id)}}">Pesan</a>
                                </footer>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-4">
                <div class="sidebar">
                    <div class="search-widget">
                        <form class="flex flex-wrap align-items-center">
                            <input type="search" placeholder="Search...">
                            <button type="submit" class="flex justify-content-center align-items-center">Search</button>
                        </form><!-- .flex -->
                    </div><!-- .search-widget -->

                    <div class="sidebar-cats">
                        <h2 class="widget-title">Categories</h2>

                        <ul class="p-0 m-0">
                            <li><a href="#">Radiology</a></li>
                            <li><a href="#">Cardiology</a></li>
                            <li><a href="#">Gastroenterology</a></li>
                            <li><a href="#">Neurology</a></li>
                            <li><a href="#">General surgery</a></li>
                        </ul>
                    </div>

                    <div class="popular-posts">
                        <h2 class="widget-title">Latest Posts</h2>

                        <ul class="p-0 m-0">
                            <li class="d-flex flex-wrap justify-content-between">
                                <figure><a href="#"><img src="images/p-1.jpg" alt=""></a></figure>

                                <div class="entry-content">
                                    <h3 class="entry-title"><a href="#">A big discovery for medicine worldwide</a></h3>

                                    <div class="posted-date">Feb 05, 2018</div>
                                </div>
                            </li>

                            <li class="d-flex flex-wrap justify-content-between">
                                <figure><a href="#"><img src="images/p-2.jpg" alt=""></a></figure>

                                <div class="entry-content">
                                    <h3 class="entry-title"><a href="#">Dentistry for everybody under 18</a></h3>

                                    <div class="posted-date">Feb 05, 2018</div>
                                </div>
                            </li>

                            <li class="d-flex flex-wrap justify-content-between">
                                <figure><a href="#"><img src="images/p-3.jpg" alt=""></a></figure>

                                <div class="entry-content">
                                    <h3 class="entry-title"><a href="#">When it’s time to take pills</a></h3>

                                    <div class="posted-date">Feb 05, 2018</div>
                                </div>
                            </li>
                        </ul>
                    </div><!-- .cat-links -->

                    <div class="opening-hours">
                        <h2 class="d-flex align-items-center">Opening Hours</h2>

                        <ul class="p-0 m-0">
                            <li>Monday - Thursday <span>8.00 - 19.00</span></li>
                            <li>Friday <span>8.00 - 18.30</span></li>
                            <li>Saturday <span>9.30 - 17.00</span></li>
                            <li>Sunday <span>9.30 - 15.00</span></li>
                        </ul>
                    </div>

                    <div class="emergency-box">
                        <h2 class="d-flex align-items-center">Emergency</h2>

                        <div class="call-btn text-center">
                            <a class="d-flex justify-content-center align-items-center button gradient-bg" href="#"><img src="images/emergency-call.png"> +34 586 778 8892</a>
                        </div>

                        <p>Lorem ipsum dolor sit amet, cons ectetur adipiscing elit. Donec males uada lorem maximus mauris sceler isque, at rutrum nulla.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>



    @include('layouts._footer')

    @include('layouts._script')
</body>

</html>