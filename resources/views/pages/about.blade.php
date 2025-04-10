@extends('layouts.app')

@section('content')

        <div id="dsn-scrollbar">

            <!-- ========== Header ========== -->
            <header id="dsn_header" class="p-relative header-normal section-padding dsn-header-animation">
                <div class="bg-pattarn p-absolute left-0 bottom-0 opacity-5 ">
                    <div class="p-relative"
                        data-dsn-animation='{"to":{"y":"20%","rotate":10},"responsive":["tablet","desktop"]}'>
                        <img src="assets/img/bg-pattern-02.svg" alt="">

                    </div>
                </div>
                <div class="p-relative container dsn-hero-parallax-title">
                    <div class="p-relative mexdot-box d-flex flex-column justify-content-center background-inner">
                        <div class="box-content d-grid grid-1-half z-index-1">

                            @php
                                $aboutData = \App\Models\Content::where('section', 'about')
                                    ->get()
                                    ->keyBy('content_key');
                            @endphp

                            <h2 class="title text-upper text-right">{{ $aboutData['header_title']->content_text ?? 'Capture Moments, Create Stories Through the Lens' }}</h2>
                            <div class="">
                                <h5 class="sub-heading">{{ $aboutData['header_subtitle']->content_text ?? 'Fulvian Rayhan' }}</h5>
                                <p class="description-box max-w350 mt-15">{{ $aboutData['header_description']->content_text ?? 'Default description text' }}</p>
                            </div>
                        </div>
                    </div>
                </div>

            </header>
            <!-- ========== End Header ========== -->

            <div id="page_wrapper" class="wrapper">
                <!-- ========== Award Scroll Right ========== -->
                <div class="img-under-header p-relative">
                    <div class="dsn-marque p-relative h-100 over-hidden">
                        <div class="dsn-grid-layout  dsn-grid section-image section-move-image use-horizontal-scroll-image"
                            data-dsn-option='{"speed":1,"start":"100%","end":"0%","pin":false}'>
                            <div class="grid-item">
                                <div class="image-item h-100">
                                    <img class="cover-bg-img has-border-radius" src="assets/img/img-arc1.jpg" alt="">
                                </div>
                            </div>

                            <div class="grid-item">
                                <div class="image-item h-100">
                                    <img class="cover-bg-img has-border-radius" src="assets/img/img-arc2.jpg" alt="">
                                </div>
                            </div>

                            <div class="grid-item">
                                <div class="image-item h-100">
                                    <img class="cover-bg-img has-border-radius" src="assets/img/img-arc3.jpg" alt="">
                                </div>
                            </div>

                            <div class="grid-item">
                                <div class="image-item h-100">
                                    <img class="cover-bg-img has-border-radius" src="assets/img/img-arc4.jpg" alt="">
                                </div>
                            </div>

                            <div class="grid-item">
                                <div class="image-item h-100">
                                    <img class="cover-bg-img has-border-radius" src="assets/img/img-arc2.jpg" alt="">
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="dsn-marque p-relative h-100 over-hidden mt-20">
                        <div class="dsn-grid-layout  dsn-grid section-image section-move-image use-horizontal-scroll-image move-left"
                            data-dsn-option='{"speed":1,"start":"100%","end":"0%","pin":false}'>
                            <div class="grid-item">
                                <div class="image-item h-100">
                                    <img class="cover-bg-img has-border-radius" src="assets/img/img-arc1.jpg" alt="">
                                </div>
                            </div>

                            <div class="grid-item">
                                <div class="image-item h-100">
                                    <img class="cover-bg-img has-border-radius" src="assets/img/img-arc2.jpg" alt="">
                                </div>
                            </div>

                            <div class="grid-item">
                                <div class="image-item h-100">
                                    <img class="cover-bg-img has-border-radius" src="assets/img/img-arc3.jpg" alt="">
                                </div>
                            </div>

                            <div class="grid-item">
                                <div class="image-item h-100">
                                    <img class="cover-bg-img has-border-radius" src="assets/img/img-arc4.jpg" alt="">
                                </div>
                            </div>

                            <div class="grid-item">
                                <div class="image-item h-100">
                                    <img class="cover-bg-img has-border-radius" src="assets/img/img-arc3.jpg" alt="">
                                </div>
                            </div>

                        </div>
                    </div>

                    <div
                        class=" over-hidden box-text has-border-radius v-middle d-flex align-items-center justify-content-center text-center dsn-fill">
                        <h2 class="title-lg"><span class="fw-200">Seamless</span> <br> Experience</h2>
                    </div>
                </div>
                <!-- ========== End Award Scroll Right========== -->


                <!-- ========== Service========== -->
                <section class="services-lest-hover not-filter dsn-filter p-relative section-margin">
                    <div class="container">
                        <div class="section-title mb-70 d-flex flex-column">
                            <span class="sub-heading mb-10 dsn-fill">In My Element</span>

                            @php
                                $aboutData = \App\Models\Content::where('section', 'about')->get()->keyBy('content_key');
                            @endphp
                            <h2 class="title dsn-fill">{{ $aboutData['services_title']->content_text ?? 'SNAP. CREATE. REPEAT.' }}</h2>
                        </div>
                    </div>
                    <div class="container">
                        <div class="dsn-cards">
                            <div class="dsn-posts dsn-style-hover-list dsn-layout-fade-up" data-dsn-fx="2">
                                <div class="item d-flex p-relative box-hover-image dsn-style-hover dsn-up"
                                    data-img="assets/img/services/1.jpg">
                                    <h2 class="title"><a href="about.html#" class="effect-ajax">LANDSCAPE PHOTOGRAPHY</a></h2>
                                    <span class="number">01</span>
                                </div>

                                <div class="item d-flex p-relative box-hover-image dsn-style-hover dsn-up"
                                    data-img="assets/img/services/2.jpg">
                                    <h2 class="title"><a href="about.html#" class="effect-ajax">PORTRAIT SHOOTING</a></h2>
                                    <span class="number">02</span>
                                </div>

                                <div class="item d-flex p-relative box-hover-image dsn-style-hover dsn-up"
                                    data-img="assets/img/services/3.jpg">
                                    <h2 class="title"><a href="about.html#" class="effect-ajax">EDITING & RETOUCHING</a></h2>
                                    <span class="number">03</span>
                                </div>

                                <div class="item d-flex p-relative box-hover-image dsn-style-hover dsn-up"
                                    data-img="assets/img/services/4.jpg">
                                    <h2 class="title"><a href="about.html#" class="effect-ajax">VISUAL EXPLORATION </a></h2>
                                    <span class="number">04</span>
                                </div>

                                <div class="item d-flex p-relative box-hover-image dsn-style-hover dsn-up"
                                    data-img="assets/img/services/5.jpg">
                                    <h2 class="title"><a href="about.html#" class="effect-ajax">CREATIVE PHOTO CONCEPTS</a></h2>
                                    <span class="number">05</span>
                                </div>

                            </div>
                        </div>
                    </div>
                </section>
                <!-- ========== End Service========== -->


            

                <!-- ========== testimonial========== -->
                <section class="testimonal-personal section-margin dsn-swiper"
                    data-dsn-option='{"spaceBetween":30,"centeredSlides":false,"grabCursor":true,"loop":true,"speed":1000}'>
                    <div class="container">
                        <div class="d-flex">
                            <div class="prev-paginate">
                                <span class="dsn-icon dsn-icon-heading-color background-section">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="17" height="15" viewBox="0 0 17 15"
                                        fill="">
                                        <path
                                            d="M6.81496 0.699692L7.66349 1.54822L2.31371 6.898L16.4017 6.88707L16.4008 8.08442L2.31278 8.09535L7.65426 13.4368L6.80442 14.2867L0.0161911 7.49846L6.81496 0.699692Z"
                                            fill=""></path>
                                    </svg>
                                </span>
                            </div>

                            <div class="swiper-container swiper">
                                <div class="swiper-wrapper">
                                    <div
                                        class="swiper-slide testimonal-item text-center d-flex flex-column justify-content-center align-items-center">
                                        <div class="box-img">
                                            <img class="has-border-radius" src="{{ asset('assets/img/ipul.jpg') }}" alt="Testimonial"
                                                data-swiper-parallax-y="-50">
                                            <div class="box-content" data-swiper-parallax-opacity="0">
                                                <h3 class="title">"{{ $aboutData['testimonial_name']->content_text ?? 'Fulvian Rayhan Renanda Putra' }}"</h3>

                                                <div class="auther mt-20">
                                                    <span class="text-upper">{{ $aboutData['testimonial_id']->content_text ?? '2702354256' }}</span>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="next-paginate">
                                <span class="dsn-icon dsn-icon-heading-color background-section">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="17" height="15" viewBox="0 0 17 15"
                                        fill="">
                                        <path
                                            d="M10.185 0.699692L9.33651 1.54822L14.6863 6.898L0.598282 6.88707L0.599212 8.08442L14.6872 8.09535L9.34574 13.4368L10.1956 14.2867L16.9838 7.49846L10.185 0.699692Z"
                                            fill=""></path>
                                    </svg>
                                </span>
                            </div>

                        </div>
                    </div>
                </section>
                <!-- ========== End testimonial========== -->

                <section class="next-page v-dark pt-section background-section pb-50">
                    <div class="container">
                        <div class="tob-box d-flex justify-content-between align-items-end border-bottom pb-50 mb-50">
                            <h2 class="title text-upper">time to <br> roar! </h2>

                            <div class="dsn-btn dsn-btn-shape d-flex">

                                <a class="button background-main v-light effect-ajax" href="contact.html">
                                    <span class="title-btn p-relative  z-index-1 heading-color"
                                          data-animate-text="Let's talk!">
                                        <span>Let's talk!</span>
                                    </span>
                                </a>

                                <span class="icon background-main v-light">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                        <path
                                                d="M328 96h24v288h-48V177.9L81 401l-17 17-33.9-34 17-17 223-223H64V96h264z">
                                        </path>
                                    </svg>
                                </span>

                            </div>
                        </div>
                    </div>

                    <div class="container over-hidden">
                        <div class="bottom-box ">
                            <div class="d-flex gap-10 justify-content-between flex-wrap">
                                <div class="info-item">
                                    <h6 class="mb-10">Email Address</h6>
                                    <a class="text-upper" href="about.html#">hello@dsngrid.com</a>
                                </div>

                                <div class="info-item">
                                    <h6 class="mb-10">Call Info</h6>
                                    <a class="text-upper" href="about.html#">91 98241 82099</a>
                                </div>

                                <div class="info-item">
                                    <h6 class="mb-10">Skype</h6>
                                    <a class="text-upper" href="about.html#">dsngrid.theme</a>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="container">
                        <footer class="footer-personal v-light mt-50">
                            <div class="d-grid grid-md-3 align-items-center">
                                <div class="links">
                                    <ul class="d-flex">
                                        <li><a href="about.html#">HOME</a></li>
                                        <li><a href="about.html#">ABOUT</a></li>
                                        <li><a href="about.html#">WORK</a></li>
                                        <li><a href="about.html#">CONTACT</a></li>
                                    </ul>
                                </div>

                                <div class="dsn-logo main-logo d-flex align-items-center justify-content-center">
                                    <div class="main-logo">
                                        <a href="about.html#" class="custom-logo-link main-brand effect-ajax">
                                            <img class="custom-logo logo-light" src="assets/img/logo-light.png" alt="">
                                            <img class="custom-logo logo-dark" src="assets/img/logo.png" alt="">
                                        </a>
                                    </div>
                                </div>

                                <div class="copyright">
                                    <p class="over-hidden">
                                        © 2024 Digital Agency Designed by
                                        <a href="about.html#0" class="link-hover" data-hover-text="DSN Grid" target="_blank">DSN
                                            Grid</a>
                                    </p>
                                </div>
                            </div>
                        </footer>
                    </div>
                </section>

            </div>

        </div>


@endsection
