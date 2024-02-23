@extends('home.layouts.app')

@section('title','Camera - Product')

@push('styles')
    <!-- nivo-slider css -->
    <link rel="stylesheet" href="{{asset('pabna/lib/css/nivo-slider.css')}}">
@endpush

@section('content')
    		<!-- breadcrumb-area start -->
			<div class="breadcrumb-area" style="background: rgba(0, 0, 0, 0) url({{asset('camera.jpg')}}) no-repeat scroll center top; background-size:cover">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="breadcrumb-list">
							<h1>Detalles Del Producto</h1>
							<ul>
								<li><a href="{{route('home')}}">Home</a> <span class="divider">|</span></li>
								<li><a href="{{route('cameras')}}">Cameras</a> <span class="divider">|</span></li>
								<li>Detail Product</li>
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
					<div class="col-md-9">
						<div class="row">
							<div class="col-md-5 col-sm-5 col-xs-12">
								<div class="single-pro-tab-content">
									<!-- Tab panes -->
									<div class="tab-content">
										<div role="tabpanel" class="tab-pane active" id="home"><a href="#"><img class="zoom" src="{{asset('pabna/img/product/15.jpg')}}" data-zoom-image="img/product/15.jpg" alt="" /></a></div>
										<div role="tabpanel" class="tab-pane" id="profile"><a href="#"><img class="zoom" src="{{asset('pabna/img/product/9.jpg')}}" data-zoom-image="img/product/9.jpg" alt="" /></a></div>
										<div role="tabpanel" class="tab-pane" id="messages"><a href="#"><img class="zoom" src="{{asset('pabna/img/product/3.jpg')}}" data-zoom-image="img/product/3.jpg" alt="" /></a></div>
										<div role="tabpanel" class="tab-pane" id="settings"><a href="#"><img class="zoom" src="{{asset('pabna/img/product/4.jpg')}}" data-zoom-image="img/product/4.jpg" alt="" /></a></div>
										<div role="tabpanel" class="tab-pane" id="settingss"><a href="#"><img class="zoom" src="{{asset('pabna/img/product/4.jpg')}}" data-zoom-image="img/product/4.jpg" alt="" /></a></div>
									</div>
									<!-- Nav tabs -->
									<ul class="single-product-tab" role="tablist">
										<li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab"><img src="{{asset('pabna/img/product/15.jpg')}}" alt="" /></a></li>
										<li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab"><img src="{{asset('pabna/img/product/9.jpg')}}" alt="" /></a></li>
										<li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab"><img src="{{asset('pabna/img/product/3.jpg')}}" alt="" /></a></li>
										<li role="presentation"><a href="#settingss" aria-controls="settings" role="tab" data-toggle="tab"><img src="{{asset('pabna/img/product/4.jpg')}}" alt="" /></a></li>
									</ul>							
								</div>								
							</div>
							<div class="col-md-7 col-sm-7 col-xs-12 shop-list shop-details">								
								<div class="product-content">
									<h3><a href="product-details.html">Lorem ipsum dolor</a></h3>
									<div class="price">
										<span>$80.00</span>
										<span class="old">$90.11</span>
									</div>
									<div class="s-p-rating">
										<span class="rating">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-o"></i>										
										</span>	
									</div>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla.</p>
									<div class="pro-size">
										<label>size <span>*</span></label>
										<select>
											<option value="1">Default</option>
											<option value="1">small</option>
											<option value="1">Medium</option>
											<option value="1">Large</option>
											<option value="1">extra large</option>
										</select>
									</div>
									<div class="pro-size">
										<label>color <span>*</span></label>
										<select>
											<option value="1">Black</option>
											<option value="1">White</option>
											<option value="1">Red</option>
											<option value="1">Yellow</option>
											<option value="1">Pink</option>
										</select>
									</div>
									<div class="product-action">
										<div class="cart-plus">
											<form action="#">
												<div class="cart-plus-minus"><input type="text" value="1" /></div>
											</form>
										</div>
										<div class="button-top">
											<a href="#" ><i class="fa fa-heart"></i></a>
										</div>
										<div class="button-cart">
											<button><i class="fa fa-shopping-cart"></i> add to cart</button>
										</div>
									</div>	
								</div>							
							</div>
						</div>
						<div class="row">
							<div class="col-md-12 col-sm-12">
								<div class="product-tabs">
										<div>
										  <!-- Nav tabs -->
										  <ul class="pro-details-tab" role="tablist">
											<li role="presentation" class="active"><a href="#tab-desc" aria-controls="tab-desc" role="tab" data-toggle="tab">Description</a></li>
											<li role="presentation"><a href="#page-info" aria-controls="page-info" role="tab" data-toggle="tab">Additional information </a></li>
										  </ul>
										  <!-- Tab panes -->
										  <div class="tab-content">
											<div role="tabpanel" class="tab-pane active" id="tab-desc">
												<div class="product-tab-desc">
													<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor.</p>
													<ul id="product-desc-t">
														<li>Length: 70cm</li>
														<li>Regular fit</li>
														<li>Notched lapels</li>
														<li>Twin button front fastening </li>
														<li>Internal pockets</li>
														<li>Centre back vent</li>
														<li>70% discount</li>
													</ul>
												</div>
											</div>
											<div role="tabpanel" class="tab-pane" id="page-info">
												<div class="product-tab-desc">
													<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla.</p>
													<p>Pellentesque aliquet, sem eget laoreet ultrices, ipsum metus feugiat sem, quis fermentum turpis eros eget velit. Donec ac tempus ante. Fusce ultricies massa massa. Fusce aliquam, purus eget sagittis vulputate, sapien libero hendrerit est, sed commodo augue nisi non neque. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempor, lorem et placerat vestibulum, metus nisi posuere nisl, in accumsan elit odio quis mi. Cras neque metus, consequat et blandit et, luctus a nunc. Etiam gravida vehicula tellus, in imperdiet ligula euismod eget.</p>
												</div>
											</div>
											<div role="tabpanel" class="tab-pane" id="page-comments">
												<div class="product-tab-desc">
													<div class="product-page-comments">
														<h2>1 review for Integer consequat ante lectus</h2>
														<ul>
															<li>
																<div class="product-comments">
																	<img src="{{asset('pabna/img/author.jpg')}}" alt="" />
																	<div class="product-comments-content">
																		<p><strong>admin</strong> -
																			<span>March 7, 2015:</span>
																			<span class="pro-comments-rating">
																				<i class="fa fa-star"></i>								
																				<i class="fa fa-star"></i>								
																				<i class="fa fa-star"></i>								
																				<i class="fa fa-star"></i>								
																			</span>
																		</p>
																		<div class="desc">
																			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum.
																		</div>
																	</div>
																</div>
															</li>
														</ul>
														<div class="review-form-wrapper">
															<h3>Add a review</h3>
															<form action="#">
																<input type="text" placeholder="your name"/>
																<input type="email" placeholder="your email"/>
																<div class="your-rating">
																	<h5>Your Rating</h5>
																	<span>
																		<a href="#"><i class="fa fa-star"></i></a>
																		<a href="#"><i class="fa fa-star"></i></a>
																	</span>
																	<span>
																		<a href="#"><i class="fa fa-star"></i></a>
																		<a href="#"><i class="fa fa-star"></i></a>
																		<a href="#"><i class="fa fa-star"></i></a>
																	</span>
																	<span>
																		<a href="#"><i class="fa fa-star"></i></a>
																		<a href="#"><i class="fa fa-star"></i></a>
																		<a href="#"><i class="fa fa-star"></i></a>
																		<a href="#"><i class="fa fa-star"></i></a>
																	</span>
																	<span>
																		<a href="#"><i class="fa fa-star"></i></a>
																		<a href="#"><i class="fa fa-star"></i></a>
																		<a href="#"><i class="fa fa-star"></i></a>
																		<a href="#"><i class="fa fa-star"></i></a>
																		<a href="#"><i class="fa fa-star"></i></a>
																	</span>
																</div>
																<textarea id="product-message" cols="30" rows="10" placeholder="Your Rating"></textarea>
																<input type="submit" value="submit" />
															</form>
														</div>
													</div>
												</div>
											</div>
										  </div>
										</div>						
									</div>							
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
												
							</div>
							<div class="related-curosel">
								<!-- single-product start -->
								
								</div>
								<!-- single-product end -->									
							</div>							
						</div>
					</div>				
					<!-- left-sidebar start -->
					<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
						<!-- widget-categories start -->
						
						<!-- widget-categories end -->
						<!-- widget start -->
						<aside class="widget widget-categories">
							
							<div class="recent-product">												
							</div>
						</aside>
						<!-- widget end -->
						
					<!-- left-sidebar end -->
				</div>
			</div>
		</div>
		<!-- shop-area end -->
@endsection

@push('scripts')
    <!-- elevateZoom js -->
    <script src="{{asset('pabna/js/jquery.elevateZoom-3.0.8.min.js')}}"></script>	
		
    <script>
        $(".zoom").elevateZoom();
     </script>
@endpush