<!DOCTYPE html>
<html lang="ar"
dir="rtl">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>شركة الانظمة المشتركة</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="شركة الانظمة المشتركة لادوات ومعدات الامن والسلامة" />
    <meta name="keywords" content="شركة الانظمة المشتركة لادوات ومعدات الامن والسلامة" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('website/assets/images/logo/logo11.jpg')}}" />

    <!-- CSS
    ============================================ -->

    <!-- Vendor CSS (Contain Bootstrap, Icon Fonts) -->
    <link rel="stylesheet" href="{{asset('website/assets/css/vendor/Pe-icon-7-stroke.css')}}" />
    <link rel="stylesheet" href="{{asset('website/assets/css/vendor/font-awesome.min.css')}}" />

    <!-- Plugin CSS (Global Plugins Files) -->
    <link rel="stylesheet" href="{{asset('website/assets/css/plugins/animate.css')}}">

    <!-- Plugin CSS (Plugins Files for only this Page) -->
    <link rel="stylesheet" href="{{asset('website/assets/css/plugins/swiper.css')}}">

    <!-- Style CSS -->
    <link rel="stylesheet" href="{{asset('website/assets/css/style.css')}}">

</head>

<body>

<div class="main-wrapper">


    <!-- Begin Main Header Area -->
    <header class="main-header_area">
        <div class="header-top py-3 d-none d-md-block" data-bg-color="#f1f2f3">
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <div class="pre-header-left text-nero">
                            <i class="fa fa-clock-o"></i>
                            <span>Mon - Sat: 9:00 - 18:00</span>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="pre-header-left">
                            <ul class="social-link justify-content-end">
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
                </div>
            </div>
        </div>
        <div class="main-header header-sticky">
            <div class="container">
                <div class="main-header_nav">
                    <div class="row align-items-center">
                        <div class="col-lg-2 col-6">

                            <div class="header-logo">
                                <a href="{{url('/')}}">
                                    <img src="{{$settings->image}}" alt="Header Logo" >
                                </a>
                            </div>


                        </div>
                        <div class="col-lg-8 d-none d-lg-block">
                            <div class="main-menu text-center">
                                <nav class="main-nav">
                                    <ul>
                                        <li class="drop-holder">
                                            <a href="{{url('/')}}">
                                                الصفحة الرئيسية
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{url('/')}}">عننا</a>
                                        </li>
                                        <li class="drop-holder">
                                            <a href="{{url('/')}}">
                                                المشاريع
                                            </a>
                                            <ul class="drop-menu">
                                                <li>
                                                    <a href="{{url('/')}}">Project Page</a>
                                                </li>
                                                <li>
                                                    <a href="{{url('/project-details')}}">Project Details</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="drop-holder">
                                            <a href="{{url('/')}}">
                                                خدماتنا
                                            </a>
                                        </li>
                                        <li class="drop-holder" style="padding-right: 10px;">
                                            <a href="{{url('/')}}">الاتصال</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-lg-2 col-6">
                            <div class="header-right">
                                <ul class="hassub-item">
                                    <li class="mobile-menu_wrap d-block d-lg-none">
                                        <a href="#mobileMenu" class="mobile-menu_btn toolbar-btn pl-0">
                                            <i class="fa fa-navicon"></i>
                                        </a>
                                    </li>
                                    <li class="search-wrap hassub">
                                        <a href="#" class="search-btn">
                                            <i class="fa fa-search"></i>
                                        </a>
                                        <ul class="hassub-body search-body">
                                            <li>
                                                <form class="search-form" action="#">
                                                    <div class="form-field">
                                                        <input class="input-field" type="search" placeholder="Search">
                                                    </div>
                                                    <div class="form-btn_wrap">
                                                        <button type="submit" value="submit" class="btn btn-secondary btn-primary-hover" name="submit">
                                                            <i class="fa fa-search"></i>
                                                        </button>
                                                    </div>
                                                </form>
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
        <div class="mobile-menu_wrapper" id="mobileMenu">
            <div class="offcanvas-body">
                <div class="inner-body">
                    <div class="offcanvas-top">
                        <a href="#" class="button-close"><i class="pe-7s-close"></i></a>
                    </div>
                    <div class="offcanvas-menu_area">
                        <nav class="offcanvas-navigation">
                            <ul class="mobile-menu">
                                <li class="menu-item-has-children active">
                                    <a href="{{url('/')}}">
                                            <span class="mm-text">الصفحة الرئيسية
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{url('/')}}">
                                        <span class="mm-text">عننا</span>
                                    </a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">
                                            <span class="mm-text">المشاريع
                                        </span>
                                    </a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="{{url('/project-details')}}">
                                                <span class="mm-text">Project Page</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{url('/project-details')}}">
                                                <span class="mm-text">Project Details</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">
                                            <span class="mm-text">خدماتنا
                                        </span>
                                    </a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="services.html">
                                                <span class="mm-text">Service Page</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="service-details.html">
                                                <span class="mm-text">Service Details</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li  class="menu-item-has-children" style="padding-right: 15px;">
                                    <a href="{{url('/')}}">
                                        <span class="mm-text">التواصل</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="global-overlay"></div>
    </header>
    <!-- Main Header Area End Here -->



    <div class="video-wrap" data-vide-bg="{{asset('website/assets/media/video/hero-bg.mp4')}}">
        <div class="video-content text-white">
            <span class="sub-title pb-4">شركة الانظمة المشتركة</span>
            <h2 class="title mb-2">لادوات ومعدات الامن والسلامه</h2>
            <p class="short-desc mx-auto mb-7">لجميع اعمال الالكتروميكانيك.</p>
            <div class="button-wrap">
                <a class="btn btn-primary btn-white-hover btn-lg btn-radius" href="contact.html">راسلنا</a>
            </div>
        </div>
    </div>


    <!-- Begin Service Area -->
    <div class="service-area pt-110 pb-115">
        <div class="container">
            <div class="section-title">
                <h3 class="heading pb-3 mb-6">خدماتنا</h3>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-item svg-icon-box">
                        <div class="service-icon mb-5">
                            <img src="{{asset('website/assets/images/intro/icon/1-1.png')}}" alt="Service Icon">
                        </div>
                        <div class="service-content">
                            <h4 class="heading mb-3">
                                <a href="service-details.html">مكافحة الحريق</a>
                            </h4>
                            <p class="short-desc mb-0">يوجد العديد من الشركات المتخصصة فى تقديم خدمة مكافحة الحريق فى دولة الكويت ولكن شركتنا تتميز بجودتها فى انهاء اعمالها على اعلى كفائة كما تضمن شركتنا لعملائها تسليم المبنى لقوة الاطفاء العام دون ادنى مشاكل.</p>
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
                                <a href="service-details.html">انذار الحريق</a>
                            </h4>
                            <p class="short-desc mb-0">تعد شركة الانظمة المشتركة من اكثر الشركات كفائة فى دولة الكويت فى مجال تركيبات انذار الحريق حيث تتميز شركة الانظمة المشتركة بسرعة انجاز اعمال الانذار وتسليمها على اكمل وجه للعميل وايضآ قوة الاطفاء العام. </p>
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
                                <a href="service-details.html">التهوية الميكانيكية للحريق</a>
                            </h4>
                            <p class="short-desc mb-0">لا يوجد الكثير من الشركات المختصة فى عمل التهوية الميكانيكية الخاصة بمكافحة الحريق ولكن تتميز شركة الانظمة المشتركة بعمل الحسابات اللازمة لاستخراج البيانات الصحيحة للمراوح وحساب كمية التهوية الميكانيكية بدقه وبالتالى تسليمها للعميل وقوة الاطفاء العام بسهولة دون اى عوائق.</p>
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
                                <a href="service-details.html">خدمات التبريد VRF</a>
                            </h4>
                            <p class="short-desc mb-0">تتميز شركة الانظمة المشتركة بعمل انظمة التبريد بدقة وتحقيق نسبة التبريد المطلوبة لدى العميل.</p>
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
                                <a href="service-details.html">خدمات الصحى</a>
                            </h4>
                            <p class="short-desc mb-0">بشهادة كثير من العملاء ومكاتب الاستشارى فى دولة الكويت تتميز شركة الانظمة المشتركة بتسليم اعمال الصحى على اكمل وجه وتحقيق الكفاءة المرجوة التى يتمناها العميل وفى اقل وقت ممكن.</p>
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
                    <h3 class="heading pb-3 mb-8">مشاريعنا</h3>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="masonary-menu text-center pb-6">
                            <button data-filter="*" class="is-checked"><span class="filter-text">الكل</span></button>
                            <button data-filter=".design"><span class="filter-text">الصحى</span></button>
                            <button data-filter=".ff"><span class="filter-text">الحريق</span></button>
                            <button data-filter=".exterior"><span class="filter-text">الصحى</span></button>
                            <button data-filter=".plumbing" style="padding-right: 15px;"><span class="filter-text">الانذار</span></button>
                        </div>
                    </div>
                </div>
                <div class="masonry-activation ">
                    <div class="row g-0 mesonry-list">
                        @foreach($projects as $project)

                            @php
                                $name = '';
                                    for ($i = 0;$i<=4;$i++){
                                           if($project->ff == 1)
                                                $name += 'ff';
                                    }
                            @endphp

                            <div class="col-lg-4 col-sm-6 masonary-item {{$name}}">
                                <a class="project-item" href="{{url('project-details')}}">
                                    <figure class="hover-direction mb-0">
                                        <img class="img-full" src="{{asset('website/assets/images/project/medium-size/1.jpg')}}" alt="Project Image">
                                        <figcaption>
                                            <div class="inner-content">
                                                <span class="category">fffffgn</span>
                                                <h4 class="title mb-3">Burj Khalifa In Dubai</h4>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </a>
                            </div>

                        @endforeach

                        <div class="col-lg-4 col-sm-6 masonary-item plumbing design">
                            <a class="project-item" href="{{url('project-details')}}">
                                <figure class="hover-direction mb-0">
                                    <img class="img-full" src="{{asset('website/assets/images/project/medium-size/1.jpg')}}" alt="Project Image">
                                    <figcaption>
                                        <div class="inner-content">
                                            <span class="category">3D Design</span>
                                            <h4 class="title mb-3">Burj Khalifa In Dubai</h4>
                                        </div>
                                    </figcaption>
                                </figure>
                            </a>
                        </div>
                        <div class="col-lg-4 col-sm-6 masonary-item design exterior">
                            <a class="project-item" href="{{url('project-details')}}">
                                <figure class="hover-direction mb-0">
                                    <img class="img-full" src="{{asset('website/assets/images/project/medium-size/2.jpg')}}" alt="Project Image">
                                    <figcaption>
                                        <div class="inner-content">
                                            <span class="category">Exterior</span>
                                            <h4 class="title mb-3">Shanghai Wheelock Square</h4>
                                        </div>
                                    </figcaption>
                                </figure>
                            </a>
                        </div>
                        <div class="col-lg-4 col-sm-6 masonary-item art interior">
                            <a class="project-item" href="{{url('project-details')}}">
                                <figure class="hover-direction mb-0">
                                    <img class="img-full" src="{{asset('website/assets/images/project/medium-size/1.jpg')}}" alt="Project Image">
                                    <figcaption>
                                        <div class="inner-content">
                                            <span class="category">3D Design</span>
                                            <h4 class="title mb-3">Burj Khalifa In Dubai</h4>
                                        </div>
                                    </figcaption>
                                </figure>
                            </a>
                        </div>
                        <div class="col-lg-4 col-sm-6 masonary-item art interior">
                            <a class="project-item" href="{{url('project-details')}}">
                                <figure class="hover-direction mb-0">
                                    <img class="img-full" src="{{asset('website/assets/images/project/medium-size/1.jpg')}}" alt="Project Image">
                                    <figcaption>
                                        <div class="inner-content">
                                            <span class="category">3D Design</span>
                                            <h4 class="title mb-3">Burj Khalifa In Dubai</h4>
                                        </div>
                                    </figcaption>
                                </figure>
                            </a>
                        </div>
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
                                        <h4 class="count-title mb-0">المشاريع</h4>
                                    </div>
                                    <div class="funfact-item">
                                        <h3 class="count mb-0" data-counterup-time="4000">529</h3>
                                        <h4 class="count-title mb-0">العملاء</h4>
                                    </div>
                                    <div class="funfact-item pb-0">
                                        <h3 class="count mb-0" data-counterup-time="5000">888</h3>
                                        <h4 class="count-title mb-0">المشاريع المكتملة</h4>
                                    </div>
                                    <div class="funfact-item pb-0">
                                        <h3 class="count mb-0" data-counterup-time="6000">100</h3>
                                        <h4 class="count-title mb-0">الجوائز</h4>
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
{{--
    <div class="team-area pt-110 pb-115">
        <div class="container">
            <div class="section-title">
                <h3 class="heading pb-3 mb-8">Our Team</h3>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="swiper-container team-member-slider nav-pagination_wrap circle-arrow with-bg_white arrow-radius">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="team-member">
                                    <div class="team-member-img">
                                        <a href="#">
                                            <img class="img-full" src="assets/images/team/1.png" alt="Team Member">
                                        </a>
                                        <div class="team-member-action">
                                            <ul class="social-link">
                                                <li class="facebook">
                                                    <a href="#">
                                                        <i class="fa fa-facebook"></i>
                                                    </a>
                                                </li>
                                                <li class="twitter">
                                                    <a href="#">
                                                        <i class="fa fa-twitter"></i>
                                                    </a>
                                                </li>
                                                <li class="pinterest">
                                                    <a href="#">
                                                        <i class="fa fa-pinterest"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="team-member-content pt-4">
                                        <h4 class="member-name mb-1">
                                            <a href="#">Johnny Doe</a>
                                        </h4>
                                        <span class="designation">Manager</span>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="team-member">
                                    <div class="team-member-img">
                                        <a href="#">
                                            <img class="img-full" src="assets/images/team/2.png" alt="Team Member">
                                        </a>
                                        <div class="team-member-action">
                                            <ul class="social-link">
                                                <li class="facebook">
                                                    <a href="#">
                                                        <i class="fa fa-facebook"></i>
                                                    </a>
                                                </li>
                                                <li class="twitter">
                                                    <a href="#">
                                                        <i class="fa fa-twitter"></i>
                                                    </a>
                                                </li>
                                                <li class="pinterest">
                                                    <a href="#">
                                                        <i class="fa fa-pinterest"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="team-member-content pt-4">
                                        <h4 class="member-name mb-1">
                                            <a href="#">Lana Winter</a>
                                        </h4>
                                        <span class="designation">Coordinator</span>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="team-member">
                                    <div class="team-member-img">
                                        <a href="#">
                                            <img class="img-full" src="assets/images/team/3.png" alt="Team Member">
                                        </a>
                                        <div class="team-member-action">
                                            <ul class="social-link">
                                                <li class="facebook">
                                                    <a href="#">
                                                        <i class="fa fa-facebook"></i>
                                                    </a>
                                                </li>
                                                <li class="twitter">
                                                    <a href="#">
                                                        <i class="fa fa-twitter"></i>
                                                    </a>
                                                </li>
                                                <li class="pinterest">
                                                    <a href="#">
                                                        <i class="fa fa-pinterest"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="team-member-content pt-4">
                                        <h4 class="member-name mb-1">
                                            <a href="#">David Lummer</a>
                                        </h4>
                                        <span class="designation">Inspector</span>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="team-member">
                                    <div class="team-member-img">
                                        <a href="#">
                                            <img class="img-full" src="assets/images/team/4.png" alt="Team Member">
                                        </a>
                                        <div class="team-member-action">
                                            <ul class="social-link">
                                                <li class="facebook">
                                                    <a href="#">
                                                        <i class="fa fa-facebook"></i>
                                                    </a>
                                                </li>
                                                <li class="twitter">
                                                    <a href="#">
                                                        <i class="fa fa-twitter"></i>
                                                    </a>
                                                </li>
                                                <li class="pinterest">
                                                    <a href="#">
                                                        <i class="fa fa-pinterest"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="team-member-content pt-4">
                                        <h4 class="member-name mb-1">
                                            <a href="#">Jordin Clark</a>
                                        </h4>
                                        <span class="designation">Worker</span>
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

<!-- Plugins & Activation JS For Only This Page -->
<script src="{{asset('website/assets/js/plugins/swiper.js')}}"></script>
<script src="{{asset('website/assets/js/plugins/jquery.vide.js')}}"></script>
<script src="{{asset('website/assets/js/plugins/jquery.counterup.js')}}"></script>

<!--Main JS (Common Activation Codes)-->
<script src="{{asset('website/assets/js/main.js')}}"></script>

</body>

</html>
