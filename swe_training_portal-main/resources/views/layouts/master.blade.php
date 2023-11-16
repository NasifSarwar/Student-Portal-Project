<!DOCTYPE html>
<html>
<head>
	<title>Training Portal</title>
    <link rel="icon" type="image/x-icon" href="{{asset('/images/diu-logo.jpg')}}">
	<meta name="viewport" content="width=device-width">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="{{asset('css/all.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/all.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/lightbox.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/flexslider.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/owl.carousel.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/owl.theme.default.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/jquery.rateyo.css')}}"/>
	<!-- <link rel="stylesheet" type="text/css" href="css/jquery.mmenu.all.css" /> -->
	<!-- <link rel="stylesheet" type="text/css" href="css/meanmenu.min.css"> -->
	<link rel="stylesheet" type="text/css" href="{{asset('inner-page-style.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('style.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('gallery.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('section.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('category.css')}}">
	
	<link href="https://fonts.googleapis.com/css?family=Raleway:400,500,600,700" rel="stylesheet">



	<style>
    select {
        width: 650px;
		height: 30px;
        margin: 50px;
    }
    select:focus {
        min-width: 650px;
        width: 650px;
    }
</style>


<style>
#myDIV{
	width: 100%;
    padding: 10px 0;
    text-align: center;
    background-color: lightblue;
    margin-top:20px;
}
</style>





