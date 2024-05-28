@extends('layouts.app',['title'=>'Projects'])
@section('content')
<div id="fh5co-services-section">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
				<h3>Our Projects. Support Us</h3>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row text-center">
			<?php $projects = ['', '', '', '', '']; ?>
			@foreach($projects as $project)
			<div class="col-md-4 col-sm-4">
				<div class="services animate-box">
					<span><i class="icon-heart"></i></span>
					<h3>Water Project In Kenya</h3>
					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
						live the blind texts.</p>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</div>
<!-- END What we do -->
<div id="fh5co-portfolio">
	<div class="container" id="gallery">

		<div class="row">
			<div class="col-md-6 col-md-offset-3 text-center heading-section animate-box">
				<h3>Our Gallery</h3>
				<!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit est facilis maiores, perspiciatis
					accusamus asperiores sint consequuntur debitis.</p> -->
			</div>
		</div>


		<div class="row row-bottom-padded-md">
			<div class="col-md-12">
				<ul id="fh5co-portfolio-list">
					<?php
					$image1 = asset('storage/images/coverb.jpg');
					$image2 = asset('storage/images/coverb.jpg');
					$image3 = asset('storage/images/coverb.jpg');
					?>
					<li class="two-third animate-box" data-animate-effect="fadeIn" style="background-image: url('{{$image3}}'); ">
						<a href="#" class="color-3">
							<div class="case-studies-summary">
								<span>Give Love</span>
								<h2>Donation is caring</h2>
							</div>
						</a>
					</li>

					<li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url({{$image3}}); ">
						<a href="#" class="color-4">
							<div class="case-studies-summary">
								<span>Give Love</span>
								<h2>Donation is caring</h2>
							</div>
						</a>
					</li>

					<li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url({{$image1}}); ">
						<a href="#" class="color-5">
							<div class="case-studies-summary">
								<span>Give Love</span>
								<h2>Donation is caring</h2>
							</div>
						</a>
					</li>

					<li class="two-third animate-box" data-animate-effect="fadeIn" style="background-image: url('{{$image3}}'); ">
						<a href="#" class="color-6">
							<div class="case-studies-summary">
								<span>Give Love</span>
								<h2>Donation is caring</h2>
							</div>
						</a>
					</li>
				</ul>
			</div>
		</div>

		<!-- <div class="row">
			<div class="col-md-4 col-md-offset-4 text-center animate-box">
				<a href="#" class="btn btn-primary btn-lg">See Gallery</a>
			</div>
		</div> -->


	</div>
</div>
<div id="fh5co-content-section" class="fh5co-section-gray">
	<div class="container" id="philo">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
				<h3>Our Philantrophist</h3>
				<!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit est facilis maiores, perspiciatis
					accusamus asperiores sint consequuntur debitis.</p> -->
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<?php $tests = ['', '', ''] ?>
			@foreach($tests as $test)
			<div class="col-md-4">
				<div class="fh5co-testimonial text-center animate-box">
					<figure>
						<img src="{{asset('storage/images/Ombati.jpg')}}" alt="user">
					</figure>
					<blockquote>
						<p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and
							Consonantia, there live the blind texts. Far far away, behind the word mountains, far from
							the countries Vokalia and Consonantia, there live the blind texts.&rdquo;</p>
					</blockquote>
					<span>Jean Doe, XYZ Co.</span>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</div>
<!-- fh5co-content-section -->

@endsection