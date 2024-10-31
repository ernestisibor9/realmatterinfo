@extends('frontend.master')

@section('home')

@section('title')
	RealMatterInfo - About Us
@endsection

<main>
    <div class="about-details section-padding30" id="mission">
        <div class="container">
            <div class="row">
                <div class="offset-xl-1 col-lg-8">
                    <div class="about-details-cap mb-50">
                        <h4>Our Mission</h4>
                        <p>To be the leading light in the area of contemporary digital media environment using our unique
                            voice that engages our audience and readers through content written in a conversational tone.
                        </p>
                    </div>
                    <div class="about-details-cap mb-50">
                        <h4>Our Vision</h4>
                        <p>To bring the world together through up to date information with the view to creating a non stop information
                            platform, with respect to music and lifestyle
                        </p>
                    </div>
                    <div class="about-details-cap mb-50">
                        <h4>Aim</h4>
                        <p>
                            Our aim is to attract attention and create awareness through verified and authentic view about
                            life and as well help businesses and brands to grow through advert placement,promotional and
                            educational materials
                        </p>
                    </div>
                    <div class="about-details-cap mb-50">
                        <h4>Core Values</h4>
                        <p> <span class="text-danger">*</span> Professionalism </p>
                        <p> <span class="text-danger">*</span> Humanitarian </p>
                        <p> <span class="text-danger">*</span> Historian </p>
                        <p> <span class="text-danger">*</span> Service Per Excellent </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--? About Area Start-->
    <div class="support-company-area pt-100 pb-100 section-bg fix" data-background="{{asset('frontend/assets/img/gallery/section_bg02.jpg')}}">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6">
                    <div class="support-location-img">
                        <img src="{{asset('frontend/assets/img/gallery/michael_photo.jpg')}}" alt="">
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="right-caption">
                        <!-- Section Tittle -->
                        <div class="section-tittles section-tittles2 mb-50">
                            <span>About Us</span>
                            <h2>Who We Are</h2>
                        </div>
                        <div class="support-caption">
                            <p class="pera-top">RealMatterInfo is a 21st century digital blog platform that centered on current trending issues
                                issues as it relates to music, philosophy, entertainment, lifestyle, religion, food and nutrition through virtual and write ups
                            </p>

                            <a href="#mission" class="btn post-btn ">More About Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Area End-->
    <!-- Team Start -->
    {{-- <div class="team-area section-padding30">
        <div class="container">
            <div class="row">
                <div class="cl-xl-7 col-lg-8 col-md-10">
                    <!-- Section Tittle -->
                    <div class="section-tittles mb-70">
                        <span>Our Professional members </span>
                        <h2>Our Team Members</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- single Tem -->
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-">
                    <div class="single-team mb-30">
                        <div class="team-img">
                            <img src="{{asset('frontend/assets/img/gallery/team2.png')}}" alt="">
                        </div>
                        <div class="team-caption">
                            <h3><a href="#">Ethan Welch</a></h3>
                            <span>UX Designer</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-">
                    <div class="single-team mb-30">
                        <div class="team-img">
                            <img src="{{asset('frontend/assets/img/gallery/team3.png')}}" alt="">
                        </div>
                        <div class="team-caption">
                            <h3><a href="#">Ethan Welch</a></h3>
                            <span>UX Designer</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-">
                    <div class="single-team mb-30">
                        <div class="team-img">
                            <img src="{{asset('frontend/assets/img/gallery/team1.png')}}" alt="">
                        </div>
                        <div class="team-caption">
                            <h3><a href="#">Ethan Welch</a></h3>
                            <span>UX Designer</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Team End -->
    <!-- banner-last Start -->
    <div class="container">
        <div class="row">
            <div class="cl-xl-7 col-lg-8 col-md-10">
                <!-- Section Tittle -->
                <div class="section-tittles mb-70">
                    <span>Our Partners </span>
                    <h2>Our Partners and Brands</h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mb-5">
            <div class="col-md-3">
                <img src="{{asset('frontend/assets/img/brand/brand1.jpg')}}" alt="" class="container-fluid">
            </div>
            <div class="col-md-3">
                <img src="{{asset('frontend/assets/img/brand/brand2.jpg')}}" alt="" class="container-fluid">
            </div>
            <div class="col-md-3">
                <img src="{{asset('frontend/assets/img/brand/brand3.jpg')}}" alt="" class="container-fluid">
            </div>
            <div class="col-md-3">
                <img src="{{asset('frontend/assets/img/brand/brand4.jpeg')}}" alt="" class="container-fluid">
            </div>
        </div>
    </div>

    <div class="banner-area gray-bg pb-90 mt-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 col-md-10">
                    <div class="banner-one">
                        <img src="{{asset('frontend/assets/img/gallery/body_card3.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- banner-last End -->
</main>

@endsection
