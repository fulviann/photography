@extends('layouts.app')

@section('content')
    <div id="dsn-scrollbar">
        <div class="header-photography header-photography-2 preview dsn-flip-animation p-relative d-flex align-items-center justify-content-center v-dark before-z-index has-border-radius"
            data-dsn-option='{"speed":3,"scale":false,"brightness":false,"contrast":false,"skew":false}'>
            <div class="grid">
                <div class="row justify-content-center">
                    <div class="row__item">
                        <div class="row__item-inner">
                            <div class="row__item-img">
                                <img class="cover-bg-img" src="{{ asset('assets/img/photography/9.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-between">
                    <div class="row__item">
                        <div class="row__item-inner">
                            <div class="row__item-img">
                                <img class="cover-bg-img" src="{{ asset('assets/img/photography/20.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="row__item">
                        <div class="row__item-inner">
                            <div class="row__item-img">
                                <img class="cover-bg-img" src="{{ asset('assets/img/photography/15.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="row__item">
                        <div class="row__item-inner">
                            <div class="row__item-img">
                                <img class="cover-bg-img" src="{{ asset('assets/img/photography/7.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="content v-middle text-center d-flex flex-column align-items-center">
                <h3 class="title text-upper">Every Shot<br> Tells a Story
                </h3>
                <p class="max-w570 mt-20">
                @if(isset($contents['header_text']) && $contents['header_text']->content_text)
                    {!! $contents['header_text']->content_text !!}
                @else
                    Capturing moments that tell your unique story through creative photography
                @endif
                </p>              
            </div>

            <div class="footer-head w-100 left-0 p-absolute bottom-0 z-index-2 pb-40">
                <div class="dsn-container d-flex justify-content-between">
                    <div class="dsn-btn dsn-btn-shape rotate-icon d-flex">
                        <a class="dsn-scroll-bottom button background-section" href="#page_wrapper" rel="nofollow"
                            data-dsn-option='{"ease": "power4.inOut" , "duration" : 1.5}'>
                            <span class="title-btn text-upper p-relative z-index-1 heading-color"
                                data-animate-text="Scroll Down">
                                <span>Scroll Down</span>
                            </span>
                        </a>
                        <span class="icon background-section">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                <path d="M328 96h24v288h-48V177.9L81 401l-17 17-33.9-34 17-17 223-223H64V96h264z"></path>
                            </svg>
                        </span>
                    </div>

                    <div class="dsn-btn dsn-btn-shape d-flex">
                        <a class="button background-section effect-ajax" href="{{ route('contact') }}"
                            data-dsn-text="CONTACT ME">
                            <span class="title-btn text-upper p-relative z-index-1 heading-color"
                                data-animate-text="Contact Me">
                                <span>Contact Me</span>
                            </span>
                        </a>
                        <span class="icon background-section">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                <path d="M328 96h24v288h-48V177.9L81 401l-17 17-33.9-34 17-17 223-223H64V96h264z"></path>
                            </svg>
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <div id="page_wrapper" class="wrapper">
            <!-- ========== About Section Tow ========== -->
            <section class="about-section about-2 p-relative section-padding background-section">
                <div class="p-relative container">
                    <div class="p-relative d-grid grid-md-2 d-grid-no-space z-index-1">
                        <div class="bg-mask background-main v-middle"></div>

                        <div class="box-img">
                            <img src="{{ asset($contents['photo_1']->image_path ?? 'assets/img/default.jpg') }}" alt="">
                            <img src="{{ asset($contents['photo_2']->image_path ?? 'assets/img/default.jpg') }}" alt="">
                        </div>
                        <div class="box-info">
                            <div class="section-title dsn-fill d-flex flex-column mb-30">
                                <span class="sub-heading mb-10">Ruang & Rasa</span>
                                <h2 class="title ">
                                    @if(isset($contents['about_title']) && $contents['about_title']->content_text)
                                        {!! $contents['about_title']->content_text !!}
                                    @else
                                        Our Photography Philosophy
                                    @endif                      
                                </h2>

                            </div>

                            <p class="max-w570 mt-20 pr-120">
                                @if(isset($contents['about_content']) && $contents['about_content']->content_text)
                                    {!! $contents['about_content']->content_text !!}
                                @else
                                    We believe photography is more than just taking pictures - it's about capturing emotions, telling stories, and creating timeless memories.
                                @endif
                            </p>

                            <div class="dsn-btn dsn-btn-shape mt-30 d-flex">
                                <a class="button background-section v-light effect-ajax" href="{{ route('about') }}">
                                    <span class="title-btn p-relative z-index-1 heading-color" data-animate-text="ABOUT US">
                                        <span>ABOUT US</span>
                                    </span>
                                </a>
                                <span class="icon background-section v-light">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                        <path d="M328 96h24v288h-48V177.9L81 401l-17 17-33.9-34 17-17 223-223H64V96h264z"></path>
                                    </svg>
                                </span>
                            </div>

                            <img class="mt-30" src="{{ asset($contents['photo_3']->image_path ?? 'assets/img/default.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
            </section>
            <!-- ========== End About Section Tow ========== -->

            <!-- Rest of the photography page content would go here -->
            <!-- I'm omitting some sections for brevity, but you would include them similarly -->
            
            <section class="next-page section-margin">
                <div class="container">
                    <div class="tob-box d-flex justify-content-between align-items-end border-bottom pb-50 mb-50">
                        <h2 class="title text-upper">time to <br> roar! </h2>

                        <div class="dsn-btn dsn-btn-shape d-flex">
                            <a class="button background-section v-light" href="#">
                                <span class="title-btn p-relative z-index-1 heading-color" data-animate-text="Let's talk!">
                                    <span>Let's talk!</span>
                                </span>
                            </a>
                            <span class="icon background-section v-light">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                    <path d="M328 96h24v288h-48V177.9L81 401l-17 17-33.9-34 17-17 223-223H64V96h264z"></path>
                                </svg>
                            </span>
                        </div>
                    </div>
                </div>

                <div class="dsn-container dsn-right-container over-hidden">
                    <div class="bottom-box ">
                        <div class="d-grid custom-width">
                            <div class="text">
                                <h4 class="title-block mb-15">IS YOUR BIG IDEA READY <br> TO GO WILD?</h4>
                                <p>DON'T BE SHY. SAY HI TO UNLOCK CREATIVITY AND INNOVATION FOR YOUR SEAMLESS PROJECT</p>
                            </div>

                            <div class="p-relative dsn-marquee over-hidden"
                                data-dsn-option='{"speed":0,"duplicatedNumber":7,"duration":7000,"gap":60,"delayBeforeStart":1000,"direction":"left","duplicated":true,"pauseOnHover":false,"startVisible":true,"pauseOnCycle":false,"allowCss3Support":true}'>
                                <h2 class="dsn-text-marquee d-flex title-lg">DIGITAL STUDIOS</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <footer class="footer background-section v-dark pt-60">
            <div class="container p-relative">
                <div class="d-grid grid-lg-4">
                   
                    <div class="footer-links">
                        <h4 class="sm-title-block p-relative circle-before circle-after circle-both-before mb-10 text-upper">
                            Navigation Links</h4>
                        <ul>
                            <li class="text-upper">
                                <a href="{{ route('photography') }}">home</a>
                            </li>
                            <li class="text-upper">
                                <a href="{{ route('photography') }}">Creative</a>
                            </li>
                            <li class="text-upper">
                                <a href="{{ route('photography') }}">About us</a>
                            </li>
                        </ul>
                    </div>

                    <div class="footer-contact">
                        <h4 class="sm-title-block p-relative circle-before circle-after circle-both-before mb-10 text-upper">
                            CONTACT Info</h4>
                        <div class="col-contact">
                            <p><strong>T</strong> :+62 859-3529-4049</p>
                            <p class="mt-10"><strong>F</strong> :+62 859-3529-4049</p>
                            <p class="over-hidden mt-10">
                                <strong>E</strong> : <a class="link-hover" href="#" data-hover-text="info@dsngrid.com">rayhanfulvian@gmail.com</a>
                            </p>
                        </div>
                    </div>

                    <div class="footer-socials">
                        <h4 class="sm-title-block p-relative circle-before circle-after circle-both-before mb-10 text-upper">
                            socials Links</h4>
                        <ul class="dsn-socials box-social">
                            <li>
                                <a href="#0" target="_blank" class="background-main">
                                    <i class="fab fa-facebook-f" aria-hidden="true"></i> <span>FB</span>
                                </a>
                            </li>
                            <li>
                                <a href="#0" target="_blank" class="background-main">
                                    <i class="fab fa-instagram" aria-hidden="true"></i> <span>IN</span>
                                </a>
                            </li>
                            <li>
                                <a href="#0" target="_blank" class="background-main">
                                    <i class="fab fa-twitter" aria-hidden="true"></i> <span>TW</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="copyright background-main">
                <div class="container d-flex align-items-center justify-content-between">

                    <div class="dsn-default-btn dsn-icon-heading-color">
                        <a class="dsn-btn dsn-border border-color-default background-transparent image-zoom move-circle has-icon-left dsn-parallax-hover"
                            href="#main_root" rel="nofollow" data-dsn-option='{"ease": "power4.inOut" , "duration" : 1.5}'>
                            <span class="d-flex align-items-center justify-content-center h-100">
                                <span class="dsn-icon no-padding heading-color z-index-1 btn-icon-left">
                                    <svg enable-background="new 0 0 32 32" version="1.1" viewBox="0 0 32 32" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M15.5,6c-1.378,0-2.5,1.122-2.5,2.5s1.122,2.5,2.5,2.5,2.5-1.122,2.5-2.5-1.122-2.5-2.5-2.5Zm0,4c-.827,0-1.5-.673-1.5-1.5s.673-1.5,1.5-1.5,1.5,.673,1.5,1.5-.673,1.5-1.5,1.5ZM24,2.5c0-1.378-1.122-2.5-2.514-2.5-4.942,.141-9.444,2.552-13.111,7.001-1.586,.019-3.168,.404-4.585,1.115-2.302,1.155-3.79,3.661-3.79,6.384v.5H5c1.068,0,2.073,.416,2.829,1.171,.755,.756,1.171,1.76,1.171,2.829v5h.5c2.723,0,5.229-1.487,6.384-3.789,.712-1.417,1.096-3,1.115-4.586,4.448-3.667,6.86-8.17,7.001-13.125ZM4.238,9.01c1.034-.519,2.165-.845,3.317-.961-.098,.132-.196,.265-.293,.4-1.553,2.167-2.712,4.684-3.092,5.551H1.019c.166-2.15,1.393-4.074,3.219-4.99Zm10.752,10.752c-.917,1.826-2.84,3.053-4.99,3.219v-3.151c.868-.38,3.384-1.539,5.552-3.092,.135-.097,.268-.194,.4-.292-.116,1.152-.442,2.283-.961,3.317Zm-.021-3.837c-1.803,1.292-3.914,2.325-4.976,2.811-.064-1.236-.576-2.389-1.457-3.271-.882-.882-2.035-1.393-3.271-1.457,.486-1.062,1.519-3.173,2.811-4.976C10.629,5.469,15.033,1.184,21.5,1c.827,0,1.5,.673,1.5,1.486-.184,6.481-4.469,10.885-8.031,13.439ZM1.732,18.732c-.85,.849-1.419,3.881-1.524,4.48l-.124,.703,.703-.124c.599-.105,3.631-.674,4.48-1.524,.472-.472,.732-1.1,.732-1.768s-.26-1.296-.732-1.768c-.943-.944-2.592-.944-3.535,0Zm2.828,2.828c-.386,.386-1.934,.831-3.227,1.106,.275-1.293,.72-2.841,1.106-3.227,.283-.283,.66-.439,1.061-.439s.777,.156,1.061,.439,.439,.66,.439,1.061-.156,.777-.439,1.061Z"/>
                                    </svg>
                                </span>
                                <span class="title-btn p-relative z-index-1 heading-color" data-animate-text="SCROLL TOP">
                                    <span>SCROLL TOP</span>
                                </span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
@endsection
