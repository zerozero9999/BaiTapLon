<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Web bán đồ ăn vặt</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords"
		content="Tasty Burger Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--// Meta tag Keywords -->

	<!-- Custom-Files -->
    <link rel="stylesheet" href="public/frontend/css/bootstrap.css">
    <!-- Bootstrap-Core-CSS -->
    <link href="public/frontend/css/css_slider.css" type="text/css" rel="stylesheet" media="all">
	<!-- css slider -->
    <link rel="stylesheet" href="public/frontend/css/style.css" type="text/css" media="all" />
	<!-- Style-CSS -->
    <link href="public/frontend/css/font-awesome.min.css" rel="stylesheet">
	<!-- Font-Awesome-Icons-CSS -->
	<!-- //Custom-Files -->

	<!-- Web-Fonts -->
	<link
		href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&amp;subset=latin-ext"
		rel="stylesheet">
	<link
		href="//fonts.googleapis.com/css?family=Barlow+Semi+Condensed:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
		rel="stylesheet">
	<!-- //Web-Fonts -->
</head>





<body>
	<!-- header -->
	<header id="home">
		<!-- top-bar -->
		<div class="top-bar py-2 border-bottom">
			<div class="container">
				<div class="row middle-flex">
					<div class="col-xl-7 col-md-5 top-social-agile mb-md-0 mb-1 text-lg-left text-center">
						<div class="row">
							<div class="col-xl-3 col-6 header-top_w3layouts">
								<p class="text-da">
									<span class="fa fa-map-marker mr-2"></span>Hải Phòng, Việt Nam
								</p>
							</div>
							<div class="col-xl-3 col-6 header-top_w3layouts">
								<p class="text-da">
									<span class="fa fa-phone mr-2"></span>SĐT: 0345916099
								</p>
							</div>
							<div class="col-xl-6"></div>
						</div>
					</div>
					<div class="col-xl-5 col-md-7 top-social-agile text-md-right text-center pr-sm-0 mt-md-0 mt-2">
						<div class="row middle-flex">
							<div class="col-lg-5 col-4 top-w3layouts p-md-0 text-right">
								<!-- login -->
								<a href="login.html" class="btn login-button-2 text-uppercase text-wh">
									<span class="fa fa-sign-in mr-2"></span>Đăng nhập</a>
								<!-- //login -->
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- //top-bar -->





    
	<!-- header 2 -->
	<!-- navigation -->
	<div class="main-top py-1">
		<div class="container">
			<div class="nav-content">
				<!-- logo -->
				<h1>
					<a id="logo" class="logo" href="{{ url('/trang-chu') }}">
						<img src="public/frontend/images/logo.png" alt="" class="img-fluid"><span>24/7</span>Fasoo
					</a>
				</h1>
				<!-- //logo -->
				<!-- nav -->
				<div class="nav_web-dealingsls">
					<nav>
						<label for="drop" class="toggle">Menu</label>
						<input type="checkbox" id="drop" />
						<ul class="menu">
							<li><a href="{{ url('/trang-chu') }}">Trang chủ</a></li>
							<li><a href="about.html">Giới thiệu</a></li>
							<li>
								<!-- First Tier Drop Down -->
								<label for="drop-3" class="toggle toogle-2">Pages <span class="fa fa-angle-down"
										aria-hidden="true"></span>
								</label>
								<a href="#pages">Hỗ trợ <span class="fa fa-angle-down" aria-hidden="true"></span></a>
								<input type="checkbox" id="drop-3" />
								<ul>
									<li><a class="drop-text" href="#services">Dịch vụ</a></li>
									<li><a class="drop-text" href="#blog">Đánh giá</a></li>
									<li><a class="drop-text" href="login.html">Đăng nhập</a></li>
									<li><a class="drop-text" href="register.html">Đăng ký nhanh</a></li>
								</ul>
							</li>
							<li><a href="{{ url('/menu') }}">Thực đơn</a></li>
							<li><a href="contact.html">Liên hệ</a></li>
							
						</ul>
					</nav>
				</div>
				<!-- //nav -->
			</div>
		</div>
	</div>
	<!-- //navigation -->
	<!-- //header 2 -->







  @yield('content')












	<!-- footer -->
	<footer class="py-5">
		<div class="container py-xl-4">
			<div class="row footer-top">
				<div class="col-lg-4 footer-grid_section_1its footer-text">
					<!-- logo -->
					<h2>
						<a class="logo text-wh" href="{{ url('/trang-chu') }}">
							<img src="public/frontend/images/logo2.png" alt="" class="img-fluid"><span>24/7</span>Fasoo
						</a>
					</h2>
					<!-- //logo -->	
					
					<br><br/>
					<!-- social icons -->
					<ul class="top-right-info">
					<li>
						<p>Follow As:</p>
					</li>
					<li class="facebook-w3">
						<a href="#facebbok">
							<span class="fa fa-facebook-f"></span>
						</a>
					</li>
					<li class="twitter-w3">
						<a href="#twitter">
							<span class="fa fa-twitter"></span>
						</a>
					</li>
					<li class="google-w3">
						<a href="#google">
							<span class="fa fa-google-plus"></span>
						</a>
					</li>
					<li class="dribble-w3">
						<a href="#dribble">
							<span class="fa fa-dribbble"></span>
						</a>
					</li>
					</ul>
					<!-- //social icons -->
					

				</div>				



				<div class="col-lg-4 footer-grid_section_1its my-lg-0 my-sm-4 my-4">
					<div class="footer-title">
						<h3>Liên hệ chúng tôi</h3>
					</div>
					<div class="footer-text mt-4">
						<p>Địa chỉ : Số 164B, Phương Lưu 2, Đông Hải 1, Hải An, Hải Phòng</p>
						<p class="my-2">SĐT : 0345916099</p>
						<p>Email : <a href="mailto:info@example.com">hieuanhquangngoc02@gmail.com</a></p>
					</div>					
					<ul class="list-unstyled payment-links mt-4">
						<li>
							<a href="login.html"><img src="images/pay2.png" alt=""></a>
						</li>
						<li>
							<a href="login.html"><img src="images/pay5.png" alt=""></a>
						</li>
						<li>
							<a href="login.html"><img src="images/pay1.png" alt=""></a>
						</li>
						<li>
							<a href="login.html"><img src="images/pay4.png" alt=""></a>
						</li>
					</ul>
				</div>



				<div class="col-lg-4 footer-grid_section_1its">
					<div class="footer-title">
						<h3>Yêu cầu thông tin</h3>
					</div>
					<div class="info-form-right mt-4 p-0">
						<form action="#" method="post">
							<div class="row">
								<div class="col-lg-6 form-group mb-2 pr-lg-1">
									<input type="text" class="form-control" name="Name" placeholder="Tên" required="">
								</div>
								<div class="col-lg-6 form-group mb-2 pl-lg-1">
									<input type="text" class="form-control" name="Phone" placeholder="SĐT"
										required="">
								</div>
							</div>
							<div class="form-group mb-2">
								<input type="email" class="form-control" name="Email" placeholder="Email" required="">
							</div>
							<div class="form-group mb-2">
								<textarea name="Comment" class="form-control" placeholder="Bình luận"
									required=""></textarea>
							</div>
							<button type="submit" class="btn submit-contact ml-auto">Đồng ý</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- //footer -->





	<!-- copyright -->
	<div class="cpy-right text-center py-3">
		<p>© 2021 Fasoo 24/7 | Design by
			<a href="http://w3layouts.com"> W3layouts.</a>
			Edited by Huy&Long
		</p>
	</div>
	<!-- //copyright -->




    
	<!-- move top icon -->
	<a href="#home" class="move-top text-center">
		<span class="fa fa-level-up" aria-hidden="true"></span>
	</a>
	<!-- //move top icon -->

</body>

</html>