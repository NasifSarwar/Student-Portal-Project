@extends('layouts.app')
@section('css')
    <style>
    @media screen and (min-width: 768px) {
    .image-section {
    height: 300px;
    width: 352px !important;
    display: block;
    margin-left: auto;
    margin-right: auto;
    }
    }
    </style>
@endsection
@section('content')
    <!-- Page breadcrumb -->
    <section id="mu-page-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mu-page-breadcrumb-area">
                        <h2>Training</h2>
                        <ol class="breadcrumb">
                            <li><a href="#">Home</a></li>
                            <li class="active">Training</li>
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
                                <div class="mu-course-container mu-course-details">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="mu-latest-course-single">
                                                <figure class="mu-latest-course-img">
                                                    <a href="#"><img src="../images/{{$awards->filename}}" class="image-section" alt="img"></a>
                                                </figure>
                                                <div class="mu-latest-course-single-content">
                                                    <h2>{{$awards->title_en}}</h2>
                                                    <p>{!! $awards->description_en !!}</p>
                                                </div>
                                            </div>
                                        </div>
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

    <!-- Start footer -->
@endsection

