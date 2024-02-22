<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Shop || Pabna</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
        <!-- Place favicon.ico in the root directory -->

		<!-- all css here -->
		<!-- bootstrap v3.3.6 css -->
        <link rel="stylesheet" href="{{asset('pabna/css/bootstrap.min.css')}}">
		<!-- animate css -->
        <link rel="stylesheet" href="{{asset('pabna/css/animate.css')}}">
		<!-- jquery-ui.min css -->
        <link rel="stylesheet" href="{{asset('pabna/css/jquery-ui.min.css')}}">
		<!-- meanmenu css -->
        <link rel="stylesheet" href="{{asset('pabna/css/meanmenu.min.css')}}">
		<!-- owl.carousel css -->
        <link rel="stylesheet" href="{{asset('pabna/css/owl.carousel.css')}}">
		<!-- nivo-slider css -->
        <link rel="stylesheet" href="{{asset('pabna/lib/css/nivo-slider.css')}}">
		<!-- font-awesome css -->
        <link rel="stylesheet" href="{{asset('pabna/css/font-awesome.min.css')}}">
		<!-- style css -->
		<link rel="stylesheet" href="{{asset('pabna/style.css')}}">
		<!-- responsive css -->
        <link rel="stylesheet" href="{{asset('pabna/css/responsive.css')}}">
		<!-- modernizr js -->
        <script src="{{asset('pabna/js/vendor/modernizr-2.8.3.min.js')}}"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
		
		<!-- header start -->
        <header class="header-pos">
			<!-- header-bottom-area start -->
			<div class="header-bottom-area">
				<div class="container">
					<div class="inner-container">
						<div class="row">
							<div class="col-md-2 col-sm-4 col-xs-5">
								<div class="logo">
									<a href="{{route('home')}}"><img src="{{asset('pabna/img/logo-white-text.png')}}" alt="" /></a>
								</div>
							</div>
							<div class="col-md-8 hidden-xs hidden-sm">
								<div class="main-menu">
									<nav>
										<ul>
											<li class="static">
                                                <a href="{{route('home')}}">Home</a>								
											</li>
											<li>
                                                <a href="{{route('cameras')}}">Camera</a>									
											</li>			
                                            <li>
                                                <a href="{{route('cameras')}}">Accesories</a>									
											</li>							
											<li>
                                                <a href="{{route('studios')}}">Studio</a>
                                            </li>
											<li>
                                                <a href="contact.html">About us</a>
                                            </li>
										</ul>
									</nav>
								</div>
							</div>
							<div class="col-md-2 col-sm-8 col-xs-7 header-right">
								<div class="my-cart">
									<div class="total-cart">
										<a href="cart.html">
											<i class="fa fa-shopping-cart"></i>
											<span>2</span>
										</a>								
									</div>
									<ul>
										<li>
											<div class="cart-img">
												<a href="#"><img alt="" src="{{asset('pabna/img/cart/1.jpg')}}"></a>
											</div>
											<div class="cart-info">
												<h4><a href="#">Vestibulum suscipit</a></h4>
												<span>£165.00 <span>x 1</span></span>
											</div>
											<div class="del-icon">
												<i class="fa fa-times-circle"></i>
											</div>
										</li>
										<li>
											<div class="cart-img">
												<a href="#"><img alt="" src="{{asset('pabna/img/cart/1.jpg')}}"></a>
											</div>
											<div class="cart-info">
												<h4><a href="#">Vestibulum suscipit</a></h4>
												<span>£165.00 <span>x 1</span></span>
											</div>
											<div class="del-icon">
												<i class="fa fa-times-circle"></i>
											</div>
										</li>
										<li class="cart-border">
											<div class="subtotal-text">Subtotal: </div>
											<div class="subtotal-price">£300.00</div>
										</li>
										<li>
											<a class="cart-button" href="cart.html">Ver Carro</a>
										</li>
									</ul>
								</div>
								<div class="user-meta">
									<a href="#"><i class="fa fa-cog"></i></a>
									<ul>
										<li><a href="#">My Account</a></li>
										<li><a href="#">Wish list</a></li>
										<li><a href="#">Checkout</a></li>
										<li><a href="#">Log in</a></li>
									</ul>								
								</div>					
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- header-bottom-area end -->


			<!-- mobile-menu-area start -->
			<div class="mobile-menu-area visible-xs visible-sm">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="mobile-menu">
								<nav id="dropdown">
									<ul>
										<li><a href="{{route('home')}}">Home</a></li>
										<li><a href="{{route('cameras')}}">Products</a></li>
                                        <li><a href="contact.html">Studio</a></li>
                                        <li><a href="contact.html">About us</a></li>
									</ul>
								</nav>
							</div>					
						</div>
					</div>
				</div>
			</div>
			<!-- mobile-menu-area end -->				
		</header>
		<!-- header end -->
		<!-- breadcrumb-area start -->
		<div class="breadcrumb-area" style="background: rgba(0, 0, 0, 0) url({{asset('camera.jpg')}}) no-repeat scroll center top; background-size:cover">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="breadcrumb-list">
							<h1>Products</h1>
							<ul>
								<li><a href="{{route('home')}}">Home</a> <span class="divider">|</span></li>
								{{-- <li><a href="shop.html">Product</a> <span class="divider">|</span></li> --}}
								<li>Products</li>
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
					<!-- left-sidebar start -->
					<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
						
                        <!-- widget-categories start -->
						<aside class="widget widget-categories">
							<h3 class="sidebar-title">Categories</h3>
							<ul class="sidebar-menu">
								<li><a href="#">Clothes</a> <span class="count">(14)</span></li>
								<li><a href="#">Men</a> <span class="count">(9)</span></li>
								<li><a href="#">Shoes</a> <span class="count">(2)</span></li>
								<li><a href="#">Sunglasses</a> <span class="count">(2)</span></li>
								<li><a href="#">Women</a> <span class="count">(8)</span></li>
							</ul>
						</aside>
						<!-- widget-categories end -->				
											
					</div>

					<!-- left-sidebar end -->
					<div class="col-md-9 col-sm-12 col-xs-12">
						<div class="shop-content">					
							<!-- Nav tabs -->
							<ul class="shop-tab" role="tablist">
								<li><span class="sorting-name"> View as:  </span></li>
								<li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab"><i class="fa fa-th" aria-hidden="true"></i></a></li>
								{{-- <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab"><i class="fa fa-th-list" aria-hidden="true"></i></a></li> --}}
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
								<div role="tabpanel" class="tab-pane active" id="home">
									<div class="row">

										<!-- single-product start -->
										<div class="col-md-4 col-sm-4">
											<div class="single-product">
												<div class="product-img">
													<a href="{{route('cameraDetail',['id'=>0],)}}">
														<img src="{{asset('pabna/img/product/1.jpg')}}" alt="" />
														<img class="secondary-img" src="{{asset('pabna/img/product/2.jpg')}}" alt="" />
													</a>
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
										<div class="col-md-4 col-sm-4">
											<div class="single-product">
												<div class="product-img">
													<a href="product-details.html">
														<img src="{{asset('pabna/img/product/3.jpg')}}" alt="" />
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
										<div class="col-md-4 col-sm-4">
											<div class="single-product">
												<div class="product-img">
													<a href="product-details.html">
														<img src="{{asset('pabna/img/product/4.jpg')}}" alt="" />
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
										<div class="col-md-4 col-sm-4">
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
										<div class="col-md-4 col-sm-4">
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
										<div class="col-md-4 col-sm-4">

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
		
		<!-- footer start -->
		<footer>
			<div class="footer-top">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="footer-logo">
								<img src="img/logo-white-text.png" alt="" />
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore <br /> magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation.</p>
								
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- footer-top-area start -->
			<div class="footer-top-area">
				<div class="container">
					<div class="row">
						<!-- footer-widget start -->
						<div class="col-lg-3 col-md-3 col-sm-4">
							<div class="footer-widget">
								<h3>CONTACT US</h3>
								<ul class="footer-contact">
									<li>
										<i class="fa fa-envelope"> </i>	
										Email: admin@BasicTheme.com
									</li>
									<li>
										<i class="fa fa-phone"> </i>
										Phone: +123 455657589
									</li>
								</ul>
							</div>
						</div>
						<!-- footer-widget end -->					
									
					</div>
				</div>
			</div>
			<!-- footer-top-area end -->
			<!-- footer-bottom-area start -->
			<div class="footer-bottom-area">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6">
							<div class="copyright">
								<p>Copyright © <a href="#">Pabna</a>. All Rights Reserved</p>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6">
						</div>
					</div>
				</div>
			</div>
			<!-- footer-bottom-area end -->			
		</footer>
		<!-- footer end -->
		
		<!-- QUICKVIEW PRODUCT -->
		<div id="quickview-wrapper">
			<!-- Modal -->
			<div class="modal fade" id="productModal" tabindex="-1" role="dialog">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						</div>
						<div class="modal-body">
							<div class="modal-product">
								<div class="product-images">
									<div class="main-image images">
										<img alt="" src="img/product/13.jpg">
									</div>
								</div><!-- .product-images -->
								
								<div class="product-info">
									<h1>Diam quis cursus</h1>
									<div class="price-box">
										<p class="price"><span class="special-price"><span class="amount">$132.00</span></span></p>
									</div>
									<a href="shop.html" class="see-all">See all features</a>
									<div class="quick-add-to-cart">
										<form method="post" class="cart">
											<div class="numbers-row">
												<input type="number" id="french-hens" value="3">
											</div>
											<button class="single_add_to_cart_button" type="submit">Add to cart</button>
										</form>
									</div>
									<div class="quick-desc">
										Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla.
									</div>
									<div class="social-sharing">
										<div class="widget widget_socialsharing_widget">
											<h3 class="widget-title-modal">Share this product</h3>
											<ul class="social-icons">
												<li><a target="_blank" title="Facebook" href="#" class="facebook social-icon"><i class="fa fa-facebook"></i></a></li>
												<li><a target="_blank" title="Twitter" href="#" class="twitter social-icon"><i class="fa fa-twitter"></i></a></li>
												<li><a target="_blank" title="Pinterest" href="#" class="pinterest social-icon"><i class="fa fa-pinterest"></i></a></li>
												<li><a target="_blank" title="Google +" href="#" class="gplus social-icon"><i class="fa fa-google-plus"></i></a></li>
												<li><a target="_blank" title="LinkedIn" href="#" class="linkedin social-icon"><i class="fa fa-linkedin"></i></a></li>
											</ul>
										</div>
									</div>
								</div><!-- .product-info -->
							</div><!-- .modal-product -->
						</div><!-- .modal-body -->
					</div><!-- .modal-content -->
				</div><!-- .modal-dialog -->
			</div>
			<!-- END Modal -->
		</div>
		<!-- END QUICKVIEW PRODUCT -->	


		<!-- all js here -->
		<!-- jquery latest version -->
        <script src="{{asset('pabna/js/vendor/jquery-1.12.0.min.js')}}"></script>
		<!-- bootstrap js -->
        <script src="{{asset('pabna/js/bootstrap.min.js')}}"></script>
		<!-- owl.carousel js -->
        <script src="{{asset('pabna/js/owl.carousel.min.js')}}"></script>
		<!-- meanmenu js -->
        <script src="{{asset('pabna/js/jquery.meanmenu.js')}}"></script>
		<!-- jquery-ui js -->
        <script src="{{asset('pabna/js/jquery-ui.min.js')}}"></script>	
		<!-- wow js -->
        <script src="{{asset('pabna/js/wow.min.js')}}"></script>
		<!-- plugins js -->
        <script src="{{asset('pabna/js/plugins.js')}}"></script>
		<!-- main js -->
        <script src="{{asset('pabna/js/main.js')}}"></script>
    </body>
</html>
