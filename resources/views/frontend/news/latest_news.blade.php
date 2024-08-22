@extends('frontend.master')

@section('home')

<style>
    .my-img-what {
        width: 360px !important;
        height: 245px !important;
        object-fit: cover;
        transition: transform 0.3s ease;
    }

    .my-img-post {
        width: 85px !important;
        height: 79px !important;
        object-fit: cover;
        transition: transform 0.3s ease;
    }
</style>


<main>
    <!-- About US Start -->
    <div class="about-area2 gray-bg pt-60 pb-60">
        <div class="container">
                <div class="row">
                <div class="col-lg-8">
                    <div class="whats-news-wrapper">
                        <!-- Heading & Nav Button -->
                            <div class="row justify-content-between align-items-end mb-15">
                                <div class="col-xl-4">
                                    <div class="section-tittle mb-30">
                                        <h3>Latest News</h3>
                                    </div>
                                </div>
                                <div class="col-xl-8 col-md-9">
                                    {{-- <div class="properties__button">
                                        <!--Nav Button  -->
                                        <nav>
                                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Lifestyle</a>
                                                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Travel</a>
                                                <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Fashion</a>
                                                <a class="nav-item nav-link" id="nav-last-tab" data-toggle="tab" href="#nav-last" role="tab" aria-controls="nav-contact" aria-selected="false">Sports</a>
                                                <a class="nav-item nav-link" id="nav-Sports" data-toggle="tab" href="#nav-nav-Sport" role="tab" aria-controls="nav-contact" aria-selected="false">Technology</a>
                                            </div>
                                        </nav>
                                        <!--End Nav Button  -->
                                    </div> --}}
                                </div>
                            </div>
                            <!-- Tab content -->
                            <div class="row">
                                <div class="col-12">
                                    <!-- Nav Card -->
                                    <div class="tab-content" id="nav-tabContent">
                                        <!-- card one -->
                                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                            <div class="row">
                                                @foreach ($latestNews as $item)
                                                <div class="col-xl-6 col-lg-6 col-md-6">
                                                    <div class="whats-news-single mb-40 mb-40">
                                                        <div class="whates-img">
                                                            <img src="{{asset($item->post_image)}}" alt="" class="my-img-what">
                                                        </div>
                                                        <div class="whates-caption whates-caption2">
                                                            <h4><a href="#">{{$item->post_title}}</a></h4>
                                                            <span>by Alice cloe   -   Jun 19, 2020</span>
                                                            <p>{!! substr($item->long_descp, 0, 80) !!}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach
                                                {{-- <div class="col-xl-6 col-lg-6 col-md-6">
                                                    <div class="whats-news-single mb-40 mb-40">
                                                        <div class="whates-img">
                                                            <img src="assets/img/gallery/whats_news_details1.png" alt="">
                                                        </div>
                                                        <div class="whates-caption whates-caption2">
                                                            <h4><a href="#">Secretart for Economic Air
                                                                plane that looks like</a></h4>
                                                            <span>by Alice cloe   -   Jun 19, 2020</span>
                                                            <p>Struggling to sell one multi-million dollar home currently on the market won’t stop actress and singer Jennifer Lopez.</p>
                                                        </div>
                                                    </div>
                                                </div> --}}
                                                {{-- <div class="col-xl-6 col-lg-6 col-md-6">
                                                    <div class="whats-news-single mb-40 mb-40">
                                                        <div class="whates-img">
                                                            <img src="assets/img/gallery/whats_news_details2.png" alt="">
                                                        </div>
                                                        <div class="whates-caption whates-caption2">
                                                            <h4><a href="#">Secretart for Economic Air
                                                                plane that looks like</a></h4>
                                                            <span>by Alice cloe   -   Jun 19, 2020</span>
                                                            <p>Struggling to sell one multi-million dollar home currently on the market won’t stop actress and singer Jennifer Lopez.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6">
                                                    <div class="whats-news-single mb-40 mb-40">
                                                        <div class="whates-img">
                                                            <img src="assets/img/gallery/whats_news_details3.png" alt="">
                                                        </div>
                                                        <div class="whates-caption whates-caption2">
                                                            <h4><a href="#">Secretart for Economic Air
                                                                plane that looks like</a></h4>
                                                            <span>by Alice cloe   -   Jun 19, 2020</span>
                                                            <p>Struggling to sell one multi-million dollar home currently on the market won’t stop actress and singer Jennifer Lopez.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6">
                                                    <div class="whats-news-single mb-40 mb-40">
                                                        <div class="whates-img">
                                                            <img src="assets/img/gallery/whats_news_details4.png" alt="">
                                                        </div>
                                                        <div class="whates-caption whates-caption2">
                                                            <h4><a href="#">Secretart for Economic Air
                                                                plane that looks like</a></h4>
                                                            <span>by Alice cloe   -   Jun 19, 2020</span>
                                                            <p>Struggling to sell one multi-million dollar home currently on the market won’t stop actress and singer Jennifer Lopez.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6">
                                                    <div class="whats-news-single mb-40 mb-40">
                                                        <div class="whates-img">
                                                            <img src="assets/img/gallery/whats_news_details5.png" alt="">
                                                        </div>
                                                        <div class="whates-caption whates-caption2">
                                                            <h4><a href="#">Secretart for Economic Air
                                                                plane that looks like</a></h4>
                                                            <span>by Alice cloe   -   Jun 19, 2020</span>
                                                            <p>Struggling to sell one multi-million dollar home currently on the market won’t stop actress and singer Jennifer Lopez.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6">
                                                    <div class="whats-news-single mb-40 mb-40">
                                                        <div class="whates-img">
                                                            <img src="assets/img/gallery/whats_news_details6.png" alt="">
                                                        </div>
                                                        <div class="whates-caption whates-caption2">
                                                            <h4><a href="#">Secretart for Economic Air
                                                                plane that looks like</a></h4>
                                                            <span>by Alice cloe   -   Jun 19, 2020</span>
                                                            <p>Struggling to sell one multi-million dollar home currently on the market won’t stop actress and singer Jennifer Lopez.</p>
                                                        </div>
                                                    </div>
                                                </div> --}}
                                            </div>
                                        </div>
                                        <!-- Card two -->
                                        {{-- <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                            <div class="row">
                                                <div class="col-xl-6 col-lg-6 col-md-6">
                                                    <div class="whats-news-single mb-40 mb-40">
                                                        <div class="whates-img">
                                                            <img src="assets/img/gallery/whats_news_details4.png" alt="">
                                                        </div>
                                                        <div class="whates-caption whates-caption2">
                                                            <h4><a href="#">Secretart for Economic Air
                                                                plane that looks like</a></h4>
                                                            <span>by Alice cloe   -   Jun 19, 2020</span>
                                                            <p>Struggling to sell one multi-million dollar home currently on the market won’t stop actress and singer Jennifer Lopez.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6">
                                                    <div class="whats-news-single mb-40 mb-40">
                                                        <div class="whates-img">
                                                            <img src="assets/img/gallery/whats_news_details6.png" alt="">
                                                        </div>
                                                        <div class="whates-caption whates-caption2">
                                                            <h4><a href="#">Secretart for Economic Air
                                                                plane that looks like</a></h4>
                                                            <span>by Alice cloe   -   Jun 19, 2020</span>
                                                            <p>Struggling to sell one multi-million dollar home currently on the market won’t stop actress and singer Jennifer Lopez.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6">
                                                    <div class="whats-news-single mb-40 mb-40">
                                                        <div class="whates-img">
                                                            <img src="assets/img/gallery/whats_news_details5.png" alt="">
                                                        </div>
                                                        <div class="whates-caption whates-caption2">
                                                            <h4><a href="#">Secretart for Economic Air
                                                                plane that looks like</a></h4>
                                                            <span>by Alice cloe   -   Jun 19, 2020</span>
                                                            <p>Struggling to sell one multi-million dollar home currently on the market won’t stop actress and singer Jennifer Lopez.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6">
                                                    <div class="whats-news-single mb-40 mb-40">
                                                        <div class="whates-img">
                                                            <img src="assets/img/gallery/whats_news_details4.png" alt="">
                                                        </div>
                                                        <div class="whates-caption whates-caption2">
                                                            <h4><a href="#">Secretart for Economic Air
                                                                plane that looks like</a></h4>
                                                            <span>by Alice cloe   -   Jun 19, 2020</span>
                                                            <p>Struggling to sell one multi-million dollar home currently on the market won’t stop actress and singer Jennifer Lopez.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6">
                                                    <div class="whats-news-single mb-40 mb-40">
                                                        <div class="whates-img">
                                                            <img src="assets/img/gallery/whats_news_details5.png" alt="">
                                                        </div>
                                                        <div class="whates-caption whates-caption2">
                                                            <h4><a href="#">Secretart for Economic Air
                                                                plane that looks like</a></h4>
                                                            <span>by Alice cloe   -   Jun 19, 2020</span>
                                                            <p>Struggling to sell one multi-million dollar home currently on the market won’t stop actress and singer Jennifer Lopez.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6">
                                                    <div class="whats-news-single mb-40 mb-40">
                                                        <div class="whates-img">
                                                            <img src="assets/img/gallery/whats_news_details1.png" alt="">
                                                        </div>
                                                        <div class="whates-caption whates-caption2">
                                                            <h4><a href="#">Secretart for Economic Air
                                                                plane that looks like</a></h4>
                                                            <span>by Alice cloe   -   Jun 19, 2020</span>
                                                            <p>Struggling to sell one multi-million dollar home currently on the market won’t stop actress and singer Jennifer Lopez.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Card three -->
                                        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                                            <div class="row">
                                                <div class="col-xl-6 col-lg-6 col-md-6">
                                                    <div class="whats-news-single mb-40 mb-40">
                                                        <div class="whates-img">
                                                            <img src="assets/img/gallery/whats_news_details3.png" alt="">
                                                        </div>
                                                        <div class="whates-caption whates-caption2">
                                                            <h4><a href="#">Secretart for Economic Air
                                                                plane that looks like</a></h4>
                                                            <span>by Alice cloe   -   Jun 19, 2020</span>
                                                            <p>Struggling to sell one multi-million dollar home currently on the market won’t stop actress and singer Jennifer Lopez.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6">
                                                    <div class="whats-news-single mb-40 mb-40">
                                                        <div class="whates-img">
                                                            <img src="assets/img/gallery/whats_news_details5.png" alt="">
                                                        </div>
                                                        <div class="whates-caption whates-caption2">
                                                            <h4><a href="#">Secretart for Economic Air
                                                                plane that looks like</a></h4>
                                                            <span>by Alice cloe   -   Jun 19, 2020</span>
                                                            <p>Struggling to sell one multi-million dollar home currently on the market won’t stop actress and singer Jennifer Lopez.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6">
                                                    <div class="whats-news-single mb-40 mb-40">
                                                        <div class="whates-img">
                                                            <img src="assets/img/gallery/whats_news_details1.png" alt="">
                                                        </div>
                                                        <div class="whates-caption whates-caption2">
                                                            <h4><a href="#">Secretart for Economic Air
                                                                plane that looks like</a></h4>
                                                            <span>by Alice cloe   -   Jun 19, 2020</span>
                                                            <p>Struggling to sell one multi-million dollar home currently on the market won’t stop actress and singer Jennifer Lopez.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6">
                                                    <div class="whats-news-single mb-40 mb-40">
                                                        <div class="whates-img">
                                                            <img src="assets/img/gallery/whats_news_details4.png" alt="">
                                                        </div>
                                                        <div class="whates-caption whates-caption2">
                                                            <h4><a href="#">Secretart for Economic Air
                                                                plane that looks like</a></h4>
                                                            <span>by Alice cloe   -   Jun 19, 2020</span>
                                                            <p>Struggling to sell one multi-million dollar home currently on the market won’t stop actress and singer Jennifer Lopez.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6">
                                                    <div class="whats-news-single mb-40 mb-40">
                                                        <div class="whates-img">
                                                            <img src="assets/img/gallery/whats_news_details3.png" alt="">
                                                        </div>
                                                        <div class="whates-caption whates-caption2">
                                                            <h4><a href="#">Secretart for Economic Air
                                                                plane that looks like</a></h4>
                                                            <span>by Alice cloe   -   Jun 19, 2020</span>
                                                            <p>Struggling to sell one multi-million dollar home currently on the market won’t stop actress and singer Jennifer Lopez.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6">
                                                    <div class="whats-news-single mb-40 mb-40">
                                                        <div class="whates-img">
                                                            <img src="assets/img/gallery/whats_news_details6.png" alt="">
                                                        </div>
                                                        <div class="whates-caption whates-caption2">
                                                            <h4><a href="#">Secretart for Economic Air
                                                                plane that looks like</a></h4>
                                                            <span>by Alice cloe   -   Jun 19, 2020</span>
                                                            <p>Struggling to sell one multi-million dollar home currently on the market won’t stop actress and singer Jennifer Lopez.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- card fure -->
                                        <div class="tab-pane fade" id="nav-last" role="tabpanel" aria-labelledby="nav-last-tab">
                                            <div class="row">
                                                <div class="col-xl-6 col-lg-6 col-md-6">
                                                    <div class="whats-news-single mb-40 mb-40">
                                                        <div class="whates-img">
                                                            <img src="assets/img/gallery/whats_news_details6.png" alt="">
                                                        </div>
                                                        <div class="whates-caption whates-caption2">
                                                            <h4><a href="#">Secretart for Economic Air
                                                                plane that looks like</a></h4>
                                                            <span>by Alice cloe   -   Jun 19, 2020</span>
                                                            <p>Struggling to sell one multi-million dollar home currently on the market won’t stop actress and singer Jennifer Lopez.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6">
                                                    <div class="whats-news-single mb-40 mb-40">
                                                        <div class="whates-img">
                                                            <img src="assets/img/gallery/whats_news_details2.png" alt="">
                                                        </div>
                                                        <div class="whates-caption whates-caption2">
                                                            <h4><a href="#">Secretart for Economic Air
                                                                plane that looks like</a></h4>
                                                            <span>by Alice cloe   -   Jun 19, 2020</span>
                                                            <p>Struggling to sell one multi-million dollar home currently on the market won’t stop actress and singer Jennifer Lopez.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6">
                                                    <div class="whats-news-single mb-40 mb-40">
                                                        <div class="whates-img">
                                                            <img src="assets/img/gallery/whats_news_details4.png" alt="">
                                                        </div>
                                                        <div class="whates-caption whates-caption2">
                                                            <h4><a href="#">Secretart for Economic Air
                                                                plane that looks like</a></h4>
                                                            <span>by Alice cloe   -   Jun 19, 2020</span>
                                                            <p>Struggling to sell one multi-million dollar home currently on the market won’t stop actress and singer Jennifer Lopez.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6">
                                                    <div class="whats-news-single mb-40 mb-40">
                                                        <div class="whates-img">
                                                            <img src="assets/img/gallery/whats_news_details2.png" alt="">
                                                        </div>
                                                        <div class="whates-caption whates-caption2">
                                                            <h4><a href="#">Secretart for Economic Air
                                                                plane that looks like</a></h4>
                                                            <span>by Alice cloe   -   Jun 19, 2020</span>
                                                            <p>Struggling to sell one multi-million dollar home currently on the market won’t stop actress and singer Jennifer Lopez.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6">
                                                    <div class="whats-news-single mb-40 mb-40">
                                                        <div class="whates-img">
                                                            <img src="assets/img/gallery/whats_news_details5.png" alt="">
                                                        </div>
                                                        <div class="whates-caption whates-caption2">
                                                            <h4><a href="#">Secretart for Economic Air
                                                                plane that looks like</a></h4>
                                                            <span>by Alice cloe   -   Jun 19, 2020</span>
                                                            <p>Struggling to sell one multi-million dollar home currently on the market won’t stop actress and singer Jennifer Lopez.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6">
                                                    <div class="whats-news-single mb-40 mb-40">
                                                        <div class="whates-img">
                                                            <img src="assets/img/gallery/whats_news_details1.png" alt="">
                                                        </div>
                                                        <div class="whates-caption whates-caption2">
                                                            <h4><a href="#">Secretart for Economic Air
                                                                plane that looks like</a></h4>
                                                            <span>by Alice cloe   -   Jun 19, 2020</span>
                                                            <p>Struggling to sell one multi-million dollar home currently on the market won’t stop actress and singer Jennifer Lopez.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- card Five -->
                                        <div class="tab-pane fade" id="nav-nav-Sport" role="tabpanel" aria-labelledby="nav-Sports">
                                            <div class="row">
                                                <div class="col-xl-6 col-lg-6 col-md-6">
                                                    <div class="whats-news-single mb-40 mb-40">
                                                        <div class="whates-img">
                                                            <img src="assets/img/gallery/whats_news_details1.png" alt="">
                                                        </div>
                                                        <div class="whates-caption whates-caption2">
                                                            <h4><a href="#">Secretart for Economic Air
                                                                plane that looks like</a></h4>
                                                            <span>by Alice cloe   -   Jun 19, 2020</span>
                                                            <p>Struggling to sell one multi-million dollar home currently on the market won’t stop actress and singer Jennifer Lopez.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6">
                                                    <div class="whats-news-single mb-40 mb-40">
                                                        <div class="whates-img">
                                                            <img src="assets/img/gallery/whats_news_details2.png" alt="">
                                                        </div>
                                                        <div class="whates-caption whates-caption2">
                                                            <h4><a href="#">Secretart for Economic Air
                                                                plane that looks like</a></h4>
                                                            <span>by Alice cloe   -   Jun 19, 2020</span>
                                                            <p>Struggling to sell one multi-million dollar home currently on the market won’t stop actress and singer Jennifer Lopez.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6">
                                                    <div class="whats-news-single mb-40 mb-40">
                                                        <div class="whates-img">
                                                            <img src="assets/img/gallery/whats_news_details3.png" alt="">
                                                        </div>
                                                        <div class="whates-caption whates-caption2">
                                                            <h4><a href="#">Secretart for Economic Air
                                                                plane that looks like</a></h4>
                                                            <span>by Alice cloe   -   Jun 19, 2020</span>
                                                            <p>Struggling to sell one multi-million dollar home currently on the market won’t stop actress and singer Jennifer Lopez.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6">
                                                    <div class="whats-news-single mb-40 mb-40">
                                                        <div class="whates-img">
                                                            <img src="assets/img/gallery/whats_news_details4.png" alt="">
                                                        </div>
                                                        <div class="whates-caption whates-caption2">
                                                            <h4><a href="#">Secretart for Economic Air
                                                                plane that looks like</a></h4>
                                                            <span>by Alice cloe   -   Jun 19, 2020</span>
                                                            <p>Struggling to sell one multi-million dollar home currently on the market won’t stop actress and singer Jennifer Lopez.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6">
                                                    <div class="whats-news-single mb-40 mb-40">
                                                        <div class="whates-img">
                                                            <img src="assets/img/gallery/whats_news_details5.png" alt="">
                                                        </div>
                                                        <div class="whates-caption whates-caption2">
                                                            <h4><a href="#">Secretart for Economic Air
                                                                plane that looks like</a></h4>
                                                            <span>by Alice cloe   -   Jun 19, 2020</span>
                                                            <p>Struggling to sell one multi-million dollar home currently on the market won’t stop actress and singer Jennifer Lopez.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6">
                                                    <div class="whats-news-single mb-40 mb-40">
                                                        <div class="whates-img">
                                                            <img src="assets/img/gallery/whats_news_details6.png" alt="">
                                                        </div>
                                                        <div class="whates-caption whates-caption2">
                                                            <h4><a href="#">Secretart for Economic Air
                                                                plane that looks like</a></h4>
                                                            <span>by Alice cloe   -   Jun 19, 2020</span>
                                                            <p>Struggling to sell one multi-million dollar home currently on the market won’t stop actress and singer Jennifer Lopez.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> --}}
                                    </div>
                                <!-- End Nav Card -->
                                </div>
                            </div>
                    </div>
                    </div>
                    <div class="col-lg-4">
                        <!-- Flow Socail -->
                        <div class="single-follow mb-45">
                            <div class="single-box">
                                <div class="follow-us d-flex align-items-center">
                                    <div class="follow-social">
                                        <a href="#"><img src="{{asset('frontend/assets/img/news/icon-fb.png')}}" alt=""></a>
                                    </div>
                                    <div class="follow-count">
                                        <span>Folow us on</span>
                                        <p>Facebook</p>
                                    </div>
                                </div>
                                <div class="follow-us d-flex align-items-center">
                                    <div class="follow-social">
                                        <a href="#"><img src="{{asset('frontend/assets/img/news/icon-tw.png')}}" alt=""></a>
                                    </div>
                                    <div class="follow-count">
                                        <span>Folow us on</span>
                                        <p>Twitter</p>
                                    </div>
                                </div>
                                    <div class="follow-us d-flex align-items-center">
                                    <div class="follow-social">
                                        <a href="#"><img src="{{asset('frontend/assets/img/news/icon-ins.png')}}" alt=""></a>
                                    </div>
                                    <div class="follow-count">
                                        <span>Folow us on</span>
                                        <p>Instagram</p>
                                    </div>
                                </div>
                                <div class="follow-us d-flex align-items-center">
                                    <div class="follow-social">
                                        <a href="#"><img src="{{asset('frontend/assets/img/news/icon-yo.png')}}" alt=""></a>
                                    </div>
                                    <div class="follow-count">
                                        <span>Folow us on</span>
                                        <p>YouTube</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-ads mb-45 p-4" style="background-color: #586AC3;">
                            <div class="text-center">
                                <a href="#">
                                    <h1 class="text-white">ADVERTISE</h1>
                                    <h1 class="text-white">HERE</h1>
                                    <h5 class="text-white">Contact Us Now</h5>
                                </a>
                            </div>
                        </div>
                        <div>
                            <aside class="single_sidebar_widget popular_post_widget">
                                <h5 class="widget_title">Recent Post</h5>
                                @foreach ($post as $item)
                                    <div class="media post_item p-2">
                                        <a href="{{ url('post/details/' . $item->post_slug) }}">
                                            <img src="{{ asset($item->post_image) }}" alt="post" class="my-img-post">
                                        </a>
                                        <div class="media-body">
                                            <a href="{{ url('post/details/' . $item->post_slug) }}">
                                                <h6 class="pl-3">{{ substr($item->post_title, 0, 40) }}...</h6>
                                            </a>
                                            <p class="pl-3">{{ $item->created_at->format('M d Y') }}</p>
                                        </div>
                                    </div>
                                @endforeach

                            </aside>
                        </div>
                        <!-- New Poster -->
                        <div class="news-poster d-none d-lg-block">
                            <img src="{{asset('frontend/assets/img/news/news_card.jpg')}}" alt="">
                        </div>
                    </div>
                </div>
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-start">
                    <li class="page-item">
                        {!!$latestNews->links('pagination::bootstrap-5')!!}
                    </li>

                    </ul>
                </nav>
        </div>
    </div>
    <!-- About US End -->
    <!--Start pagination -->
    <div class="pagination-area  gray-bg pb-45">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="single-wrap">

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End pagination  -->
</main>


@endsection
