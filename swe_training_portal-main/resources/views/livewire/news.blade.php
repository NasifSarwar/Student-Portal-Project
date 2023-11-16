@extends('layouts.app')

@section('content')
    <section id="mu-page-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mu-page-breadcrumb-area">
                        <h2>Latest/Upcoming News</h2>
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
                                        @foreach($news as $newst)
                                        <div class="col-md-3 col-sm-3">
                                            <div class="mu-latest-course-single">
                                                <figure class="mu-latest-course-img">
                                                    <a href="#"><img src="images/{{$newst->filename}}" height="250px" width="350px" alt="img"></a>
                                                </figure>
                                                <div class="mu-latest-course-single-content">
                                                    <h4><a href="#">{{$newst->title_en}}</a></h4>
                                                   
                                                    <div class="mu-latest-course-single-contbottom">
                                                        <a class="mu-course-details" href="news/{{$newst->id}}">Details</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                    <br>
                                    <br>
                                {{ $news->links('pagination::bootstrap-4')}}
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

