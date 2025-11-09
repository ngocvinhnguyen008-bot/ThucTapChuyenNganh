<!DOCTYPE HTML>
<html>
<head>
    <title>EnglishPro - Hệ Thống Học Tiếng Anh Trực Tuyến</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <base href="{{asset('public/')}}">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rokkitt:100,300,400,700" rel="stylesheet">

    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/ionicons.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/flexslider.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <div class="colorlib-loader"></div>

    <div id="page">
        <nav class="colorlib-nav" role="navigation">
            <div class="top-menu">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-7 col-md-9">
                            <div id="colorlib-logo"><a href="index.html">EnglishPro LMS</a></div>
                        </div>
                        <div class="col-sm-5 col-md-3">
                            <form action="#" class="search-wrap">
                                <div class="form-group">
                                    <input type="search" class="form-control search" placeholder="Tìm kiếm bài học...">
                                    <button class="btn btn-primary submit-search text-center" type="submit"><i
                                            class="icon-search"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 text-left menu-1">
                            <ul>
                                <li class="active"><a href="{{ route('home') }}">Trang Chủ</a></li>
                                <li class="has-dropdown">
                                    <a href="{{ route('men') }}">IELTS</a>
                                    <ul class="dropdown">
                                        <li><a href="{{ route('product') }}">Chi Tiết Khóa Học</a></li>
                                        <li><a href="{{ route('cart') }}">Bài Tập Đã Lưu</a></li>
                                        <li><a href="{{ route('checkout') }}">Thanh Toán Học Phí</a></li>
                                        <li><a href="{{ route('order') }}">Lịch Sử Đăng Ký</a></li>
                                        <li><a href="{{ route('add_to_wishlist') }}">Khóa Học Yêu Thích</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{ route('women') }}">TOEIC</a></li>
                                <li><a href="{{ route('about') }}">Về Chúng Tôi</a></li>
                                <li><a href="{{ route('contact') }}">Liên Hệ</a></li>
                                <li class="cart"><a href="{{ route('cart') }}"><i class="icon-book-open"></i>
                                        Tiến Độ
                                        [0]</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sale">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 offset-sm-2 text-center">
                            <div class="row">
                                <div class="owl-carousel2">
                                    <div class="item">
                                        <div class="col">
                                            <h3><a href="#">25% Giảm giá (Gần như) Mọi Khóa Học! Mã: SUMMER SALE</a>
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="col">
                                            <h3><a href="#">Ưu đãi lớn nhất: 50% giảm giá tất cả khóa Ngữ pháp</a></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        
        @yield('body')

        <footer id="colorlib-footer" role="contentinfo">
            <div class="container">
                <div class="row row-pb-md">
                    <div class="col footer-col colorlib-widget">
                        <h4>Về EnglishPro</h4>
                        <p>Chúng tôi cam kết cung cấp nguồn tài liệu và phương pháp giảng dạy chất lượng, được thiết kế cho chính người học.</p>
                        <p>
                        <ul class="colorlib-social-icons">
                            <li><a href="#"><i class="icon-twitter"></i></a></li>
                            <li><a href="#"><i class="icon-facebook"></i></a></li>
                            <li><a href="#"><i class="icon-linkedin"></i></a></li>
                            <li><a href="#"><i class="icon-dribbble"></i></a></li>
                        </ul>
                        </p>
                    </div>
                    <div class="col footer-col colorlib-widget">
                        <h4>Hỗ Trợ Học Viên</h4>
                        <p>
                        <ul class="colorlib-footer-links">
                            <li><a href="#">Liên Hệ</a></li>
                            <li><a href="#">Hoàn Tiền/Đổi Khóa Học</a></li>
                            <li><a href="#">Thẻ Quà Tặng</a></li>
                            <li><a href="#">Khóa Học Yêu Thích</a></li>
                            <li><a href="#">Ưu Đãi Đặc Biệt</a></li>
                            <li><a href="#">Dịch Vụ Khách Hàng</a></li>
                            <li><a href="#">Sơ Đồ Trang Web</a></li>
                        </ul>
                        </p>
                    </div>
                    <div class="col footer-col colorlib-widget">
                        <h4>Thông Tin</h4>
                        <p>
                        <ul class="colorlib-footer-links">
                            <li><a href="#">Về chúng tôi</a></li>
                            <li><a href="#">Thông tin giao hàng (Ebook)</a></li>
                            <li><a href="#">Chính sách Bảo mật</a></li>
                            <li><a href="#">Hỗ trợ Kỹ thuật</a></li>
                            <li><a href="#">Theo dõi Tiến độ</a></li>
                        </ul>
                        </p>
                    </div>

                    <div class="col footer-col">
                        <h4>Tin Tức & Blog</h4>
                        <ul class="colorlib-footer-links">
                            <li><a href="blog.html">Blog Học Tập</a></li>
                            <li><a href="#">Thông Cáo Báo Chí</a></li>
                            <li><a href="#">Sự Kiện & Hội Thảo</a></li>
                        </ul>
                    </div>

                    <div class="col footer-col">
                        <h4>Liên Hệ</h4>
                        <ul class="colorlib-footer-links">
                            <li>291 South 21th Street, <br> Suite 721 New York NY 10016 (Địa chỉ VP)</li>
                            <li><a href="tel://1234567920">+ 1235 2355 98 (Hotline)</a></li>
                            <li><a href="mailto:info@yoursite.com">support@englishpro.com</a></li>
                            <li><a href="#">englishpro.com</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="copy">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <p>
                            <span>Copyright &copy;
                                <script>
                                    document.write(new Date().getFullYear());
                                </script> Mọi quyền được bảo lưu | Template này được tạo bởi <i
                                        class="icon-heart" aria-hidden="true"></i> bởi <a href="https://colorlib.com"
                                        target="_blank">Colorlib</a>
                                </span>
                            <span class="block">Ảnh Demo: <a href="http://unsplash.co/"
                                        target="_blank">Unsplash</a>
                                , <a href="http://pexels.com/" target="_blank">Pexels.com</a></span>
                        </p>
                    </div>
                </div>
            </div>
        </footer>


    </div>

    <div class="gototop js-top">
        <a href="#" class="js-gotop"><i class="ion-ios-arrow-up"></i></a>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.flexslider-min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/magnific-popup-options.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/main.js"></script>

</body>

</html>