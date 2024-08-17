@extends('frontend.master')

@section('home')
    <!--================================
             START HERO AREA
    =================================-->
    @include('frontend.home.trending_area')
<!-- end hero-area -->
    <!--================================
            END HERO AREA
    =================================-->

    <!--======================================
            START FEATURE AREA
     ======================================-->
     @include('frontend.home.whatsnew_area')
 <!-- end feature-area -->
    <!--======================================
           END FEATURE AREA
    ======================================-->
    @include('frontend.home.weeklynews_area')
    <!--======================================
            START CATEGORY AREA
    ======================================-->
    @include('frontend.home.recentarticles_area')
<!-- end category-area -->
    <!--======================================
            END CATEGORY AREA
    ======================================-->
    @include('frontend.home.video_area')
    <!--======================================
            START COURSE AREA
    ======================================-->
    @include('frontend.home.weeklynews2_area')
        <!--======================================
            START COURSE AREA
    ======================================-->
    @include('frontend.home.banner_area')

@endsection
