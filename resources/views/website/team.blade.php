<!DOCTYPE html>
    @if(LaravelLocalization::getCurrentLocale() == 'ar')
        <html  lang="ar" dir="rtl" class="rtl">
    @else
        <html lang="en" dir="ltr">
        @endif
        <head>

            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="robots" content="noindex, follow" />

            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <!-- Favicon -->
            <link rel="shortcut icon" type="image/x-icon" href="{{asset('website/assets/images/logo/logo11.jpg')}}" />
            @if(LaravelLocalization::getCurrentLocale() == 'ar')
                <title>شركة الانظمة المشتركة</title>
                <meta name="description" content="شركة الانظمة المشتركة لادوات ومعدات الامن والسلامة" />
                <meta name="keywords" content="شركة الانظمة المشتركة لادوات ومعدات الامن والسلامة" />

                <!-- Vendor CSS (Contain Bootstrap, Icon Fonts) -->
                <link rel="stylesheet" href="{{asset('website/assets/css/vendor/Pe-icon-7-stroke.css')}}" />
                <link rel="stylesheet" href="{{asset('website/assets/css/vendor/font-awesome.min.css')}}" />

                <!-- Plugin CSS (Global Plugins Files) -->
                <link rel="stylesheet" href="{{asset('website/assets/css/plugins/animate.css')}}">

                <!-- Plugin CSS (Plugins Files for only this Page) -->
                <link rel="stylesheet" href="{{asset('website/assets/css/plugins/swiper.css')}}">

                <!-- Style CSS -->
                <link rel="stylesheet" href="{{asset('website/assets/css/style.css')}}">
            @else
                <title>Combined System Company</title>
                <meta name="description" content="Combined System Company for safety Equipments" />
                <meta name="keywords" content="Combined System Company for safety Equipments" />

                <!-- Vendor CSS (Contain Bootstrap, Icon Fonts) -->
                <link rel="stylesheet" href="{{asset('website/assets/css-en/vendor/Pe-icon-7-stroke.css')}}" />
                <link rel="stylesheet" href="{{asset('website/assets/css-en/vendor/font-awesome.min.css')}}" />

                <!-- Plugin CSS (Global Plugins Files) -->
                <link rel="stylesheet" href="{{asset('website/assets/css-en/plugins/animate.css')}}">

                <!-- Plugin CSS (Plugins Files for only this Page) -->
                <link rel="stylesheet" href="{{asset('website/assets/css-en/plugins/swiper.css')}}">

                <!-- Style CSS -->
                <link rel="stylesheet" href="{{asset('website/assets/css-en/style.css')}}">
        @endif
        <!-- CSS
    ============================================ -->



        </head>

        <body>

        <div class="main-wrapper">


            <!-- Begin Main Header Area -->
