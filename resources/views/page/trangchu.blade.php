
@extends('master')
@section('title','Trang chủ')
@section('content')
<!--================Slider Area =================-->
<section class="main_slider_area">
	<div id="main_slider5" class="rev_slider" data-version="5.3.1.6">
		<ul>
			@foreach($slide as $sl)
			<li data-index="source/img/home-slider/{{$sl->IDSlide}}" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="400"  data-thumb="source/img/home-slider/{{$sl->Image}}"  data-rotate="0"  data-saveperformance="off"  data-title="Creative" data-param1="01" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
			<!-- MAIN IMAGE -->
			<img src="source/img/home-slider/{{$sl->Image}}"  alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="5" class="rev-slidebg" data-no-retina>

				<!-- LAYER NR. 1 -->
				<div class="slider_text_box">
					
					<div class="tp-caption tp-resizeme first_text" 
					data-x="['right','right','left','15','15','15']" data-hoffset="['-150','0','15','15','15','0']" 
					data-y="['top','top','top','top']" 
					data-voffset="['155','155','155','155','235','230']" 
					data-fontsize="['60','60','60','40','30']"
					data-lineheight="['76','76','76','50','40']"
					data-width="['780','740','780','780','700','400']"
					data-height="none"
					data-whitespace="normal"
					data-type="text" 
					data-responsive_offset="on" 
					data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]"
					data-textAlign="['left','left','left','left']">{!!$sl->TenSP!!}</div>
					
					<div class="tp-caption tp-resizeme secand_text" 
						data-x="['right','right','left','15','15','15']" 
						data-hoffset="['0','110','15','15','15','0']" 
						data-y="['top','top','top','top']" data-voffset="['316','316','316','270','330','320']"  
						data-fontsize="['20','20','20','20','16']"
						data-lineheight="['28','28','28','28']"
						data-width="['620','620','620','620','500','380']"
						data-height="none"
						data-whitespace="normal"
						data-type="text" 
						data-responsive_offset="on"
						data-transform_idle="o:1;"
						data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:[100%];s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]">{{$sl->MoTa}}
						
					</div>
					
					<div class="tp-caption tp-resizeme slider_button" 
						data-x="['right','right','left','15','15','15']" data-hoffset="['0','0','15','0','0','0']" 
						data-y="['top','top','top','top']" data-voffset="['405','405','405','355','400','415']" 
						data-fontsize="['14','14','14','14']"
						data-lineheight="['46','46','46','46']"
						data-width="['620','740','620','620','300']"
						data-height="none"
						data-whitespace="normal"
						data-type="text" 
						data-responsive_offset="on" 
						data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:[100%];s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]">
						<a class="main_btn" href="{{route('chitiet-sanpham',$sl->MaSP)}}">Xem ngay</a>
					</div>
				</div>
			</li>
			@endforeach
		</ul>
	</div>
</section>
<!--================End Slider Area =================-->

