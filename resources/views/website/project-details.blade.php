
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


@include('website.layouts.header')


<!-- Begin Main Content Area -->
    <main class="main-content">
        <div class="breadcrumb-area breadcrumb-height" data-bg-image="{{asset('website/assets/images/breadcrumb/bg/2.png')}}" >
            <div class="container h-100">
                <div class="breadcrumb-content text-white h-100">
                    <h1 class="text-uppercase mb-0">{{__('website.project')}}</h1>
                    <ul>
                        <li><a class="active" href="{{url('/')}}">{{__('website.main')}}</a></li>
                        <li>{{__('website.projectDetails')}}</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="project-details_area py-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-5">
                        @foreach($images as $image)
                        <div class="project-detail-img pb-10">
                            <img src="{{$image->image}}" alt="Project Image">
                        </div>
                        @endforeach
                        <div class="project-detail-img pb-10">
                            <img src="{{asset('website/assets/images/project/large-size/3.png')}}" alt="Project Image">
                        </div>
                        <div class="project-detail-img">
                            <img src="{{asset('website/assets/images/project/large-size/4.jpg')}}" alt="Project Image">
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-7">
                        <div class="project-detail-content">
                            <h2 class="title mb-3">{{$projects->title}}</h2>
                            <p class="project-desc mb-7">{{$projects->description}}</p>
                            <div class="project-detail-list hassub-item">
                                <div class="detail-list">
                                    <label class="label-field mb-2">{{__('website.date')}}</label>
                                    <span>{{$projects->date}}</span>
                                </div>
                                <div class="detail-list">
                                    <label class="label-field mb-2">Client</label>
                                    <span>Awesome Company</span>
                                </div>
                                <div class="detail-list">
                                    <label class="label-field mb-2">{{__('website.categories')}}</label>

                                    <?php
                                    $name = '';
                                    $info = array('ff','pl','fa','sv');
                                    foreach ($info as $item)
                                        if ($projects->$item == 1){
                                            $name .= trans('website.'.$item);
                                            $name .= ' - ';
                                        }
                                    ?>
                                    <span>{{$name}}  </span>


                                </div>
                                {{--<div class="detail-list">
                                    <label class="label-field mb-2">Awards</label>
                                    <span>For 118 years Lorem ipsum dolor sit amet consectetur adipisicing elit.</span>
                                </div>--}}
                                <ul class="detail-list position-relative">
                                    <li class="hassub">
                                        <a href="#" class="search-btn cursor-pointer">
                                            SHARE
                                        </a>
                                        <ul class="project-link-share hassub-body">
                                            <li class="facebook">
                                                <a href="#" title="Facebook">
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                            </li>
                                            <li class="twitter">
                                                <a href="#" title="Twitter">
                                                    <i class="fa fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li class="youtube">
                                                <a href="#" title="Youtube">
                                                    <i class="fa fa-youtube"></i>
                                                </a>
                                            </li>
                                            <li class="linkedin">
                                                <a href="#" title="Linkedin">
                                                    <i class="fa fa-linkedin"></i>
                                                </a>
                                            </li>
                                            <li class="skype">
                                                <a href="#" title="Skype">
                                                    <i class="fa fa-dribbble"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- Main Content Area End Here -->


    <!-- Begin Newsletter Area -->
    <div class="newsletter-area newsletter-bg py-10" data-bg-image="{{asset('website/assets/images/footer/bg/2.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="newsletter-item">
                        <div class="newsletter-content">
                            <h2 class="title">لمعرفة اخر اخبارنا <br> <strong>اشترك الان</strong></h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 align-self-center">
                    <div class="newsletter-form_wrap">
                        <form class="newsletter-form" action="#">
                            <div class="form-field">
                                <input class="input-field" type="email" placeholder="Enter your email" required="">
                            </div>
                            <div class="form-btn_wrap">
                                <button type="submit" value="submit" class="btn btn-secondary btn-primary-hover btn-lg" name="submit">Subscribe</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Newsletter Area End Here -->


    <!-- Begin Footer Area -->
    <div class="footer-area text-light-grey" style="background-color: black;opacity: 80%;">
        <div class="footer-top py-115" >
            <div class="footer-top py-115" >
                <div class="container" >
                    <div class="row">
                        <div class="col-lg-4 widget-space">
                            <div class="widget-item">
                                <div class="footer-logo pb-5">
                                    <a href="#">
                                        <img src="{{asset('website/assets/images/logo/white.png')}}" alt="Logo" width="300px">
                                    </a>
                                </div>
                                <p class="short-desc my-n1 mb-0 pb-5">شركة الانظمة المشتركة قادره على تسليم مشروعك على اعلى جودة وباقل سعر وفى المدة الزمنية المحددة. كما ان الشركة تكون مسئولة عن تسليم المشروع لقوة الاطفاء العام.</p>
                                <ul class="social-link">
                                    <li class="facebook">
                                        <a href="#" title="Facebook">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                    </li>
                                    <li class="twitter">
                                        <a href="#" title="Twitter">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li class="youtube">
                                        <a href="#" title="Youtube">
                                            <i class="fa fa-youtube"></i>
                                        </a>
                                    </li>
                                    <li class="linkedin">
                                        <a href="#" title="Linkedin">
                                            <i class="fa fa-linkedin"></i>
                                        </a>
                                    </li>
                                    <li class="skype">
                                        <a href="#" title="Skype">
                                            <i class="fa fa-dribbble"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4">
                            <div class="widget-item">
                                <h4 class="heading text-white mb-3">المعلومات</h4>
                                <ul class="widget-list-item">
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-angle-left"></i>
                                            راسلنا
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-angle-left"></i>
                                            خدماتنا
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-angle-left"></i>
                                            فريقنا
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-angle-left"></i>
                                            المحل
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4">
                            <div class="widget-item">
                                <ul class="widget-list-item specific-item">
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-angle-left"></i>
                                            مشاريعنا
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-angle-left"></i>
                                            عننا
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-angle-left"></i>
                                            اخر الاخبار
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="widget-item">
                                <h4 class="heading text-white mb-3">مكتبنا</h4>
                                <ul class="widget-list-item with-hover_color">
                                    <li>
                                        <span>
                                        <i class="fa fa-map-marker"></i>
                                        مكتب 41 ,مجمع بيت اولادنا, شارع حبيب مناور , الفروانية
                                    </span>
                                    </li>
                                    <li>
                                        <span>
                                        <i class="fa fa-phone"></i>
                                        (965) 99936771
                                    </span>
                                    </li>
                                    <li>
                                        <span>
                                        <i class="fa fa-envelope-o"></i>
                                        combinedsystem@hotmail.com
                                    </span>
                                    </li>
                                    <li>
                                        <span>
                                        <i class="fa fa-clock-o"></i>
                                        Mon - Sat: 9:00 - 18:00
                                    </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Footer Area End Here -->


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

<!--Main JS (Common Activation Codes)-->
<script src="{{asset('website/assets/js/main.js')}}"></script>
</body>

</html>
