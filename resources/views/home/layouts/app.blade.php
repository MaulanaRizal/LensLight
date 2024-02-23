<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Lens Light || @yield('title')</title>
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
		
		<link rel="stylesheet" href="{{asset('pabna/lib/css/nivo-slider.css')}}">

		<!-- font-awesome css -->
        <link rel="stylesheet" href="{{asset('pabna/css/font-awesome.min.css')}}">
		<!-- style css -->
		<link rel="stylesheet" href="{{asset('pabna/style.css')}}">
		<!-- responsive css -->
        <link rel="stylesheet" href="{{asset('pabna/css/responsive.css')}}">
		<!-- modernizr js -->

		@stack('styles')

        <script src="{{asset('pabna/js/vendor/modernizr-2.8.3.min.js')}}"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="/http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->

		@include('home.layouts.header')

		@yield('content')

		<!-- footer start -->
		<footer>
			<div class="footer-top">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="footer-logo">
								<img src="{{asset('pabna/img/logo-white-text.png')}}" alt="" />
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
										<img alt="" src="{{asset('pabna/img/product/13.jpg')}}">
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
		
		@stack('scripts')

    </body>
</html>
