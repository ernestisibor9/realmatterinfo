@php
    $trendingMain2 = App\Models\Post::latest()->get();
@endphp

<style>
    .my-img-recent-posts {
        width: 263px;
        height: 210px;
        object-fit: cover;
        transition: transform 0.3s ease;
    }
</style>

<div class="recent-articles pt-80 pb-80">
    <div class="container">
        <div class="recent-wrapper">
            <!-- section Tittle -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-tittle mb-30">
                        <h3>Trending News</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="recent-active dot-style d-flex dot-style">
                        @foreach ($trendingMain2 as $item)
                            <div class="single-recent">
                                <div class="what-img">
                                    <img src="{{ asset($item->post_image) }}" alt="" class="my-img-recent-posts" />
                                </div>
                                <div class="what-cap">
                                    <h4>
                                        <a href="#">
                                            <h4>
                                                <a href="latest_news.html">{{ $item->post_title }}</a>
                                            </h4>
                                        </a>
                                    </h4>
                                    <p>{{ $item->created_at->format('M d Y') }}</p>
                                    <a class="popup-video btn-icon"
                                        href="{{$item->video_url }}"><span
                                            class="flaticon-play-button"></span></a>
                                </div>
                            </div>
                        @endforeach
                        <!-- Single -->
                        {{-- <div class="single-recent">
                <div class="what-img">
                  <img src="assets/img/gallery/tranding1.png" alt="" />
                </div>
                <div class="what-cap">
                  <h4>
                    <a href="#">
                      <h4>
                        <a href="latest_news.html"
                          >What to Expect From the 2020 Oscar Nomin
                          ations</a
                        >
                      </h4></a
                    >
                  </h4>
                  <p>Jun 19, 2020</p>
                  <a
                    class="popup-video btn-icon"
                    href="https://www.youtube.com/watch?v=1aP-TXUpNoU"
                    ><span class="flaticon-play-button"></span
                  ></a>
                </div>
              </div> --}}
                        <!-- Single -->
                        {{-- <div class="single-recent">
                <div class="what-img">
                  <img src="assets/img/gallery/tranding2.png" alt="" />
                </div>
                <div class="what-cap">
                  <h4>
                    <a href="latest_news.html"
                      >What to Expect From the 2020 Oscar Nomin ations</a
                    >
                  </h4>
                  <p>Jun 19, 2020</p>
                  <a
                    class="popup-video"
                    href="https://www.youtube.com/watch?v=1aP-TXUpNoU"
                    ><span class="flaticon-play-button"></span
                  ></a>
                </div>
              </div>
              <!-- Single -->
              <div class="single-recent">
                <div class="what-img">
                  <img src="assets/img/gallery/tranding1.png" alt="" />
                </div>
                <div class="what-cap">
                  <h4>
                    <a href="latest_news.html">
                      <h4>
                        <a href="latest_news.html"
                          >What to Expect From the 2020 Oscar Nomin
                          ations</a
                        >
                      </h4></a
                    >
                  </h4>
                  <p>Jun 19, 2020</p>
                  <a
                    class="popup-video"
                    href="https://www.youtube.com/watch?v=1aP-TXUpNoU"
                    ><span class="flaticon-play-button"></span
                  ></a>
                </div>
              </div>
              <!-- Single -->
              <div class="single-recent">
                <div class="what-img">
                  <img src="assets/img/gallery/tranding2.png" alt="" />
                </div>
                <div class="what-cap">
                  <h4>
                    <a href="latest_news.html"
                      >What to Expect From the 2020 Oscar Nomin ations</a
                    >
                  </h4>
                  <p>Jun 19, 2020</p>
                  <a
                    class="popup-video"
                    href="https://www.youtube.com/watch?v=1aP-TXUpNoU"
                    ><span class="flaticon-play-button"></span
                  ></a>
                </div>
              </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