</head>
<body>
	<div id="page" class="site" itemscope itemtype="http://schema.org/LocalBusiness">
		<header class="site-header">
			<div class="top-header">
				<div class="container">
					<div class="top-header-left">
						<div class="top-header-block">
							<a href="mailto:info@trainingportal.com" itemprop="email"><i class="fas fa-envelope"></i>info@trainingportal.com</a>
						</div>
						<div class="top-header-block">
							<a href="tel:+9779813639131" itemprop="telephone"><i class="fas fa-phone"></i> +88 01770137655</a>
						</div>
					</div>
					<div class="top-header-right">
						<div class="social-block">
							<ul class="social-list">
								
								<li><a target="_blank" href="https://daffodilvarsity.edu.bd"><i class="fab fa-google-plus-g"></i></a></li>
								<li><a target="_blank" href="https://www.facebook.com/daffodilvarsity.edu.bd"><i class="fab fa-facebook-square"></i></a></li>
								
								<li><a target="_blank" href=https://twitter.com/daffodilvarsity"><i class="fab fa-twitter"></i></a></li>
								
							</ul>
						</div>
						<div class="login-block">
							<a href="/login">Login /</a>
							<a href="">Register</a>
						</div>
					</div>
				</div>
			</div>
			<!-- Top header Close -->
			<div class="main-header">
				<div class="container">
					<div class="logo-wrap" itemprop="logo">
						<img src="{{asset('images/logo.png')}}" height="60px" width="120px" alt="Logo Image">
						<!-- <h1>Education</h1> -->
					</div>
					<div class="nav-wrap">
						<nav class="nav-desktop">
							<ul class="menu-list">
								<li><a href="/">Home</a></li>
								<li><a href="/about_us">About Us</a></li>
								
								
								
								
								<li><a href="/contact_us">Contact</a></li>
							</ul>
						</nav>
						<div id="bar">
							<i class="fas fa-bars"></i>
						</div>
						<div id="close">
							<i class="fas fa-times"></i>
						</div>
					</div>
				</div>
			</div>
		</header>
		<!-- Header Close -->
		
		<!-- <div class="banner">
			<div class="owl-five owl-carousel owl-theme">
	            <div class="item-video">
            		<iframe width="100%" height="450" src="https://www.youtube.com/embed/ENVW3uZ3a-4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
            		</iframe>
	            </div>
	            <div class="item-video">
	            	<iframe width="100%" height="450" src="https://www.youtube.com/embed/0bfk90rWV9U" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	            </div>
	            <div class="item-video">
	            	<iframe width="100%" height="450" src="https://www.youtube.com/embed/ktvTqknDobU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	            </div>
	            <div class="item-video">
            		<iframe width="100%" height="450" src="https://www.youtube.com/embed/ENVW3uZ3a-4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
            		</iframe>
	            </div>
	            <div class="item-video">
	            	<iframe width="100%" height="450" src="https://www.youtube.com/embed/0bfk90rWV9U" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	            </div>
	            <div class="item-video">
	            	<iframe width="100%" height="450" src="https://www.youtube.com/embed/ktvTqknDobU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	            </div>
          </div>
		</div> -->
		<!-- Banner Close -->
		@yield('content')
		<!-- Latest News CLosed -->
		<section class="query-section">
			<div class="container">
				<p>Any Queries? Ask us a question at<a href="tel:+9779813639131"><i class="fas fa-phone"></i> +8801770137655</a></p>
			</div>
		</section>
		<!-- End of Query Section -->
		<footer class="page-footer" itemprop="footer" itemscope itemtype="http://schema.org/WPFooter">
			<div class="footer-first-section">
				<div class="container">
					<div class="box-wrap" itemprop="about">
						<header>
							<h1>about</h1>
						</header>
						

						<h4><a href="tel:+9779813639131"><i class="fas fa-phone"></i> +8801770137655</a></h4>
						<h4><a href="mailto:info@educationpro.com"><i class="fas fa-envelope"></i> info@trainingportal.com</a></h4>
						<h4><a href=""><i class="fas fa-map-marker-alt"></i>Daffdoil Smart City,Ashulia</a></h4>
					</div>

					<div class="box-wrap">
						<header>
							<h1>links</h1>
						</header>
						<ul>
							<li><a href="#">Daffodil International University</a></li>
							<li><a href="#">Department of Software Engineering,DIU</a></li>
						
						</ul>
					</div>

					<div class="box-wrap">
						<header>
							<h1>Special Offer</h1>
						</header>
						<div class="recent-course-wrap">
							<img src="{{asset('images/ui-ux.jpg')}}" alt="Ui/Ux Designing">
							<a href=""><div class="course-name">
								<h3>UI/UX Designer courses</h3>
								<p><span>TK500</span> $400</p>
							</div></a>
						</div>
						<div class="recent-course-wrap">
							<img src="{{asset('images/ui-ux.jpg')}}" alt="Ui/Ux Designing">
							<a href=""><div class="course-name">
								<h3>UI/UX Designer courses</h3>
								<p><span>TK50</span> TK40</p>
							</div></a>
						</div>
					</div>

					<div class="box-wrap">
						<header>
							<h1>quick contact</h1>
						</header>
						<section class="quick-contact">
							<input type="email" name="email" placeholder="Your Email*">
							<textarea placeholder="Type your message*"></textarea>
							<button>send message</button>
						</section>
					</div>

				</div>
			</div>
			<!-- End of box-Wrap -->
			<div class="footer-second-section">
				<div class="container">
					<hr class="footer-line">
					<ul class="social-list">
						<li><a href=""><i class="fab fa-facebook-square"></i></a></li>
						<li><a href=""><i class="fab fa-twitter"></i></a></li>
						<li><a href=""><i class="fab fa-skype"></i></a></li>
						<li><a href=""><i class="fab fa-youtube"></i></a></li>
						<li><a href=""><i class="fab fa-instagram"></i></a></li>
					</ul>
					<hr class="footer-line">
				</div>
			</div>
			<div class="footer-last-section">
				<div class="container">
					<p>Copyright 2023 &copy; SWE Department <span> | </span> Website developed by <a href="https://labtheme.com">Daffodil International University</a></p>
				</div>
			</div>
		</footer>

		<!-- <nav id="menu">
			<ul>
				<li><a href="#">HOME</a></li>
				<li>
					<span>COURSES</span>
					<ul>
						<li><a href="#/courses/child">Child</a></li>
						<li><a href="#/courses/child">Child</a></li>
						<li>
							<span>Child</span>
							<ul>
								<li><a href="#/courses/child/grandChild">Grand Child</a></li>
								<li><a href="#/courses/child/grandChild">Grand Child</a></li>
							</ul>
						</li>
					</ul>
				</li>
				<li>
					<a href="#">gallery</a>
					<ul>
						<li><a href="#">Child</a></li>
						<li><a href="#">Child</a></li>
						<li><a href="#">Child</a></li>
					</ul>
				</li>
				<li>
					<a href="#">news</a>
					<ul>
						<li><a href="#">Child</a></li>
						<li><a href="#">Child</a></li>
						<li><a href="#">Child</a></li>
					</ul>
				</li>
				<li><a href="#">about</a></li>
				<li><a href="#">contact</a></li>
			</ul>
		</nav> -->

	</div>
	<script type="text/javascript" src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/lightbox.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/all.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/isotope.pkgd.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/owl.carousel.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/jquery.flexslider.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/jquery.rateyo.js')}}"></script>
	<!-- <script type="text/javascript" src="js/jquery.mmenu.all.js"></script> -->
	<!-- <script type="text/javascript" src="js/jquery.meanmenu.min.js"></script> -->
	<script type="text/javascript" src="{{asset('js/custom.js')}}"></script>
</body>
</html>