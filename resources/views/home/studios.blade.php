@extends('home.layouts.app')

@section('title','Studio')

@push('styles')
<!-- nivo-slider css -->
<link rel="stylesheet" href="{{asset('pabna/lib/css/nivo-slider.css')}}">
@endpush

@section('content')
    		<!-- breadcrumb-area start -->
		<div class="breadcrumb-area" style="background: rgba(0, 0, 0, 0) url({{asset('studio.jpg')}}) no-repeat scroll center top; background-size:cover">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="breadcrumb-list">
							<h1>Studios</h1>
							<ul>
								<li><a href="{{route('home')}}">Home</a> <span class="divider">|</span></li>
								{{-- <li><a href="shop.html">Product</a> <span class="divider">|</span></li> --}}
								<li>Studios</li>
							</ul>							
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- breadcrumb-area end -->
		<!-- shop-area start -->
		<div class="shop-area">
			<div class="container">
				<div class="row">
					<!-- left-sidebar end -->
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="shop-content">					
							<!-- Nav tabs -->
							<ul class="shop-tab" role="tablist">
								<li><span class="sorting-name"> View as:  </span></li>
								<li role="presentation" class="active"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab"><i class="fa fa-th-list" aria-hidden="true"></i></a></li>
							</ul>
							<div class="short-by">
								<span class="sorting-show"> Sort by:</span>
								<select>
									<option value="volvo">popularity</option>
									<option value="saab">Default</option>
									<option value="mercedes">average rating</option>
									<option value="audi">newness</option>
									<option value="audi">low to high</option>
									<option value="audi">high to low</option>
								</select>							
							</div>
							<div class="shop-show">
								<span class="sorting-show"> Show:</span>
								<select>
									<option value="volvo">9</option>
									<option value="saab">10</option>
									<option value="mercedes">11</option>
									<option value="audi">12</option>
									<option value="audi">15</option>
									<option value="audi">16</option>
								</select>
							</div>
							<div class="shop-breadcrumb">
								<ul>
									<li class="active"><a href="#">1</a></li>
									<li><a href="#">2</a></li>
									<li><a href="#">3</a></li>
									<li><a href="#"><i class="fa fa-angle-right"></i></a></li>
								</ul>
							</div>

							<div class="clear"></div>
							<!-- Tab panes -->
							<div class="tab-content">
								<div role="tabpanel" class="tab-pane active" id="profile">
									<div class="row shop-list">


										<!-- single-product start -->
										<div class="col-md-12">
											<div class="single-product">
												<div class="product-img">
													<a href="{{route('studio detail',['id' => 0])}}">
														<img src="{{asset('pabna/img/product/2.jpg')}}" alt="" />
														<img class="secondary-img" src="{{asset('pabna/img/product/11.jpg')}}" alt="" />
													</a>
													<span class="tag-line">new</span>
												</div>
												<div class="product-content">
													<h3><a href="{{route('studio detail',['id' => 0])}}">Lorem ipsum dolor</a></h3>
													<div class="price">
														<span>$80.00</span>
														<span class="old">$90.11</span>
													</div>
													<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla.</p>
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
											</div>
										</div>
										<!-- single-product end -->	

										<!-- single-product start -->
										<div class="col-md-12">
											<div class="single-product">
												<div class="product-img">
													<a href="product-details.html">
														<img src="{{asset('pabna/img/product/3.jpg')}}" alt="" />
														<img class="secondary-img" src="{{asset('pabna/img/product/11.jpg')}}" alt="" />
													</a>
													<span class="tag-line">new</span>
												</div>
												<div class="product-content">
													<h3><a href="product-details.html">Lorem ipsum dolor</a></h3>
													<div class="price">
														<span>$80.00</span>
														<span class="old">$90.11</span>
													</div>
													<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla.</p>
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
											</div>
										</div>
										<!-- single-product end -->	

										<!-- single-product start -->
										<div class="col-md-12">
											<div class="single-product">
												<div class="product-img">
													<a href="product-details.html">
														<img src="{{asset('pabna/img/product/4.jpg')}}" alt="" />
														<img class="secondary-img" src="{{asset('pabna/img/product/11.jpg')}}" alt="" />
													</a>
													<span class="tag-line">new</span>
												</div>
												<div class="product-content">
													<h3><a href="product-details.html">Lorem ipsum dolor</a></h3>
													<div class="price">
														<span>$80.00</span>
														<span class="old">$90.11</span>
													</div>
													<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla.</p>
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
		<!-- shop-area end -->
@endsection