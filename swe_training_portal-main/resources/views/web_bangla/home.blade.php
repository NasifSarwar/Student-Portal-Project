@extends('layouts.master')

@section('content')

    <section id="mu-slider">
        <!-- Start single slider item -->
        @foreach($banners as $banner)
            <div class="mu-slider-single">
                <div class="mu-slider-img">
                    <figure>
                        <img src="images/{{$banner->image}}" alt="img">
                    </figure>
                </div>
                <div class="mu-slider-content">
                    <h2>{{$banner->title}}</h2>
                    <p>{{$banner->slogan}}</p>
                </div>
            </div>
    @endforeach
    <!-- Start single slider item -->
    </section>
    <!-- End Slider -->
    <!-- Start service  -->
    <section id="mu-service">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="mu-service-area">
                        <!-- Start single service -->
                        <div class="mu-service-single" style="background-color:#FF69B4">
                            <span class="fa fa-book"></span>
                            <h3>Learn Online</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima officiis, deleniti dolorem exercitationem praesentium, est!</p>
                        </div>
                        <!-- Start single service -->
                        <!-- Start single service -->
                        <div class="mu-service-single">
                            <span class="fa fa-users"></span>
                            <h3>Expert Teachers</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima officiis, deleniti dolorem exercitationem praesentium, est!</p>
                        </div>
                        <!-- Start single service -->
                        <!-- Start single service -->
                        <div class="mu-service-single" style="background-color:#FF69B4">
                            <span class="fa fa-table"></span>
                            <h3>Best Classrooms</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima officiis, deleniti dolorem exercitationem praesentium, est!</p>
                        </div>
                        <!-- Start single service -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End service  -->

    <!-- Start about us -->
    <section id="mu-about-us">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mu-about-us-area">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="mu-about-us-left">
                                    <!-- Start Title -->
                                    <div class="mu-title">
                                        <h2>{{$about->title}}</h2>
                                    </div>
                                    <!-- End Title -->
                                    <p>{!! $about->description !!}</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="mu-about-us-right">
                                    <a id="mu-abtus-video" href="{{ $show->source }}" target="mutube-video">
                                        <img src="assets/img/about-us.jpg" alt="img">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End about us -->

    <!-- Start about us counter -->
    <section id="mu-abtus-counter">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mu-abtus-counter-area">
                        <div class="row">
                            <!-- Start counter item -->
                            <div class="col-lg-3 col-md-3 col-sm-3">
                                <div class="mu-abtus-counter-single">
                                    <span class="fa fa-book"></span>
                                    <h4 class="counter">568</h4>
                                    <p>Subjects</p>
                                </div>
                            </div>
                            <!-- End counter item -->
                            <!-- Start counter item -->
                            <div class="col-lg-3 col-md-3 col-sm-3">
                                <div class="mu-abtus-counter-single">
                                    <span class="fa fa-users"></span>
                                    <h4 class="counter">3500</h4>
                                    <p>Students</p>
                                </div>
                            </div>
                            <!-- End counter item -->
                            <!-- Start counter item -->
                            <div class="col-lg-3 col-md-3 col-sm-3">
                                <div class="mu-abtus-counter-single">
                                    <span class="fa fa-flask"></span>
                                    <h4 class="counter">65</h4>
                                    <p>Modern Lab</p>
                                </div>
                            </div>
                            <!-- End counter item -->
                            <!-- Start counter item -->
                            <div class="col-lg-3 col-md-3 col-sm-3">
                                <div class="mu-abtus-counter-single no-border">
                                    <span class="fa fa-user-secret"></span>
                                    <h4 class="counter">250</h4>
                                    <p>Teachers</p>
                                </div>
                            </div>
                            <!-- End counter item -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End about us counter -->

    <!-- Start features section -->
    <section id="mu-features">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="mu-features-area">
                        <!-- Start Title -->
                        <div class="mu-title">
                            <h2>Our Features</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio ipsa ea maxime mollitia, vitae voluptates, quod at, saepe reprehenderit totam aliquam architecto fugiat sunt animi!</p>
                        </div>
                        <!-- End Title -->
                        <!-- Start features content -->
                        <div class="mu-features-content">
                            <div class="row">
                                <div class="col-lg-4 col-md-4  col-sm-6">
                                    <div class="mu-single-feature">
                                        <span class="fa fa-book"></span>
                                        <h4>Professional Courses</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus non dolorem excepturi libero itaque sint labore similique maxime natus eum.</p>
                                        <a href="#">Read More</a>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6">
                                    <div class="mu-single-feature">
                                        <span class="fa fa-users"></span>
                                        <h4>Expert Teachers</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus non dolorem excepturi libero itaque sint labore similique maxime natus eum.</p>
                                        <a href="#">Read More</a>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6">
                                    <div class="mu-single-feature">
                                        <span class="fa fa-laptop"></span>
                                        <h4>Online Learning</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus non dolorem excepturi libero itaque sint labore similique maxime natus eum.</p>
                                        <a href="#">Read More</a>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6">
                                    <div class="mu-single-feature">
                                        <span class="fa fa-microphone"></span>
                                        <h4>Audio Lessons</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus non dolorem excepturi libero itaque sint labore similique maxime natus eum.</p>
                                        <a href="#">Read More</a>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6">
                                    <div class="mu-single-feature">
                                        <span class="fa fa-film"></span>
                                        <h4>Video Lessons</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus non dolorem excepturi libero itaque sint labore similique maxime natus eum.</p>
                                        <a href="#">Read More</a>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6">
                                    <div class="mu-single-feature">
                                        <span class="fa fa-certificate"></span>
                                        <h4>Professional Certificate</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus non dolorem excepturi libero itaque sint labore similique maxime natus eum.</p>
                                        <a href="#">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End features content -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End features section -->

    <!-- Start testimonial -->
    <section id="mu-testimonial">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mu-testimonial-area">
                        <div id="mu-testimonial-slide" class="mu-testimonial-content">
                            <!-- start testimonial single item -->
                            @foreach($speeches as $speech)
                                <div class="mu-testimonial-item">
                                    <div class="mu-testimonial-quote">
                                        <blockquote>
                                            <p>{{$speech->speech_english}}</p>
                                        </blockquote>
                                    </div>
                                    <div class="mu-testimonial-img">
                                        <img src="images/{{$speech->filename}}" alt="img">
                                    </div>
                                    <div class="mu-testimonial-info">
                                        <h4>{{$speech->name_english}}</h4>
                                        <span>{{$speech->designation_english}}</span>
                                    </div>
                                </div>
                        @endforeach
                        <!-- end testimonial single item -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End testimonial -->

    <!-- Start from blog -->
    <section id="mu-from-blog">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mu-from-blog-area">
                        <!-- start title -->
                        <div class="mu-title">
                            <h2>Recent Training</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum vitae quae vero ut natus. Dolore!</p>
                        </div>
                        <!-- end title -->
                        <!-- start from blog content   -->
                        <div class="mu-from-blog-content">
                            <div class="row">
                                @foreach($training as $train)
                                    <div class="col-md-4 col-sm-4">
                                        <article class="mu-blog-single-item">
                                            <figure class="mu-blog-single-img">
                                                <a href="#"><img src="images/{{$train->photos}}" alt="img"></a>
                                                <figcaption class="mu-blog-caption">
                                                    <h3><a href="#">{{$train->training_place_english}}</a></h3>
                                                </figcaption>
                                            </figure>
                                            <div class="mu-blog-meta">
                                                <a href="#">{{$train->date}}</a>
                                            </div>
                                            <div class="mu-blog-description">
                                                <p>{!! $train->description_english !!}</p>
                                                <a class="mu-read-more-btn" href="/training/{{$train->id}}">Read More</a>
                                            </div>
                                        </article>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <!-- end from blog content   -->
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
