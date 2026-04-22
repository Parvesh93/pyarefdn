@section('title')
    Pyare Foundation
@endsection


@extends('frontend.layouts.master')



@section('content')

    @include('frontend.home.sections.social')
    <!--Hero Section-->
    @include('frontend.home.sections.hero')
    
     <!--Founder Section-->


    <!--Our Focused Area -->
    @include('frontend.home.sections.focused_area')

    <!-- Our Featured projects -->
    @include('frontend.home.sections.featured_project')

    <!-- Govind leela  -->
    @include('frontend.home.sections.govind_leela')
    
     <!-- Events -->
    @include('frontend.home.sections.event')

    <!-- Become part of ORGANIZATION -->
    @include('frontend.home.sections.organization')

    <!-- advisory Board -->
    @include('frontend.home.sections.advisory')

    <!-- News and Media -->
    @include('frontend.home.sections.news_media')

    <!-- Testimonials -->
    @include('frontend.home.sections.testimonial')

    <!-- Join Our Hands -->
    @include('frontend.home.sections.join_our_hand')
    
    

@endsection
