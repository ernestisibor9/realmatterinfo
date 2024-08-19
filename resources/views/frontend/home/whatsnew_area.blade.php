@php
    $trendingMain = App\Models\Post::latest()->limit(4)->get();
    $trendingOne = App\Models\Post::latest()->limit(1)->get();
    $mostRecent = App\Models\Post::latest()->limit(3)->get();
    $lastInsertedRecord = App\Models\Post::latest()->first();
@endphp

<style>
    .my-img {
        width: 124px !important;
        height: 104px !important;
        object-fit: cover;
        transition: transform 0.3s ease;
    }

    .single-follow h1,
    h5 {
        color: #000000;
    }

    .last-img {
        width: 333px;
        height: 229px;
        object-fit: cover;
        transition: transform 0.3s ease;
    }

    .most-recent-img {
        width: 85px;
        height: 79px;
        object-fit: cover;
        transition: transform 0.3s ease;
    }
</style>
<section class="whats-news-area pt-50 pb-20 gray-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="whats-news-wrapper">
                    <!-- Heading & Nav Button -->
                    <div class="row justify-content-between align-items-end mb-15">
                        <div class="col-xl-4">
                            <div class="section-tittle mb-30">
                                <h3>Whats New</h3>
                            </div>
                        </div>
                        {{-- <div class="col-xl-8 col-md-9">
                Trending News
              </div> --}}
                    </div>
                    <!-- Tab content -->
                    <div class="row">
                        <div class="col-12">
                            <!-- Nav Card -->
                            <div class="tab-content" id="nav-tabContent">
                                <!-- card one -->
                                <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                                    aria-labelledby="nav-home-tab">
                                    <div class="row">
                                        @foreach ($trendingOne as $item)
                                            <div class="col-xl-6 col-lg-12">
                                                <div class="whats-news-single mb-40 mb-40">
                                                    <div class="whates-img">
                                                        <a
                                                            href="{{ url('post/details/'.$item->post_slug) }}">
                                                            <img src="{{ asset($item->post_image) }}" alt="" />
                                                        </a>

                                                    </div>
                                                    <div class="whates-caption">
                                                        <h4>
                                                            <a
                                                                href="{{ url('post/details/'.$item->post_slug) }}">{{ $item->post_title }}</a>
                                                        </h4>
                                                        <span>by Admin - {{ $item->created_at->format('M d Y') }}</span>
                                                        <p>
                                                            {!! substr($item->long_descp, 0, 200) !!}... <a href=""
                                                                class="btn ">read more</a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                        <!-- Left Details Caption -->

                                        <!-- Right single caption -->
                                        <div class="col-xl-6 col-lg-12">
                                            <div class="row">
                                                @foreach ($trendingMain as $item)
                                                    <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                                        <div class="whats-right-single mb-20">
                                                            <div class="whats-right-img">
                                                                <a
                                                                    href="{{ url('post/details/'.$item->post_slug) }}">
                                                                    <img src="{{ asset($item->post_image) }}"
                                                                        alt="Post image" class="my-img" />
                                                                </a>

                                                            </div>
                                                            <div class="whats-right-cap">
                                                                <span
                                                                    class="colorb">{{ $item->category->category_name }}</span>
                                                                <h4>
                                                                    <a
                                                                        href="{{ url('post/details/'.$item->post_slug) }}">{{ $item->post_title }}</a>
                                                                </h4>
                                                                <p>{{ $item->created_at->format('M d Y') }}</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                                <!-- single -->
                                                {{-- <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                                    <div class="whats-right-single mb-20">
                                                        <div class="whats-right-img">
                                                            <img src="assets/img/gallery/whats_right_img1.png"
                                                                alt="" />
                                                        </div>
                                                        <div class="whats-right-cap">
                                                            <span class="colorb">FASHION</span>
                                                            <h4>
                                                                <a href="latest_news.html">Portrait of group of friends
                                                                    ting eat.
                                                                    market in.</a>
                                                            </h4>
                                                            <p>Jun 19, 2020</p>
                                                        </div>
                                                    </div>
                                                </div> --}}
                                                {{-- <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                                    <div class="whats-right-single mb-20">
                                                        <div class="whats-right-img">
                                                            <img src="assets/img/gallery/whats_right_img2.png"
                                                                alt="" />
                                                        </div>
                                                        <div class="whats-right-cap">
                                                            <span class="colorb">FASHION</span>
                                                            <h4>
                                                                <a href="latest_news.html">Portrait of group of friends
                                                                    ting eat.
                                                                    market in.</a>
                                                            </h4>
                                                            <p>Jun 19, 2020</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                                    <div class="whats-right-single mb-20">
                                                        <div class="whats-right-img">
                                                            <img src="assets/img/gallery/whats_right_img3.png"
                                                                alt="" />
                                                        </div>
                                                        <div class="whats-right-cap">
                                                            <span class="colorg">FASHION</span>
                                                            <h4>
                                                                <a href="latest_news.html">Portrait of group of friends
                                                                    ting eat.
                                                                    market in.</a>
                                                            </h4>
                                                            <p>Jun 19, 2020</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                                    <div class="whats-right-single mb-20">
                                                        <div class="whats-right-img">
                                                            <img src="assets/img/gallery/whats_right_img4.png"
                                                                alt="" />
                                                        </div>
                                                        <div class="whats-right-cap">
                                                            <span class="colorr">FASHION</span>
                                                            <h4>
                                                                <a href="latest_news.html">Portrait of group of friends
                                                                    ting eat.
                                                                    market in.</a>
                                                            </h4>
                                                            <p>Jun 19, 2020</p>
                                                        </div>
                                                    </div>
                                                </div> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- End Nav Card -->
                        </div>
                    </div>
                </div>
                <!-- Banner -->
                <div class="banner-one mt-20 mb-30">
                    <img src="{{ asset('frontend/assets/img/gallery/ads_banner.png') }}" alt="">
                </div>
            </div>
            <div class="col-lg-4">
                <!-- Flow Socail -->
                <div class="single-follow mb-45" style="background-color: #586AC3;">
                    <div class="text-center">
                        <a href="#">
                            <h1 class="text-white">ADVERTISE</h1>
                            <h1 class="text-white">HERE</h1>
                            <h5 class="text-white">Contact Us Now</h5>
                        </a>
                    </div>
                </div>
                <!-- Most Recent Area -->
                <div class="most-recent-area">
                    <!-- Section Tittle -->
                    <div class="small-tittle mb-20">
                        <h4>Most Recent</h4>
                    </div>
                    <!-- Details -->
                    {{-- <div class="most-recent mb-40">
                        <div class="most-recent-img">
                            <img src="{{ asset($lastInsertedRecord->post_image) }}" alt="" class="last-img"/>
                            <div class="most-recent-cap">
                                <span class="bgbeg">{{ $lastInsertedRecord->category->category_name }}</span>
                                <h4>
                                    <a href="latest_news.html">{{ $lastInsertedRecord->post_title }}<br />
                                        </a>
                                </h4>
                                <p>Admin |  {{  $lastInsertedRecord->created_at->diffForHumans() }}</p>
                            </div>
                        </div>
                    </div> --}}
                    <!-- Single -->
                    @foreach ($mostRecent as $item)
                        <div class="most-recent-single">
                            <div class="most-recent-images">
                                <a href="{{ url('post/details/'.$item->post_slug) }}">
                                    <img src="{{ asset($item->post_image) }}" alt="" class="most-recent-img" />
                                </a>

                            </div>
                            <div class="most-recent-capt">
                                <h4>
                                    <a href="{{ url('post/details/'.$item->post_slug) }}">{{ $item->post_title }}</a>
                                </h4>
                                <p>Admin | {{ $item->created_at->diffForHumans() }}</p>
                            </div>
                        </div>
                    @endforeach
                    {{-- <div class="most-recent-single">
                        <div class="most-recent-images">
                            <img src="assets/img/gallery/most_recent1.png" alt="" />
                        </div>
                        <div class="most-recent-capt">
                            <h4>
                                <a href="latest_news.html">Scarlett’s disappointment at latest accolade</a>
                            </h4>
                            <p>Jhon | 2 hours ago</p>
                        </div>
                    </div>
                    <!-- Single -->
                    <div class="most-recent-single">
                        <div class="most-recent-images">
                            <img src="assets/img/gallery/most_recent2.png" alt="" />
                        </div>
                        <div class="most-recent-capt">
                            <h4>
                                <a href="latest_news.html">Most Beautiful Things to Do in Sidney with Your BF</a>
                            </h4>
                            <p>Jhon | 3 hours ago</p>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</section>
