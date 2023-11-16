<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>KonnaKotha | Home</title>


    <!-- Favicon -->
      <!-- Favicon -->
      <link rel="shortcut icon" href="{{asset('assets/img/konnaktha.jpg')}}" type="image/x-icon">
      <!-- Font awesome -->
      <link href="{{url('public/assets/css/font-awesome.css')}}" rel="stylesheet">
      <link rel="shortcut icon" href="{{asset('assets/img/konnaktha.jpg')}}" type="image/x-icon">
      <!-- Bootstrap -->
      <link href="{{url('assets/css/bootstrap.css')}}" rel="stylesheet">
      <!-- Slick slider -->
      <link rel="stylesheet" type="text/css" href="{{url('assets/css/slick.css')}}">
      <!-- Fancybox slider -->
      <link rel="stylesheet" href="{{url('assets/css/jquery.fancybox.css')}}" type="text/css" media="screen" />
      <!-- Theme color -->
      <link id="switcher" href="{{url('assets/css/theme-color/default-theme.css')}}" rel="stylesheet">

      <!-- Main style sheet -->
      <link href="{{url('assets/css/style.css')}}" rel="stylesheet">


    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,400italic,300,300italic,500,700' rel='stylesheet' type='text/css'>


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
      @yield('css')

   <style>
