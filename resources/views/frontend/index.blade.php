@extends('frontend.master')

@section('home')
    <!--================================
             START HERO AREA
    =================================-->
    @include('frontend.home.hero')
<!-- end hero-area -->
    <!--================================
            END HERO AREA
    =================================-->

    <!--======================================
            START FEATURE AREA
     ======================================-->
     @include('frontend.home.newsblog')
 <!-- end feature-area -->
    <!--======================================
           END FEATURE AREA
    ======================================-->
    @include('frontend.home.services')
    <!--======================================
            START CATEGORY AREA
    ======================================-->
    @include('frontend.home.testimonial')
<!-- end category-area -->
    <!--======================================
            END CATEGORY AREA
    ======================================-->
    @include('frontend.home.blogpost')
    <!--======================================
            START COURSE AREA
    ======================================-->
    @include('frontend.home.contact')

@endsection
