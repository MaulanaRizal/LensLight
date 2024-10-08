@extends('home.layouts.app')

@section('title','About Us')

@push('styles')
    <!-- nivo-slider css -->
    <link rel="stylesheet" href="{{asset('pabna/lib/css/nivo-slider.css')}}">

    <style>
        .about-img{
            height: 400px;
        } 

        .about-img img{
            width: 100%;
            height: inherit;
            object-fit: cover;
        } 
    </style>
@endpush

@section('content')
    		<!-- breadcrumb-area start -->
            <div class="breadcrumb-area" style="background: rgba(0, 0, 0, 0) url({{asset('about.jpg')}}) no-repeat scroll center top; background-size:cover">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="breadcrumb-list">
							<h1>About us</h1>
							<ul>
								<li><a href="index.html">home</a> <span class="divider">|</span></li>
								<li>About us</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- breadcrumb-area end -->

        <!-- about-area start -->
		<div class="about-area pad-60">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="about-img">
							<img src="{{asset('banner-about.jpg')}}" alt="" />
						</div>
					</div>
					<div class="col-md-12">
						<div class="about-text">
							<h2>Our Story</h2>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
							<p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- about-area end -->

        		<!-- testimonial-area start -->
		<div class="testimonial-area pad-60" style="background: rgba(0, 0, 0, 0) url({{asset('testimoni.jpg')}}) no-repeat scroll center top; background-size:cover">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="section-title">
							<h2>What client say</h2>
							<div class="title-icon">
								<span><i class="fa fa-angle-left"></i> <i class="fa fa-angle-right"></i></span>
							</div>
						</div>
						<div class="testimonial-carousel" >
							<div class="single-testimonial text-center">
								<span class="quotes"><i class="fa fa-quote-right" aria-hidden="true"></i></span>
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut  laoreet dolore magna  aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud  exerci tation ullamcorper suscipit lobortis</p>
								<div class="client-info">
									<h2>jon doe</h2>
									<span>Web developer</span>
								</div>
							</div>
							<div class="single-testimonial text-center">
								<span class="quotes"><i class="fa fa-quote-right" aria-hidden="true"></i></span>
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut  laoreet dolore magna  aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud  exerci tation ullamcorper suscipit lobortis</p>
								<div class="client-info">
									<h2>jon doe</h2>
									<span>Web developer</span>
								</div>
							</div>
							<div class="single-testimonial text-center">
								<span class="quotes"><i class="fa fa-quote-right" aria-hidden="true"></i></span>
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut  laoreet dolore magna  aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud  exerci tation ullamcorper suscipit lobortis</p>
								<div class="client-info">
									<h2>jon doe</h2>
									<span>Web developer</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- testimonial-area end -->

        <!-- team-area start -->
		<div class="team-area pad-60">
			<div class="container">
				<div class="row">
					<div class="section-title">
						<h2>Our awesome team member</h2>
						<div class="title-icon">
							<span><i class="fa fa-angle-left"></i> <i class="fa fa-angle-right"></i></span>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3 col-sm-4">
						<div class="single-team">
							<div class="team-img">
								<img src="{{asset('pabna/img/team/1.jpg')}}" alt="" />
								<div class="team-icon">
									<a href="#"><i class="fa fa-facebook"></i></a>
									<a href="#"><i class="fa fa-twitter"></i></a>
									<a href="#"><i class="fa fa-linkedin"></i></a>
									<a href="#"><i class="fa fa-google-plus"></i></a>
								</div>
							</div>
							<div class="team-info">
								<h2>Jon doe</h2>
								<span>coding guru</span>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-4">
						<div class="single-team">
							<div class="team-img">
								<img src="{{asset('pabna/img/team/2.jpg')}}" alt="" />
								<div class="team-icon">
									<a href="#"><i class="fa fa-facebook"></i></a>
									<a href="#"><i class="fa fa-twitter"></i></a>
									<a href="#"><i class="fa fa-linkedin"></i></a>
									<a href="#"><i class="fa fa-google-plus"></i></a>
								</div>
							</div>
							<div class="team-info">
								<h2>david diggle</h2>
								<span>Designer</span>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-4">
						<div class="single-team">
							<div class="team-img">
								<img src="{{asset('pabna/img/team/3.jpg')}}" alt="" />
								<div class="team-icon">
									<a href="#"><i class="fa fa-facebook"></i></a>
									<a href="#"><i class="fa fa-twitter"></i></a>
									<a href="#"><i class="fa fa-linkedin"></i></a>
									<a href="#"><i class="fa fa-google-plus"></i></a>
								</div>
							</div>
							<div class="team-info">
								<h2>cartico hippo</h2>
								<span>Web Developer</span>
							</div>
						</div>
					</div>
					<div class="col-md-3 hidden-sm">
						<div class="single-team">
							<div class="team-img">
								<img src="{{asset('pabna/img/team/4.jpg')}}" alt="" />
								<div class="team-icon">
									<a href="#"><i class="fa fa-facebook"></i></a>
									<a href="#"><i class="fa fa-twitter"></i></a>
									<a href="#"><i class="fa fa-linkedin"></i></a>
									<a href="#"><i class="fa fa-google-plus"></i></a>
								</div>
							</div>
							<div class="team-info">
								<h2>marian pappu</h2>
								<span>programmer</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- team-area start -->
@endsection
    