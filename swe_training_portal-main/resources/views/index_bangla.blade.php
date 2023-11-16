@extends('layouts.master')

@section('content')




<section class="page-content" id="course-page">
			<div class="container">
				<main class="course-detail">
					<center><h2>Find your's right training</h2></center>

					<form action="find_training" method="post" id="sampleForm"> 
					
</form>
					<header>
						<div class="course-box">
							<i class="far fa-clock"></i>
							<p>{{$count1}}</p>
							<p>Total Training</p>
						</div>

						<div class="course-box">
							<i class="fas fa-chalkboard-teacher"></i>
							<p>{{$count2}}</p>
							<p>Upcoming</p>
						</div>

						<div class="course-box">
							<i class="fas fa-money-check-alt"></i>
							<p>{{$count3}}</p>
							<p>Ongoing</p>
						</div>

						<div class="course-box">
							<h3>Carrier Guideline</h3>

							<button onclick="window.location.href='images/{{$docs->filename}}';">download pdf</button>
						</div>
					</header>
					<article>
						<section class="course-objective">
						
							<center><h3>Browse Category</h3></center>

							<div class="row">
  <div class="col-3 menu">
    <ul>
		@foreach($types as $type)
	<li><a href="training_category/{{$type->name}}" style="color: #800000"><b>{{$type->name}}</b></a></li>
	@endforeach
    </ul>
  </div>
  <div class="col-3 menu">
  <ul>
  @foreach($types_second as $seconds)
	<li><a href="training_category/{{$seconds->name}}" style="color: #800000"><b>{{$seconds->name}}</b></a></li>
	@endforeach
    </ul>
  </div>
  <div class="col-3 menu">
    <ul>
	@foreach($types_third as $third)
      <li><a href="training_category/{{$third->name}}" style="color: #800000"><b>{{$third->name}}</b></a></li>
      @endforeach
     
    </ul>
  </div>

  <div class="col-3 menu">
    <ul>
		@foreach($types_fourth as $fourth)
      <li><a href="training_category/{{$fourth->name}}" style="color: #800000"><b>{{$fourth->name}}</b></a></li>
       @endforeach
     
    </ul>
  </div>
							

						</section>

						<section class="course-objective">
						
							<center><h3>Special Trainings</h3></center>

							<div class="row">
  <div class="col-3 menu">
    <ul>
		@foreach($category_first as $item_1)
	<li><a href="training_category/{{$item_1->name}}" style="color:#800000"><b>{{$item_1->name}}</b></a></li>
	@endforeach
    </ul>
  </div>
  <div class="col-3 menu">
  <ul>
  @foreach($category_second as $item_2)
	<li><a href="#" style="color: #800000"><b>{{$item_2->name}}</b></a></li>
	@endforeach
	
    </ul>
  </div>
  <div class="col-3 menu">
    <ul>
	@foreach($category_third as $item_3)
	<li><a href="#" style="color:#800000"><b>{{$item_3->name}}</b></a></li>
	@endforeach
     
	  
    </ul>
  </div>

  <div class="col-3 menu">
    <ul>
     
	@foreach($category_fourth as $item_4)
	<li><a href="#" style="color:#800000"><b>{{$item_4->name}}</b></a></li>
	@endforeach
     
    </ul>
  </div>
