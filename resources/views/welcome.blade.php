@include('layouts._header')

<body>
    @include('layouts._navbar')

    <div class="homepage-boxes">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="opening-hours">
                        <h2 class="d-flex align-items-center">Opening Hours</h2>

                        <ul class="p-0 m-0">
                            <li>Monday - Thursday <span>8.00 - 19.00</span></li>
                            <li>Friday <span>8.00 - 18.30</span></li>
                            <li>Saturday <span>9.30 - 17.00</span></li>
                            <li>Sunday <span>9.30 - 15.00</span></li>
                        </ul>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-3 mt-5 mt-md-0">
                    <div class="emergency-box">
                        <h2 class="d-flex align-items-center">Emergency</h2>

                        <div class="call-btn button gradient-bg">
                            <a class="d-flex justify-content-center align-items-center" href="#"><img src="{{asset('medart/images/emergency-call')}}.png"> +34 586 778 8892</a>
                        </div>

                        <p>Lorem ipsum dolor sit amet, cons ectetur adipiscing elit. Donec males uada lorem maximus mauris sceler isque, at rutrum nulla.</p>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-5 mt-5 mt-lg-0">
                    <div class="appointment-box">
                        <h2 class="d-flex align-items-center">Make an Appointment</h2>

                        <form class="d-flex flex-wrap justify-content-between">
                            <select class="select-department">
                                <option value="value1">Select Department</option>
                                <option value="value2">Select Department 1</option>
                                <option value="value3">Select Department 2</option>
                            </select>

                            <select class="select-doctor">
                                <option>Select Doctor</option>
                                <option>Select Doctor 1</option>
                                <option>Select Doctor 2</option>
                            </select>

                            <input type="text" placeholder="Name">

                            <input type="number" placeholder="Phone No">

                            <input class="button gradient-bg" type="submit" value="Boom Appoitnment">
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <section class="testimonial-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Pacient’s Testimonials</h2>
                </div>
            </div>
        </div>

        <!-- Swiper -->
        <div class="testimonial-slider">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-9">
                        <div class="testimonial-bg-shape">
                            <div class="swiper-container testimonial-slider-wrap">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="entry-content">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus. Curabitur ut augue finibus, luctus tortor at, ornare erat. Nulla facilisi. Sed est risus, laoreet et quam non, viverra accumsan leo.</p>
                                        </div><!-- .entry-content -->

                                        <div class="entry-footer">
                                            <figure class="user-avatar">
                                                <img src="{{asset('medart/images/user-1.jpg')}}" alt="">
                                            </figure><!-- .user-avatar -->

                                            <h3 class="testimonial-user">Russell Stephens <span>University in UK</span></h3>
                                        </div><!-- .entry-footer -->
                                    </div><!-- .swiper-slide -->

                                    <div class="swiper-slide">
                                        <div class="entry-content">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus. Curabitur ut augue finibus, luctus tortor at, ornare erat. Nulla facilisi. Sed est risus, laoreet et quam non, viverra accumsan leo.</p>
                                        </div><!-- .entry-content -->

                                        <div class="entry-footer">
                                            <figure class="user-avatar">
                                                <img src="images/user-2.jpg" alt="">
                                            </figure><!-- .user-avatar -->

                                            <h3 class="testimonial-user">Russell Stephens <span>University in UK</span></h3>
                                        </div><!-- .entry-footer -->
                                    </div><!-- .swiper-slide -->

                                    <div class="swiper-slide">
                                        <div class="entry-content">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus. Curabitur ut augue finibus, luctus tortor at, ornare erat. Nulla facilisi. Sed est risus, laoreet et quam non, viverra accumsan leo.</p>
                                        </div><!-- .entry-content -->

                                        <div class="entry-footer">
                                            <figure class="user-avatar">
                                                <img src="images/user-3.jpg" alt="">
                                            </figure><!-- .user-avatar -->

                                            <h3 class="testimonial-user">Russell Stephens <span>University in UK</span></h3>
                                        </div><!-- .entry-footer -->
                                    </div><!-- .swiper-slide -->

                                    <div class="swiper-slide">
                                        <div class="entry-content">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus. Curabitur ut augue finibus, luctus tortor at, ornare erat. Nulla facilisi. Sed est risus, laoreet et quam non, viverra accumsan leo.</p>
                                        </div><!-- .entry-content -->

                                        <div class="entry-footer">
                                            <figure class="user-avatar">
                                                <img src="images/user-4.jpg" alt="">
                                            </figure><!-- .user-avatar -->

                                            <h3 class="testimonial-user">Russell Stephens <span>University in UK</span></h3>
                                        </div><!-- .entry-footer -->
                                    </div><!-- .swiper-slide -->
                                </div><!-- .swiper-wrapper -->

                                <div class="swiper-pagination-wrap">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="swiper-pagination position-relative flex justify-content-center align-items-center"></div>
                                            </div><!-- .col -->
                                        </div><!-- .row -->
                                    </div><!-- .container -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- .testimonial-slider -->
    </section><!-- .testimonial-section -->

    <div class="the-news">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>The News</h2>

                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="the-news-wrap">
                                <figure class="post-thumbnail">
                                    <a href="#"><img src="images/news-1.png" alt=""></a>
                                </figure>

                                <header class="entry-header">
                                    <h3>The latest in Medicine</h3>

                                    <div class="post-metas d-flex flex-wrap align-items-center">
                                        <div class="posted-date"><label>Date: </label><a href="#">April 12, 2018</a></div>

                                        <div class="posted-by"><label>By: </label><a href="#">Dr. Jake Williams</a></div>

                                        <div class="post-comments"><a href="#">2 Comments</a></div>
                                    </div>
                                </header>

                                <div class="entry-content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus. </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="the-news-wrap">
                                <figure class="post-thumbnail">
                                    <a href="#"><img src="images/news-2.png" alt=""></a>
                                </figure>

                                <header class="entry-header">
                                    <h3>All you need to know about pills</h3>

                                    <div class="post-metas d-flex flex-wrap align-items-center">
                                        <div class="posted-date"><label>Date: </label><a href="#">April 12, 2018</a></div>

                                        <div class="posted-by"><label>By: </label><a href="#">Dr. Jake Williams</a></div>

                                        <div class="post-comments"><a href="#">2 Comments</a></div>
                                    </div>
                                </header>

                                <div class="entry-content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus. </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="the-news-wrap">
                                <figure class="post-thumbnail">
                                    <a href="#"><img src="images/news-3.png" alt=""></a>
                                </figure>

                                <header class="entry-header">
                                    <h3>Marketing and Medicine</h3>

                                    <div class="post-metas d-flex flex-wrap align-items-center">
                                        <div class="posted-date"><label>Date: </label><a href="#">April 12, 2018</a></div>

                                        <div class="posted-by"><label>By: </label><a href="#">Dr. Jake Williams</a></div>

                                        <div class="post-comments"><a href="#">2 Comments</a></div>
                                    </div>
                                </header>

                                <div class="entry-content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('layouts._footer')

    @include('layouts._script')
</body>

</html>