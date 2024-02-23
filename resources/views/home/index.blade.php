@extends('home.layouts.app')

@section('title','Home')

@push('styles')
	<!-- slick css -->
	<link rel="stylesheet" href="{{asset('pabna/css/slick.css')}}">
@endpush

@section('content')
		<!-- slider start -->
		<div class="slider-area">
			<div class="slider-active">
				<div class="single-slider slide-height d-flex align-items-center" style="background-image:url({{asset('banner/banner1.jpg')}})">
					<div class="container">
						<div class="row">
							<div class="col-xl-10 offset-xl-1">
								<div class="slide-content text-center">
									<h6 data-animation="fadeInUp" data-delay=".5s">Encontraras la mejor ropa</h6>
									<h1 data-animation="fadeInUp" data-delay="1s">En Nuestra</h1>
									<a class="btn" href="#" data-animation="fadeInUp" data-delay="1.5s">Ver Más
										<i class="icofont icofont-location-arrow"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="single-slider slide-height d-flex align-items-center" style="background-image:url({{asset('banner/banner2.jpg')}})">
					<div class="container">
						<div class="row">
							<div class="col-xl-10 offset-xl-1">
								<div class="slide-content text-center">
									<h6 data-animation="fadeInUp" data-delay=".5s">Somos la mejor empresa</h6>
									<h1 data-animation="fadeInUp" data-delay="1s">En produccion de ropa</h1>
									<a class="btn" href="#" data-animation="fadeInUp" data-delay="1.5s">Ver Más
										<i class="icofont icofont-location-arrow"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
                <div class="single-slider slide-height d-flex align-items-center" style="background-image:url({{asset('banner/banner3.jpg')}})">
					<div class="container">
						<div class="row">
							<div class="col-xl-10 offset-xl-1">
								<div class="slide-content text-center">
									<h6 data-animation="fadeInUp" data-delay=".5s">Somos la mejor empresa</h6>
									<h1 data-animation="fadeInUp" data-delay="1s">En produccion de ropa</h1>
									<a class="btn" href="#" data-animation="fadeInUp" data-delay="1.5s">Ver Más
										<i class="icofont icofont-location-arrow"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				
			</div>
		</div>
		<!-- slider end -->
		
		<!-- banner-area start -->
		<div class="banner-area pad-60">
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-md-4 col-sm-6">
						<div class="single-banner">
							<a href="#">
								<img src="{{asset('pabna/img/banner/6.jpg')}}" alt="" />
								<div class="banner-caption">
									<h2>Men's <span>Sunglasses</span></h2>
									<p>Our sunglasses and retro frames are all shades of great.</p>
								</div>
							</a>
						</div>
					</div>
					<div class="col-md-4 col-md-4 col-sm-6">
						<div class="single-banner">
							<a href="#">
								<img src="{{asset('pabna/img/banner/1.jpg')}}" alt="" />
								<div class="banner-caption">
									<h2>Men's <span>Shoes</span></h2>
									<p>Marley tried to convince her but she was not interested.</p>
								</div>
							</a>
						</div>
					</div>
					<div class="col-md-4 hidden-sm">
						<div class="single-banner">
							<a href="#">
								<img src="{{asset('pabna/img/banner/5.jpg')}}" alt="" />
								<div class="banner-caption">
									<h2>Men's <span>Watches</span></h2>
									<p>Designer or digital, vintage or leather - it's time to get smart.</p>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- banner-area end -->
		<!-- featured-area start -->
		<div class="featured-area pad-60">
			<div class="container">
				<div class="row">
					<div class="section-title">
						<h2>The trendy product</h2>
						<div class="title-icon">
							<span><i class="fa fa-angle-left"></i> <i class="fa fa-angle-right"></i></span>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="product-tab">
						    <!-- Nav tabs -->
							<ul class="product-nav" role="tablist">
								<li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">most popular</a></li>
								<li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">best stellar</a></li>
								<li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">new arrival</a></li>
							</ul>

							<!-- Tab panes -->
							<div class="tab-content">
								<div role="tabpanel" class="tab-pane active" id="home">
									<div class="row">
										<div class="product-curosel">
											<!-- single-product start -->
											<div class="col-md-12">
												<div class="single-product">
													<div class="product-img">
														<a href="product-details.html">
															<img src="{{asset('pabna/img/product/1.jpg')}}" alt="" />
															<img class="secondary-img" src="{{asset('pabna/img/product/2.jpg')}}" alt="" />
														</a>
														<span class="tag-line">new</span>
														<div class="product-action">
															<div class="button-top">
																<a href="#" data-toggle="modal" data-target="#productModal"><i class="fa fa-search"></i></a>
																<a href="#" ><i class="fa fa-heart"></i></a>
															</div>
															<div class="button-cart">
																<button><i class="fa fa-shopping-cart"></i> add to cart</button>
															</div>
														</div>
													</div>
													<div class="product-content">
														<h3><a href="product-details.html">Lorem ipsum dolor</a></h3>
														<div class="price">
															<span>$70.00</span>
															<span class="old">$80.11</span>
														</div>
													</div>
												</div>
											</div>
											<!-- single-product end -->
											<!-- single-product start -->
											<div class="col-md-12">
												<div class="single-product">
													<div class="product-img">
														<a href="product-details.html">
															<img src="{{asset('pabna/img/product/3.jpg')}}" alt="" />
															<img class="secondary-img" src="{{asset('pabna/img/product/4.jpg')}}" alt="" />
														</a>
														<span class="tag-line">new</span>
														<div class="product-action">
															<div class="button-top">
																<a href="#" data-toggle="modal" data-target="#productModal"><i class="fa fa-search"></i></a>
																<a href="#" ><i class="fa fa-heart"></i></a>
															</div>
															<div class="button-cart">
																<button><i class="fa fa-shopping-cart"></i> add to cart</button>
															</div>
														</div>
													</div>
													<div class="product-content">
														<h3><a href="product-details.html">Lorem ipsum dolor</a></h3>
														<div class="price">
															<span>$80.00</span>
															<span class="old">$90.11</span>
														</div>
													</div>
												</div>
											</div>
											<!-- single-product end -->
											<!-- single-product start -->
											<div class="col-md-12">
												<div class="single-product">
													<div class="product-img">
														<a href="product-details.html">
															<img src="{{asset('pabna/img/product/5.jpg')}}" alt="" />
															<img class="secondary-img" src="{{asset('pabna/img/product/6.jpg')}}" alt="" />
														</a>
														<span class="tag-line">new</span>
														<div class="product-action">
															<div class="button-top">
																<a href="#" data-toggle="modal" data-target="#productModal"><i class="fa fa-search"></i></a>
																<a href="#" ><i class="fa fa-heart"></i></a>
															</div>
															<div class="button-cart">
																<button><i class="fa fa-shopping-cart"></i> add to cart</button>
															</div>
														</div>
													</div>
													<div class="product-content">
														<h3><a href="product-details.html">Lorem ipsum dolor</a></h3>
														<div class="price">
															<span>$80.00</span>
															<span class="old">$90.11</span>
														</div>
													</div>
												</div>
											</div>
											<!-- single-product end -->
											<!-- single-product start -->
											<div class="col-md-12">
												<div class="single-product">
													<div class="product-img">
														<a href="product-details.html">
															<img src="{{asset('pabna/img/product/7.jpg')}}" alt="" />
															<img class="secondary-img" src="{{asset('pabna/img/product/8.jpg')}}" alt="" />
														</a>
														<span class="tag-line">new</span>
														<div class="product-action">
															<div class="button-top">
																<a href="#" data-toggle="modal" data-target="#productModal"><i class="fa fa-search"></i></a>
																<a href="#" ><i class="fa fa-heart"></i></a>
															</div>
															<div class="button-cart">
																<button><i class="fa fa-shopping-cart"></i> add to cart</button>
															</div>
														</div>
													</div>
													<div class="product-content">
														<h3><a href="product-details.html">Lorem ipsum dolor</a></h3>
														<div class="price">
															<span>$80.00</span>
															<span class="old">$90.11</span>
														</div>
													</div>
												</div>
											</div>
											<!-- single-product end -->
											<!-- single-product start -->
											<div class="col-md-12">
												<div class="single-product">
													<div class="product-img">
														<a href="product-details.html">
															<img src="{{asset('pabna/img/product/9.jpg')}}" alt="" />
															<img class="secondary-img" src="{{asset('pabna/img/product/10.jpg')}}" alt="" />
														</a>
														<span class="tag-line">new</span>
														<div class="product-action">
															<div class="button-top">
																<a href="#" data-toggle="modal" data-target="#productModal"><i class="fa fa-search"></i></a>
																<a href="#" ><i class="fa fa-heart"></i></a>
															</div>
															<div class="button-cart">
																<button><i class="fa fa-shopping-cart"></i> add to cart</button>
															</div>
														</div>
													</div>
													<div class="product-content">
														<h3><a href="product-details.html">Lorem ipsum dolor</a></h3>
														<div class="price">
															<span>$80.00</span>
															<span class="old">$90.11</span>
														</div>
													</div>
												</div>
											</div>
											<!-- single-product end -->
											<!-- single-product start -->
											<div class="col-md-12">
												<div class="single-product">
													<div class="product-img">
														<a href="product-details.html">
															<img src="{{asset('pabna/img/product/11.jpg')}}" alt="" />
															<img class="secondary-img" src="{{asset('pabna/img/product/12.jpg')}}" alt="" />
														</a>
														<span class="tag-line">new</span>
														<div class="product-action">
															<div class="button-top">
																<a href="#" data-toggle="modal" data-target="#productModal"><i class="fa fa-search"></i></a>
																<a href="#" ><i class="fa fa-heart"></i></a>
															</div>
															<div class="button-cart">
																<button><i class="fa fa-shopping-cart"></i> add to cart</button>
															</div>
														</div>
													</div>
													<div class="product-content">
														<h3><a href="product-details.html">Lorem ipsum dolor</a></h3>
														<div class="price">
															<span>$80.00</span>
															<span class="old">$90.11</span>
														</div>
													</div>
												</div>
											</div>
											<!-- single-product end -->
											<!-- single-product start -->
											<div class="col-md-12">
												<div class="single-product">
													<div class="product-img">
														<a href="product-details.html">
															<img src="{{asset('pabna/img/product/13.jpg')}}" alt="" />
															<img class="secondary-img" src="{{asset('pabna/img/product/14.jpg')}}" alt="" />
														</a>
														<span class="tag-line">new</span>
														<div class="product-action">
															<div class="button-top">
																<a href="#" data-toggle="modal" data-target="#productModal"><i class="fa fa-search"></i></a>
																<a href="#" ><i class="fa fa-heart"></i></a>
															</div>
															<div class="button-cart">
																<button><i class="fa fa-shopping-cart"></i> add to cart</button>
															</div>
														</div>
													</div>
													<div class="product-content">
														<h3><a href="product-details.html">Lorem ipsum dolor</a></h3>
														<div class="price">
															<span>$80.00</span>
															<span class="old">$90.11</span>
														</div>
													</div>
												</div>
											</div>
											<!-- single-product end -->
											<!-- single-product start -->
											<div class="col-md-12">
												<div class="single-product">
													<div class="product-img">
														<a href="product-details.html">
															<img src="{{asset('pabna/img/product/15.jpg')}}" alt="" />
															<img class="secondary-img" src="{{asset('pabna/img/product/16.jpg')}}" alt="" />
														</a>
														<span class="tag-line">new</span>
														<div class="product-action">
															<div class="button-top">
																<a href="#" data-toggle="modal" data-target="#productModal"><i class="fa fa-search"></i></a>
																<a href="#" ><i class="fa fa-heart"></i></a>
															</div>
															<div class="button-cart">
																<button><i class="fa fa-shopping-cart"></i> add to cart</button>
															</div>
														</div>
													</div>
													<div class="product-content">
														<h3><a href="product-details.html">Lorem ipsum dolor</a></h3>
														<div class="price">
															<span>$80.00</span>
															<span class="old">$90.11</span>
														</div>
													</div>
												</div>
											</div>
											<!-- single-product end -->
										</div>
									</div>
								</div>
								<div role="tabpanel" class="tab-pane" id="profile">
									<div class="row">
										<div class="product-curosel">
											<!-- single-product start -->
											<div class="col-md-12">
												<div class="single-product">
													<div class="product-img">
														<a href="product-details.html">
															<img src="{{asset('pabna/img/product/17.jpg')}}" alt="" />
															<img class="secondary-img" src="{{asset('pabna/img/product/18.jpg')}}" alt="" />
														</a>
														<span class="tag-line">new</span>
														<div class="product-action">
															<div class="button-top">
																<a href="#" data-toggle="modal" data-target="#productModal"><i class="fa fa-search"></i></a>
																<a href="#" ><i class="fa fa-heart"></i></a>
															</div>
															<div class="button-cart">
																<button><i class="fa fa-shopping-cart"></i> add to cart</button>
															</div>
														</div>
													</div>
													<div class="product-content">
														<h3><a href="product-details.html">Lorem ipsum dolor</a></h3>
														<div class="price">
															<span>$70.00</span>
															<span class="old">$80.11</span>
														</div>
													</div>
												</div>
											</div>
											<!-- single-product end -->
											<!-- single-product start -->
											<div class="col-md-12">
												<div class="single-product">
													<div class="product-img">
														<a href="product-details.html">
															<img src="{{asset('pabna/img/product/19.jpg')}}" alt="" />
															<img class="secondary-img" src="{{asset('pabna/img/product/20.jpg')}}" alt="" />
														</a>
														<span class="tag-line">new</span>
														<div class="product-action">
															<div class="button-top">
																<a href="#" data-toggle="modal" data-target="#productModal"><i class="fa fa-search"></i></a>
																<a href="#" ><i class="fa fa-heart"></i></a>
															</div>
															<div class="button-cart">
																<button><i class="fa fa-shopping-cart"></i> add to cart</button>
															</div>
														</div>
													</div>
													<div class="product-content">
														<h3><a href="product-details.html">Lorem ipsum dolor</a></h3>
														<div class="price">
															<span>$80.00</span>
															<span class="old">$90.11</span>
														</div>
													</div>
												</div>
											</div>
											<!-- single-product end -->
											<!-- single-product start -->
											<div class="col-md-12">
												<div class="single-product">
													<div class="product-img">
														<a href="product-details.html">
															<img src="{{asset('pabna/img/product/21.jpg')}}" alt="" />
															<img class="secondary-img" src="{{asset('pabna/img/product/22.jpg')}}" alt="" />
														</a>
														<span class="tag-line">new</span>
														<div class="product-action">
															<div class="button-top">
																<a href="#" data-toggle="modal" data-target="#productModal"><i class="fa fa-search"></i></a>
																<a href="#" ><i class="fa fa-heart"></i></a>
															</div>
															<div class="button-cart">
																<button><i class="fa fa-shopping-cart"></i> add to cart</button>
															</div>
														</div>
													</div>
													<div class="product-content">
														<h3><a href="product-details.html">Lorem ipsum dolor</a></h3>
														<div class="price">
															<span>$80.00</span>
															<span class="old">$90.11</span>
														</div>
													</div>
												</div>
											</div>
											<!-- single-product end -->
											<!-- single-product start -->
											<div class="col-md-12">
												<div class="single-product">
													<div class="product-img">
														<a href="product-details.html">
															<img src="{{asset('pabna/img/product/23.jpg')}}" alt="" />
															<img class="secondary-img" src="{{asset('pabna/img/product/6.jpg')}}" alt="" />
														</a>
														<span class="tag-line">new</span>
														<div class="product-action">
															<div class="button-top">
																<a href="#" data-toggle="modal" data-target="#productModal"><i class="fa fa-search"></i></a>
																<a href="#" ><i class="fa fa-heart"></i></a>
															</div>
															<div class="button-cart">
																<button><i class="fa fa-shopping-cart"></i> add to cart</button>
															</div>
														</div>
													</div>
													<div class="product-content">
														<h3><a href="product-details.html">Lorem ipsum dolor</a></h3>
														<div class="price">
															<span>$80.00</span>
															<span class="old">$90.11</span>
														</div>
													</div>
												</div>
											</div>
											<!-- single-product end -->
											<!-- single-product start -->
											<div class="col-md-12">
												<div class="single-product">
													<div class="product-img">
														<a href="product-details.html">
															<img src="{{asset('pabna/img/product/2.jpg')}}" alt="" />
															<img class="secondary-img" src="{{asset('pabna/img/product/1.jpg')}}" alt="" />
														</a>
														<span class="tag-line">new</span>
														<div class="product-action">
															<div class="button-top">
																<a href="#" data-toggle="modal" data-target="#productModal"><i class="fa fa-search"></i></a>
																<a href="#" ><i class="fa fa-heart"></i></a>
															</div>
															<div class="button-cart">
																<button><i class="fa fa-shopping-cart"></i> add to cart</button>
															</div>
														</div>
													</div>
													<div class="product-content">
														<h3><a href="product-details.html">Lorem ipsum dolor</a></h3>
														<div class="price">
															<span>$80.00</span>
															<span class="old">$90.11</span>
														</div>
													</div>
												</div>
											</div>
											<!-- single-product end -->
											<!-- single-product start -->
											<div class="col-md-12">
												<div class="single-product">
													<div class="product-img">
														<a href="product-details.html">
															<img src="{{asset('pabna/img/product/4.jpg')}}" alt="" />
															<img class="secondary-img" src="{{asset('pabna/img/product/3.jpg')}}" alt="" />
														</a>
														<span class="tag-line">new</span>
														<div class="product-action">
															<div class="button-top">
																<a href="#" data-toggle="modal" data-target="#productModal"><i class="fa fa-search"></i></a>
																<a href="#" ><i class="fa fa-heart"></i></a>
															</div>
															<div class="button-cart">
																<button><i class="fa fa-shopping-cart"></i> add to cart</button>
															</div>
														</div>
													</div>
													<div class="product-content">
														<h3><a href="product-details.html">Lorem ipsum dolor</a></h3>
														<div class="price">
															<span>$80.00</span>
															<span class="old">$90.11</span>
														</div>
													</div>
												</div>
											</div>
											<!-- single-product end -->
											<!-- single-product start -->
											<div class="col-md-12">
												<div class="single-product">
													<div class="product-img">
														<a href="product-details.html">
															<img src="{{asset('pabna/img/product/6.jpg')}}" alt="" />
															<img class="secondary-img" src="{{asset('pabna/img/product/5.jpg')}}" alt="" />
														</a>
														<span class="tag-line">new</span>
														<div class="product-action">
															<div class="button-top">
																<a href="#" data-toggle="modal" data-target="#productModal"><i class="fa fa-search"></i></a>
																<a href="#" ><i class="fa fa-heart"></i></a>
															</div>
															<div class="button-cart">
																<button><i class="fa fa-shopping-cart"></i> add to cart</button>
															</div>
														</div>
													</div>
													<div class="product-content">
														<h3><a href="product-details.html">Lorem ipsum dolor</a></h3>
														<div class="price">
															<span>$80.00</span>
															<span class="old">$90.11</span>
														</div>
													</div>
												</div>
											</div>
											<!-- single-product end -->
											<!-- single-product start -->
											<div class="col-md-12">
												<div class="single-product">
													<div class="product-img">
														<a href="product-details.html">
															<img src="{{asset('pabna/img/product/7.jpg')}}" alt="" />
															<img class="secondary-img" src="{{asset('pabna/img/product/8.jpg')}}" alt="" />
														</a>
														<span class="tag-line">new</span>
														<div class="product-action">
															<div class="button-top">
																<a href="#" data-toggle="modal" data-target="#productModal"><i class="fa fa-search"></i></a>
																<a href="#" ><i class="fa fa-heart"></i></a>
															</div>
															<div class="button-cart">
																<button><i class="fa fa-shopping-cart"></i> add to cart</button>
															</div>
														</div>
													</div>
													<div class="product-content">
														<h3><a href="product-details.html">Lorem ipsum dolor</a></h3>
														<div class="price">
															<span>$80.00</span>
															<span class="old">$90.11</span>
														</div>
													</div>
												</div>
											</div>
											<!-- single-product end -->
										</div>
									</div>
								</div>
								<div role="tabpanel" class="tab-pane" id="messages">
									<div class="row">
										<div class="product-curosel">
											<!-- single-product start -->
											<div class="col-md-12">
												<div class="single-product">
													<div class="product-img">
														<a href="product-details.html">
															<img src="{{asset('pabna/img/product/10.jpg')}}" alt="" />
															<img class="secondary-img" src="{{asset('pabna/img/product/9.jpg')}}" alt="" />
														</a>
														<span class="tag-line">new</span>
														<div class="product-action">
															<div class="button-top">
																<a href="#" data-toggle="modal" data-target="#productModal"><i class="fa fa-search"></i></a>
																<a href="#" ><i class="fa fa-heart"></i></a>
															</div>
															<div class="button-cart">
																<button><i class="fa fa-shopping-cart"></i> add to cart</button>
															</div>
														</div>
													</div>
													<div class="product-content">
														<h3><a href="product-details.html">Lorem ipsum dolor</a></h3>
														<div class="price">
															<span>$70.00</span>
															<span class="old">$80.11</span>
														</div>
													</div>
												</div>
											</div>
											<!-- single-product end -->
											<!-- single-product start -->
											<div class="col-md-12">
												<div class="single-product">
													<div class="product-img">
														<a href="product-details.html">
															<img src="{{asset('pabna/img/product/12.jpg')}}" alt="" />
															<img class="secondary-img" src="{{asset('pabna/img/product/11.jpg')}}" alt="" />
														</a>
														<span class="tag-line">new</span>
														<div class="product-action">
															<div class="button-top">
																<a href="#" data-toggle="modal" data-target="#productModal"><i class="fa fa-search"></i></a>
																<a href="#" ><i class="fa fa-heart"></i></a>
															</div>
															<div class="button-cart">
																<button><i class="fa fa-shopping-cart"></i> add to cart</button>
															</div>
														</div>
													</div>
													<div class="product-content">
														<h3><a href="product-details.html">Lorem ipsum dolor</a></h3>
														<div class="price">
															<span>$80.00</span>
															<span class="old">$90.11</span>
														</div>
													</div>
												</div>
											</div>
											<!-- single-product end -->
											<!-- single-product start -->
											<div class="col-md-12">
												<div class="single-product">
													<div class="product-img">
														<a href="product-details.html">
															<img src="{{asset('pabna/img/product/14.jpg')}}" alt="" />
															<img class="secondary-img" src="{{asset('pabna/img/product/13.jpg')}}" alt="" />
														</a>
														<span class="tag-line">new</span>
														<div class="product-action">
															<div class="button-top">
																<a href="#" data-toggle="modal" data-target="#productModal"><i class="fa fa-search"></i></a>
																<a href="#" ><i class="fa fa-heart"></i></a>
															</div>
															<div class="button-cart">
																<button><i class="fa fa-shopping-cart"></i> add to cart</button>
															</div>
														</div>
													</div>
													<div class="product-content">
														<h3><a href="product-details.html">Lorem ipsum dolor</a></h3>
														<div class="price">
															<span>$80.00</span>
															<span class="old">$90.11</span>
														</div>
													</div>
												</div>
											</div>
											<!-- single-product end -->
											<!-- single-product start -->
											<div class="col-md-12">
												<div class="single-product">
													<div class="product-img">
														<a href="product-details.html">
															<img src="{{asset('pabna/img/product/16.jpg')}}" alt="" />
															<img class="secondary-img" src="{{asset('pabna/img/product/15.jpg')}}" alt="" />
														</a>
														<span class="tag-line">new</span>
														<div class="product-action">
															<div class="button-top">
																<a href="#" data-toggle="modal" data-target="#productModal"><i class="fa fa-search"></i></a>
																<a href="#" ><i class="fa fa-heart"></i></a>
															</div>
															<div class="button-cart">
																<button><i class="fa fa-shopping-cart"></i> add to cart</button>
															</div>
														</div>
													</div>
													<div class="product-content">
														<h3><a href="product-details.html">Lorem ipsum dolor</a></h3>
														<div class="price">
															<span>$80.00</span>
															<span class="old">$90.11</span>
														</div>
													</div>
												</div>
											</div>
											<!-- single-product end -->
											<!-- single-product start -->
											<div class="col-md-12">
												<div class="single-product">
													<div class="product-img">
														<a href="product-details.html">
															<img src="{{asset('pabna/img/product/18.jpg')}}" alt="" />
															<img class="secondary-img" src="{{asset('pabna/img/product/17.jpg')}}" alt="" />
														</a>
														<span class="tag-line">new</span>
														<div class="product-action">
															<div class="button-top">
																<a href="#" data-toggle="modal" data-target="#productModal"><i class="fa fa-search"></i></a>
																<a href="#" ><i class="fa fa-heart"></i></a>
															</div>
															<div class="button-cart">
																<button><i class="fa fa-shopping-cart"></i> add to cart</button>
															</div>
														</div>
													</div>
													<div class="product-content">
														<h3><a href="product-details.html">Lorem ipsum dolor</a></h3>
														<div class="price">
															<span>$80.00</span>
															<span class="old">$90.11</span>
														</div>
													</div>
												</div>
											</div>
											<!-- single-product end -->
											<!-- single-product start -->
											<div class="col-md-12">
												<div class="single-product">
													<div class="product-img">
														<a href="product-details.html">
															<img src="{{asset('pabna/img/product/20.jpg')}}" alt="" />
															<img class="secondary-img" src="{{asset('pabna/img/product/19.jpg')}}" alt="" />
														</a>
														<span class="tag-line">new</span>
														<div class="product-action">
															<div class="button-top">
																<a href="#" data-toggle="modal" data-target="#productModal"><i class="fa fa-search"></i></a>
																<a href="#" ><i class="fa fa-heart"></i></a>
															</div>
															<div class="button-cart">
																<button><i class="fa fa-shopping-cart"></i> add to cart</button>
															</div>
														</div>
													</div>
													<div class="product-content">
														<h3><a href="product-details.html">Lorem ipsum dolor</a></h3>
														<div class="price">
															<span>$80.00</span>
															<span class="old">$90.11</span>
														</div>
													</div>
												</div>
											</div>
											<!-- single-product end -->
											<!-- single-product start -->
											<div class="col-md-12">
												<div class="single-product">
													<div class="product-img">
														<a href="product-details.html">
															<img src="{{asset('pabna/img/product/21.jpg')}}" alt="" />
															<img class="secondary-img" src="{{asset('pabna/img/product/22.jpg')}}" alt="" />
														</a>
														<span class="tag-line">new</span>
														<div class="product-action">
															<div class="button-top">
																<a href="#" data-toggle="modal" data-target="#productModal"><i class="fa fa-search"></i></a>
																<a href="#" ><i class="fa fa-heart"></i></a>
															</div>
															<div class="button-cart">
																<button><i class="fa fa-shopping-cart"></i> add to cart</button>
															</div>
														</div>
													</div>
													<div class="product-content">
														<h3><a href="product-details.html">Lorem ipsum dolor</a></h3>
														<div class="price">
															<span>$80.00</span>
															<span class="old">$90.11</span>
														</div>
													</div>
												</div>
											</div>
											<!-- single-product end -->
											<!-- single-product start -->
											<div class="col-md-12">
												<div class="single-product">
													<div class="product-img">
														<a href="product-details.html">
															<img src="{{asset('pabna/img/product/23.jpg')}}" alt="" />
															<img class="secondary-img" src="{{asset('pabna/img/product/5.jpg')}}" alt="" />
														</a>
														<span class="tag-line">new</span>
														<div class="product-action">
															<div class="button-top">
																<a href="#" data-toggle="modal" data-target="#productModal"><i class="fa fa-search"></i></a>
																<a href="#" ><i class="fa fa-heart"></i></a>
															</div>
															<div class="button-cart">
																<button><i class="fa fa-shopping-cart"></i> add to cart</button>
															</div>
														</div>
													</div>
													<div class="product-content">
														<h3><a href="product-details.html">Lorem ipsum dolor</a></h3>
														<div class="price">
															<span>$80.00</span>
															<span class="old">$90.11</span>
														</div>
													</div>
												</div>
											</div>
											<!-- single-product end -->
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- featured-area end -->
		
		<!-- category-area start -->
		<div class="category-area category-area-3 pad-60">
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-sm-6">
						<div class="single-cat">
							<h2 class="cat-title">special</h2>
							<div class="single-product">
								<div class="product-img">
									<a href="product-details.html">
										<img src="{{asset('pabna/img/product/5.jpg')}}" alt="" />
										<img class="secondary-img" src="{{asset('pabna/img/product/6.jpg')}}" alt="" />
									</a>
								</div>
								<div class="product-content">
									<h3><a href="product-details.html">Lorem ipsum dolor</a></h3>
									<div class="price">
										<span>$70.00</span>
										<span class="old">$80.11</span>
									</div>
									<div class="product-action">
										<div class="button-top">
											<a href="#" data-toggle="modal" data-target="#productModal"><i class="fa fa-search"></i></a>
											<a href="#"><i class="fa fa-heart"></i></a>
										</div>
										<div class="button-cart">
											<button><i class="fa fa-shopping-cart"></i></button>
										</div>
									</div>
								</div>
							</div>
							<div class="single-product cat-margin">
								<div class="product-img">
									<a href="product-details.html">
										<img src="{{asset('pabna/img/product/7.jpg')}}" alt="" />
										<img class="secondary-img" src="{{asset('pabna/img/product/8.jpg')}}" alt="" />
									</a>
								</div>
								<div class="product-content">
									<h3><a href="product-details.html">Lorem ipsum dolor</a></h3>
									<div class="price">
										<span>$70.00</span>
										<span class="old">$80.11</span>
									</div>
									<div class="product-action">
										<div class="button-top">
											<a href="#" data-toggle="modal" data-target="#productModal"><i class="fa fa-search"></i></a>
											<a href="#"><i class="fa fa-heart"></i></a>
										</div>
										<div class="button-cart">
											<button><i class="fa fa-shopping-cart"></i></button>
										</div>
									</div>
								</div>
							</div>
							<div class="cat-more">
								<a href="shop.html">Ver más <i class="fa fa-angle-right"></i><i class="fa fa-angle-right"></i></a>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="single-cat">
							<h2 class="cat-title">must have</h2>
							<div class="single-product">
								<div class="product-img">
									<a href="product-details.html">
										<img src="{{asset('pabna/img/product/w1.jpg')}}" alt="" />
										<img class="secondary-img" src="{{asset('pabna/img/product/w9.jpg')}}" alt="" />
									</a>
								</div>
								<div class="product-content">
									<h3><a href="product-details.html">Lorem ipsum dolor</a></h3>
									<div class="price">
										<span>$70.00</span>
										<span class="old">$80.11</span>
									</div>
									<div class="product-action">
										<div class="button-top">
											<a href="#" data-toggle="modal" data-target="#productModal"><i class="fa fa-search"></i></a>
											<a href="#"><i class="fa fa-heart"></i></a>
										</div>
										<div class="button-cart">
											<button><i class="fa fa-shopping-cart"></i></button>
										</div>
									</div>
								</div>
							</div>
							<div class="single-product cat-margin">
								<div class="product-img">
									<a href="product-details.html">
										<img src="{{asset('pabna/img/product/w4.jpg')}}" alt="" />
										<img class="secondary-img" src="{{asset('pabna/img/product/w5.jpg')}}" alt="" />
									</a>
								</div>
								<div class="product-content">
									<h3><a href="product-details.html">Lorem ipsum dolor</a></h3>
									<div class="price">
										<span>$70.00</span>
										<span class="old">$80.11</span>
									</div>
									<div class="product-action">
										<div class="button-top">
											<a href="#" data-toggle="modal" data-target="#productModal"><i class="fa fa-search"></i></a>
											<a href="#"><i class="fa fa-heart"></i></a>
										</div>
										<div class="button-cart">
											<button><i class="fa fa-shopping-cart"></i></button>
										</div>
									</div>
								</div>
							</div>
							<div class="cat-more">
								<a href="shop.html">Ver Más <i class="fa fa-angle-right"></i><i class="fa fa-angle-right"></i></a>
							</div>
						</div>
					</div>
					<div class="col-md-4 hidden-sm">
						<div class="single-cat">
							<h2 class="cat-title">new product</h2>
							<div class="single-product">
								<div class="product-img">
									<a href="product-details.html">
										<img src="{{asset('pabna/img/product/12.jpg')}}" alt="" />
										<img class="secondary-img" src="{{asset('pabna/img/product/11.jpg')}}" alt="" />
									</a>
								</div>
								<div class="product-content">
									<h3><a href="product-details.html">Lorem ipsum dolor</a></h3>
									<div class="price">
										<span>$70.00</span>
										<span class="old">$80.11</span>
									</div>
									<div class="product-action">
										<div class="button-top">
											<a href="#" data-toggle="modal" data-target="#productModal"><i class="fa fa-search"></i></a>
											<a href="#"><i class="fa fa-heart"></i></a>
										</div>
										<div class="button-cart">
											<button><i class="fa fa-shopping-cart"></i></button>
										</div>
									</div>
								</div>
							</div>
							<div class="single-product cat-margin">
								<div class="product-img">
									<a href="product-details.html">
										<img src="{{asset('pabna/img/product/16.jpg')}}" alt="" />
										<img class="secondary-img" src="{{asset('pabna/img/product/17.jpg')}}" alt="" />
									</a>
								</div>
								<div class="product-content">
									<h3><a href="product-details.html">Lorem ipsum dolor</a></h3>
									<div class="price">
										<span>$70.00</span>
										<span class="old">$80.11</span>
									</div>
									<div class="product-action">
										<div class="button-top">
											<a href="#" data-toggle="modal" data-target="#productModal"><i class="fa fa-search"></i></a>
											<a href="#"><i class="fa fa-heart"></i></a>
										</div>
										<div class="button-cart">
											<button><i class="fa fa-shopping-cart"></i></button>
										</div>
									</div>
								</div>
							</div>
							<div class="cat-more">
								<a href="shop.html">Ver Más <i class="fa fa-angle-right"></i><i class="fa fa-angle-right"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- category-area end -->
@endsection

@push('scripts')
<script>
	
	$(document).ready(function(){
		const slides = $('.slick-dots li');
		let index = 0;
		setInterval(() => {
			console.log(index)
			slides[index].click();
			index = index<slides.length-1?index+1:0;
		}, 5000);

    });
</script>
	
@endpush