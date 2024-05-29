@extends('layouts.app',['title'=>'Contact Us'])
@section('content')
<div class="fh5co-hero">
	<div class="fh5co-overlay"></div>
	<?php $image=asset("storage/images/coverb.jpg");?>
	<div class="fh5co-cover text-center" data-stellar-background-ratio="0.5" style="background-image: url({{$image}});">
		<div class="desc animate-box">
			<h2><strong>Contact</strong> Us</h2>
		</div>
	</div>

</div>
<div id="fh5co-contact" class="animate-box">
	<div class="container">
		<form action="#">
			<div class="row">
				<div class="col-md-6">
					<h3 class="section-title">Our Address</h3>
					<ul class="contact-info">
						<li><i class="icon-location-pin"></i> Juja</li>
						<li><i class="icon-phone2"></i>+254 701 583 807</li>
						<li><i class="icon-mail"></i>info@aholiabfoundation.org</li>
						<li><i class="icon-globe2"></i>www.aholiabfoundation.org</li>
					</ul>
				</div>
				<div class="col-md-6">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Name">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Email">
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<textarea name="" class="form-control" id="" cols="30" rows="7" placeholder="Message"></textarea>
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<input type="submit" value="Send Message" class="btn btn-primary">
							</div>
						</div>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>
<!-- END fh5co-contact -->
<div id="map" class="fh5co-map"></div>
<!-- END map -->
@endsection