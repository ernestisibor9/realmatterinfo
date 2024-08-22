@extends('frontend.master')

@section('home')
    <style>
        .my-img-recent {
            width: 80px !important;
            height: 80px !important;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .single-ads:hover {
            color: white !important;
        }

        .ads-img {
            width: 100%;
            height: 250px;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .reply-section {
            display: none;
        }

        .my-img-details {
            width: 80px !important;
            height: 80px !important;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

    </style>

    <!--================Blog Area =================-->
    <section class="blog_area single-post-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 posts-list">
                    <div class="single-post">
                        <div class="feature-img">
                            <img class="img-fluid" src="{{ asset($videoDetails->post_image) }}" alt="">
                        </div>
                        <div class="blog_details">
                            <h2>
                                {{ $videoDetails->post_title }}
                            </h2>
                            <ul class="blog-info-link mt-3 mb-4">
                                <li><a href="#"><i
                                            class="fa fa-user"></i>{{ $videoDetails->category->category_name }}</a></li>
                                <li><a href="#"><i class="fa fa-comments"></i></a></li>
                            </ul>
                            <p class="excert">
                                {!! $videoDetails->long_descp !!}
                            </p>

                        </div>
                    </div>
                    <div class="navigation-top">
                        <div class="d-sm-flex justify-content-between text-center">
                            <p class="like-info"><span class="align-middle"></p>
                            <div class="col-sm-4 text-center my-2 my-sm-0">
                                <!-- <p class="comment-count"><span class="align-middle"><i class="fa fa-comment"></i></span> 06 Comments</p> -->
                            </div>
                            <h6>Share: </h6>
                            <ul class="social-icons">
                                <li><a href="#"><i class="fab fa-facebook-f facebook-share"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter twitter-share"></i></a></li>
                                <li><a href="#"><i class="fab fa-whatsapp whatsapp-share"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram instagram-share"></i></a></li>
                            </ul>
                        </div>
                        <div>
                            <h3 class="mb-3">Watch below:</h3>
                            <iframe width="100%" height="400px"
                                src="https://www.youtube.com/embed/{{ $videoDetails->video_url }}"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

                        </div>
                    </div>
                    {{-- <div class="blog-author">
                        <div class="media align-items-center">
                            <img src="assets/img/blog/author.png" alt="">
                            <div class="media-body">
                                <a href="#">
                                    <h4>Harvard milan</h4>
                                </a>
                                <p>Second divided from form fish beast made. Every of seas all gathered use saying you're,
                                    he
                                    our dominion twon Second divided from</p>
                            </div>
                        </div>
                    </div> --}}


                    {{-- @php
                        $comment = App\Models\Comment::where('post_id',  $videoDetails->id)
                            ->where('parent_id', null)
                            ->where('status', 'active')
                            ->limit(5)
                            ->get();
                    @endphp --}}


                </div>
                <div class="col-lg-4">
                    <div class="blog_right_sidebar">
                        <img src="{{ asset('frontend/assets/img/ads/musicads.jpg') }}" alt="" class="ads-img">
                        <aside class="single_sidebar_widget post_category_widget">
                            <h4 class="widget_title">Category</h4>
                            <ul class="list cat-list">
                                @foreach ($bcategory as $cat)
                                    <li>
                                        <a href="{{ url('post/cat/list/' . $cat->id) }}" class="d-flex">
                                            <p>{{ $cat->category_name }}</p>
                                            {{-- <p>({{count($bcat)}})</p> --}}

                                        </a>
                                    </li>
                                @endforeach
                                {{-- <li>
                         <a href="#" class="d-flex">
                            <p>Travel news</p>
                            <p>(10)</p>
                         </a>
                      </li>
                      <li>
                         <a href="#" class="d-flex">
                            <p>Modern technology</p>
                            <p>(03)</p>
                         </a>
                      </li>
                      <li>
                         <a href="#" class="d-flex">
                            <p>Product</p>
                            <p>(11)</p>
                         </a>
                      </li>
                      <li>
                         <a href="#" class="d-flex">
                            <p>Inspiration</p>
                            <p>(21)</p>
                         </a>
                      </li>
                      <li>
                         <a href="#" class="d-flex">
                            <p>Health Care</p>
                            <p>(21)</p>
                         </a>
                      </li> --}}
                            </ul>
                        </aside>
                        <aside class="single_sidebar_widget popular_post_widget">
                            <h3 class="widget_title">Recent Post</h3>
                            @foreach ($post as $item)
                                <div class="media post_item">
                                    <a href="{{ url('post/details/' . $item->post_slug) }}">
                                        <img src="{{ asset($item->post_image) }}" alt="post" class="my-img-recent ">
                                    </a>
                                    <div class="media-body">
                                        <a href="{{ url('post/details/' . $item->post_slug) }}">
                                            <h3>{{ substr($item->post_title, 0, 20) }}...</h3>
                                        </a>
                                        <p>{{ $item->created_at->format('M d Y') }}</p>
                                    </div>
                                </div>
                            @endforeach

                        </aside>
                        <div class="single-ads mb-45 p-4" style="background-color: #586AC3;">
                            <div class="text-center">
                                <a href="#">
                                    <h1 class="text-white">ADVERTISE</h1>
                                    <h1 class="text-white">HERE</h1>
                                    <h5 class="text-white">Contact Us Now</h5>
                                </a>
                            </div>
                        </div>
                        <aside class="single_sidebar_widget newsletter_widget">
                            <h4 class="widget_title">Video of the Week</h4>
                            @foreach ($videoOne as $item)
                                <iframe width="100%" height="215"
                                    src="https://www.youtube.com/embed/{{ $item->video_url }}" title="YouTube video player"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                            @endforeach
                        </aside>
                        <aside class="single_sidebar_widget instagram_feeds">
                            <div class="home-banner2 d-none d-lg-block">
                                <a href="">
                                    <img src="{{ asset('frontend/assets/img/gallery/body_card2.png') }}" alt="">
                                </a>

                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        // script.js
        document.addEventListener("DOMContentLoaded", function() {
            const facebookShareBtn = document.querySelector(".facebook-share");
            const twitterShareBtn = document.querySelector(".twitter-share");
            const whatsappShareBtn = document.querySelector(".whatsapp-share");

            // Facebook share functionality
            facebookShareBtn.addEventListener("click", function(event) {
                event.preventDefault();
                // Replace URL and other parameters with your actual content
                window.open(
                    "https://www.facebook.com/sharer/sharer.php?u=http://localhost:8000/post/details/{{ $videoDetails->post_slug }}",
                    "_blank");
            });

            // Twitter share functionality
            twitterShareBtn.addEventListener("click", function(event) {
                event.preventDefault();
                // Replace URL and other parameters with your actual content
                window.open(
                    "https://twitter.com/intent/tweet?url=http://localhost:8000/post/details/{{ $videoDetails->post_slug }}&text=",
                    "_blank");
            });

            // WhatsApp share functionality
            whatsappShareBtn.addEventListener("click", function(event) {
                event.preventDefault();
                // Replace URL and other parameters with your actual content
                window.open(
                    "https://api.whatsapp.com/send?text=%20-%20http://localhost:8000/post/details/{{ $videoDetails->post_slug }}",
                    "_blank");
            });
        })
    </script>
    <!--================ Blog Area end =================-->

    <script>
        const replySection = document.querySelector('.reply-section');
        const replyBtn = document.getElementById('btn-reply');
        const closeBtn = document.getElementById('close');

        replyBtn.addEventListener('click', function() {
            replySection.style.display = 'block';
        });
        closeBtn.addEventListener('click', function() {
            replySection.style.display = 'none';
        });
    </script>
@endsection