<!--================Service We offer Area =================-->
<section class="service_we_offer_area gray_service white_bg p_100">
        	<div class="container">
        		<div class="single_b_title">
        			<h2>Dịch vụ của chúng tôi</h2>
        		</div>
        		<div class="row we_offer_inner">
        			<div class="col-lg-4">
        				<div class="s_we_item gray_s_item">
        					<div class="media">
        						<div class="d-flex">
        							<i class="flaticon-food-6"></i>
        						</div>
        						<div class="media-body">
        							<a href="#"><h4>Bánh Chất Lượng Nhất</h4></a>
        							<p>Chúng tôi mang đến các loại bánh chất hàng đầu thế giới cho các bạn chọn lựa.</p>
        						</div>
        					</div>
        				</div>
        			</div>
        			<div class="col-lg-4">
        				<div class="s_we_item gray_s_item">
        					<div class="media">
        						<div class="d-flex">
        							<i class="flaticon-food-5"></i>
        						</div>
        						<div class="media-body">
        							<a href="#"><h4>Bánh Teabreak</h4></a>
        							<p>Các loại bánh ăn sáng đơn giản nhưng rất ngon miệng để dễ dàng mang đi.</p>
        						</div>
        					</div>
        				</div>
        			</div>
        			<div class="col-lg-4">
        				<div class="s_we_item gray_s_item">
        					<div class="media">
        						<div class="d-flex">
        							<i class="flaticon-food-3"></i>
        						</div>
        						<div class="media-body">
        							<a href="#"><h4>Đám Cưới, sinh nhật</h4></a>
        							<p>Các đầu bếp giỏi nhất với những chiếc bánh kem đặc biết nhất trong ngày vui của các bạn.</p>
        						</div>
        					</div>
        				</div>
        			</div>
        			<div class="col-lg-4">
        				<div class="s_we_item gray_s_item">
        					<div class="media">
        						<div class="d-flex">
        							<i class="flaticon-book"></i>
        						</div>
        						<div class="media-body">
        							<a href="#"><h4>Công Thức Tuyệt Vời</h4></a>
        							<p>Chúng tôi luôn mang đến cho khách hàng sự bất ngờ với những công thức đa dạng và ngon nhất.</p>
        						</div>
        					</div>
        				</div>
        			</div>
        			<div class="col-lg-4">
        				<div class="s_we_item gray_s_item">
        					<div class="media">
        						<div class="d-flex">
        							<i class="flaticon-food-4"></i>
        						</div>
        						<div class="media-body">
        							<a href="#"><h4>Menu Đa Dạng</h4></a>
        							<p>Các bạn sẽ thoải mái lựa chọn với danh sách sản phẩm phong phú và đa dạng nhất.</p>
        						</div>
        					</div>
        				</div>
        			</div>
        			<div class="col-lg-4">
        				<div class="s_we_item gray_s_item">
        					<div class="media">
        						<div class="d-flex">
        							<i class="flaticon-transport"></i>
        						</div>
        						<div class="media-body">
        							<a href="#"><h4>Giao Hàng Tận Nhà</h4></a>
        							<p>Đội ngũ giao hàng nhanh chóng và chuyên nghiệp nhất nếu bạn có yêu cầu.</p>
        						</div>
        					</div>
        				</div>
        			</div>
        		</div>
        	</div>
        </section>
<!--================End Service We offer Area =================-->

<!--================Welcome Area =================-->
<section class="welcome_bakery_area pink_cake_feature">
        	<div class="container">
        		<div class="cake_feature_inner">
      				<div class="title_view_all">
						<div class="float-left">
							<div class="main_w_title">
								<h2>Sản phẩm mới</h2>
								<h5> Seldolor sit amet consect etur</h5>
							</div>
						</div>
						<div class="float-right">
							<a class="pest_btn" href="#">Xem tất cả sản phẩm</a>
						</div>
					</div>
       				<div class="cake_feature_slider owl-carousel">
						@foreach ($sp_moi as $spm)
						<div class="item">
							<a href="{{route('chitiet-sanpham',$spm->MaSP)}}">
							<div class="cake_feature_item">
								<div class="cake_img">
									<img src="images/img-SanPham/small/{{$spm->Image}}" alt="">
								</div>
								<div class="cake_text">
									<h4>{{number_format($spm->DonGia)}}đ</h4>
									<h3>{{$spm->TenSP}}</h3>
									<a class="pest_btn" href="{{route('themgiohang',$spm->MaSP)}}"><i class="lnr lnr-cart"></i> Thêm</a>
								</div>
							</div>
							</a>
						</div>
						@endforeach
       				</div>
        		</div>
        	</div>
    </section>
<!--================End Welcome Area =================-->

