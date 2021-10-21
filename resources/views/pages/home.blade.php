

@extends('welcome')
@section('content')


<!-- banner -->
<div class="baneer-w3ls">
		<div class="row no-gutters">
			<div class="col-xl-5 col-lg-6">
				<div class="banner-left-w3">
					<div class="container">
						<div class="banner-info_agile_w3ls">
							<!-- <h5>Đảm bảo vệ sinh an toàn thực phẩm</h5> -->
							<h3 class="text-da mb-4"><span>Tươi ngon tròn vị</span>	</h3>
							<p>Chúng tôi luôn cố gắng mang lại những món ăn vặt thú vị, những trảỉ nghiệm mới mẻ dành cho người tiêu dùng.
							</p>
							<p>Yêu là phải nói- Đói là phải đặt ngay đồ ăn của Fasoo 24/7</p>
							<a href="menu.html" class="button-w3ls active mt-5">Đặt hàng ngay
								<span class="fa fa-caret-right ml-1" aria-hidden="true"></span>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-7 col-lg-6 callbacks_container">
				<!-- banner slider -->
				<div class="csslider infinity" id="slider1">
					<input type="radio" name="slides" checked="checked" id="slides_1" />
					<input type="radio" name="slides" id="slides_2" />
					<input type="radio" name="slides" id="slides_3" />
					<ul class="banner_slide_bg">
						<li>
							<div class="banner-top1"></div>
						</li>
						<li>
							<div class="banner-top2"></div>
						</li>
						<li>
							<div class="banner-top3"></div>
						</li>
					</ul>
					<div class="arrows">
						<label for="slides_1"></label>
						<label for="slides_2"></label>
						<label for="slides_3"></label>
					</div>
					<div class="navigation">
						<div>
							<label for="slides_1"></label>
							<label for="slides_2"></label>
							<label for="slides_3"></label>
						</div>
					</div>
				</div>
				<!-- //banner slider -->
			</div>
		</div>
	</div>
<!-- //banner -->
<div class="clearfix"></div>






	<!-- about -->
	<div class="about-bottom">
		<div class="row no-gutters">
			<div class="col-lg-5 col-md-6 about">

			</div>
			<div class="col-lg-7 col-md-6 about-right-w3 text-right py-md-5">
				<div class="right-space py-xl-5 py-lg-3">
					<div class="title-section mb-4">
						<p class="w3ls-title-sub">Giới thiệu</p>
						<h3 class="w3ls-title">Xin chào đến với<span> Fasoo 24/7</span></h3>
					</div>
					<p class="about-text">Luôn cố gắng mang lại những món ăn đảm bảo vệ sinh an toàn thực phẩm.</p>
					<p class="about-text">Miễn phí đổi trả khi có các sự cố không đáng có.</p>
					<p class="about-text">Đặt hàng online nhanh chóng, dễ dàng, tiện lợi.</p>
					<p class="about-text">Hỗ trợ khách hàng 24/7.</p>
				</div>
			</div>
		</div>
	</div>
	<!-- //about -->






	<!-- specials -->
	<section class="blog_w3ls py-5">
		<div class="container pb-xl-5 pb-lg-3">
			<div class="title-section text-center mb-md-5 mb-4">
				<h3 class="w3ls-title">Thực đơn<span> Đặc biệt</span></h3>
			</div>
			<div class="row">
				<!-- blog grid -->
				<div class="col-lg-4 col-md-6">
					<div class="card border-0 med-blog">
						<div class="card-header p-0">
							<a href="menu.html">
								<img class="card-img-bottom" src="public/frontend/images/blog1.jpg" alt="Card image cap">
							</a>
						</div>
						<div class="card-body border border-top-0">
							<h5 class="blog-title card-title m-0"><a href="menu.html">Phô mai chiên</a></h5>
							<p class="mt-3">Nằm trong danh sách những món ăn vặt được giới trẻ yêu thích, phô mai que nhanh chóng chinh phục người ăn bởi vị béo ngậy lạ miệng, lớp nhân dẻo thơm.</p>
							<a href="menu.html" class="btn button-w3ls mt-4 mb-3">Xem thêm
								<span class="fa fa-caret-right ml-1" aria-hidden="true"></span>
							</a>
						</div>
					</div>
				</div>
				<!-- //blog grid -->
				<!-- blog grid -->
				<div class="col-lg-4 col-md-6 mt-md-0 mt-5">
					<div class="card border-0 med-blog">
						<div class="card-header p-0">
							<a href="menu.html">
								<img class="card-img-bottom" src="public/frontend/images/blog2.jpg" alt="Card image cap">
							</a>
						</div>
						<div class="card-body border border-top-0">
							<h5 class="blog-title card-title m-0"><a href="menu.html">Khoai tây chiên</a></h5>
							<p class="mt-3">Khoai tây chiên chắc chắn là món ăn khoái khẩu của tất cả những bạn trẻ. Chỉ cần nhìn thấy món ăn này là bạn đã có thể thấy được một trời thanh xuân.</p>
							<a href="menu.html" class="button-w3ls active mt-4 mb-3">Xem thêm
								<span class="fa fa-caret-right ml-1" aria-hidden="true"></span>
							</a>
						</div>
					</div>
				</div>
				<!-- //blog grid -->
				<!-- blog grid -->
				<div class="col-lg-4 col-md-6 mt-lg-0 mt-5">
					<div class="card border-0 med-blog">
						<div class="card-header p-0">
							<a href="menu.html">
								<img class="card-img-bottom" src="public/frontend/images/blog3.jpg" alt="Card image cap">
							</a>
						</div>
						<div class="card-body border border-top-0">
							<h5 class="blog-title card-title m-0"><a href="menu.html">Trà sữa</a></h5>
							<p class="mt-3">Thức uống quen thuộc của các bạn nữ với nhiều hương vị khác nhau đem lại cảm giác mới mẻ , tươi mới.</p>
							<a href="menu.html" class="button-w3ls mt-4 mb-3">Xem thêm
								<span class="fa fa-caret-right ml-1" aria-hidden="true"></span>
							</a>
						</div>
					</div>
				</div>
				<!-- //blog grid -->
			</div>
		</div>
	</section>
	<!-- //specials -->






	<!-- two grids -->
	<section class="offer pt-lg-3">
		<div class="row no-gutters">
			<div class="col-md-6 p-0">
				<div class="blog-sec-w3">
					<div class="text-blog-w3 text-center p-2">
						<h4 class="text-wh mb-3">Món ăn ưa chuộng nhất</a></h4>
						<p class="text-li"></p>
						<a href="menu.html" class="button-w3ls active mt-5">Đặt hàng ngay
							<span class="fa fa-caret-right ml-1" aria-hidden="true"></span>
						</a>
					</div>
				</div>
			</div>
			<div class="col-md-6 p-0">
				<div class="blog-sec-w3 blog-sec-w3-2">
					<div class="text-blog-w3 text-center p-2">
						<h4 class="text-wh mb-3">Món ăn lành mạnh</h4>
						<p class="text-li"></p>
						<a href="menu.html" class="button-w3ls active mt-5">Đặt hàng ngay
							<span class="fa fa-caret-right ml-1" aria-hidden="true"></span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- //two grids -->






	<!-- services -->
	<section class="middle py-5" id="services">
		<div class="container py-xl-5 py-lg-3">
			<div class="title-section text-center mb-md-5 mb-4">
				<h3 class="w3ls-title mb-3">Dịch vụ <span>xuất sắc</span></h3>
			</div>
			<div class="row grids-w3 py-xl-5 py-lg-4 pt-lg-0 pt-4">
				<div class="col-lg-5 w3pvt-lauits_banner_bottom_left">
					<div class="row">
						<div class="col-8 wthree_banner_bottom_grid_right text-right">
							<h4 class="mb-3">Giao hàng đúng giờ</h4>
							<p>Cửa hàng luôn đảm bảo chất lượng cũng như thời gian giao hàng</p>
						</div>
						<div class="col-4 wthree_banner_bottom_grid_left text-lg-right text-center">
							<img src="public/frontend/images/s1.png" alt="" class="img-fluid">
						</div>
					</div>
				</div>
				<div class="col-lg-2 w3pvt-lauits_banner_bottom_left">

				</div>
				<div class="col-lg-5 w3pvt-lauits_banner_bottom_left mt-lg-0 mt-4">
					<div class="row">
						<div class="col-4 wthree_banner_bottom_grid_left text-lg-right text-center">
							<img src="public/frontend/images/s2.png" alt="" class="img-fluid">
						</div>
						<div class="col-8 wthree_banner_bottom_grid_right">
							<h4 class="mb-3">Miễn phí đổi trả hàng</h4>
							<p>Hỗ trợ đổi trả khi có các vấn đề phát sinh</p>
						</div>
					</div>
				</div>
			</div>
			<div class="row grids-w3 py-xl-5 py-lg-4 mt-lg-0 mt-4">
				<div class="col-lg-4 w3pvt-lauits_banner_bottom_left">
					<div class="row">
						<div class="col-8 wthree_banner_bottom_grid_right text-right pl-lg-0">
							<h4 class="mb-3">Đặt hàng online</h4>
							<p>Đặt hàng đơn giản, dễ dàng, nhanh chóng</p>
						</div>
						<div class="col-4 wthree_banner_bottom_grid_left text-lg-right text-center pr-lg-0">
							<img src="public/frontend/images/s3.png" alt="" class="img-fluid">
						</div>
					</div>
				</div>
				<div class="col-lg-4 w3pvt-lauits_banner_bottom_left pr-0">

				</div>
				<div class="col-lg-4 w3pvt-lauits_banner_bottom_left mt-lg-0 mt-4">
					<div class="row">
						<div class="col-4 wthree_banner_bottom_grid_left text-lg-right text-center pl-lg-0">
							<img src="public/frontend/images/s4.png" alt="" class="img-fluid">
						</div>
						<div class="col-8 wthree_banner_bottom_grid_right pr-lg-0">
							<h4 class="mb-3">Hỗ trợ 24/7</h4>
							<p>Luôn đáp ứng các nhu cầu của khách hàng mọi lúc mọi nơi</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="img-blog-2">
			<img src="public/frontend/images/img.png" alt="" class="img-fluid">
		</div>
	</section>
	<!-- //services -->

<br><br/>


    <!-- slides images -->
	<section class="wthree-slider" id="masthead">
    </section>
    <!-- //slides images -->




    


@endsection