@extends('layouts.app')

@section('content')

        <div id="dsn-scrollbar">

            <!-- ========== Header ========== -->
            <header class="header-page v-dark-head dsn-header-animation pb-80 pt-section p-relative">

                <div class="box-img h-100 w-100 h-100 p-absolute top-0 right-0" data-overlay="7">
                    <img class="cover-bg-img" src="assets/img/bg.svg" alt="">
                </div>

                <div class="p-relative container dsn-hero-parallax-title h-100">
                    <div class="p-relative d-flex align-items-center w-100  h-100 ">

                        <div class="box-content z-index-1">

                            <h1 class="title-lg text-upper">Recent work</h1>

                            <div class="contact-links w-50 mt-20">
                                <p>My creative spirit comes alive in the digital realm. With nimble fingers flying
                                    across the keyboard, I craft clear experiences out of nothing but ones and zeroes.
                                </p>
                            </div>
                        </div>


                    </div>
                </div>

                <div class="footer-head w-100 p-relative mt-80 z-index-2">
                    <div class="container d-flex justify-content-between">
                        <div class="dsn-btn dsn-btn-shape rotate-icon d-flex">

                            <a class="button v-dark background-section" href="work-horizontal-scroll.html#">
                                <span class="title-btn text-upper p-relative  z-index-1 heading-color"
                                    data-animate-text="Scroll Down">
                                    <span>Scroll Down</span>
                                </span>
                            </a>

                            <span class="icon v-dark background-section">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                    <path d="M328 96h24v288h-48V177.9L81 401l-17 17-33.9-34 17-17 223-223H64V96h264z">
                                    </path>
                                </svg>
                            </span>

                        </div>

                        <div class="social-box d-flex align-items-center">

                            <ul class="dsn-socials box-social">
                                <li>
                                    <a href="work-horizontal-scroll.html#0" target="_blank" class="background-main">
                                        <i class="fab fa-facebook-f" aria-hidden="true"></i> <span>FB</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="work-horizontal-scroll.html#0" target="_blank" class="background-main">
                                        <i class="fab fa-instagram" aria-hidden="true"></i> <span>IN</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="work-horizontal-scroll.html#0" target="_blank" class="background-main">
                                        <i class="fab fa-twitter" aria-hidden="true"></i> <span>TW</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </header>
            <!-- ========== End Header ========== -->

            <div id="page_wrapper" class="wrapper">

                <!-- ========== Portfolio ========== -->
                <div class="our-work work-horizontal p-relative dsn-swiper has-parallax-image section-padding over-hidden pl-30 pr-30"
                    data-dsn-option='{"spaceBetween":30,"allowTouchMove":true,"centeredSlides":false,"direction":"horizontal","autoHeight":false,"slideToClickedSlide":false,"grabCursor":true,"mousewheel":false,"loop":true,"parallax":false,"slidesPerGroup":1,"slidesPerView":3,"speed":1000,"effect":"slide"}'>
                    <div class="p-relative">
                        <div class="root-posts">
                            <div class="dsn-posts v-dark-head">
                                <div class="swiper-container swiper">
                                    <div class="swiper-wrapper">
                                        <article
                                            class="swiper-slide dsn-item-post grid-item over-hidden p-relative has-border-radius">

                                            <div class="box-content d-flex ">
                                                <div class="img-cat w-100">
                                                    <div
                                                        class="box-image-bg w-100 over-hidden h-v-80 before-z-index dsn-swiper-parallax-transform p-relative" data-overlay="7">
                                                        <img src="assets/img/portfolio/project1/1.jpg"
                                                            class="cover-bg-img dsn-swiper-parallax-transform" alt="" />
                                                    </div>
                                                </div>

                                                <div class="content d-flex flex-column p-absolute bottom-0 left-0 w-100 p-20 z-index-1">

                                                    <div class="cat p-0 d-flex">
                                                        <span class="background-section heading-color">UX / UI Design</span>
                                                        <span class="background-section heading-color">Architecture</span>
                                                    </div>
                
                                                    <div class="d-flex justify-content-between align-items-center mt-15">
                                                        <h2 class="post-title word-wrap d-inline-block title-block text-upper text-upper">
                                                            <a href="project-1.html" class="effect-ajax" data-dsn-ajax="work">Binge x
                                                                <br> The Iconic <span class="fw-200">©
                                                                    2021</span></a>
                                                        </h2>
                
                                                        <a href="project-1.html"
                                                            class="dsn-btn dsn-btn-shape d-flex background-section border-circle effect-ajax">
                                                            <span class="icon v-dark background-section">
                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                                                    <path
                                                                        d="M328 96h24v288h-48V177.9L81 401l-17 17-33.9-34 17-17 223-223H64V96h264z">
                                                                    </path>
                                                                </svg>
                                                            </span>
                
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>

                                        </article>

                                        <article
                                            class="swiper-slide dsn-item-post grid-item over-hidden p-relative has-border-radius">

                                            <div class="box-content d-flex ">
                                                <div class="img-cat w-100">
                                                    <div
                                                        class="box-image-bg w-100 over-hidden  h-v-80 before-z-index dsn-swiper-parallax-transform p-relative" data-overlay="5">
                                                        <img src="assets/img/portfolio/project2/1.jpg"
                                                            class="cover-bg-img dsn-swiper-parallax-transform" alt="" />
                                                    </div>
                                                </div>

                                                <div class="content d-flex flex-column p-absolute bottom-0 left-0 w-100 p-20 z-index-1">

                                                    <div class="cat p-0 d-flex">
                                                        <span class="background-section heading-color">Character design </span>
                                                        <span class="background-section heading-color">Digital Art </span>
                                                    </div>
                
                                                    <div class="d-flex justify-content-between align-items-center mt-15">
                                                        <h2 class="post-title word-wrap d-inline-block title-block text-upper text-upper">
                                                            <a href="project-2.html" class="effect-ajax" data-dsn-ajax="work">Me <br>
                                                                Myself and i <span class="fw-200">© 2024</span></a>
                                                        </h2>
                
                                                        <a href="project-2.html"
                                                            class="dsn-btn dsn-btn-shape d-flex background-section border-circle effect-ajax">
                                                            <span class="icon v-dark background-section">
                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                                                    <path
                                                                        d="M328 96h24v288h-48V177.9L81 401l-17 17-33.9-34 17-17 223-223H64V96h264z">
                                                                    </path>
                                                                </svg>
                                                            </span>
                
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>

                                        </article>

                                        <article
                                            class="swiper-slide dsn-item-post grid-item over-hidden p-relative has-border-radius">

                                            <div class="box-content d-flex ">
                                                <div class="img-cat w-100">
                                                    <div
                                                        class="box-image-bg w-100 over-hidden  h-v-80 before-z-index dsn-swiper-parallax-transform p-relative z-index-1" data-overlay="3">
                                                        <img src="assets/img/portfolio/project3/1.jpg"
                                                            class="cover-bg-img dsn-swiper-parallax-transform" alt="" />
                                                    </div>
                                                </div>

                                                <div class="content d-flex flex-column p-absolute bottom-0 left-0 w-100 p-20 z-index-1">

                                                    <div class="cat p-0 d-flex">
                                                        <span class="background-section heading-color">Photography </span>
                                                        <span class="background-section heading-color">branding </span>
                                                    </div>
                
                                                    <div class="d-flex justify-content-between align-items-center mt-15">
                                                        <h2 class="post-title word-wrap d-inline-block title-block text-upper">
                                                            <a href="project-3.html" class="effect-ajax" data-dsn-ajax="work">YOUR <br>
                                                                DREAM CAR <span class="fw-200">© 2024</span></a>
                                                        </h2>
                
                                                        <a href="project-3.html"
                                                            class="dsn-btn dsn-btn-shape d-flex background-section border-circle effect-ajax">
                                                            <span class="icon v-dark background-section">
                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                                                    <path
                                                                        d="M328 96h24v288h-48V177.9L81 401l-17 17-33.9-34 17-17 223-223H64V96h264z">
                                                                    </path>
                                                                </svg>
                                                            </span>
                
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>

                                        </article>

                                        <article
                                            class="swiper-slide dsn-item-post grid-item over-hidden p-relative has-border-radius">

                                            <div class="box-content d-flex ">
                                                <div class="img-cat w-100">
                                                    <div
                                                        class="box-image-bg w-100 over-hidden  h-v-80 before-z-index dsn-swiper-parallax-transform p-relative" data-overlay="6">
                                                        <img src="assets/img/portfolio/project4/1.jpg"
                                                            class="cover-bg-img dsn-swiper-parallax-transform" alt="" />
                                                    </div>
                                                </div>

                                                <div class="content d-flex flex-column p-absolute bottom-0 left-0 w-100 p-20 z-index-1">

                                                    <div class="cat p-0 d-flex">
                                                        <span class="background-section heading-color">Photography </span>
                                                        <span class="background-section heading-color">branding </span>
                                                    </div>
                
                                                    <div class="d-flex justify-content-between align-items-center mt-15">
                                                        <h2 class="post-title word-wrap d-inline-block title-block text-upper">
                                                            <a href="project-4.html" class="effect-ajax" data-dsn-ajax="work">The <br>
                                                                Hills - Nissan <span class="fw-200">© 2019</span></a>
                                                        </h2>
                
                                                        <a href="project-4.html"
                                                            class="dsn-btn dsn-btn-shape d-flex background-section border-circle effect-ajax">
                                                            <span class="icon v-dark background-section">
                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                                                    <path
                                                                        d="M328 96h24v288h-48V177.9L81 401l-17 17-33.9-34 17-17 223-223H64V96h264z">
                                                                    </path>
                                                                </svg>
                                                            </span>
                
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>

                                        </article>

                                        <article
                                            class="swiper-slide dsn-item-post grid-item over-hidden p-relative has-border-radius">

                                            <div class="box-content d-flex ">
                                                <div class="img-cat w-100">
                                                    <div
                                                        class="box-image-bg w-100 over-hidden  h-v-80 before-z-index dsn-swiper-parallax-transform p-relative" data-overlay="6">
                                                        <img src="assets/img/portfolio/project5/1.jpg"
                                                            class="cover-bg-img dsn-swiper-parallax-transform" alt="" />
                                                    </div>
                                                </div>

                                                <div class="content d-flex flex-column p-absolute bottom-0 left-0 w-100 p-20 z-index-1">

                                                    <div class="cat p-0 d-flex">
                                                        <span class="background-section heading-color">Photography </span>
                                                        <span class="background-section heading-color">Architecture </span>
                                                    </div>
                
                                                    <div class="d-flex justify-content-between align-items-center mt-15">
                                                        <h2 class="post-title word-wrap d-inline-block title-block text-upper">
                                                            <a href="project-5.html" class="effect-ajax" data-dsn-ajax="work">Church
                                                                <br> Copenhagen Denmark</a>
                                                        </h2>
                
                                                        <a href="project-5.html"
                                                            class="dsn-btn dsn-btn-shape d-flex background-section border-circle effect-ajax">
                                                            <span class="icon v-dark background-section">
                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                                                    <path
                                                                        d="M328 96h24v288h-48V177.9L81 401l-17 17-33.9-34 17-17 223-223H64V96h264z">
                                                                    </path>
                                                                </svg>
                                                            </span>
                
                                                        </a>
                                                    </div>
                                                </div>
                
                                            </div>

                                        </article>

                                        <article
                                            class="swiper-slide dsn-item-post grid-item over-hidden p-relative has-border-radius">

                                            <div class="box-content d-flex ">
                                                <div class="img-cat w-100">
                                                    <div
                                                        class="box-image-bg w-100 over-hidden  h-v-80 before-z-index dsn-swiper-parallax-transform p-relative" data-overlay="5">
                                                        <img src="assets/img/portfolio/project6/1.jpg"
                                                            class="cover-bg-img dsn-swiper-parallax-transform" alt="" />
                                                    </div>
                                                </div>

                                                <div class="content d-flex flex-column p-absolute bottom-0 left-0 w-100 p-20 z-index-1">

                                                    <div class="cat p-0 d-flex">
                                                        <span class="background-section heading-color">Photography </span>
                                                        <span class="background-section heading-color">Architecture </span>
                                                    </div>
                
                                                    <div class="d-flex justify-content-between align-items-center mt-15">
                                                        <h2 class="post-title word-wrap d-inline-block title-block text-upper">
                                                            <a href="project-6.html" class="effect-ajax" data-dsn-ajax="work">LOST <br>  RENDER <span class="fw-200">© 2023</span></a>
                                                        </h2>
                
                                                        <a href="project-6.html"
                                                            class="dsn-btn dsn-btn-shape d-flex background-section border-circle effect-ajax">
                                                            <span class="icon v-dark background-section">
                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                                                    <path
                                                                        d="M328 96h24v288h-48V177.9L81 401l-17 17-33.9-34 17-17 223-223H64V96h264z">
                                                                    </path>
                                                                </svg>
                                                            </span>
                
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>

                                        </article>

                                        <article
                                            class="swiper-slide dsn-item-post grid-item over-hidden p-relative has-border-radius">

                                            <div class="box-content d-flex ">
                                                <div class="img-cat w-100">
                                                    <div
                                                        class="box-image-bg w-100 over-hidden h-v-80 before-z-index dsn-swiper-parallax-transform p-relative" data-overlay="4">
                                                        <img src="assets/img/portfolio/project7/1.jpg"
                                                            class="cover-bg-img dsn-swiper-parallax-transform" alt="" />
                                                    </div>
                                                </div>

                                                <div class="content d-flex flex-column p-absolute bottom-0 left-0 w-100 p-20 z-index-1">

                                                    <div class="cat p-0 d-flex">
                                                        <span class="background-section heading-color">Architecture </span>
                                                    <span class="background-section heading-color">Interior Design </span>
                                                    </div>
                
                                                    <div class="d-flex justify-content-between align-items-center mt-15">
                                                        <h2 class="post-title word-wrap d-inline-block title-block text-upper">
                                                            <a href="project-7.html" class="effect-ajax" data-dsn-ajax="work">Samokat <br>  office  <span class="fw-200">© 2021</span></a>
                                                        </h2>
                
                                                        <a href="project-7.html"
                                                            class="dsn-btn dsn-btn-shape d-flex background-section border-circle effect-ajax">
                                                            <span class="icon v-dark background-section">
                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                                                    <path
                                                                        d="M328 96h24v288h-48V177.9L81 401l-17 17-33.9-34 17-17 223-223H64V96h264z">
                                                                    </path>
                                                                </svg>
                                                            </span>
                
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>

                                        </article>
                                    </div>

                                    <div class="prev-paginate">
                                        <span class="dsn-icon dsn-icon-heading-color background-main">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="17" height="15"
                                                viewBox="0 0 17 15" fill="">
                                                <path
                                                    d="M6.81496 0.699692L7.66349 1.54822L2.31371 6.898L16.4017 6.88707L16.4008 8.08442L2.31278 8.09535L7.65426 13.4368L6.80442 14.2867L0.0161911 7.49846L6.81496 0.699692Z"
                                                    fill=""></path>
                                            </svg>
                                        </span>
                                    </div>

                                    <div class="next-paginate">
                                        <span class="dsn-icon dsn-icon-heading-color">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="17" height="15"
                                                viewBox="0 0 17 15" fill="">
                                                <path
                                                    d="M10.185 0.699692L9.33651 1.54822L14.6863 6.898L0.598282 6.88707L0.599212 8.08442L14.6872 8.09535L9.34574 13.4368L10.1956 14.2867L16.9838 7.49846L10.185 0.699692Z"
                                                    fill=""></path>
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ========== End Portfolio ========== -->

@endsection