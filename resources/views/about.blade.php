@extends('layouts.app',['title'=>'About Us'])
@section('content')
<div class="fh5co-hero">
	<div class="fh5co-overlay"></div>
	<?php $image=asset("storage/images/coverb.jpg");?>
	<div class="fh5co-cover text-center" data-stellar-background-ratio="0.5" style="background-image: url({{$image}});">
		<div class="desc animate-box">
			<h2>We Are <strong>Non-profit</strong></h2>
		</div>
	</div>
</div>

<div id="fh5co-feature-product" class="fh5co-section-gray">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center heading-section">
				<h3>How we started.</h3>
				<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
			</div>
		</div>

		<div class="row row-bottom-padded-md">
			<div class="col-md-12 text-center animate-box">
				<p><img src="{{asset('storage/images/coverb.jpg')}}" alt="Free HTML5 Bootstrap Template" class="img-responsive"></p>
			</div>
			<div class="col-md-6 text-center animate-box">
				<p><img src="{{asset('storage/images/coverb.jpg')}}" alt="Free HTML5 Bootstrap Template" class="img-responsive"></p>
			</div>
			<div class="col-md-6 text-center animate-box">
				<p><img src="{{asset('storage/images/coverb.jpg')}}" alt="Free HTML5 Bootstrap Template" class="img-responsive"></p>
			</div>
		</div>
		<div class="row">
			<?php $values = ['','','','']?>
			@foreach($values as $value)
			<div class="col-md-3">
				<div class="feature-text">
					<h3>Love</h3>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At, mollitia! Temporibus, nemo. Doloremque sequi harum, dignissimos alias ea fugit magnam est accusamus, incidunt aspernatur quasi unde cupiditate aut atque architecto.</p>
				</div>
			</div>
			@endforeach
		</div>


	</div>
</div>

<div id="fh5co-content-section" class="fh5co-section-gray">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
				<h3>Leadership</h3>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="fh5co-team text-center animate-box">
					<figure>
						<img src="{{asset('storage/images/Ombati.jpg')}}" alt="user">
					</figure>
					<div>
						<h3>Edimon</h3>
						<p><span>Founder</span></p>
					</div>
					<p class="fh5co-social-icons">
						<a href="#"><i class="bi bi-twitter"></i></a>
						<a href="#"><i class="bi bi-facebook"></i></a>
						<a href="#"><i class="bi bi-whatsapp"></i></a>
					</p>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- fh5co-content-section -->

@endsection