@include('website.layouts.header')
        <!-- Main Header Area End Here -->




            <!-- Begin Team Area -->
            <div class="team-area pt-110 pb-115">
                <div class="container">
                    <div class="section-title">
                        <h3 class="heading pb-3 mb-8">Information</h3>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="team-member">
                                <div class="team-member-img">
                                    <a href="#" style="text-align: center;">
                                        @if($employee->qrcode != null)
                                        <img class="img-full" src="{{$employee->qrcode}}" style="display: block;margin-left: auto;margin-right: auto;width: 200px;" alt="Team Member">
                                        @endif
                                    </a>

                                </div>

                                <div class="team-member-content pt-4">
                                    <h4 class="member-name mb-1">
                                        <a href="#">{{$employee->name}}</a>
                                    </h4>
                                    <span class="designation">{{$employee->job_type}}</span>
                                    <span class="designation">{{$employee->phone}}</span>
                                    <span class="designation">{{$employee->whatsapp}}</span>
                                    <span class="designation">{{$employee->email}}</span>
                                </div>
                            </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Team Area End Here -->



            <!-- Begin Testimonial Area -->
        {{--
            <div class="testimonial-area ">
                <div class="inner-area testimonial-bg-height" data-bg-image="assets/images/testimonial/bg/1-1-1920x474.png">
                    <div class="swiper-container testimonial-slider circle-arrow with-bg_white arrow-radius mb-n3">
                        <div class="swiper-wrapper mb-10">
                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <div class="testimonial-content text-white">
                                        <div class="user-img pb-4">
                                            <img src="assets/images/testimonial/user/1-1-100x100.jpg" alt="User Image">
                                        </div>
                                        <p class="short-desc mb-4">“Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis architecto beatae unde omnis iste natus.”</p>
                                        <h3 class="user-name">Draygon</h3>
                                        <span class="occupation">Marketer / May Inc</span>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <div class="testimonial-content text-white">
                                        <div class="user-img pb-4">
                                            <img src="assets/images/testimonial/user/1-2-100x100.jpg" alt="User Image">
                                        </div>
                                        <p class="short-desc mb-4">“Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis architecto beatae unde omnis iste natus.”</p>
                                        <h3 class="user-name">Edwin Adams</h3>
                                        <span class="occupation">CEO / Letters Inc</span>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <div class="testimonial-content text-white">
                                        <div class="user-img pb-4">
                                            <img src="assets/images/testimonial/user/1-5-100x100.jpg" alt="User Image">
                                        </div>
                                        <p class="short-desc mb-4">“Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis architecto beatae unde omnis iste natus.”</p>
                                        <h3 class="user-name">Anny Adams</h3>
                                        <span class="occupation">Co-Founder / April Inc</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Add Pagination -->
                        <div class="swiper-pagination style-01 primary-color with-bg"></div>
                        <!-- Add Arrows -->
                        <div class="swiper-arrow-wrap d-none d-md-block">
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                    </div>
                </div>
            </div>
        --}}
        <!-- Testimonial Area End Here -->


            <!-- Begin Blog Area -->
        {{--
            <div class="blog-area pt-110 pb-120">
                <div class="container">
                    <div class="section-title">
                        <h3 class="heading pb-3 mb-8">Recent News</h3>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="swiper-container news-slider nav-pagination_wrap circle-arrow with-bg_white arrow-radius">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="blog-item">
                                            <a class="blog-img with-overlay" href="blog-details-left-sidebar.html">
                                                <img class="img-full" src="assets/images/blog/1-1-370x260.png" alt="Blog Image">
                                                <div class="inner-text">
                                                    <span class="btn btn-primary btn-dark-hover btn-radius">Read More</span>
                                                </div>
                                            </a>
                                            <div class="blog-content">
                                                <h4 class="heading mb-2">
                                                    <a href="blog-details-left-sidebar.html">Rethinking “Bankability” Africa’s</a>
                                                </h4>
                                                <ul class="post-meta pb-2">
                                                    <li>
                                                        <a href="#">Admin</a>
                                                    </li>
                                                    <li class="post-date">
                                                        July 6, 2020
                                                    </li>
                                                </ul>
                                                <p class="short-desc mb-0">Excepteur sint roccaecat cupidatat proident, sunt in culpa officia deserunt mollit anim id est laborum.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="blog-item">
                                            <a class="blog-img with-overlay" href="blog-details-left-sidebar.html">
                                                <img class="img-full" src="assets/images/blog/1-2-370x260.png" alt="Blog Image">
                                                <div class="inner-text">
                                                    <span class="btn btn-primary btn-dark-hover btn-radius">Read More</span>
                                                </div>
                                            </a>
                                            <div class="blog-content">
                                                <h4 class="heading mb-2">
                                                    <a href="blog-details-left-sidebar.html">Smart City Sensor Networks.</a>
                                                </h4>
                                                <ul class="post-meta pb-2">
                                                    <li>
                                                        <a href="#">Admin</a>
                                                    </li>
                                                    <li class="post-date">
                                                        July 6, 2020
                                                    </li>
                                                </ul>
                                                <p class="short-desc mb-0">Excepteur sint roccaecat cupidatat proident, sunt in culpa officia deserunt mollit anim id est laborum.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="blog-item">
                                            <a class="blog-img with-overlay" href="blog-details-left-sidebar.html">
                                                <img class="img-full" src="assets/images/blog/1-3-370x260.png" alt="Blog Image">
                                                <div class="inner-text">
                                                    <span class="btn btn-primary btn-dark-hover btn-radius">Read More</span>
                                                </div>
                                            </a>
                                            <div class="blog-content">
                                                <h4 class="heading mb-2">
                                                    <a href="blog-details-left-sidebar.html">What Is a remained Resilient?</a>
                                                </h4>
                                                <ul class="post-meta pb-2">
                                                    <li>
                                                        <a href="#">Admin</a>
                                                    </li>
                                                    <li class="post-date">
                                                        July 6, 2020
                                                    </li>
                                                </ul>
                                                <p class="short-desc mb-0">Excepteur sint roccaecat cupidatat proident, sunt in culpa officia deserunt mollit anim id est laborum.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Add Pagination -->
                                <div class="swiper-pagination with-position_relative"></div>

                                <!-- Add Arrows -->
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        --}}
        <!-- Blog Area End Here -->







        @include('website.layouts.footer')

        <!-- Begin Scroll To Top -->
            <a class="scroll-to-top" href="">
                <i class="pe-7s-angle-up"></i>
            </a>
            <!-- Scroll To Top End Here -->

        </div>

        <!-- Global Vendor, plugins JS -->

        <!-- JS Files
        ============================================ -->
        <!-- Global Vendor, plugins JS -->

        <!-- Vendor JS -->
        <script src="{{asset('website/assets/js/vendor/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('website/assets/js/vendor/jquery-3.5.1.min.js')}}"></script>
        <script src="{{asset('website/assets/js/vendor/jquery-migrate-3.3.0.min.js')}}"></script>
        <script src="{{asset('website/assets/js/vendor/modernizr-3.11.2.min.js')}}"></script>
        <script src="{{asset('website/assets/js/vendor/jquery.waypoints.js')}}"></script>

        <!--Plugins JS-->
        <script src="{{asset('website/assets/js/plugins/wow.min.js')}}"></script>
        <script src="{{asset('website/assets/js/plugins/isotope.pkgd.min.js')}}"></script>
        <script src="{{asset('website/assets/js/plugins/imagesloaded.pkgd.min.js')}}"></script>

        <!-- Plugins & Activation JS For Only This Page -->
        <script src="{{asset('website/assets/js/plugins/swiper.js')}}"></script>
        <script src="{{asset('website/assets/js/plugins/jquery.vide.js')}}"></script>
        <script src="{{asset('website/assets/js/plugins/jquery.counterup.js')}}"></script>

        <!--Main JS (Common Activation Codes)-->
        <script src="{{asset('website/assets/js/main.js')}}"></script>

        </body>

        </html>
