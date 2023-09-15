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



    <div class="video-wrap" data-vide-bg="{{asset('website/assets/media/video/hero-bg.mp4')}}">
        <div class="video-content text-white">
            <span class="sub-title pb-4">{{__('website.companyname')}}</span>
            <h2 class="title mb-2" >{{__('website.company_name1')}}</h2>
            <p class="short-desc mx-auto mb-7">{{__('website.company_name2')}}</p>
            <div class="button-wrap">
                <a class="btn btn-primary btn-white-hover btn-lg btn-radius" href="contact.html">{{__('website.contact_us')}}</a>
            </div>
        </div>
    </div>


    <!-- Begin Service Area -->
    <div class="service-area pt-110 pb-115">
        <div class="container">
            <div class="section-title">
                <h3 class="heading pb-3 mb-6">{{__('website.services')}}</h3>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-item svg-icon-box">
                        <div class="service-icon mb-5">
                            <img src="{{asset('website/assets/images/intro/icon/1-1.png')}}" alt="Service Icon">
                        </div>
                        <div class="service-content">
                            <h4 class="heading mb-3">
                                <a href="service-details.html">{{__('website.firefighting_works')}}</a>
                            </h4>
                            <p class="short-desc mb-0">{{__('website.firefighting_words')}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-item svg-icon-box">
                        <div class="service-icon mb-5">
                            <img src="{{asset('website/assets/images/intro/icon/1-2.png')}}" alt="Service Icon">
                        </div>
                        <div class="service-content">
                            <h4 class="heading mb-3">
                                <a href="service-details.html">{{__('website.firealarm_works')}}</a>
                            </h4>
                            <p class="short-desc mb-0">{{__('website.firealarm_words')}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-item svg-icon-box">
                        <div class="service-icon mb-5">
                            <img src="{{asset('website/assets/images/intro/icon/1-3.png')}}" alt="Service Icon">
                        </div>
                        <div class="service-content">
                            <h4 class="heading mb-3">
                                <a href="service-details.html">{{__('website.smokeventilation_works')}}</a>
                            </h4>
                            <p class="short-desc mb-0">{{__('website.firealarm_words')}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-item svg-icon-box pb-sm-0">
                        <div class="service-icon mb-5">
                            <img src="{{asset('website/assets/images/intro/icon/1-4.png')}}" alt="Service Icon">
                        </div>
                        <div class="service-content">
                            <h4 class="heading mb-3">
                                <a href="service-details.html">{{__('website.airconditioning_works')}}</a>
                            </h4>
                            <p class="short-desc mb-0">{{__('website.airconditioning_words')}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-item svg-icon-box pb-sm-0">
                        <div class="service-icon mt-xs-n2 mb-5">
                            <img src="{{asset('website/assets/images/intro/icon/1-5.png')}}" alt="Service Icon">
                        </div>
                        <div class="service-content">
                            <h4 class="heading mb-3">
                                <a href="service-details.html">{{__('website.plumbing_works')}}</a>
                            </h4>
                            <p class="short-desc mb-0">{{__('website.plumbing_words')}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service Area End Here -->




    <!-- Begin Intro Area -->
    <div class="intro-area py-120" data-bg-color="#f1f2f3">
        <div class="container">
            <div class="row">
                @if(LaravelLocalization::getCurrentLocale() == 'ar')
                    <div class="col-lg-6 order-lg-1 order-2 align-self-center">
                    <div class="intro-feature-item py-9 pt-lg-0">
                        <div class="intro-feature-icon">
                            <img src="{{asset('website/assets/images/intro/icon/2-1.png')}}" alt="Feature Icon">
                        </div>
                        <div class="intro-feature-content">
                            <h3 class="title mb-3">الأعلى تقييما</h3>
                            <p class="short-desc mb-0">تعد شركة الانظمة المشتركة من افضل شركات المقاولات الكهروميكانيكية فى دولة الكويت.</p>
                        </div>
                    </div>
                    <div class="intro-feature-item pb-9">
                        <div class="intro-feature-icon">
                            <img src="{{asset('website/assets/images/intro/icon/2-2.png')}}" alt="Feature Icon">
                        </div>
                        <div class="intro-feature-content">
                            <h3 class="title mb-3">افضل جودة</h3>
                            <p class="short-desc mb-0">شركة الانظمة المشتركة قادرة على اعطاء افضل جودة يتمناها العميل.</p>
                        </div>
                    </div>
                    <div class="intro-feature-item">
                        <div class="intro-feature-icon">
                            <img src="{{asset('website/assets/images/intro/icon/2-3.png')}}" alt="Feature Icon">
                        </div>
                        <div class="intro-feature-content">
                            <h3 class="title mb-3">اقل سعر</h3>
                            <p class="short-desc mb-0">تتميز شركة الانظمة المشتركة بجودة تنفيذ اعمالها باقل الاسعار الممكنة والتى تتوافق ايضا مع اعلى جودة فى مجال الاعمال الميكانيكية.</p>
                        </div>
                    </div>
                </div>
                @else
                    <div class="col-lg-6 order-lg-1 order-2 align-self-center">
                        <div class="intro-feature-item py-9 pt-lg-0">
                            <div class="intro-feature-icon">
                                <img src="{{asset('website/assets/images/intro/icon/2-1.png')}}" alt="Feature Icon">
                            </div>
                            <div class="intro-feature-content">
                                <h3 class="title mb-3">Top Rated</h3>
                                <p class="short-desc mb-0">Combined Systems Company is one of the best electromechanical contracting companies in the State of Kuwait.</p>
                            </div>
                        </div>
                        <div class="intro-feature-item pb-9">
                            <div class="intro-feature-icon">
                                <img src="{{asset('website/assets/images/intro/icon/2-2.png')}}" alt="Feature Icon">
                            </div>
                            <div class="intro-feature-content">
                                <h3 class="title mb-3">Best Quality</h3>
                                <p class="short-desc mb-0">Combined Systems Company is one of the best electromechanical contracting companies in the State of Kuwait.</p>
                            </div>
                        </div>
                        <div class="intro-feature-item">
                            <div class="intro-feature-icon">
                                <img src="{{asset('website/assets/images/intro/icon/2-3.png')}}" alt="Feature Icon">
                            </div>
                            <div class="intro-feature-content">
                                <h3 class="title mb-3">Low Price</h3>
                                <p class="short-desc mb-0">The Joint Systems Company is characterized by the quality of its work implementation at the lowest possible prices, which also corresponds to the highest quality in the field of mechanical work.
                                </p>
                            </div>
                        </div>
                    </div>
                @endif
                <div class="col-lg-6 order-lg-2 order-1">
                    <div class="intro-img style-02">
                        <div class="primary-img">
                            <img class="intro-box_shadow" src="{{asset('website/assets/images/photos/1.jpg')}}" alt="Intro Image">
                        </div>
                        <div class="secondary-img">
                            <img class="intro-box_shadow" src="{{asset('website/assets/images/photos/2.jpg')}}" alt="Intro Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Intro Area End Here -->


    <!-- Begin Brand Area -->
    <div class="brand-area pt-100 pb-95">
        <div class="brand-inner-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="swiper-container brand-slider nav-pagination_wrap circle-arrow with-bg_white arrow-rounded">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <a class="brand-item" href="#">
                                        <img src="{{asset('website/assets/images/brand/1.png')}}" alt="Brand">
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a class="brand-item" href="#">
                                        <img src="{{asset('website/assets/images/brand/4.png')}}" alt="Brand">
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a class="brand-item" href="#">
                                        <img src="{{asset('website/assets/images/brand/5.png')}}" alt="Brand">
                                    </a>
                                </div>
                            </div>
                            <!-- Add Pagination -->
                            <div class="brand-pagination with-position_relative"></div>

                            <!-- Add Arrows -->
                            <div class="brand-button-next"></div>
                            <div class="brand-button-prev"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Brand Area End Here -->



    <!-- Begin Project Area -->
    <main class="main-content">
        <div class="project-area pb-120">
            <div class="container">
                <div class="section-title style-02">
                    <h3 class="heading pb-3 mb-8">{{__('website.ourProjects')}}</h3>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="masonary-menu text-center pb-6">
                            <button data-filter="*" class="is-checked"><span class="filter-text">{{__('website.all')}}</span></button>
                            <button data-filter=".ff"><span class="filter-text">{{__('website.firefighting')}}</span></button>
                            <button data-filter=".fa"><span class="filter-text">{{__('website.firealarm')}}</span></button>
                            <button data-filter=".pl" style="padding-right: 15px;"><span class="filter-text">{{__('website.plumbing')}}</span></button>
                            <button data-filter=".sv" style="padding-right: 15px;"><span class="filter-text">{{__('website.smokeventilation')}}</span></button>
                        </div>
                    </div>
                </div>
                <div class="masonry-activation ">
                    <div class="row g-0 mesonry-list">
                        @foreach($projects as $project)

                        <?php
                        $name = '';
                            for ($i = 0;$i<=3;$i++){
                                   if($project->ff == 1)
                                        $name .= 'ff ';
                                   elseif ($project->fa == 1){
                                       $name .= 'fa ';

                                   }elseif ($project->pl == 1){
                                       $name .= 'pl ';

                                   }elseif ($project->sv == 1){
                                       $name .= 'sv ';

                                   }
                            }
                        ?>
                            <?php
                            $infoff = '';
                            $arr = '';
                            $info = array('ff','pl','fa','sv');
                            foreach ($info as $item)
                                if ($project->$item == 1){
                                    $infoff .= $item;
                                    $arr .= trans('website.'.$item);
                                    $arr .= ' - ';
                                    $infoff .= ' ';
                                }
                            ?>
                            <div class="col-lg-4 col-sm-6 masonary-item {{$infoff}}">
                                <a class="project-item" href="{{route('projectDetails', $project->id)}}">
                                    <figure class="hover-direction mb-0">
                                        <img class="img-full" src="{{$project->image}}" alt="Project Image">
                                        <figcaption>
                                            <div class="inner-content">
                                                <span class="category">{{$arr}}</span>
                                                @if(LaravelLocalization::getCurrentLocale() == 'ar')
                                                    <h4 class="title mb-3">{{$project->ar_title}}</h4>
                                                    @else
                                                    <h4 class="title mb-3">{{$project->en_title}}</h4>
                                                @endif
                                            </div>
                                        </figcaption>
                                    </figure>
                                </a>
                            </div>

                        @endforeach

                    </div>
                </div>
            </div>
        </div>

        <!-- Begin Funfact Area -->
        <div class="funfact-banner funfact-bg-height"  data-bg-image="{{asset('website/assets/images/about/bg/2.jpg')}}">
            <div class="funfact-banner funfact-bg-height" style="background-color: black;opacity: 80%;">
                <div class="container h-100" >
                    <div class="row h-100">
                        <div class="col-lg-12 align-self-center">
                            <div class="inner-content text-funfact text-center">
                                <span class="sub-title d-block pb-1">اكثر من <strong>20</strong> عامآ</span>
                                <h2 class="title mb-0">عندك مشروع؟ تواصل معنا </h2>
                                <span class="contact-number">96599936771+</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="counter-area pt-120">
            <div class="container">
                <div class="funfact-bg text-secondary">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="inner" data-bg-image="assets/images/about/bg/funfact.png">
                                <div class="funfact-inner py-6">
                                    <div class="funfact-item">
                                        <h3 class="count mb-0" data-counterup-time="3000">985</h3>
                                        <h4 class="count-title mb-0">{{__('website.projects')}}</h4>
                                    </div>
                                    <div class="funfact-item">
                                        <h3 class="count mb-0" data-counterup-time="4000">529</h3>
                                        <h4 class="count-title mb-0">{{__('website.clients')}}</h4>
                                    </div>
                                    <div class="funfact-item pb-0">
                                        <h3 class="count mb-0" data-counterup-time="5000">888</h3>
                                        <h4 class="count-title mb-0">{{__('website.completed-projects')}}</h4>
                                    </div>
                                    <div class="funfact-item pb-0">
                                        <h3 class="count mb-0" data-counterup-time="6000">100</h3>
                                        <h4 class="count-title mb-0">{{__('website.maintenance-projects')}}</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Funfact Area End Here -->

    </main>
    <!-- Project Area End Here -->



    <!-- Begin Team Area -->
    <div class="team-area pt-110 pb-115">
        <div class="container">
            <div class="section-title">
                <h3 class="heading pb-3 mb-8">Our Team</h3>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="swiper-container team-member-slider nav-pagination_wrap circle-arrow with-bg_white arrow-radius">
                        <div class="swiper-wrapper">
                            @inject('Employees','App\Models\Employee')
                            @foreach($Employees->where('type','website')->get() as $employee)
                                <div class="swiper-slide">
                                    <div class="team-member">
                                        <div class="team-member-content pt-4">
                                            <h4 class="member-name mb-1">
                                                <a href="{{url('/team/'. $employee->id)}}">{{$employee->name}}</a>
                                            </h4>
                                            <span class="designation">{{$employee->job_type}}</span>
                                        </div>
                                    </div>
                                </div>
                            @endforeach


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
