@extends('layouts.master')
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
                        <h2>পুরুষ্কার ও অর্জন</h2>
                       
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
                                                    <a href="#"><img src="../images/{{$awards->filename}}"  class="image-section" alt="img"></a>
                                                </figure>
                                                <div class="mu-latest-course-single-content">
                                                    <h2>{{$awards->title_bn}}</h2>
                                                    <p>{!! $awards->description_bn !!}</p>
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

