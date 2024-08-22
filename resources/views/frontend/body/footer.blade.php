@php
    $mostPopularPosts = App\Models\Post::orderBy('view', 'desc')->limit(3)->get(); // Get top 5 most popular posts
@endphp

<style>
    .my-img-footer {
        width: 86px !important;
        height: 80px !important;
        object-fit: cover;
        transition: transform 0.3s ease;
    }
</style>
<!-- Footer Start-->
<div class="footer-main footer-bg">
    <div class="footer-area footer-padding">
        <div class="container">
            <div class="row d-flex justify-content-between">
                <div class="col-xl-3 col-lg-3 col-md-5 col-sm-8">
                    <div class="single-footer-caption mb-50">
                        <div class="single-footer-caption mb-30">
                            <!-- logo -->
                            <div class="footer-logo">
                                <a href="index.html"><img src="{{ asset('frontend/assets/img/logo/logo2.png') }}"
                                        alt=""></a>
                            </div>
                            <div class="footer-tittle">
                                <div class="footer-pera">
                                    <p class="info1">By virtue of the above exposure, Bhumbah is a philosopher,
                                        musician,web developer, real estate consultant, entrepreneur, and a blogger.</p>
                                    <p class="info2">34, Allen Avenue, Ikeja, Lagos</p>
                                    <p class="info2">Email: crusadewisdom1@yahoo.com</p>
                                    <p class="info2">Phone: +2348167145276
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-5 col-sm-7">
                    <div class="single-footer-caption mb-50">
                        <div class="footer-tittle">
                            <h4>Popular post</h4>
                        </div>
                        <!-- Popular post -->
                        @foreach ($mostPopularPosts as $item)
                            <div class="whats-right-single mb-20">
                                <div class="whats-right-img">
                                    <img src="{{ asset($item->post_image) }}" alt="" class="my-img-footer">
                                </div>
                                <div class="whats-right-cap">
                                    <h4><a
                                            href="{{ url('post/details/' . $item->post_slug) }}">{{ $item->post_title }}</a>
                                    </h4>
                                    <p>Admin | {{ $item->created_at->diffForHumans() }}</p>
                                </div>
                            </div>
                        @endforeach

                        <!-- Popular post -->
                        {{-- <div class="whats-right-single mb-20">
                                <div class="whats-right-img">
                                    <img src="assets/img/gallery/footer_post2.png" alt="">
                                </div>
                                <div class="whats-right-cap">
                                    <h4><a href="latest_news.html">Scarlett’s disappointment at latest accolade</a></h4>
                                    <p>Jhon | 2 hours ago</p>
                                </div>
                            </div>
                            <!-- Popular post -->
                            <div class="whats-right-single mb-20">
                                <div class="whats-right-img">
                                    <img src="assets/img/gallery/footer_post3.png" alt="">
                                </div>
                                <div class="whats-right-cap">
                                    <h4><a href="latest_news.html">Scarlett’s disappointment at latest accolade</a></h4>
                                    <p>Jhon | 2 hours ago</p>
                                </div>
                            </div> --}}
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-5 col-sm-7">
                    <div class="single-footer-caption mb-50">
                        <div class="banner">
                            <img src="{{ asset('frontend/assets/img/gallery/body_card4.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer-bottom aera -->
    <div class="footer-bottom-area footer-bg">
        <div class="container">
            <div class="footer-border">
                <div class="row d-flex align-items-center">
                    <div class="col-xl-12 ">
                        <div class="footer-copy-right text-center">
                            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;
                                <script>
                                    document.write(new Date().getFullYear());
                                </script> All rights reserved | RealMatterInfo <i
                                    class="fa fa-heart" aria-hidden="true"></i>  <a href="#"
                                    target="_blank"> Design by Ernzotech </a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End-->
