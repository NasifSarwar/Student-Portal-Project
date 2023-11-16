@extends('layouts.master')

@section('content')
    <section id="mu-page-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mu-page-breadcrumb-area">
                        <h2>আসন্ন খবর</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End breadcrumb -->
    <section id="mu-course-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mu-course-content-area">
                        <div class="row">
                            <div class="col-md-12">
                                <!-- start course content container -->
                                <div class="mu-course-container">
                                    <div class="row">
                                        @foreach($news as $news)
                                        <div class="col-md-3 col-sm-3">
                                            <div class="mu-latest-course-single">
                                                <figure class="mu-latest-course-img">
                                                    <a href="news_bangla/{{$news->id}}"><img src="images/{{$news->filename}}" alt="img" height="225" width="250"></a>
                                                </figure>
                                                <div class="mu-latest-course-single-content">
                                                    <h4><a href="news_bangla/{{$news->id}}">{{$news->title_bn}}</a></h4>
                                                    
                                                    <div class="mu-latest-course-single-contbottom">
                                                        <a class="mu-course-details" href="news_bangla/{{$news->id}}">বিস্তারিত </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                                <!-- end course content container -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

