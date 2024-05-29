@extends('layouts.app',['title'=>'About Us'])
@section('content')
<div class="fh5co-hero">
	<div class="fh5co-overlay"></div>
	<?php $image=asset("storage/images/coverb.JPG");?>
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
				<p>Aholiab Ministries and Charity Foundation was started in the year 2023 July in Pace Academy after a successiful VBS. The Members were observed to have a similarity of desire, meeting the various needs of the kids. This dream was put into process with a series of meetings to streamline the foundation. Various steps were made to ensure that the foundation met  the envisioned goals. Collaborations and self dedication was among many attempts made to see the success of the foundation. The name <b>Aholiab Foundation</b> was conceived at the foundation of the organization but later <b>Aholiab Ministries and Charity Foundation</b> was adopted as it spoke wholy and fully of the foundation's desires</p>
			</div>
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