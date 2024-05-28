@extends('layouts.app',['title'=>'Reports'])
@section('content')
<div class="fh5co-hero">
	<div class="fh5co-overlay"></div>
	<?php $image=asset("storage/images/coverb.JPG");?>
	<div class="fh5co-cover text-center" data-stellar-background-ratio="0.5" style="background-image: url({{$image}});">
		<div class="desc animate-box">
			<h2>Our <strong>Projects &amp; Activities Reports</strong></h2>
		</div>
	</div>

</div>

<div id="fh5co-blog-section" class="fh5co-section-gray">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
				<h3>Inspire. Impact. Influence</h3>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row row-bottom-padded-md">
			<?php $reports=['','','','','']?>
			@foreach($reports as $report)
			<div class="col-lg-4 col-md-4 col-sm-6" style="margin-bottom:70px;">
				<div class="fh5co-blog animate-box">
					<a href="#"><img class="img-responsive" src="images/cover_bg_1.jpg" alt=""></a>
					<div class="blog-text">
						<div class="prod-title">
							<h3><a href="" #>Medical Mission in Southern Kenya</a></h3>
							<span class="posted_by">Sep. 15th</span>
							<span class="comment"><a href="">21<i class="icon-bubble2"></i></a></span>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
							<p><a href="#">Learn More...</a></p>
						</div>
					</div>
				</div>
			</div>
			@endforeach
		</div>

		<div class="row">
			<div class="col-md-4 col-md-offset-4 text-center animate-box">
				<a href="#" class="btn btn-primary btn-lg">Our Reports</a>
			</div>
		</div>

	</div>
</div>
<!-- fh5co-blog-section -->
@endsection