</section>
					</article>					
				</main>
				<aside>
					<div class="reserve-course">
						<h2 style="color:white"><b>Divisional Trainings</b></h2>\
						@foreach($district as $districts)
						<button type="button" onclick="window.location.href='district_training/{{$districts->name_english}}';" class="btn btn-light">{{$districts->name_english}}</button>
						@endforeach

						<br>
						<br>

						<h2 style="color:white"><b>Important Links</b></h2>
                        <h3><a target="_blank" href="https://daffodilvarsity.edu.bd/" style="color: white"><b>>>Daffodil International University</b></a>&nbsp&nbsp <a target="_blank" href="https://cdc.daffodilvarsity.edu.bd/" style="color: white"><b>>>Carrier Development Centre</b></a>
						
						   <a target="_blank" href="https://daffodilvarsity.edu.bd/department-notice/hrdi" style="color: white"><b>>>Human Resource Development Institute</b></a>

						   


						
						
						</h3>
						
					</div>
					<!-- New Letter Ends -->
					<div class="recent-post">
						<h2>Ongoing Trainings</h2>
						<div class="post">

						@foreach($items as $item)

							<div class="post-wrap">
								<div class="img-wrap">
									<img src="images/{{$item->photos}}" alt="Post Images">
								</div>
								<div class="post-content">
									<a href="/training_details/{{$item->id}}">
									<h3>{{$item->training_name}}</h3>
										<p>{{$item->start_date}}-{{$item->end_date}}</p>
									</a>
									
								</div>
							</div>

							
							@endforeach
							
							
							

							
						</div>
					</div>
					<!-- Recent Post Close -->
				</aside>
			</div>
		</section>
				
		<section class="page-heading">
			<div class="container">
				<h2>Upcomming Trainings</h2>
			</div>
		</section>
		<section class="upcomming events-section">
			<div class="container">
				@foreach($upcomings as $upcoming)
				<div class="event-wrap">
					<div class="img-wrap">
						<img src="images/{{$upcoming->photos}}" height="100px" width="" alt="event images">
						
					</div>
					<div class="details">
					<p><a href="/training_details/{{$upcoming->id}}"<b>{{$upcoming->training_name}}</b></a></p>

						<h5><i class="far fa-clock"></i>From {{$upcoming->start_date}}-{{$upcoming->end_date}}</h5>
						<h5><i class="fas fa-map-marker-alt"></i>{{$upcoming->training_id}}</h5>
					</div>
				</div>

				@endforeach

				

				

				

				

				

				
			</div>
		</section>
		<section class="button-section">
			<div class="container">
				<a href="#" class="button">show more</a>
			</div>
		</section>

		<section class="what-other-say">
			<!-- <div class="container">
				<div class="wrap-others-say" itemprop="review" itemscope itemtype="http://schema.org/ReviewAction">
					<h1>what other say about us</h1>
					<div id="carousel" class="flexslider">
						<ul class="slides">
							<li class="img-wrap">
								<figure itemprop="image">
									<img src="images/review-big-img.jpg" alt="Person Image">
									<figcaption class="hidden">
										<h3>Sagar Sapkota</h3>
										<h4>UI Designer</h4>
									</figcaption>
								</figure>
							</li>
							<li class="img-wrap">
								<figure itemprop="image">
									<img src="images/review-big-img.jpg" alt="Person Image">
									<figcaption class="hidden">
										<h3>Sagar Sapkota</h3>
										<h4>UI Designer</h4>
									</figcaption>
								</figure>
							</li>
							<li class="img-wrap">
								<figure itemprop="image">
									<img src="images/review-big-img.jpg" alt="Person Image">
									<figcaption class="hidden">
										<h3>Sagar Sapkota</h3>
										<h4>UI Designer</h4>
									</figcaption>
								</figure>
							</li>
							<li class="img-wrap">
								<figure itemprop="image">
									<img src="images/review-big-img.jpg" alt="Person Image">
									<figcaption class="hidden">
										<h3>Sagar Sapkota</h3>
										<h4>UI Designer</h4>
									</figcaption>
								</figure>
							</li>
							<li class="img-wrap">
								<figure itemprop="image">
									<img src="images/review-big-img.jpg" alt="Person Image">
									<figcaption class="hidden">
										<h3>Sagar Sapkota</h3>
										<h4>UI Designer</h4>
									</figcaption>
								</figure>
							</li>
							<li class="img-wrap">
								<figure itemprop="image">
									<img src="images/review-big-img.jpg" alt="Person Image">
									<figcaption class="hidden">
										<h3>Sagar Sapkota</h3>
										<h4>UI Designer</h4>
									</figcaption>
								</figure>
							</li>
							<li class="img-wrap">
								<figure itemprop="image">
									<img src="images/review-big-img.jpg" alt="Person Image">
									<figcaption class="hidden">
										<h3>Sagar Sapkota</h3>
										<h4>UI Designer</h4>
									</figcaption>
								</figure>
							</li>
							<li class="img-wrap">
								<figure itemprop="image">
									<img src="images/review-big-img.jpg" alt="Person Image">
									<figcaption class="fig">
										<h3 class="hidden">Sagar Sapkota</h3>
										<h4 class="hidden">UI Designer</h4>
									</figcaption>
								</figure>
							</li>
						</ul>
					</div>
					<div id="slider" class="flexslider">
	  					<ul class="slides">
						    <li>
						    	<div class="testimonial-holder" itemprop="description">
						    		<strong class="title">Amazing service and amazing team. Thank you!</strong>
						    		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus tristique fer-<br/>mentum mauris, non tincidunt arcu venenatis vel. Nam et vehicula turpis. Ut nunc purus, mattis eu odio a, egestas facilisis nibh. Mauris magna diam, iaculis vitae sapien non, pharetra congue purus. Phasellus in odio purus.</p>
						    		<div class="rateYo"></div>
						    	</div>
						    </li>
						    <li>
						    	<div class="testimonial-holder" itemprop="description">
						    		<strong class="title">Very Satisfaied with their service</strong>
						    		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus tristique fer-<br/>mentum mauris, non tincidunt arcu venenatis vel. Nam et vehicula turpis. Ut nunc purus, mattis eu odio a, egestas facilisis nibh. Mauris magna diam, iaculis vitae sapien non, pharetra congue purus. Phasellus in odio purus.</p>
						    		<div class="rateYo"></div>
						    	</div>
						    </li>
						    <li>
						    	<div class="testimonial-holder" itemprop="description">
						    		<strong class="title">Quick, efficient and meets your expectations</strong>
						    		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus tristique fer-<br/>mentum mauris, non tincidunt arcu venenatis vel. Nam et vehicula turpis. Ut nunc purus, mattis eu odio a, egestas facilisis nibh. Mauris magna diam, iaculis vitae sapien non, pharetra congue purus. Phasellus in odio purus.</p>
						    		<div class="rateYo"></div>
						    	</div>
						    </li>
						    <li>
						    	<div class="testimonial-holder" itemprop="description">
						    		<strong class="title">The website was according our imagination</strong>
						    		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus tristique fer-<br/>mentum mauris, non tincidunt arcu venenatis vel. Nam et vehicula turpis. Ut nunc purus, mattis eu odio a, egestas facilisis nibh. Mauris magna diam, iaculis vitae sapien non, pharetra congue purus. Phasellus in odio purus.</p>
						    		<div class="rateYo"></div>
						    	</div>
						    </li>
						    <li>
						    	<div class="testimonial-holder" itemprop="description">
						    		<strong class="title">Amazing service and amazing team. Thank you!</strong>
						    		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus tristique fer-<br/>mentum mauris, non tincidunt arcu venenatis vel. Nam et vehicula turpis. Ut nunc purus, mattis eu odio a, egestas facilisis nibh. Mauris magna diam, iaculis vitae sapien non, pharetra congue purus. Phasellus in odio purus.</p>
						    		<div class="rateYo"></div>
						    	</div>
						    </li>
						    <li>
						    	<div class="testimonial-holder" itemprop="description">
						    		<strong class="title">Very Satisfaied with their service</strong>
						    		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus tristique fer-<br/>mentum mauris, non tincidunt arcu venenatis vel. Nam et vehicula turpis. Ut nunc purus, mattis eu odio a, egestas facilisis nibh. Mauris magna diam, iaculis vitae sapien non, pharetra congue purus. Phasellus in odio purus.</p>
						    		<div class="rateYo"></div>
						    	</div>
						    </li>
						    <li>
						    	<div class="testimonial-holder" itemprop="description">
						    		<strong class="title">Quick, efficient and meets your expectations</strong>
						    		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus tristique fer-<br/>mentum mauris, non tincidunt arcu venenatis vel. Nam et vehicula turpis. Ut nunc purus, mattis eu odio a, egestas facilisis nibh. Mauris magna diam, iaculis vitae sapien non, pharetra congue purus. Phasellus in odio purus.</p>
						    		<div class="rateYo"></div>
						    	</div>
						    </li>
						    <li>
						    	<div class="testimonial-holder" itemprop="description">
						    		<strong class="title">The website was according our imagination</strong>
						    		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus tristique fer-<br/>mentum mauris, non tincidunt arcu venenatis vel. Nam et vehicula turpis. Ut nunc purus, mattis eu odio a, egestas facilisis nibh. Mauris magna diam, iaculis vitae sapien non, pharetra congue purus. Phasellus in odio purus.</p>
						    		<div class="rateYo"></div>
						    	</div>
						    </li>
	  					</ul>
					</div>
				</div>
			</div> -->
			<div class="container">
				<h4 class="article-subtitle">Get to Know</h4>
				<h2 class="head">What we say</h2>
				<div class="three owl-carousel owl-theme">
				@foreach($speeches as $speech)
					<div class="customer-item" itemscope itemtype="http://schema.org/Rating">
						
					<div class="border">
							<div class="customer">
								<figure>
									<img class="customer-img" src="images/{{$speech->filename}}" alt="Person image">
									<figcaption>
										<span itemprop="author">{{$speech->name_english}}<br>
									   {{$speech->designation_english}}
									
									</span>
										
									</figcaption>
								</figure>
							</div>
							<div class="customer-review">
								<p itemprop="description">
									 
								   {{$speech->speech_english}}
									 
								</p>
							</div>
						</div>
					</div>

					@endforeach
</div>
			</div>
		</section>



		<section class="page-heading">
			<div class="container">
				<h2>Partners</h2>
			</div>
		
		<div class="gallery">
			@foreach($friends as $friend)
		<img src="images/{{$friend->image}}"  alt="teacher img">
           @endforeach
</div>

<br>

@endsection