<!--================Special Recipe Area =================-->
<section class="special_recipe_area">
        	<div class="container">
        		<div class="special_recipe_slider owl-carousel">
        			<div class="item">
        				<div class="media">
        					<div class="d-flex">
        						<img src="source/img/recipe/recipe-1.png" alt="">
        					</div>
        					<div class="media-body">
        						<h4>Special Recipe</h4>
        						<p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi equatur uis autem vel eum.</p>
        						<a class="w_view_btn" href="#">View Details</a>
        					</div>
        				</div>
        			</div>
        			<div class="item">
        				<div class="media">
        					<div class="d-flex">
        						<img src="source/img/recipe/recipe-1.png" alt="">
        					</div>
        					<div class="media-body">
        						<h4>Special Recipe</h4>
        						<p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi equatur uis autem vel eum.</p>
        						<a class="w_view_btn" href="#">View Details</a>
        					</div>
        				</div>
        			</div>
        			<div class="item">
        				<div class="media">
        					<div class="d-flex">
        						<img src="source/img/recipe/recipe-1.png" alt="">
        					</div>
        					<div class="media-body">
        						<h4>Special Recipe</h4>
        						<p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi equatur uis autem vel eum.</p>
        						<a class="w_view_btn" href="#">View Details</a>
        					</div>
        				</div>
        			</div>
        			<div class="item">
        				<div class="media">
        					<div class="d-flex">
        						<img src="source/img/recipe/recipe-1.png" alt="">
        					</div>
        					<div class="media-body">
        						<h4>Special Recipe</h4>
        						<p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi equatur uis autem vel eum.</p>
        						<a class="w_view_btn" href="#">View Details</a>
        					</div>
        				</div>
        			</div>
        		</div>
        	</div>
        </section>
<!--================End Special Recipe Area =================-->

<!--================End Client Says Area =================-->
<section class="our_chef_area p_100">
        	<div class="container">
        		<div class="row our_chef_inner">
        			<div class="col-lg-3 col-6">
        				<div class="chef_text_item">
        					<div class="main_title">
								<h2>Our Chefs</h2>
								<p>Lorem ipsum dolor sit amet, cons ectetur elit. Vestibulum nec odios Suspe ndisse cursus mal suada faci lisis. Lorem ipsum dolor sit ametion.</p>
							</div>
        				</div>
        			</div>
        			<div class="col-lg-3 col-6">
        				<div class="chef_item">
        					<div class="chef_img">
        						<img class="img-fluid" src="source/img/chef/chef-1.jpg" alt="">
        						<ul class="list_style">
        							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
        							<li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
        							<li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
        							<li><a href="#"><i class="fa fa-skype"></i></a></li>
        						</ul>
        					</div>
        					<a href="#"><h4>Michale Joe</h4></a>
        					<h5>Expert in Cake Making</h5>
        				</div>
        			</div>
        			<div class="col-lg-3 col-6">
        				<div class="chef_item">
        					<div class="chef_img">
        						<img class="img-fluid" src="source/img/chef/chef-2.jpg" alt="">
        						<ul class="list_style">
        							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
        							<li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
        							<li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
        							<li><a href="#"><i class="fa fa-skype"></i></a></li>
        						</ul>
        					</div>
        					<a href="#"><h4>Michale Joe</h4></a>
        					<h5>Expert in Cake Making</h5>
        				</div>
        			</div>
        			<div class="col-lg-3 col-6">
        				<div class="chef_item">
        					<div class="chef_img">
        						<img class="img-fluid" src="source/img/chef/chef-3.jpg" alt="">
        						<ul class="list_style">
        							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
        							<li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
        							<li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
        							<li><a href="#"><i class="fa fa-skype"></i></a></li>
        						</ul>
        					</div>
        					<a href="#"><h4>Michale Joe</h4></a>
        					<h5>Expert in Cake Making</h5>
        				</div>
        			</div>
        		</div>
        	</div>
        </section>
<!--================End Client Says Area =================-->

<!--================New Arivals Area =================-->

<!--================End New Arivals Area =================-->

