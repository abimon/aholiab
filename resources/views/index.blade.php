@extends('layouts.app',['title'=>'Home'])
@section('content')
<div class="fh5co-hero">
	<div class="fh5co-overlay"></div>
	<?php $image = asset('storage/images/index.jpg'); ?>
	<div class="fh5co-cover text-center" data-stellar-background-ratio="0.5" style="background-image: url({{$image}});">
		<div class="desc animate-box">
			<h2><strong>Donate</strong> for the <strong>Poor Children</strong></h2>
		</div>
	</div>

</div>
<div id="fh5co-features">
	<div class="container" id="donate">
		<div class="row" id="volunteer">
			<div class="col-md-4">
				<div class="feature-left">
					<span class="icon">
						<i class="icon-profile-male"></i>
					</span>
					<div class="feature-copy">
						<h3>Become a volunteer</h3>
						<p>Would you like to take part in our community activities? Are you a children enthusiast?</p>
						<p><a href="volunteer">Join us</a></p>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="feature-left">
					<span class="icon">
						<i class="icon-happy"></i>
					</span>
					<div class="feature-copy">
						<h3>Happy Giving</h3>
						<re>Could you like to support any of our activities finance-wise or are able to sponser a finance based project?</p>
							<p><a href="/give">Give</a></p>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="feature-left">
					<span class="icon">
						<i class="icon-wallet"></i>
					</span>
					<div class="feature-copy">
						<h3>Donation</h3>
						<p>Are you in ossession of clothing, books, bibles, food, money or anything that can make a
							child's life better somewhere?</p>
						<p><a href="/donate">Donate</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div id="fh5co-feature-product" class="fh5co-section-gray">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center heading-section">
				<h3>Our Mission Statement</h3>
				<p>Our mission is to engage with every child at their level of understanding to ensure a proper moral foundation in favor of God and humanity</p>
			</div>
		</div>
		<div class="row">
			<div class="text-center">
				<h3>Our Foundation Policies</h3>
			</div>
			<?php $values =
				[
					[
						'title' => 'Progress',
						'value' => 'Ensure Progressive development of Children',
					],
					[
						'title' => 'Respect',
						'value' => 'Treat every child with respect',
					],
					[
						'title' => 'Protection',
						'value' => 'Promoting for child rights',
					],
					[
						'title' => 'Research',
						'value' => 'Research and review Issues affecting children',
					],
				]
			?>
			@foreach($values as $value)
			<div class="col-md-3">
				<div class="feature-text">
					<h3>{{$value['title']}}</h3>
					<p>{{$value['value']}}</p>
				</div>
			</div>
			@endforeach
		</div>


	</div>
</div>

@endsection