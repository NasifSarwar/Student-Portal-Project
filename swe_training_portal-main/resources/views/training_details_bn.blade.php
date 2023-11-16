@extends('layouts.master')

@section('content')




<section class="about-upper-section" itemprop="mainContentofPage">
			<div class="container">
				<article class="who-we-are">
                    @foreach($exams as $exam)
		<center>			<h2 class="top-heading">{{$exam->training_name}}</h2> </center>

					
                    <p>

                    <?php

                        echo $exam->description;

                    ?>


</p>

                    @endforeach
				</article>
                
                <div class="our-story">
					<h2 class="top-heading">Details:</h2>
					<ul>
						<li><i class="fas fa-chalkboard-teacher"></i> <a href="#"><b>Start Date:{{$exam->start_date}}</b></a></li>
						<li><i class="fas fa-graduation-cap"></i> <a href="#"><b>End Date:{{$exam->end_date}}</b></a></li>
						<li><i class="fas fa-book-open"></i> <b><a href="#">District:{{$exam->training_id}}</b></a></li>
						

						<!-- For None link use below -->
						<!-- <li><i class="fas fa-chalkboard-teacher"></i> <p>60+ certified teachers</p></li>
						<li><i class="fas fa-graduation-cap"></i>  <p>600+ students enrolled</p></li>
						<li><i class="fas fa-book-open"></i>  <p>50+ courses completed</p></li>
						<li><i class="fas fa-users"></i>  <p>10000+ foreign followers</p></li> -->
					</ul>
				</div>
				
			</div>
		</section>













@endsection