@extends('layouts.master')

@section('content')
   


<section class="contact-page-section">
			<div class="container">
				<div class="people-info-wrap">
					<h2>leave us your info</h2>
					
					<form>
						<span>
						<input type="text" placeholder="Full Name*" class="input- name">
						<input type="email" placeholder="Email*" class="input- email">
						</span>
						<input type="text" placeholder="Subject*" class="input- subject">
						<textarea placeholder="Messages*" class="input-">
							
						</textarea>
						<input type="submit" value="submit now">
					</form>
				</div>

				<div class="contact-info">
					<h2>contact info</h2>
					<ul class="contact-list">
						<li><i class="fas fa-location-arrow"></i> 
							<span>
								<p>Daffodil Smart City</p>
							    <p>Khagan,Ashulia</p>
							</span>
						</li>
						<li><i class="fas fa-phone"></i>
							<span> 
								<p>Mobile:01847140012</p>
								<p>Ext: 35112</p>
							</span>
						</li>
						<li><i class="fas fa-envelope"></i>
							<span>
								<p>sweoffice@daffodilvarsity.edu.bd</p>
							</span>
						</li>
					</ul>
					<ul class="contact-social">
						<li><a href=""><i class="fab fa-viber"></i></a></li>
						<li><a href=""><i class="fab fa-google-plus-g"></i></a></li>
						<li><a href=""><i class="fab fa-facebook-square"></i></a></li>
						<li><a href=""><i class="fab fa-facebook-messenger"></i></a></li>
						<li><a href=""><i class="fab fa-twitter"></i></a></li>
						<li><a href=""><i class="fab fa-skype"></i></a></li>
						<li><a href=""><i class="fab fa-youtube"></i></a></li>
					</ul>
				</div>
			</div>
		</section>

		<section class="map-section">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29187.161840336008!2d90.3027921819796!3d23.875599909764006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c23dd12bbc75%3A0x313d214552eabe56!2sDaffodil%20Smart%20City!5e0!3m2!1sen!2sbd!4v1679884249006!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
		</section>













@endsection

