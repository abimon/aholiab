@extends('layouts.app',['title'=>'Contact Us'])
@section('content')
<h1 class="text-center fw-bold">Contact Us</h1>
<div id="fh5co-contact" class="animate-box">
	<div class="container">
		<form action="#">
			<div class="row">
				<div class="col-md-6">
					<h3 class="section-title">Our Inquiries Address</h3>
					<ul class="contact-info">
						<li><i class="icon-location-pin"></i> Juja</li>
						<li><i class="icon-phone2"></i>+254 701 701 861.</li>
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