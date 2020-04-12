@extends('layouts.dashboard_layout')

@section('content')

    <!-- ##### Hero Area Start ##### -->

    <section class="hero-area bg-img bg-overlay-2by5" style="background-image: url({{url('images/home_page_back.jpg')}});">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <!-- Hero Content -->
                    <div class="hero-content text-center">
                        <h2>Start your new experience</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ##### Hero Area Ends ##### -->

    <!-- ##### Cool Facts Area Start ##### -->
    <section class="cool-facts-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <!-- Single Cool Facts Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-cool-facts-area text-center mb-100 wow fadeInUp" data-wow-delay="250ms">
                        <div class="icon">
                            <img src="{{ asset('images/core-img/docs.png') }}" alt="">
                        </div>
                        <h2><span class="counter">1912</span></h2>
                        <h5>Succesful generations</h5>
                    </div>
                </div>

                <!-- Single Cool Facts Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-cool-facts-area text-center mb-100 wow fadeInUp" data-wow-delay="500ms">
                        <div class="icon">
                            <img src="{{ asset('images/core-img/star.png') }}" alt="">
                        </div>
                        <h2><span class="counter">123</span></h2>
                        <h5>Publications</h5>
                    </div>
                </div>

                <!-- Single Cool Facts Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-cool-facts-area text-center mb-100 wow fadeInUp" data-wow-delay="750ms">
                        <div class="icon">
                            <img src="{{ asset('images/core-img/events.png') }}" alt="">
                        </div>
                        <h2><span class="counter">89</span></h2>
                        <h5>Created Reports</h5>
                    </div>
                </div>

                <!-- Single Cool Facts Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-cool-facts-area text-center mb-100 wow fadeInUp" data-wow-delay="1000ms">
                        <div class="icon">
                            <img src="{{ asset('images/core-img/earth.png') }}" alt="">
                        </div>
                        <h2><span class="counter">56</span></h2>
                        <h5>Users</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Cool Facts Area End ##### -->
@endsection