<!--================Client Says Area =================-->
<section class="client_says_area p_100">
        	<div class="container">
        		<div class="client_says_inner">
        			<div class="c_says_title">
        				<h2>What Our Client Says</h2>
        			</div>
        			<div class="client_says_slider owl-carousel">
        				<div class="item">
        					<div class="media">
        						<div class="d-flex">
        							<img src="source/img/client/client-1.png" alt="">
        							<h3>“</h3>
        						</div>
        						<div class="media-body">
        							<p>Osed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci sed quia non numquam qui ratione voluptatem sequi nesciunt. Neque porro quisquam est.</p>
        							<h5>- Robert joe</h5>
        						</div>
        					</div>
        				</div>
        				<div class="item">
        					<div class="media">
        						<div class="d-flex">
        							<img src="source/img/client/client-1.png" alt="">
        						</div>
        						<div class="media-body">
        							<p>Osed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci sed quia non numquam qui ratione voluptatem sequi nesciunt. Neque porro quisquam est.</p>
        							<h5>- Robert joe</h5>
        						</div>
        					</div>
        				</div>
        				<div class="item">
        					<div class="media">
        						<div class="d-flex">
        							<img src="source/img/client/client-1.png" alt="">
        						</div>
        						<div class="media-body">
        							<p>Osed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci sed quia non numquam qui ratione voluptatem sequi nesciunt. Neque porro quisquam est.</p>
        							<h5>- Robert joe</h5>
        						</div>
        					</div>
        				</div>
        			</div>
        		</div>
        	</div>
        </section>
<!--================End Client Says Area =================-->

<!--================Latest News Area =================-->
<section class="latest_news_area golden_bg p_100">
        	<div class="container">
        		<div class="main_title">
					<h2>Latest Blog</h2>
					<h5>an turn into your instructor your helper, your </h5>
				</div>
       			<div class="row latest_news_inner">
       				<div class="col-lg-4 col-md-6">
       					<div class="l_news_image">
       						<div class="l_news_img">
       							<img class="img-fluid" src="source/img/blog/latest-news/l-news-1.jpg" alt="">
       						</div>
       						<div class="l_news_hover">
       							<a href="#"><h5>Oct 15, 2016</h5></a>
       							<a href="#"><h4>Nanotechnology immersion along the information</h4></a>
       						</div>
       					</div>
       				</div>
       				<div class="col-lg-4 col-md-6">
       					<div class="l_news_item">
       						<div class="l_news_img">
       							<img class="img-fluid" src="source/img/blog/latest-news/l-news-2.jpg" alt="">
       						</div>
       						<div class="l_news_text">
       							<a href="#"><h5>Oct 15, 2016</h5></a>
       							<a href="#"><h4>Nanotechnology immersion along the information</h4></a>
       							<p>Lorem ipsum dolor sit amet, cons ectetur elit. Vestibulum nec odios Suspe ndisse cursus mal suada faci lisis. Lorem ipsum dolor sit ametion ....</p>
       						</div>
       					</div>
       				</div>
       				<div class="col-lg-4 col-md-6">
       					<div class="l_news_item">
       						<div class="l_news_img">
       							<img class="img-fluid" src="source/img/blog/latest-news/l-news-3.jpg" alt="">
       						</div>
       						<div class="l_news_text">
       							<a href="#"><h5>Oct 15, 2016</h5></a>
       							<a href="#"><h4>Nanotechnology immersion along the information</h4></a>
       							<p>Lorem ipsum dolor sit amet, cons ectetur elit. Vestibulum nec odios Suspe ndisse cursus mal suada faci lisis. Lorem ipsum dolor sit ametion ....</p>
       						</div>
       					</div>
       				</div>
       			</div>
        	</div>
        </section>
<!--================End Latest News Area =================-->

<!--================Bakery Video Area =================-->
<section class="bakery_video_area">
        	<div class="container">
        		<div class="video_inner">
        			<h3>Real Taste</h3>
        			<p>A light, sour wheat dough with roasted walnuts and freshly picked rosemary, thyme, poppy seeds, parsley and sage</p>
        			<div class="media">
        				<div class="d-flex">
        					<a class="popup-youtube" href="http://www.youtube.com/watch?v=0O2aH4XLbto"><i class="flaticon-play-button"></i></a>
        				</div>
        				<div class="media-body">
        					<h5>Watch intro video <br />about us</h5>
        				</div>
        			</div>
        		</div>
        	</div>
        </section>
<!--================End Bakery Video Area =================-->

 @endsection