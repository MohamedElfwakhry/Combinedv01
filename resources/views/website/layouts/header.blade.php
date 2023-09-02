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
                    <div class="col-lg-4 col-8">

                        <div class="header-logo">
                            <a href="{{url('/')}}">
                                <img src="{{$settings->image}}" alt="Header Logo" >
                            </a>
                        </div>


                    </div>
                    <div class="col-lg-8 d-none d-lg-block">
                        <div class="main-menu text-center">
                            <nav class="main-nav">
                                @if(LaravelLocalization::getCurrentLocale() == 'ar')
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
                                        <li class="drop-holder" style="padding-right: 10px;">
                                            <a href="{{url('/')}}">
                                                اللغة
                                            </a>
                                            <ul class="drop-menu">
                                                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                                    <li>
                                                        <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                                            {{ $properties['native'] }}
                                                        </a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </li>

                                    </ul>
                                @else
                                    <ul>
                                        <li class="drop-holder">
                                            <a href="{{url('/')}}">
                                                Home
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{url('/')}}">About us</a>
                                        </li>
                                        <li class="drop-holder">
                                            <a href="{{url('/')}}">
                                                Projects
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
                                                Our services
                                            </a>
                                        </li>
                                        <li class="drop-holder" style="padding-right: 10px;">
                                            <a href="{{url('/')}}">Contact Us</a>
                                        </li>
                                        <li class="drop-holder" style="padding-right: 10px;">
                                            <a href="{{url('/')}}">
                                                Language
                                            </a>
                                            <ul class="drop-menu">
                                                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                                    <li>
                                                        <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                                            {{ $properties['native'] }}
                                                        </a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </li>

                                    </ul>
                                @endif
                            </nav>
                        </div>
                    </div>
{{--
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
--}}
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
                        @if(LaravelLocalization::getCurrentLocale() == 'ar')
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
                                <li class="menu-item-has-children" >
                                    <a href="{{url('/')}}">
                                        اللغة
                                    </a>
                                    <ul class="sub-menu">
                                        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                            <li>
                                                <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                                    {{ $properties['native'] }}
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>

                            </ul>
                        @else
                            <ul class="mobile-menu">
                                <li class="menu-item-has-children active">
                                    <a href="{{url('/')}}">
                                            <span class="mm-text">Home
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{url('/')}}">
                                        <span class="mm-text">About us</span>
                                    </a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">
                                            <span class="mm-text">Projects
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
                                            <span class="mm-text">OUR SERVICES
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
                                        <span class="mm-text">CONTACT US</span>
                                    </a>
                                </li>
                                <li class="menu-item-has-children" >
                                    <a href="{{url('/')}}">
                                        Language
                                    </a>
                                    <ul class="sub-menu">
                                        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                            <li>
                                                <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                                    {{ $properties['native'] }}
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>

                            </ul>
                        @endif
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="global-overlay"></div>
</header>
<!-- Main Header Area End Here -->
