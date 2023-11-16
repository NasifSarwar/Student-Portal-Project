@extends('layouts.master')

@section('content')

<section class="page-heading">
			<div class="container">
				<h2>Current Trainings</h2>
			</div>
		</section>
		<section class="upcomming events-section">
			<div class="container">

            @foreach($exams as $exam)
				<div class="event-wrap">
					<div class="img-wrap">
						<img src="../images/{{$exam->photos}}" alt="event images">
					</div>
					<div class="details">
						<a href=""><h3><a href="/training_details/{{$exam->id}}">{{$exam->training_name}}</a></h3></a>
						<p><b>Start Date:{{$exam->start_date}}</b> <br>
                        <b>End Date:{{$exam->end_date}}</b>
                    
                    </p>

						
						<h5><i class="fas fa-map-marker-alt"></i>{{$exam->training_id}}</h5>
					</div>
				</div>

				
				@endforeach

				

				

			

				

		</section>
		<section class="button-section">
			<div class="container">
				<a href="#" class="button">show more</a>
			</div>
		</section>
		






@endsection