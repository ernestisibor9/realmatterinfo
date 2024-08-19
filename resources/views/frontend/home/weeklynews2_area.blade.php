@php
    $trendingMain = App\Models\Post::latest()->limit(7)->get();
@endphp

<div class="weekly3-news-area pt-80 pb-130">
    <div class="container">
        <div class="weekly3-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <div class="slider-wrapper">
                        <!-- Slider -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="section-tittle mb-30">
                                    <h3>Trending News</h3>
                                </div>
                                <div class="weekly3-news-active dot-style d-flex">
                                    @foreach ($trendingMain as $item)
                                        <div class="weekly3-single">
                                            <div class="weekly3-img">
                                                <a
                                                    href="{{ url('post/details/'.$item->post_slug) }}">
                                                    <img src="{{ asset($item->post_image) }}" alt="" />
                                                </a>
                                            </div>
                                            <div class="weekly3-caption">
                                                <h4>
                                                    <a
                                                        href="{{ url('post/details/'.$item->post_slug) }}">{{ $item->post_title }}</a>
                                                </h4>
                                                <p>{{ $item->created_at->format('M d Y') }}</p>
                                            </div>
                                        </div>
                                    @endforeach
                                    {{-- <div class="weekly3-single">
                      <div class="weekly3-img">
                        <img
                          src="assets/img/gallery/weekly2News2.png"
                          alt=""
                        />
                      </div>
                      <div class="weekly3-caption">
                        <h4>
                          <a href="latest_news.html"
                            >What to Expect From the 2020 Oscar Nomin
                            ations</a
                          >
                        </h4>
                        <p>19 Jan 2020</p>
                      </div>
                    </div>
                    <div class="weekly3-single">
                      <div class="weekly3-img">
                        <img
                          src="assets/img/gallery/weekly2News3.png"
                          alt=""
                        />
                      </div>
                      <div class="weekly3-caption">
                        <h4>
                          <a href="latest_news.html"
                            >What to Expect From the 2020 Oscar Nomin
                            ations</a
                          >
                        </h4>
                        <p>19 Jan 2020</p>
                      </div>
                    </div>
                    <div class="weekly3-single">
                      <div class="weekly3-img">
                        <img
                          src="assets/img/gallery/weekly2News4.png"
                          alt=""
                        />
                      </div>
                      <div class="weekly3-caption">
                        <h4>
                          <a href="latest_news.html"
                            >What to Expect From the 2020 Oscar Nomin
                            ations</a
                          >
                        </h4>
                        <p>19 Jan 2020</p>
                      </div>
                    </div>
                    <div class="weekly3-single">
                      <div class="weekly3-img">
                        <img
                          src="assets/img/gallery/weekly2News2.png"
                          alt=""
                        />
                      </div>
                      <div class="weekly3-caption">
                        <h4>
                          <a href="latest_news.html"
                            >What to Expect From the 2020 Oscar Nomin
                            ations</a
                          >
                        </h4>
                        <p>19 Jan 2020</p>
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
