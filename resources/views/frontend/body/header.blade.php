<style>
    .button-css {
        border: none;
        padding: 10px 20px;
        background-color: #F7A804;
        color: white;
        cursor: pointer;
    }
</style>

<div class="header-area">
    <div class="main-header ">
        <div class="header-top black-bg d-none d-sm-block">
            <div class="container">
                <div class="col-xl-12">
                    <div class="row d-flex justify-content-between align-items-center">
                        <div class="header-info-left">
                            <ul>
                                <li class="title"><span class="flaticon-energy"></span> RealMatterInfo</li>
                                <li><a href="https://www.fb.com/sai4ull"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li> <a href="#"><i class="fab fa-youtube"></i></a></li>
                            </ul>
                        </div>
                        <div class="header-info-right">
                            <ul class="header-date">
                                <li><span class="flaticon-calendar"></span> +2348167145276</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-mid gray-bg">
            <div class="container">
                <div class="row d-flex align-items-center">
                    <!-- Logo -->
                    <div class="col-xl-3 col-lg-3 col-md-3 d-none d-md-block">
                        <div class="logo">
                            <h2 class="fw-bold">REAL<span style="color: #F7A804">MATTER</span>INFO</h2>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-9 col-md-9">
                        <div class="header-banner f-right ">
                            <a href="">
                                <img src="{{ asset('frontend/assets/img/gallery/ads_banner.png') }}" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom header-sticky">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-8 col-lg-8 col-md-12 header-flex">
                        <!-- sticky -->
                        <div class="sticky-logo">
                            <a href="index.html"><img src="{{ asset('frontend/assets/img/logo/logo2.png') }}"
                                    alt=""></a>
                        </div>
                        <!-- Main-menu -->
                        <div class="main-menu d-none d-md-block">
                            <nav>
                                <ul id="navigation">
                                    <li><a href="{{ url('/') }}">Home</a></li>
                                    <li><a href="{{url('about')}}">about</a></li>
                                    <li><a href="{{route('latest.news')}}">Latest News</a></li>
                                    <li><a href="{{ route('blog.list') }}">Blog</a></li>
                                    <li><a href="{{ route('video.list') }}">Video</a></li>
                                    {{-- <li><a href="#">Pages</a>
                                        <ul class="submenu">
                                            <li><a href="blog.html">Blog</a></li>
                                            <li><a href="blog_details.html">Blog Details</a></li>
                                            <li><a href="elements.html">Element</a></li>
                                        </ul>
                                    </li> --}}
                                    <li><a href="{{route('contact')}}">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4">
                        <div class="header-right f-right d-none d-lg-block">
                            <!-- Heder social -->
                            {{-- <ul class="header-social">
                                <li><a href="https://www.fb.com/sai4ull"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li> <a href="#"><i class="fab fa-youtube"></i></a></li>
                            </ul> --}}
                            <!-- Search Nav -->
                            {{-- <div class="nav-search search-switch">
                                <i class="fa fa-search"></i>
                            </div> --}}
                            <form action="{{ route('search.post') }}" method="post">
                                @csrf
                                <div class="d-flex">
                                    <input type="text" class="form-control" name="search" id=""
                                        placeholder="Search post">
                                    <button type="submit" class="button-css"><i class="fa fa-search"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Mobile Menu -->
                    <div class="col-12">
                        <div class="mobile_menu d-block d-md-none"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
