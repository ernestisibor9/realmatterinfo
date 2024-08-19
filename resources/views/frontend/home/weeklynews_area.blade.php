@php
    $mostPopularPosts = App\Models\Post::orderBy('view', 'desc')->limit(5)->get(); // Get top 5 most popular posts
@endphp

<div class="weekly2-news-area pt-50 pb-30 gray-bg">
    <div class="container">
        <div class="weekly2-wrapper">
            <div class="row">
                <!-- Banner -->
                <div class="col-lg-3">
                    <div class="home-banner2 d-none d-lg-block">
                        <a href="">
                            <img src="{{asset('frontend/assets/img/gallery/body_card2.png')}}" alt="">
                        </a>

                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="slider-wrapper">
                        <!-- section Tittle -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="small-tittle mb-30">
                                    <h4>Most Popular</h4>
                                </div>
                            </div>
                        </div>
                        <!-- Slider -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="weekly2-news-active d-flex">
                                    @foreach ($mostPopularPosts  as $item)
                                    <div class="weekly2-single">
                                        <div class="weekly2-img">
                                            <a href="{{ url('post/details/'.$item->post_slug) }}">
                                                <img src="{{asset($item->post_image)}}" alt="">
                                            </a>

                                        </div>
                                        <div class="weekly2-caption">
                                            <h4><a href="{{ url('post/details/'.$item->post_slug) }}">{{$item->post_title}}</a></h4>
                                            <p>Admin  |  {{  $item->created_at->diffForHumans() }}</p>
                                        </div>
                                    </div>
                                    @endforeach
                                    <!-- Single -->

                                    <!-- Single -->
                                    {{-- <div class="weekly2-single">
                                        <div class="weekly2-img">
                                            <img src="assets/img/gallery/weeklyNews2.png" alt="">
                                        </div>
                                        <div class="weekly2-caption">
                                            <h4><a href="#">Scarlett’s disappointment at latest accolade</a></h4>
                                            <p>Jhon  |  2 hours ago</p>
                                        </div>
                                    </div>
                                    <!-- Single -->
                                    <div class="weekly2-single">
                                        <div class="weekly2-img">
                                            <img src="assets/img/gallery/weeklyNews3.png" alt="">
                                        </div>
                                        <div class="weekly2-caption">
                                            <h4><a href="#">Scarlett’s disappointment at latest accolade</a></h4>
                                            <p>Jhon  |  2 hours ago</p>
                                        </div>
                                    </div>
                                    <!-- Single -->
                                    <div class="weekly2-single">
                                        <div class="weekly2-img">
                                            <img src="assets/img/gallery/weeklyNews2.png" alt="">
                                        </div>
                                        <div class="weekly2-caption">
                                            <h4><a href="#">Scarlett’s disappointment at latest accolade</a></h4>
                                            <p>Jhon  |  2 hours ago</p>
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
