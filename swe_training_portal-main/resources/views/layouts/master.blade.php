<!DOCTYPE html>
<html>
<head>
	<title>Student Portal</title>
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
	<link rel="stylesheet" type="text/css" href="{{asset('css/HeaderFooter.css')}}">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">  
	
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
							<a href="mailto:info@studentportal.com" itemprop="email"><i class="fas fa-envelope"></i>info@studentportal.com</a>
						</div>
						<div class="top-header-block">
							<a href="tel:+9779813639131" itemprop="telephone"><i class="fas fa-phone"></i> +88 01521572275</a>
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
							<a href="/login">Login </a>
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
		

		@yield('content')
		<!-- Latest News CLosed -->
		<section class="query-section">
			<div class="container">
				<p>Any Queries? Ask us a question at<a href="tel:+9779813639131"><i class="fas fa-phone"></i> +8801521572275</a></p>
			</div>
		</section>
		<!-- End of Query Section -->

    {{-- The main footer  --}}
  <footer class="footer">
  	 <div class="container">
  	 	<div class="row">
  	 		<div class="footer-col">
  	 			<h4>About</h4>
  	 			<ul>

  	 				<li><a href="tel:+9779813639131"><i class="fas fa-phone"></i> +8801521572275</a></li>
  	 				<li><a href="mailto:info@educationpro.com"><i class="fas fa-envelope"></i> info@studentportal.com</a></li>
  	 				<li><a href=""><i class="fas fa-map-marker-alt"></i>Daffdoil Smart City,Ashulia</a></li>
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>Links</h4>
  	 			<ul>
					<li><a href="#">Daffodil International University</a></li>
					<li><a href="#">Department of Software Engineering,DIU</a></li>
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>Special Courses</h4>
  	 			<ul>
					
					
					
  	 				<li>
						<div class="recent-course-wrap">
							<img src="{{asset('images/ui-ux.jpg')}}" alt="Ui/Ux Designing">
							<a href=""><div class="course-name">
								<h3>UI/UX Designer courses</h3>
						</div></a>
					</li>
  	 				<li>
						<div class="recent-course-wrap">
							<img src="{{asset('images/ui-ux.jpg')}}" alt="Ui/Ux Designing">
							<a href=""><div class="course-name">
								<h3>UI/UX Designer courses</h3>
						</div></a>
					</li>
  	 				
  	 			</ul>
  	 		</div>
  	 		
			   <div class="footer-col">
				<h4>Follow Us</h4>
				<div class="social-links">
					<a href="#"><i class="fab fa-facebook-f"></i></a>
					<a href="#"><i class="fab fa-twitter"></i></a>
					<a href="#"><i class="fab fa-instagram"></i></a>
					<a href="#"><i class="fab fa-linkedin-in"></i></a>
				</div>
			</div>
			<div class="footer-last-section">
				<div class="container">
					<p>----------------------------------------->Copyright 2023 &copy; SWE Department <span> | </span> Website developed by <a href="https://labtheme.com">Daffodil International University</a><-------------------------------------------------</p>
				</div>
			</div>
  	 	</div>
  	 </div>
  </footer>
    {{--End of the main footer  --}}



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