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
                                                <a href="{{route('accessories')}}">Accessories</a>									
											</li>							
											<li>
                                                <a href="{{route('studios')}}">Studio</a>
                                            </li>
											<li>
                                                <a href="{{route('about us')}}">About us</a>
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