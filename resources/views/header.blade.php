<header class="main_header_area five_header">
			<div class="top_header_area row m0">
				<div class="container">
					<div class="float-left">
						<a href="tell:+18004567890"><i class="fa fa-phone" aria-hidden="true"></i> 0399291444</a>
						<a href="mainto:info@cakebakery.com"><i class="fa fa-envelope-o" aria-hidden="true"></i>vanduycr7@gmail.com</a>
					</div>
					<div class="float-right">
						
						<ul class="h_search list_style">
							<li><a class="popup-with-zoom-anim" href="#test-search"><i class="fa fa-search"></i></a></li>
							<li><a class="popup-with-zoom-anim" href="#test-cart"><i class="fa fa-shopping-cart"></i> (@if(Session::has('cart')) {{(Session('cart')->tongSo)}}@else Trống @endif)</a></li>
			
							
							@if(Session::has('userSession'))
							<li class="dropdown submenu">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fas fa-user"></i> {{(Session('userSession'))}}</a>
								<ul class="dropdown-menu">
									<li><a href="" style="color: #303339"><i class="fa fa-user-circle"></i> Quản lý tài khoản</a></li>
									<li><a href="our-team.html" style="color: #303339"><i class="fa fa-shopping-basket"></i> Đơn hàng của tôi</a></li>
									<li><a href="khach-hang-logout" style="color: #303339"><i class="fa fa-power-off"></i> Đăng xuất</a></li>
								</ul>
							</li>
							@else
							<li><a style="color:#94c9d9;font-size: 13px;font-family: 'Open Sans', sans-serif;" href="khach-hang-login">Đăng nhập</a>|<a style="color:#94c9d9;font-size: 13px" href="register" >Đăng ký</a></li>
							@endif
						</ul>
					</div>	

				</div>
			</div>
			<div class="main_menu_two">
				<div class="container">
					<nav class="navbar navbar-expand-lg navbar-light bg-light">
						<a class="navbar-brand" href="{{route('trang-chu')}}"><img src="source/img/teacake-logo2.png" alt=""></a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="my_toggle_menu">
                            	<span></span>
                            	<span></span>
                            	<span></span>
                            </span>
						</button>
						<div class="collapse navbar-collapse" id="navbarSupportedContent">
							<ul class="navbar-nav justify-content-end">
								<li class="{{ Request::is('index') ? 'active' : null}} ">
									<a href="{{route('trang-chu')}}">Trang chủ</a>
								</li>
								<li class="dropdown submenu {{ Request::is(('loai-san-pham/*')) ? 'active' : null}}">
										<a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" >Sản phẩm</a>
										<ul class="dropdown-menu">
											@foreach ($loaisp as $lsp)
											
											<li class="{{ Request::is('loai-san-pham/'.$lsp->MaLoaiSP) ? 'active' : null}} "><a href="{{route('loai-san-pham', $lsp->MaLoaiSP)}}">{{$lsp->TenLoaiSP}}</a></li>
											@endforeach					
										</ul>
								</li>
								<li><a href="menu.html">Menu</a></li>
								<li class="dropdown submenu">
									<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">About Us</a>
									<ul class="dropdown-menu">
										<li><a href="">About Us</a></li>
										<li><a href="our-team.html">Our Chefs</a></li>
										<li><a href="testimonials.html">Testimonials</a></li>
									</ul>
								</li>
								<li class="dropdown submenu">
									<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Pages</a>
									<ul class="dropdown-menu">
										<li><a href="service.html">Services</a></li>
										<li class="dropdown submenu">
											<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Gallery</a>
											<ul class="dropdown-menu">
												<li><a href="portfolio.html">-  Gallery Classic</a></li>
												<li><a href="portfolio-full-width.html">-  Gallery Full width</a></li>
											</ul>
										</li>
										<li><a href="faq.html">Faq</a></li>
										<li><a href="what-we-make.html">What we make</a></li>
										<li><a href="special.html">Special Recipe</a></li>
										<li><a href="404.html">404 page</a></li>
										<li><a href="comming-soon.html">Coming Soon page</a></li>
									</ul>
								</li>
								<li class="dropdown submenu">
									<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Blog</a>
									<ul class="dropdown-menu">
										<li><a href="blog.html">Blog with sidebar</a></li>
										<li><a href="blog-2column.html">Blog 2 column</a></li>
										<li><a href="single-blog.html">Blog details</a></li>
									</ul>
								</li>
								<li class="dropdown submenu">
									<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Shop</a>
									<ul class="dropdown-menu">
										<li><a href="shop.html">Main shop</a></li>
										<li><a href="product-details.html">Product Details</a></li>
										<li><a href="cart.html">Cart Page</a></li>
										<li><a href="checkout.html">Checkout Page</a></li>
									</ul>
								</li>
								<li><a href="source/contact.html">Contact Us</a></li>
							</ul>
						</div>
					</nav>
				</div>
			</div>
</header>