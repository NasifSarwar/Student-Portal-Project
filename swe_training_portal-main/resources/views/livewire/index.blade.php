
@extends('layouts.app')
 <style>
     .text-short{
         overflow: hidden;
         text-overflow: ellipsis;
         display: -webkit-box;
         -webkit-line-clamp: 1; /* number of lines to show */
         -webkit-box-orient: vertical;
     }
 </style>
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
            <div class="mu-service-single" style="background-color:#BF7EDC">
              <span class="fa fa-book"></span>
              <h3>Our Mission</h3>
              <p><?php echo $missions->description; ?></p>
            </div>
            <!-- Start single service -->
            <!-- Start single service -->
            <div class="mu-service-single" style="background-color: #BF40BF">
              <span class="fa fa-users"></span>
              <h3>Our Vision</h3>
              <p><?php echo $vissions->description; ?></p>
            </div>
            <!-- Start single service -->
            <!-- Start single service -->
            <div class="mu-service-single" style="background-color:#BF7EDC">
              <span class="fa fa-table"></span>
              <h3>Our Objectives</h3>
              <p><?php echo $objectives->description; ?></p>
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
                      
                    <h4><b>About Us</b></h4>
                  </div>
                  <!-- End Title -->
                   
                  <p>{!! $short_description->description !!}</p>
                </div>
              </div>
              <div class="col-lg-6 col-md-6">
                 <iframe width="370" height="250" src="https://www.youtube.com/embed/WDDQ-Z7_N3k" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End about us -->
  
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
                      <span>{!! $speech->designation_english !!}</span>
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
      
        <!-- Start features section -->
  <section id="mu-features">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="mu-features-area">
            <!-- Start Title -->
            <div class="mu-title">
              <h2>What We Do</h2>

            </div>
            <!-- End Title -->
            <!-- Start features content -->
            <div class="mu-features-content">
              <div class="row">
                <div class="col-lg-4 col-md-4  col-sm-6">
                  <div class="mu-single-feature">
                    <span class="fa fa-book"></span>
                    <h4>Publications</h4>
                    <p>Building Public Awareness in secure e-transaction</p>
                    <a href="content/20">Read More</a>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                  <div class="mu-single-feature">
                    <span class="fa fa-users"></span>
                    <h4>School Programme</h4>
                    <p>Building Public Awareness in secure e-transaction</p>
                    <a href="content/21">Read More</a>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                  <div class="mu-single-feature">
                    <span class="fa fa-laptop"></span>
                    <h4>Training</h4>
                    <p>Building Public Awareness in secure e-transaction</p>
                    <a href="content/22">Read More</a>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                  <div class="mu-single-feature">
                    <span class="fa fa-microphone"></span>
                    <h4>Cyber Awareness</h4>
                      <p>Building Public Awareness in secure e-transaction</p>
                    <a href="content/23">Read More</a>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                  <div class="mu-single-feature">
                    <span class="fa fa-film"></span>
                    <h4>Knowledge Sharing</h4>
                     <p>Building Public Awareness in secure e-transaction</p>
                    <a href="content/24">Read More</a>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                  <div class="mu-single-feature">
                    <span class="fa fa-certificate"></span>
                    <h4>Training of Trainers</h4>
                    <p>Building Public Awareness in secure e-transaction</p>
                    <a href="content/25">Read More</a>
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
                  <h4>{!! $division->description; !!}</h4>
                  <p>Division</p>
                </div>
              </div>
               <div class="col-lg-3 col-md-3 col-sm-3">
                <div class="mu-abtus-counter-single no-border">
                  <span class="fa fa-user-secret"></span>
                  <h4><?php echo $zilla->description; ?></h4>
                  <p>Zilla</p>
                </div>
              </div>
                <div class="col-lg-3 col-md-3 col-sm-3">
                <div class="mu-abtus-counter-single">
                  <span class="fa fa-flask"></span>
                  <h4><?php echo $school->description; ?></h4>
                  <p>Schools</p>
                </div>
              </div>
              <!-- End counter item -->
              <!-- Start counter item -->
              <div class="col-lg-3 col-md-3 col-sm-3">
                <div class="mu-abtus-counter-single">
                  <span class="fa fa-users"></span>
                  <h4><?php echo $student->description; ?></h4>
                  <p>Students</p>
                </div>
              </div>
              <!-- End counter item -->
              <!-- Start counter item -->
            
              <!-- End counter item -->
              <!-- Start counter item -->
             
              <!-- End counter item -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End about us counter -->
  
    <!-- Start from blog -->
  <section id="mu-from-blog">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-from-blog-area">
            <!-- start title -->
            <div class="mu-title">
              <h2>Recent Trainings</h2>
            </div>
            <!-- end title -->
            <!-- start from blog content   -->
            <div class="mu-from-blog-content">
              <div class="row">
                  @foreach($training as $train)
                <div class="col-md-4 col-sm-4">
                  <article class="mu-blog-single-item">
                    <figure class="mu-blog-single-img">
                      <a href="training/{{$train->id}}"><img src="images/{{$train->photos}}" height="350px" width="300px" alt="img"></a>
                      <figcaption class="mu-blog-caption">
                        <h3><a href="#">{{$train->training_place_english}}</a></h3>
                      </figcaption>
                    </figure>
                    <div class="mu-blog-meta">
                      <a href="#">{{$train->date}}</a>
                    </div>
                    <div class="mu-blog-description">
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

