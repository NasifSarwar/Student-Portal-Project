@extends('layouts.app')

@section('content')
    <!-- Start gallery  -->
    <section id="mu-gallery">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mu-gallery-area">
                        <!-- start title -->
                        <div class="mu-title">
                            <h2>Photo Gallery</h2>
                        </div>
                        <!-- end title -->
                        <!-- start gallery content -->
                        <div class="mu-gallery-content">
                            <div class="mu-gallery-body">
                                <ul id="mixit-container" class="row">
                                    <!-- start single gallery image -->
                                    @foreach($photos as $photo)
                                    <li class="col-md-4 col-sm-6 col-xs-12 mix lab">
                                        <div class="mu-single-gallery">
                                            <div class="mu-single-gallery-item">
                                                <div class="mu-single-gallery-img">
                                                    <a href="#"><img alt="img" src="images/{{$photo->filename}}"></a>
                                                </div>
                                                <div class="mu-single-gallery-info">
                                                    <div class="mu-single-gallery-info-inner">
                                                        <h4>{{$photo->photo_caption_english}}</h4>
                                                        <a href="images/{{$photo->filename}}" data-fancybox-group="gallery" class="fancybox"><span class="fa fa-eye"></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <!-- end gallery content -->
                        <br>
                        {{ $photos->links('pagination::bootstrap-4')}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End gallery  -->

@endsection

