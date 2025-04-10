@extends('layouts.app')

@section('content')
    <div id="dsn-scrollbar">
        <!-- ========== Header ========== -->
        <header class="header-project dsn-header-animation p-relative over-hidden">
            <div class="p-relative container dsn-hero-parallax-title pb-60">
                <div class="p-relative d-flex align-items-center w-100 h-100">
                    <div class="box-content w-100 d-flex flex-column z-index-1">
        @php
            $project = \App\Models\Content::where('section', 'project-7')->get()->keyBy('content_key');
        @endphp

        <h1 class="title-lg text-upper" data-dsn-ajax="title">{!! $project['title']->content_text !!}</h1>

        <div class="d-flex justify-content-between align-items-center w-100 mt-30">
            <div class="cat p-0">
                @foreach(explode(',', $project['categories']->content_text) as $category)
                    <span class="background-section heading-color">{{ trim($category) }} </span>
                @endforeach
            </div>

            <div class="item">
                <span class="text-upper"><span>photographer - </span> {{ $project['photographer']->content_text }}</span>
            </div>

                            <div class="dsn-btn dsn-btn-shape d-inline-flex d-flex no-padding text-upper">
                                <a class="button" href="https://www.behance.net/gallery/123303733/Samokat-office?tracking_source=curated_tools_photoshop" target="_blank">
                                    <span class="title-btn p-relative z-index-1" data-animate-text="View project">
                                        <span>View project</span>
                                    </span>
                                </a>
                                <span class="icon background-section theme-color">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                        <path d="M328 96h24v288h-48V177.9L81 401l-17 17-33.9-34 17-17 223-223H64V96h264z"></path>
                                    </svg>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="pl-30 pr-30">
            <div class="box-img p-relative before-z-index has-border-radius" data-overlay="4" data-dsn-grid="move-up">
                <img class="cover-bg-img has-border-radius" src="{{ asset($project['main_image']->image_path) }}" alt="">
            </div>
            </div>
        </header>
        <!-- ========== End Header ========== -->

        <div id="page_wrapper" class="wrapper">
            <div class="box-move section-padding background-section">
                <div class="container">
                    <div class="d-grid grid-lg-2">
                        <div class="text pinned-scroll p-relative" data-dsn-option='{"end":"650"}'>
                            <div class="pinned-element">
                                <span class="sub-heading mb-15">• {{ $project['subheading']->content_text }}</span>
                                <h3 class="title text-upper mb-30">{{ $project['studio_name']->content_text }} </h3>

                                <div class="info">
                                    <div class="info-item d-flex align-items-center border-bottom">
                                        <span class="date">Type</span>
                                        <h6 class="text-upper">{{ $project['type']->content_text }}</h6>
                                    </div>


                                    <div class="info-item d-flex align-items-center border-bottom">
                                        <span class="date">Fotografer</span>
                                        <h6 class="text-upper">{{ $project['team']->content_text }}</h6>
                                    </div>
                                </div>

                                <p class="mt-20">{{ $project['description']->content_text }}</p>
                            </div>
                        </div>

                        <div class="box-img">
                            <div class="d-grid">
                                @if(isset($project['gallery_images']))
                                @foreach(json_decode($project['gallery_images']->content_text) as $image)
                                <div class="img-item h-v-70">
                                    <img class="cover-bg-img" src="{{ asset($image) }}" alt="">
                                </div>
                                @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Rest of the project-7 content would go here -->
            <!-- I'm omitting some sections for brevity, but you would include them similarly -->

            <section class="next-projects p-relative section-padding d-flex flex-column justify-content-center">
                <div class="box-img h-100 w-100 h-100 p-absolute top-0 right-0 before-z-index" data-overlay="7" data-dsn-grid="move-up">
                    <img class="cover-bg-img" src="{{ asset('assets/img/portfolio/project1/1.jpg') }}" alt="">
                </div>
                <div class="container p-relative">
                    <div class="box-content w-100 d-flex flex-column p-relative z-index-1">
                        <a href="{{ route('project-1') }}" class="btn-arrow effect-ajax v-light background-main">
                            <span class="icon theme-color dsn-icon" data-dsn-iconSize="45px">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                    <path d="M328 96h24v288h-48V177.9L81 401l-17 17-33.9-34 17-17 223-223H64V96h264z"></path>
                                </svg>
                            </span>
                        </a>

                        <h2 class="title-lg text-upper" data-dsn-ajax="title"><a href="{{ route('project-1') }}" class="effect-ajax">Binge x <br> The Iconic <span class="fw-200">© 2021</span></a></h2>

                        <div class="d-flex justify-content-between align-items-center w-100 mt-30">

                            <div class="item">
                                <span class="text-upper"><span>NEXT - </span> PROJECT</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection