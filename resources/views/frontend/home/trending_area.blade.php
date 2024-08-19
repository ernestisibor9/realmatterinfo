
@php
    $trendingMain = App\Models\Post::latest()->limit(4)->get();
    $trendingRight = App\Models\Post::orderBy('created_at', 'desc')->limit(2)->get();
@endphp

<style>
    .my-img{
        width: 100% !important;
        height: 650px !important;
        object-fit: cover;
        transition: transform 0.3s ease;
    }
    .trend-right{
        width: 100%;
        height: 240px;
        object-fit: cover;
        transition: transform 0.3s ease;
    }
</style>

<div class="trending-area fix pt-25 gray-bg">
    <div class="container">
        <div class="trending-main">
            <div class="row">
                <div class="col-lg-8">
                    <!-- Trending Top -->
                    <div class="slider-active">
                        @foreach ($trendingMain as $item)
                        <div class="single-slider">
                            <div class="trending-top mb-30">
                                <div class="trend-top-img">
                                    <a href="{{ url('post/details/'.$item->post_slug) }}">
                                        <img src="{{asset($item->post_image)}}" alt="" >
                                    </a>

                                    <div class="trend-top-cap">
                                        <span class="bgr" data-animation="fadeInUp" data-delay=".2s" data-duration="1000ms">{{$item->category->category_name}}</span>
                                        <h2><a href="{{ url('post/details/'.$item->post_slug) }}" data-animation="fadeInUp" data-delay=".4s" data-duration="1000ms">{{$item->post_title}}</a></h2>
                                        <p data-animation="fadeInUp" data-delay=".6s" data-duration="1000ms">by Admin   -   {{$item->created_at->format('M d Y')}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <!-- Single -->

                        {{-- <!-- Single -->
                        <div class="single-slider">
                            <div class="trending-top mb-30">
                                <div class="trend-top-img">
                                    <img src="{{asset('frontend/assets/img/trending/trending_top02.jpg')}} " alt="">
                                    <div class="trend-top-cap">
                                        <span class="bgr" data-animation="fadeInUp" data-delay=".2s" data-duration="1000ms">Business</span>
                                        <h2><a href="latest_news.html" data-animation="fadeInUp" data-delay=".4s" data-duration="1000ms">Anna Lora Stuns In White At Her Australian Premiere</a></h2>
                                        <p data-animation="fadeInUp" data-delay=".6s" data-duration="1000ms">by Alice cloe   -   Jun 19, 2020</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Single -->
                        <div class="single-slider">
                            <div class="trending-top mb-30">
                                <div class="trend-top-img">
                                    <img src="{{asset('frontend/assets/img/trending/trending_top03.jpg')}}" alt="">
                                    <div class="trend-top-cap">
                                        <span class="bgr" data-animation="fadeInUp" data-delay=".2s" data-duration="1000ms">Business</span>
                                        <h2><a href="latest_news.html" data-animation="fadeInUp" data-delay=".4s" data-duration="1000ms">Anna Lora Stuns In White At Her Australian Premiere</a></h2>
                                        <p data-animation="fadeInUp" data-delay=".6s" data-duration="1000ms">by Alice cloe   -   Jun 19, 2020</p>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
                <!-- Right content -->
                <div class="col-lg-4">
                        <!-- Trending Top -->
                    <div class="row">
                        @foreach ($trendingRight as $item)
                        <div class="col-lg-12 col-md-6 col-sm-6">
                            <div class="trending-top mb-30">
                                <div class="trend-top-img">
                                    <a href="{{ url('post/details/'.$item->post_slug) }}">
                                        <img src="{{asset($item->post_image)}}" alt=""  class="trend-right">
                                    </a>
                                    <div class="trend-top-cap trend-top-cap2">
                                        <span class="bgb">{{$item->category->category_name}}</span>
                                        <h2><a href="{{ url('post/details/'.$item->post_slug) }}">{{$item->post_title}}</a></h2>
                                        <p>by Admin   -   {{$item->created_at->format('M d Y')}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        {{-- <div class="col-lg-12 col-md-6 col-sm-6">
                            <div class="trending-top mb-30">
                                <div class="trend-top-img">
                                    <img src="{{asset('frontend/assets/img/trending/trending_top3.jpg')}}" alt="">
                                    <div class="trend-top-cap trend-top-cap2">
                                        <span class="bgb">FASHION</span>
                                        <h2><a href="latest_news.html">Secretart for Economic Air
                                            plane that looks like</a></h2>
                                        <p>by Alice cloe   -   Jun 19, 2020</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-6 col-sm-6">
                            <div class="trending-top mb-30">
                                <div class="trend-top-img">
                                    <img src="{{asset('frontend/assets/img/trending/trending_top4.jpg')}}" alt="">
                                    <div class="trend-top-cap trend-top-cap2">
                                        <span class="bgg">TECH </span>
                                        <h2><a href="latest_news.html">Secretart for Economic Air plane that looks like</a></h2>
                                        <p>by Alice cloe   -   Jun 19, 2020</p>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