table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}
th, td {
  text-align: left;
  padding: 8px;
}
tr:nth-child(even){background-color: #f2f2f2}
   </style>


<style>
      .frame{
      float:left;
      margin:20px;
      }
</style>



  </head>
  <body>

  <!--START SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#">
      <i class="fa fa-angle-up"></i>
    </a>
  <!-- END SCROLL TOP BUTTON -->

  <!-- Start header  -->
  <header id="mu-header" style="background-color: #BF7EDC">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="mu-header-area">
            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                  <div class="mu-header-top-left">
                      <div class="mu-top-email">
{{--                          <i class="fa fa-envelope" style="color: white"></i>--}}
                          <span style="color: white"><?php  echo $about->description;?></span>
                      </div>
                      <div class="mu-top-phone">
{{--                          <i class="fa fa-phone" style="color: white"></i>--}}
                          <span style="color: white"><?php echo $phone->description; ?></span>
                      </div>
                  </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <div class="mu-header-top-right">
                  <nav>
                    <ul class="mu-top-social-nav">
                      @if(Request::path()=="home_en")
                      <li><a class="btn btn-xs btn-light"style="color: #000000c7" href="/">বাংলা </a></li>
                      <li><a class="btn btn-xs btn-light"style="color: #000000c7" href="/home_en">English</a></li>

                      @elseif(Request::path()=="about-us")
                      <li><a class="btn btn-xs btn-light"style="color: #000000c7" href="/about_us_bn">বাংলা </a></li>
                      <li><a class="btn btn-xs btn-light" style="color: #000000c7" href="/about-us">English</a></li>

                      @elseif(Request::path()=="trainings")
                      <li><a class="btn btn-xs btn-light" style="color: #000000c7" href="/trainiglist_bn">বাংলা </a></li>
                      <li><a class="btn btn-xs btn-light" style="color: #000000c7" href="/trainings">English</a></li>
                      @elseif(Request::path()=="notices")
                       <li><a class="btn btn-xs btn-light" style="color: #000000c7" href="/notice_bn">বাংলা </a></li>
                       <li><a class="btn btn-xs btn-light" style="color: #000000c7" href="/notices">English</a></li>
                       @elseif(Request::path()=="documents")
                       <li><a class="btn btn-xs btn-light" style="color: #000000c7" href="/document_bn">বাংলা </a></li>
                       <li><a class="btn btn-xs btn-light" style="color: #000000c7" href="/documents">English</a></li>
                       @elseif(Request::path()=="trainings")
                       <li><a class="btn btn-xs btn-light" style="color: #000000c7" href="/trainiglist_bn">বাংলা </a></li>
                       <li><a class="btn btn-xs btn-light" style="color: #000000c7" href="/trainings">English</a></li>
                       @elseif(Request::path()=="ambassador_list_en")
                       <li><a class="btn btn-xs btn-light" style="color: #000000c7" href="/ambassadors_of_districts">বাংলা </a></li>
                       <li><a class="btn btn-xs btn-light" style="color: #000000c7" href="/ambassador_list_en">English</a></li>
                       @elseif(Request::path()=="content/20")
                       <li><a class="btn btn-xs btn-light" style="color: #000000c7" href="/content_bangla/26">বাংলা </a></li>
                       <li><a class="btn btn-xs btn-light" style="color: #000000c7" href="/content/20">English</a></li>
                        @elseif(Request::path()=="content/21")
                       <li><a class="btn btn-xs btn-light" style="color: #000000c7" href="/content_bangla/27">বাংলা </a></li>
                       <li><a class="btn btn-xs btn-light" style="color: #000000c7" href="/content/21">English</a></li>
                        @elseif(Request::path()=="content/22")
                       <li><a class="btn btn-xs btn-light" style="color: #000000c7" href="/content_bangla/28">বাংলা </a></li>
                       <li><a class="btn btn-xs btn-light" style="color: #000000c7" href="/content/22">English</a></li>
                         @elseif(Request::path()=="content/23")
                       <li><a class="btn btn-xs btn-light" style="color: #000000c7" href="/content_bangla/29">বাংলা </a></li>
                       <li><a class="btn btn-xs btn-light" style="color: #000000c7" href="/content/23">English</a></li>
                        @elseif(Request::path()=="content/24")
                       <li><a class="btn btn-xs btn-light" style="color: #000000c7" href="/content_bangla/30">বাংলা </a></li>
                       <li><a class="btn btn-xs btn-light" style="color: #000000c7" href="/content/24">English</a></li>
                       @elseif(Request::path()=="content/25")
                       <li><a class="btn btn-xs btn-light" style="color: #000000c7" href="/content_bangla/31">বাংলা </a></li>
                       <li><a class="btn btn-xs btn-light" style="color: #000000c7" href="/content/25">English</a></li>
                       
                       @elseif(Request::path()=="gallery")
                       <li><a class="btn btn-xs btn-light" style="color: #000000c7" href="/gallery_bn">বাংলা </a></li>
                       <li><a class="btn btn-xs btn-light" style="color: #000000c7" href="/gallery">English</a></li>
                       @elseif(Request::path()=="video_gallery")
                       <li><a class="btn btn-xs btn-light" style="color: #000000c7" href="/video_gallery_bn">বাংলা </a></li>
                       <li><a class="btn btn-xs btn-light" style="color: #000000c7" href="/video_gallery">English</a></li>
                       @elseif(Request::path()=="contact-us")
                       <li><a class="btn btn-xs btn-light" style="color: #000000c7" href="/contact_us_bn">বাংলা </a></li>
                       <li><a class="btn btn-xs btn-light" style="color: #000000c7" href="/contact-us">English</a></li>
                       @elseif(Request::path()=="registration")
                       <li><a class="btn btn-xs btn-light" style="color: #000000c7" href="/registration">বাংলা </a></li>
                      <li><a class="btn btn-xs btn-light" style="color: #000000c7" href="/registration">English</a></li>
                      @elseif(Request::path()=="faq")
                       <li><a class="btn btn-xs btn-light" style="color: #000000c7" href="/registration">বাংলা </a></li>
                      <li><a class="btn btn-xs btn-light" style="color: #000000c7" href="/registration">English</a></li>
                      @elseif(Request::path()=="upcoming-news")
                            <li><a class="btn btn-xs btn-light" style="color: #000000c7" href="/news_bangla">বাংলা </a></li>
                            <li><a class="btn btn-xs btn-light" style="color: #000000c7" href="/upcoming-news">English</a></li>
                        @elseif(Request::path()=="awards")
                            <li><a class="btn btn-xs btn-light" style="color: #000000c7" href="/awards_bangla">বাংলা </a></li>
                            <li><a class="btn btn-xs btn-light" style="color: #000000c7" href="/awards">English</a></li>
                        @elseif(Request::path()=="activities")
                            <li><a class="btn btn-xs btn-light" style="color: #000000c7" href="/activities_bangla">বাংলা </a></li>
                            <li><a class="btn btn-xs btn-light" style="color: #000000c7" href="/activities">English</a></li>
                           @elseif(Request::path()=="awards_bangla")
                           <li><a class="btn btn-xs btn-light" style="color: #000000c7" href="/registration">বাংলা </a></li>
                           <li><a class="btn btn-xs btn-light" style="color: #000000c7" href="/registration">English</a></li>
                           @elseif(Request::path()=="upcoming_trainings")
                           <li><a class="btn btn-xs btn-light" style="color: #000000c7" href="/upcoming_training_bn">বাংলা </a></li>
                           <li><a class="btn btn-xs btn-light" style="color: #000000c7" href="/upcoming_trainings">English</a></li>
                            @elseif(Request::path()=="our_friends")
                           <li><a class="btn btn-xs btn-light" style="color: #000000c7" href="/our_friends">বাংলা </a></li>
                           <li><a class="btn btn-xs btn-light" style="color: #000000c7" href="/our_friends">English</a></li>
                                        @elseif(Request::path()=="content/{$details->id}")
                                       <li><a class="btn btn-xs btn-light" style="color: #000000c7" href="#">বাংলা </a></li>
                                        <li><a class="btn btn-xs btn-light" style="color: #000000c7" href="">English</a></li>
                                      
                                        @elseif(Request::path()=="award/{$awards->id}")
                                       <li><a class="btn btn-xs btn-light" style="color: #000000c7" href="/award_bangla/{{$awards->id}}">বাংলা </a></li>
                                        <li><a class="btn btn-xs btn-light" style="color: #000000c7" href="award/{$awards->id}">English</a></li>
                                        @elseif(Request::path()=="news/{$news->id}")
                                       <li><a class="btn btn-xs btn-light" style="color: #000000c7" href="/news_bangla/{{$news->id}}">বাংলা </a></li>
                                        <li><a class="btn btn-xs btn-light" style="color: #000000c7" href="/news/{{$news->id}}">English</a></li>

                      @elseif(Request::path()=="training/{$training->id}")
                       <li><a class="btn btn-xs btn-light" style="color: #000000c7" href="/training_bangla/{{$training->id}}">বাংলা </a></li>
                      <li><a class="btn btn-xs btn-light" style="color: #000000c7" href="/training/{$training->id}">English</a></li>
                       @endif
                    </ul>
                  </nav>
                    <nav>
                        <ul class="mu-top-social-nav">
                            <li><a class="btn btn-xs btn-success" style="color: #000000c7" href="/registration">Register </a></li>
                            <li><a class="btn btn-xs btn-success" style="color: #000000c7" href="/login">Sign Up</a></li>
                        </ul>
                    </nav>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- End header  -->
  <!-- Start menu -->
  <section id="mu-menu">
    <nav class="navbar navbar-default" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- LOGO -->
          <!-- TEXT BASED LOGO -->
          <a class="navbar-brand" href="{{url('/')}}"><img src="{{asset('assets/img/konnaktha.jpg')}}" style="margin-top: -18px" alt="logo"></a>
            <a href="{{url('home_en')}}"><span class="navbar-brand" style="color: #BF40BF;margin-top: 5px;font-style: italic;">KonnaKotha</span></a>
{{--            <p><a class="navbar-brand" style="color: #BF7EDC;font-size: 15px;">Voice of daughter's</a></p>--}}
          <!-- IMG BASED LOGO  -->
          <!-- <a class="navbar-brand" href="index.html"><img src="assets/img/logo.png" alt="logo"></a> -->
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
            <li><a href="{{url('home_en')}}">Home</a></li>

              <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">About Us<span class="fa fa-angle-down"></span></a>
                  <ul class="dropdown-menu" role="menu">

                      <li><a href="/about-us">Jonmokotha-konnakotha</a></li>
                      <li><a href="/notices">Notice</a></li>
                      <li><a href="/documents">Documents</a></li>
                      <li><a href="/upcoming-news">Latest/Upcoming News</a></li>
                      <li><a href="/awards">Awards & Achievements</a></li>



                  </ul>
              </li>

              <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Training<span class="fa fa-angle-down"></span></a>
                  <ul class="dropdown-menu" role="menu">

                      <li><a href="/upcoming_trainings">Upcoming</a></li>
                      <li><a href="/trainings">Completed</a></li>




                  </ul>
              </li>



              <li><a href="/ambassador_list_en">District Ambassador</a></li>

          

              <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Gallery<span class="fa fa-angle-down"></span></a>
                  <ul class="dropdown-menu" role="menu">

                      <li><a href="/gallery">photo gallery</a></li>
                      <li><a href="/video_gallery">video gallery</a></li>




                  </ul>
              </li>



            <li><a href="/contact-us">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
  </section>
  <!-- End menu -->
  <!-- Start search box -->
  <div id="mu-search">
    <div class="mu-search-area">
      <button class="mu-search-close"><span class="fa fa-close"></span></button>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <form class="mu-search-form">
              <input type="search" placeholder="Type Your Keyword(s) & Hit Enter">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End search box -->
  <!-- Start Slider -->
  @yield('content')
  <!-- End from blog -->

  <!-- Start footer -->
  <footer id="mu-footer">
    <!-- start footer top -->
    <div class="mu-footer-top" style="background-color: #BF7EDC">
      <div class="container">
        <div class="mu-footer-top-area">
          <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4">
              <div class="mu-footer-widget">
                <h4>Emergency Hotline</h4>
                <ul>
                  <li><a href="/home_en">Government information and services (333)</a></li>
                  <li><a href="/home_en">Emergency services (999)</a></li>
                   <li><a href="/home_en">Prevention of violence against women and children (109)</a></li>

                </ul>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
              <div class="mu-footer-widget">
                <h4>Student Help</h4>
                <ul>
                <li><a href="/documents">FAQ</a></li>
                  <li><a href="/registration">Registration</a></li>
                  <li><a href="https://safeinternet.unicefbangladesh.org/play_intro">Play Quiz</a></li>

                </ul>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
              <div class="mu-footer-widget">
                <h4>Contact</h4>
                <address>
             <p>   {!! $contact->description !!} </p>
                </address>
                  <a href="https://web.facebook.com/ccabangladesh/?_rdc=1&_rdr" style="color: white;"><span class="fa fa-facebook"></span></a>
                  <a href="#" style="color: white;margin-left: 2%;"><span class="fa fa-twitter"></span></a>
                  <a href="#" style="color: white;margin-left: 2%;"><span class="fa fa-google-plus"></span></a>
                  <a href="#" style="color: white;margin-left: 2%;"><span class="fa fa-linkedin"></span></a>
                  <a href="https://www.youtube.com/channel/UCaUMl9oTYbo0MXt-a39RBIg/videos" style="color: white;margin-left: 2%;"><span class="fa fa-youtube"></span></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end footer top -->
    <div class="mu-footer-bottom" style="background-color: #BF7EDC">
      <div class="container">
        <div class="mu-footer-bottom-area">
          <p>&copy;Designed and Developed by <a href="https://www.olivineltd.com/" rel="nofollow">CCA</a></p>
        </div>
      </div>
    </div>
    <!-- end footer bottom -->
  </footer>
  <!-- End footer -->

  <!-- jQuery library -->
  <script src="{{url('assets/js/jquery.min.js')}}"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="{{url('assets/js/bootstrap.js')}}"></script>
  <!-- Slick slider -->
  <script type="text/javascript" src="{{url('assets/js/slick.js')}}"></script>
  <!-- Counter -->
  <script type="text/javascript" src="{{url('assets/js/waypoints.js')}}"></script>
  <script type="text/javascript" src="{{url('assets/js/jquery.counterup.js')}}"></script>
  <!-- Mixit slider -->
  <script type="text/javascript" src="{{url('assets/js/jquery.mixitup.js')}}"></script>
  <!-- Add fancyBox -->
  <script type="text/javascript" src="{{url('assets/js/jquery.fancybox.pack.js')}}"></script>


  <!-- Custom js -->
  <script src="{{url('assets/js/custom.js')}}"></script>
  @yield('js')

  </body>
</html>