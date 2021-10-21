@extends('welcome')
@section('content')


<!-- page details -->
<div class="breadcrumb-agile bg-light py-2">
    <ol class="breadcrumb bg-light m-0">
        <li class="breadcrumb-item">
            <a href="{{ url('/trang-chu') }}">Trang chủ</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">Thực đơn</li>
    </ol>
</div>
<!-- //page details -->

<!-- menu -->
<section class="portfolio py-5">
    <div class="container py-xl-5 py-lg-3">
        <div class="title-section text-center mb-md-5 mb-4">
            <h3 class="w3ls-title mb-3"><span>Thực đơn</span></h3>
        </div>
        <div class="row mt-4">
            <div class="col-md-4">
                <div class="gallery-demo">
                    <a href="#gal1">
                        <img src="public/frontend/images/blog1.jpg" alt=" " class="img-fluid" />
                        <h4 class="p-mask">Phô mai chiên - <span>30.000đ</span></h4>
                    </a>
                </div>
            </div>
            <div class="col-md-4 mt-md-0 mt-4">
                <div class="gallery-demo">
                    <a href="#gal2">
                        <img src="public/frontend/images/blog2.jpg" alt=" " class="img-fluid" />
                        <h4 class="p-mask">Khoai tây chiên - <span>20.000đ</span></h4>
                    </a>
                </div>
            </div>
            <div class="col-md-4 mt-md-0 mt-4">
                <div class="gallery-demo">
                    <a href="#gal3">
                        <img src="public/frontend/images/blog3.jpg" alt=" " class="img-fluid" />
                        <h4 class="p-mask">Trà sữa - <span>15.000đ</span></h4>
                    </a>
                </div>
            </div>
        </div>
        <div class="row mt-md-5">
            <div class="col-md-4 mt-md-0 mt-4">
                <div class="gallery-demo">
                    <a href="#gal4">
                        <img src="public/frontend/images/g1.jpg" alt=" " class="img-fluid" />
                        <h4 class="p-mask">Kem matcha - <span>15.000đ</span></h4>
                    </a>
                </div>
            </div>
            <div class="col-md-4 mt-md-0 mt-4">
                <div class="gallery-demo">
                    <a href="#gal5">
                        <img src="public/frontend/images/g2.jpg" alt=" " class="img-fluid" />
                        <h4 class="p-mask">Đùi gà - <span>25.000đ</span></h4>
                    </a>
                </div>
            </div>
            <div class="col-md-4 mt-md-0 mt-4">
                <div class="gallery-demo">
                    <a href="#gal6">
                        <img src="public/frontend/images/g3.jpg" alt=" " class="img-fluid" />
                        <h4 class="p-mask">Sữa chua giầm trái cây - <span>15.000đ</span></h4>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- gallery model-->
<!-- gallery popup 1 -->
<div id="gal1" class="pop-overlay">
    <div class="popup">
        <img class="img-fluid" src="public/frontend/images/blog1.jpg" alt="">
        <h4 class="p-mask">Phô mai chiên - - <span>30.000đ</span></h4>
        <a href="login.html" class="button-w3ls active mt-3">Đặt hàng
            <span class="fa fa-caret-right ml-1" aria-hidden="true"></span>
        </a>
        <a class="close" href="#gallery">×</a>
    </div>
</div>
<!-- //gallery popup 1 -->


<!-- gallery popup 2 -->
<div id="gal2" class="pop-overlay">
    <div class="popup">
        <img class="img-fluid" src="public/frontend/images/blog2.jpg" alt="">
        <h4 class="p-mask">Khoai tây chiên - <span>$16</span></h4>
        <a href="login.html" class="button-w3ls active mt-3">Đặt hàng
            <span class="fa fa-caret-right ml-1" aria-hidden="true"></span>
        </a>
        <a class="close" href="#gallery">×</a>
    </div>
</div>
<!-- //gallery popup 2 -->


<!-- gallery popup 3 -->
<div id="gal3" class="pop-overlay">
    <div class="popup">
        <img class="img-fluid" src="public/frontend/images/blog3.jpg" alt="">
        <h4 class="p-mask">Trà sữa - <span>$18</span></h4>
        <a href="login.html" class="button-w3ls active mt-3">Đặt hàng
            <span class="fa fa-caret-right ml-1" aria-hidden="true"></span>
        </a>
        <a class="close" href="#gallery">×</a>
    </div>
</div>
<!-- //gallery popup 3 -->


<!-- gallery popup 4 -->
<div id="gal4" class="pop-overlay">
    <div class="popup">
        <img class="img-fluid" src="ipublic/frontend/images/g1.jpg" alt="">
        <h4 class="p-mask">Cheese Burger - <span>$20</span></h4>
        <a href="login.html" class="button-w3ls active mt-3">Order Now
            <span class="fa fa-caret-right ml-1" aria-hidden="true"></span>
        </a>
        <a class="close" href="#gallery">×</a>
    </div>
</div>
<!-- //gallery popup 4 -->


<!-- gallery popup 5 -->
<div id="gal5" class="pop-overlay">
    <div class="popup">
        <img class="img-fluid" src="public/frontend/images/g2.jpg" alt="">
        <h4 class="p-mask">Chicken Burger - <span>$22</span></h4>
        <a href="login.html" class="button-w3ls active mt-3">Order Now
            <span class="fa fa-caret-right ml-1" aria-hidden="true"></span>
        </a>
        <a class="close" href="#gallery">×</a>
    </div>
</div>
<!-- //gallery popup 5 -->


<!-- gallery popup 6 -->
<div id="gal6" class="pop-overlay">
    <div class="popup">
        <img class="img-fluid" src="public/frontend/images/g3.jpg" alt="">
        <h4 class="p-mask">Veg Burger - <span>$16</span></h4>
        <a href="login.html" class="button-w3ls active mt-3">Order Now
            <span class="fa fa-caret-right ml-1" aria-hidden="true"></span>
        </a>
        <a class="close" href="#gallery">×</a>
    </div>
</div>
<!-- //gallery popup 6 -->


<!-- //menu -->




@endsection