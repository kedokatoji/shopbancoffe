<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    {{--    SEO--}}
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{--    <meta name="description" content="{{$meta_desc}}">--}}
    {{--    <meta name="keywords" content="{{$meta_keywords}}">--}}
    <meta name="robots" content="INDEX,FOLLOW">
    <meta name="author" content="">

    <title>QN Coffee</title>
    <link rel="canonical" href="http://localhost/shopBanCafe/">
    <link rel="icon" type="image/x-icon" href="">
    {{--    End SEO--}}
    <link href="{{asset('public/frontend/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/price-range.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/main.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/responsive.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/sweetalert.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/style.css')}}" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="{{asset('/public/frontend/js/html5shiv.js')}}"></script>
    <script src="{{asset('/public/frontend/js/respond.min.js')}}"></script>
    <![endif]-->
    <link rel="shortcut icon" href="{{('public/frontend/images/favicon.ico')}}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144"
        href="{{('public/frontend/images/apple-touch-icon-144-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114"
        href="{{('public/frontend/images/apple-touch-icon-114-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72"
        href="{{('public/frontend/images/apple-touch-icon-72-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" href="{{('public/frontend/images/apple-touch-icon-57-precomposed.png')}}">
</head>
<!--/head-->

<body>

    <header id="header">
        <!--header-->
        <div class="header_top">
            <!--header_top-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="contactinfo">
                            <ul class="nav nav-pills">
                                <li><a href="#"><i class="fa fa-phone"></i> 098.1010.431 - 034.2831.601</a></li>
                                <!-- <li><a href="#"><i class="fa fa-envelope"></i> i2nfo@domain.com</a></li> -->
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="social-icons pull-right">
                            <ul class="nav navbar-nav">
                                <!-- <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li> -->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/header_top-->

        <div class="header-middle">
            <!--header-middle-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="logo pull-left">
                            <a href="{{URL::to('/trang-chu')}}"><img src="{{('public/frontend/images/logo2.png')}}"
                                    alt="" /></a>
                        </div>
                        <div class="btn-group pull-right">
                            <!-- <div class="btn-group">
                                <button type="button" class="btn btn-default dropdown-toggle usa"
                                    data-toggle="dropdown">
                                    USA
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Canada</a></li>
                                    <li><a href="#">UK</a></li>
                                </ul>
                            </div> -->

                            <!-- <div class="btn-group">
                                <button type="button" class="btn btn-default dropdown-toggle usa"
                                    data-toggle="dropdown">
                                    DOLLAR
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Canadian Dollar</a></li>
                                    <li><a href="#">Pound</a></li>
                                </ul>
                            </div> -->
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="shop-menu pull-right">
                            <ul class="nav navbar-nav">
                                <li><a href="{{URL::to('/login-checkout')}}"><i class="fa fa-user"></i> Tài khoản</a>
                                </li>

                                <?php
                            $customer_id = Session::get('customer_id');
                            $shipping_id = Session::get('shipping_id');
                            if ($customer_id != null && $shipping_id == null) {
                                ?>
                                <li><a href="{{URL::to('/checkout')}}"><i class="fa fa-crosshairs"></i> Thanh toán</a>
                                    <!-- <li><a href="{{URL::to('/checkout')}}">
                                        <<i class="fa-solid fa-credit-card"></i> Thanh toán
                                    </a>
                                </li> -->
                                    <?php
                            } else if ($customer_id != null && $shipping_id != null) {
                                ?>
                                <li><a href="{{URL::to('/payment')}}"><i class="fa fa-crosshairs"></i> Thanh toán</a>
                                </li>
                                <?php
                            } else {
                                ?>
                                <li><a href="{{URL::to('/login-checkout')}}"><i class="fa fa-crosshairs"></i> Thanh
                                        toán</a></li>
                                <?php

                            }
                            ?>

                                <li><a href="{{URL::to('/gio-hang')}}"><i class="fa fa-shopping-cart"></i> Giỏ hàng</a>
                                </li>

                                <?php
                            $customer_id = Session::get('customer_id');
                            if ($customer_id != null) {
                                ?>
                                <li><a href="{{URL::to('/logout-checkout')}}"><i class="fa fa-lock"></i> Đăng xuất</a>
                                </li>
                                <?php
                            } else {
                                ?>
                                <li><a href="{{URL::to('/login-checkout')}}"><i class="fa fa-lock"></i> Đăng nhập</a>
                                </li>
                                <?php
                            }
                            ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/header-middle-->

        <div class="header-bottom">
            <!--header-bottom-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-8">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse"
                                data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="mainmenu pull-left">
                            <ul class="nav navbar-nav collapse navbar-collapse">
                                <li><a href="{{URL::to('/trang-chu')}}" class="active">Trang chủ</a></li>
                                <li class="dropdown"><a href="#">Sản phẩm<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="shop.html">Products</a></li>

                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Tin tức<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="blog.html">Blog List</a></li>
                                    </ul>
                                </li>
                                <li><a href="404.html">Giỏ hàng</a></li>
                                <li><a href="contact-us.html">Liên hệ</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <form action="{{URL::to('/tim-kiem')}}" method="post">
                            {{csrf_field()}}
                            <div class="search_box pull-right">
                                <input type="text" name="keywords_submit" placeholder="Tìm kiếm sản phẩm" />
                                <input type="submit" name="search_item" class="btn btn-info" value="Tìm kiếm" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--/header-bottom-->
    </header>
    <!--/header-->

    <section id="slider">
        <!--slider-->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#slider-carousel" data-slide-to="1"></li>
                            <li data-target="#slider-carousel" data-slide-to="2"></li>
                        </ol>

                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="col-sm-6">
                                    <h1><span>Matcha</span>-Đá xay</h1>
                                    <h2>Bánh và matcha đá xay</h2>
                                    <p>Là sự kết hợp hài hòa giữa vị ngọt ngào của bánh và vị đắng nhẹ của matcha. Thức
                                        uống này mang đến cảm giác sảng khoái, kích thích vị giác. </p>
                                    <button type="button" class="btn btn-default get">Mua ngay</button>
                                </div>
                                <div class="col-sm-6">
                                    <img src="{{('public/frontend/images/cafe_3.jpg')}}" class="girl img-responsive"
                                        alt="" />
                                    <!-- <img src="{{('public/frontend/images/girl1.jpg')}}" class="girl img-responsive"
                                        alt="" /> -->
                                    <!-- <img src="{{('public/frontend/images/pricing.png')}}" class="pricing" alt="" /> -->
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-sm-6">
                                    <h1><span>Socola</span>-Kem</h1>
                                    <h2>Kem các vị</h2>
                                    <p> Là món ăn thơm ngon, ngọt ngào, mang đến cảm giác mát lạnh, sảng khoái. Kem có
                                        nhiều hương vị khác nhau, phù hợp với khẩu vị của mọi người. </p>
                                    <button type="button" class="btn btn-default get">Mua ngay</button>
                                </div>
                                <div class="col-sm-6">
                                    <img src="{{('public/frontend/images/cafe_2.jpg')}}" class="girl img-responsive"
                                        alt="" />
                                    <!-- <img src="{{('public/frontend/images/girl2.jpg')}}" class="girl img-responsive"
                                        alt="" /> -->
                                    <!-- <img src="{{('public/frontend/images/pricing.png')}}" class="pricing" alt="" /> -->
                                </div>
                            </div>

                            <div class="item">
                                <div class="col-sm-6">
                                    <h1><span>Quả mộng</span>-Anh đào</h1>
                                    <h2>Trà quả mọng anh đào</h2>
                                    <p>Là sự kết hợp hoàn hảo giữa vị trà đậm đà, vị quả mọng chua ngọt và đài quả giòn
                                        giòn. Thức uống này mang đến hương vị tươi mát, sảng khoái, thích hợp cho những
                                        ngày hè. </p>
                                    <button type="button" class="btn btn-default get">Mua ngay</button>
                                </div>
                                <div class="col-sm-6">
                                    <img src="{{('public/frontend/images/cafe_1.jpg')}}" class="girl img-responsive"
                                        alt="" />
                                    <!-- <img src="{{('public/frontend/images/girl3.jpg')}}" class="girl img-responsive"
                                        alt="" /> -->
                                    <!-- <img src="{{('public/frontend/images/pricing.png')}}" class="pricing" alt="" /> -->
                                </div>
                            </div>

                        </div>

                        <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--/slider-->

    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="left-sidebar">
                        <h2>THỰC ĐƠN</h2>
                        <div class="panel-group category-products" id="accordian">
                            <!--category-productsr-->
                            @foreach($category as $key => $value)

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a
                                            href="{{URL::to('/danh-muc-san-pham/'.$value->category_id)}}">{{$value->category_name}}</a>
                                    </h4>
                                </div>
                            </div>
                            @endforeach


                        </div>
                        <!--/category-products-->

                        {{--                    <div class="brands_products"><!--brands_products-->--}}
                        {{--                        <h2>Brands</h2>--}}
                        {{--                        <div class="brands-name">--}}
                        {{--                            <ul class="nav nav-pills nav-stacked">--}}
                        {{--                                <li><a href="#"> <span class="pull-right">(50)</span>Acne</a></li>--}}
                        {{--                                <li><a href="#"> <span class="pull-right">(56)</span>Grüne Erde</a></li>--}}
                        {{--                                <li><a href="#"> <span class="pull-right">(27)</span>Albiro</a></li>--}}
                        {{--                                <li><a href="#"> <span class="pull-right">(32)</span>Ronhill</a></li>--}}
                        {{--                                <li><a href="#"> <span class="pull-right">(5)</span>Oddmolly</a></li>--}}
                        {{--                                <li><a href="#"> <span class="pull-right">(9)</span>Boudestijn</a></li>--}}
                        {{--                                <li><a href="#"> <span class="pull-right">(4)</span>Rösch creative culture</a></li>--}}
                        {{--                            </ul>--}}
                        {{--                        </div>--}}
                        {{--                    </div><!--/brands_products-->--}}

                        {{--                    <div class="price-range"><!--price-range-->--}}
                        {{--                        <h2>Price Range</h2>--}}
                        {{--                        <div class="well text-center">--}}
                        {{--                            <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />--}}
                        {{--                            <b class="pull-left">$ 0</b> <b class="pull-right">$ 600</b>--}}
                        {{--                        </div>--}}
                        {{--                    </div><!--/price-range-->--}}

                        <div class="shipping text-center">
                            <!--shipping-->
                            <img src="images/home/shipping.jpg" alt="" />
                        </div>
                        <!--/shipping-->

                    </div>
                </div>

                <div class="col-sm-9 padding-right">
                    @yield('content')

                </div>
            </div>
        </div>
    </section>

    <footer id="footer">
        <!--Footer-->
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-sm-2">
                        <div class="companyinfo">
                            <h2><span>QN</span> - COFFEE</h2>
                            <p>Cafe Chất - Chất Lượng làm nên Thương Hiệu!</p>
                        </div>
                    </div>
                    <div class="col-sm-7">
                        <div class="col-sm-3">
                            <div class="video-gallery text-center">
                                <a href="#">
                                    <div class="iframe-img">
                                        <img src="{{('public/frontend/images/char_1.png')}}" alt="" />
                                        <!-- <img src="{{('public/frontend/images/iframe1.png')}}" alt="" /> -->
                                    </div>
                                    <div class="overlay-icon">
                                        <i class="fa fa-play-circle-o"></i>
                                    </div>
                                </a>
                                <p>Huỳnh Nhật Quang</p>
                                <h2>Đồng sáng lập</h2>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="video-gallery text-center">
                                <a href="#">
                                    <div class="iframe-img">
                                        <img src="{{('public/frontend/images/char_2.png')}}" alt="" />
                                        <!-- <img src="{{('public/frontend/images/iframe2.png')}}" alt="" /> -->
                                    </div>
                                    <div class="overlay-icon">
                                        <i class="fa fa-play-circle-o"></i>
                                    </div>
                                </a>
                                <p>Mai Phương Nam</p>
                                <h2>Đồng Sáng Lập</h2>
                            </div>
                        </div>

                        <!-- <div class="col-sm-3">
                            <div class="video-gallery text-center">
                                <a href="#">
                                    <div class="iframe-img">
                                        <img src="{{('public/frontend/images/iframe3.png')}}" alt="" />
                                    </div>
                                    <div class="overlay-icon">
                                        <i class="fa fa-play-circle-o"></i>
                                    </div>
                                </a>
                                <p>Circle of Hands</p>
                                <h2>24 DEC 2014</h2>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="video-gallery text-center">
                                <a href="#">
                                    <div class="iframe-img">
                                        <img src="{{('public/frontend/images/iframe4.png')}}" alt="" />
                                    </div>
                                    <div class="overlay-icon">
                                        <i class="fa fa-play-circle-o"></i>
                                    </div>
                                </a>
                                <p>Circle of Hands</p>
                                <h2>24 DEC 2014</h2>
                            </div>
                        </div> -->
                    </div>
                    <div class="col-sm-3">
                        <div class="address">
                            <img src="{{URL::to('/public/frontend/images/map_1.png')}}" alt="" />

                            <p>TP. Đà Nẵng</p>
                            <!-- <img src="{{URL::to('/public/frontend/images/map.png')}}" alt="" />
                            <p>505 S Atlantic Ave Virginia Beach, VA(Virginia)</p> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-widget">
            <div class="container">
                <div class="row">
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>Về chúng tôi</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">Nhật Quang</a></li>
                                <li><a href="#">Phương Nam</a></li>
                                <li><a href="#">Ý tưởng đồ án</a></li>
                                <!-- <li><a href="#">Change Location</a></li>
                                <li><a href="#">FAQ’s</a></li> -->
                            </ul>
                        </div>
                    </div>
                    <!-- <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>Quock Shop</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">T-Shirt</a></li>
                                <li><a href="#">Mens</a></li>
                                <li><a href="#">Womens</a></li>
                                <li><a href="#">Gift Cards</a></li>
                                <li><a href="#">Shoes</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>Policies</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">Terms of Use</a></li>
                                <li><a href="#">Privecy Policy</a></li>
                                <li><a href="#">Refund Policy</a></li>
                                <li><a href="#">Billing System</a></li>
                                <li><a href="#">Ticket System</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>About Shopper</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">Company Information</a></li>
                                <li><a href="#">Careers</a></li>
                                <li><a href="#">Store Location</a></li>
                                <li><a href="#">Affillate Program</a></li>
                                <li><a href="#">Copyright</a></li>
                            </ul>
                        </div>
                    </div> -->
                    <div class="col-sm-3 col-sm-offset-1">
                        <div class="single-widget">
                            <h2>nhận thông tin từ QN Coffee</h2>
                            <form action="#" class="searchform">
                                <input type="text" placeholder="Nhập Email của bạn" />
                                <button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i>
                                </button>
                                <p>Xin vui lòng để lại email để nhận <br />các ưu đãi và khuyến mãi trong tương lai!
                                </p>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <p class="pull-left">Copyright © 2023 QN-COFFEE Inc. All rights reserved.</p>
                    <p class="pull-right">Designed by <span><a target="_blank"
                                href="https://www.facebook.com/nhatquang.idol19/">Quang -
                                Nam</a></span></p>
                </div>
            </div>
        </div>

    </footer>
    <!--/Footer-->


    <script src="{{asset('public/frontend/js/jquery.js')}}"></script>
    <script src="{{asset('public/frontend/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('public/frontend/js/jquery.scrollUp.min.js')}}"></script>
    <script src="{{asset('public/frontend/js/price-range.js')}}"></script>
    <script src="{{asset('public/frontend/js/jquery.prettyPhoto.js')}}"></script>
    <script src="{{asset('public/frontend/js/main.js')}}"></script>
    <script src="{{asset('public/frontend/js/sweetalert.min.js')}}"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v18.0"
        nonce="S4RDsYbI"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        $('.add-to-cart').click(function() {
            var id = $(this).data('id_product');
            var cart_product_id = $('.cart_product_id_' + id).val();
            var cart_product_name = $('.cart_product_name_' + id).val();
            // alert(cart_product_name + cart_product_id);
            var cart_product_image = $('.cart_product_image_' + id).val();
            var cart_product_price = $('.cart_product_price_' + id).val();
            var cart_product_qty = $('.cart_product_qty_' + id).val();
            var _token = $('input[name="_token"]').val();

            let data = {
                cart_product_id: cart_product_id,
                cart_product_name: cart_product_name,
                cart_product_image: cart_product_image,
                cart_product_price: cart_product_price,
                cart_product_qty: cart_product_qty,
                _token: _token
            }
            console.log(data);
            $.ajax({
                url: '{{url(' / add - cart - ajax ')}}',
                method: 'POST',
                data: {
                    cart_product_id: cart_product_id,
                    cart_product_name: cart_product_name,
                    cart_product_image: cart_product_image,
                    cart_product_price: cart_product_price,
                    cart_product_qty: cart_product_qty,
                    _token: _token
                },
                success: function(data) {

                    swal({
                            title: "Đã thêm sản phẩm vào giỏ hàng",
                            text: "Bạn có thể mua hàng tiếp hoặc tới giỏ hàng để tiến hành thanh toán",
                            showCancelButton: true,
                            cancelButtonText: "Xem tiếp",
                            confirmButtonClass: "btn-success",
                            confirmButtonText: "Đi đến giỏ hàng",
                            closeOnConfirm: false
                        },
                        function() {
                            window.location.href = "{{url('gio-hang')}}";
                        });

                },
                error: (e) => {
                    swal(e);
                }

            });
        });
    });
    </script>

</body>

</html>