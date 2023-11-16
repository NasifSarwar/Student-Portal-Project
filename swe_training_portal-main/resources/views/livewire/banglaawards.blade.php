@extends('layouts.master')

@section('content')
    <section id="mu-page-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mu-page-breadcrumb-area">
                        <h2>Awards & Achievements</h2>
                        <ol class="breadcrumb">
                            <li><a href="#">Home</a></li>
                            <li class="active">Awards & Achievements</li>
                        </ol>
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
                                        @foreach($awards as $award)
                                            <div class="col-md-3 col-sm-3">
                                                <div class="mu-latest-course-single">
                                                    <figure class="mu-latest-course-img">
                                                        <a href="#"><img src="images/{{$award->filename}}" alt="img"></a>
                                                    </figure>
                                                    <div class="mu-latest-course-single-content">
                                                        <h4><a href="#">{{$award->title_bn}}</a></h4>
                                                        <p>{!! $award->description_bn !!}</p>
                                                        <div class="mu-latest-course-single-contbottom">
                                                            <a class="mu-course-details" href="#">Details</a>
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

