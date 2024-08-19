@php
    $trendingVideo = App\Models\Video::latest()->get();
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

                        @foreach ($trendingVideo as $video)
                            <div class="dot col-md-3">
                                <div>
                                    <iframe width="100%" height="315" src="https://www.youtube.com/embed/{{$video->video_url}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                    <h5>{{$video->post_title}}</h5>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
