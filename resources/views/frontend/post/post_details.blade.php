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
        .ads-img{
            width: 100%;
            height: 250px;
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
                            <img class="img-fluid" src="{{ asset($postDetails->post_image) }}" alt="">
                        </div>
                        <div class="blog_details">
                            <h2>Second divided from form fish beast made every of seas
                                all gathered us saying he our
                            </h2>
                            <ul class="blog-info-link mt-3 mb-4">
                                <li><a href="#"><i
                                            class="fa fa-user"></i>{{ $postDetails->category->category_name }}</a></li>
                                <li><a href="#"><i class="fa fa-comments"></i> 03 Comments</a></li>
                            </ul>
                            <p class="excert">
                                {!! $postDetails->long_descp !!}
                            </p>
                        </div>
                    </div>
                    <div class="navigation-top">
                        <div class="d-sm-flex justify-content-between text-center">
                            <p class="like-info"><span class="align-middle"><i class="fa fa-heart"></i></span> Lily and 4
                                people like this</p>
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
                        <div class="navigation-area">
                            <div class="row">
                                <div
                                    class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
                                    <div class="thumb">
                                        <a href="#">
                                            <img class="img-fluid" src="assets/img/post/preview.png" alt="">
                                        </a>
                                    </div>
                                    <div class="arrow">
                                        <a href="#">
                                            <span class="lnr text-white ti-arrow-left"></span>
                                        </a>
                                    </div>
                                    <div class="detials">
                                        <p>Prev Post</p>
                                        <a href="#">
                                            <h4>Space The Final Frontier</h4>
                                        </a>
                                    </div>
                                </div>
                                <div
                                    class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
                                    <div class="detials">
                                        <p>Next Post</p>
                                        <a href="#">
                                            <h4>Telescopes 101</h4>
                                        </a>
                                    </div>
                                    <div class="arrow">
                                        <a href="#">
                                            <span class="lnr text-white ti-arrow-right"></span>
                                        </a>
                                    </div>
                                    <div class="thumb">
                                        <a href="#">
                                            <img class="img-fluid" src="assets/img/post/next.png" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="blog-author">
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
                    </div>
                    <div class="comments-area">
                        <h4>05 Comments</h4>
                        <div class="comment-list">
                            <div class="single-comment justify-content-between d-flex">
                                <div class="user justify-content-between d-flex">
                                    <div class="thumb">
                                        <img src="assets/img/comment/comment_1.png" alt="">
                                    </div>
                                    <div class="desc">
                                        <p class="comment">
                                            Multiply sea night grass fourth day sea lesser rule open subdue female fill
                                            which them
                                            Blessed, give fill lesser bearing multiply sea night grass fourth day sea lesser
                                        </p>
                                        <div class="d-flex justify-content-between">
                                            <div class="d-flex align-items-center">
                                                <h5>
                                                    <a href="#">Emilly Blunt</a>
                                                </h5>
                                                <p class="date">December 4, 2017 at 3:12 pm </p>
                                            </div>
                                            <div class="reply-btn">
                                                <a href="#" class="btn-reply text-uppercase">reply</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="comment-list">
                            <div class="single-comment justify-content-between d-flex">
                                <div class="user justify-content-between d-flex">
                                    <div class="thumb">
                                        <img src="assets/img/comment/comment_2.png" alt="">
                                    </div>
                                    <div class="desc">
                                        <p class="comment">
                                            Multiply sea night grass fourth day sea lesser rule open subdue female fill
                                            which them
                                            Blessed, give fill lesser bearing multiply sea night grass fourth day sea lesser
                                        </p>
                                        <div class="d-flex justify-content-between">
                                            <div class="d-flex align-items-center">
                                                <h5>
                                                    <a href="#">Emilly Blunt</a>
                                                </h5>
                                                <p class="date">December 4, 2017 at 3:12 pm </p>
                                            </div>
                                            <div class="reply-btn">
                                                <a href="#" class="btn-reply text-uppercase">reply</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="comment-list">
                            <div class="single-comment justify-content-between d-flex">
                                <div class="user justify-content-between d-flex">
                                    <div class="thumb">
                                        <img src="assets/img/comment/comment_3.png" alt="">
                                    </div>
                                    <div class="desc">
                                        <p class="comment">
                                            Multiply sea night grass fourth day sea lesser rule open subdue female fill
                                            which them
                                            Blessed, give fill lesser bearing multiply sea night grass fourth day sea lesser
                                        </p>
                                        <div class="d-flex justify-content-between">
                                            <div class="d-flex align-items-center">
                                                <h5>
                                                    <a href="#">Emilly Blunt</a>
                                                </h5>
                                                <p class="date">December 4, 2017 at 3:12 pm </p>
                                            </div>
                                            <div class="reply-btn">
                                                <a href="#" class="btn-reply text-uppercase">reply</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="comment-form">
                        <h4>Leave a Reply</h4>
                        <form class="form-contact comment_form" action="#" id="commentForm">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea class="form-control w-100" name="comment" id="comment" cols="30" rows="9"
                                            placeholder="Write Comment"></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control" name="name" id="name" type="text"
                                            placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control" name="email" id="email" type="email"
                                            placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input class="form-control" name="website" id="website" type="text"
                                            placeholder="Website">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="button button-contactForm btn_1 boxed-btn">Send
                                    Message</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog_right_sidebar">
                            <img src="{{asset('frontend/assets/img/ads/musicads.jpg')}}" alt="" class="ads-img">
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
                            <iframe width="100%" height="215" src="https://www.youtube.com/embed/{{$item->video_url}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                            @endforeach
                        </aside>
                        <aside class="single_sidebar_widget instagram_feeds">
                            <div class="home-banner2 d-none d-lg-block">
                                <a href="">
                                    <img src="{{asset('frontend/assets/img/gallery/body_card2.png')}}" alt="">
                                </a>

                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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
        window.open("https://www.facebook.com/sharer/sharer.php?u=http://localhost:8000/post/details/{{$postDetails->post_slug}}", "_blank");
    });

    // Twitter share functionality
    twitterShareBtn.addEventListener("click", function(event) {
        event.preventDefault();
        // Replace URL and other parameters with your actual content
        window.open("https://twitter.com/intent/tweet?url=http://localhost:8000/post/details/{{$postDetails->post_slug}}&text=", "_blank");
    });

    // WhatsApp share functionality
    whatsappShareBtn.addEventListener("click", function(event) {
        event.preventDefault();
        // Replace URL and other parameters with your actual content
        window.open("https://api.whatsapp.com/send?text=%20-%20http://localhost:8000/post/details/{{$postDetails->post_slug}}", "_blank");
    });
})
    </script>
    <!--================ Blog Area end =================-->
@endsection