<!-- Start latest course section -->
<section id="mu-latest-courses">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="mu-latest-courses-area">
                    <!-- Start Title -->
                    <div class="mu-title">
                        <h2>Latest/Upcoming News</h2>
                    </div>
                    <!-- End Title -->
                    <!-- Start latest course content -->
                    <div id="mu-latest-course-slide" class="mu-latest-courses-content">
                        @foreach($news as $news)
                        <div class="col-lg-4 col-md-4 col-xs-12">
                            <div class="mu-latest-course-single">
                                <figure class="mu-latest-course-img">
                                    <a href="news/{{$news->id}}"><img src="images/{{$news->filename}}" alt="img" height="350px" width="350px"></a>
                                </figure>
                                <div class="mu-latest-course-single-content">
                                    <h4><a href="news/{{$news->id}}">{{$news->title_en}}</a></h4>
                                  
                                    <div class="mu-latest-course-single-contbottom">
                                        <a class="mu-course-details" href="news/{{$news->id}}">Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <!-- End latest course content -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End latest course section -->

    <!-- Start our teacher -->
    <section id="mu-our-teacher" style="padding-bottom: 1px !important;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mu-our-teacher-area">
                        <!-- begain title -->
                        <div class="mu-title">
                            <h2>Awards & Achievements</h2>
                        </div>
                        <!-- end title -->
                        <!-- begain our teacher content -->
                        <div class="mu-our-teacher-content">
                            <div class="row">
                                @foreach($awards as $award)
                                <div class="col-lg-3 col-md-3  col-sm-6">
                                    <div class="mu-our-teacher-single">
                                        <figure class="mu-our-teacher-img">
                                            <img src="images/{{$award->filename}}" alt="teacher img" height="250px" width="250px">
                                        </figure>
                                        <a href="#">
                                            <div class="mu-ourteacher-single-content">
                                            <h4>{{$award->title_en}}</h4>
                                           
                                            <a class="mu-read-more-btn" style="background-color: #BF7EDC" href="/award/{{$award->id}}">Read More</a>
                                        </div>
                                        </a>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                       
                        </div>
                        <!-- End our teacher content -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End our teacher -->
    
    <section id="mu-our-teacher">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-our-teacher-area">
            <!-- begain title -->
            <div class="mu-title">
              <h2>Partners and Friends</h2>
             
            </div>
            <!-- end title -->
            <!-- begain our teacher content -->
            <div class="mu-our-teacher-content">
              <div class="row">
                   @foreach($friends as $friend)
                <div class="col-lg-3 col-md-3  col-sm-6" style="margin-top:2%">
                  <div class="mu-our-teacher-single">
                    <figure class="mu-our-teacher-img">
                        <a href="{{$friend->name_bn}}">
                      <img src="images/{{$friend->image}}" style="height:260px" alt="teacher img">
                      </a>
                    </figure>                    
                  </div>
                </div>
                @endforeach
              </div>
            </div> 
            <!-- End our teacher content -->           
          </div>
        </div>
      </div>
    </div>
  </section>


@endsection
