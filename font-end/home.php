<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <link rel="stylesheet" href="./libs/fontawesome-free-5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="./home.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
</head>

<body>

    <div class="container-fluid top-mot">
        <div class="row top-mot-content">
            <div class="col-12 top-bar">
                <ul>
                    <li>
                        <a href="tel:0935036595">
                            <i class="fas fa-phone-volume" style="font-size:16px; color: grey;line-height:30px;"></i>
                            <span style="font-size: 12px; vertical-align:1px;">0393912779</span>
                            <!-- vertical-align: cân chỉnh theo chiều dọc/text align: cân chỉnh chiều ngang-->
                        </a>
                    </li>
                    <li class="top-bar-1">
                        <a href="#">
                            <i class="fas fa-envelope" style="font-size: 16px; color: grey; line-height:30px ;"></i>
                            <span style="font-size: 13px; vertical-align:1px;">&nbsp;tamnmgcs18161@fpt.edu.vn</span>
                        </a>
                    </li>
                    <li class="top-bar-1">
                        <a href="#">
                            <i class="fas fa-sign-in-alt" style="font-size: 16px; color: grey; line-height:30px"></i>
                            <span style="font-size: 12px; vertical-align:1px;">&nbsp;Đăng ký / Đăng nhập</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <header>
        <div class="container-fluid top-hai">
            <div class="row top-hai-content">
                <div class="col-1 top-hai-item ">
                    <img src="img/logo.png" style="padding-left:25px; max-height: 76px;border-radius: 40%; display: block; width: auto; margin-top: 1px;">
                </div>
                <div class="col-9 top-haidrop-item ">
                    <ul>
                        <li><a style="color: rgba(243, 199, 3, 0.924);" href="./home.php">Trang Chủ</a></li>
                        <li><a href="./sanpham.php">Sản Phẩm</a></li>
                        <li><a href="#">Giỏ Hàng</a></li>
                    </ul>
                </div>
                <div class="col-2  top-hai-item-icon">
                    <ul>
                        <li>
                            <a href="#">
                                <i class="fa fa-search" style="font-size: 19px; line-height: 60px;"></i>
                            </a>
                        </li>
                        <li class="cart">
                            <a href="#">
                                <i class="fa fa-shopping-cart" style="font-size: 19px; line-height:70px;"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <section>
        <!-- img slider start -->
        <div class="khoi-slide">
            <div class="cac-slide">
                <!-- radio button start -->
                <input type="radio" name="radio-btn" id="radio1">
                <input type="radio" name="radio-btn" id="radio2">
                <!-- radio button end -->
                <!-- slide img start -->
                <div class="slide first">
                    <img src="./img/biatop1.jpg">
                </div>
                <div class="slide">
                    <img src="./img/biatop2.png">
                </div>
                <!-- slide img end -->
                <!-- automatic nav start -->
                <div class="navigation-auto">
                    <div class="auto-btn1"></div>
                    <div class="auto-btn2"></div>
                </div>
                <!-- automatic nav end -->
            </div>
            <!-- manual navigation start -->
            <div class="navigation-manual">
                <!--manual thủ công-->
                <label for="radio1" class="manual-btn"></label>
                <label for="radio2" class="manual-btn"></label>
            </div>
            <!-- manual navigation end -->
        </div>
    </section>
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="table col medium-4 small-11 large-4">
                    <i class="fas fa-shipping-fast"></i>
                    <div>
                        <h4>FREESHIP</h4>
                        <p>Giao hàng miễn phí nội thành TP.HCM.</p>
                    </div>
                </div>
                <div class="table col medium-4 small-11 large-4">
                    <i class="fas fa-share"></i>
                    <div>
                        <h4>HOÀN TIỀN 100%</h4>
                        <p>Hoàn tiền nếu phát hiện hàng giả, hoặc móp méo trong quá trình vận chuyển.</p>
                    </div>
                </div>
                <div class="table col medium-4 small-11 large-4">
                    <i class="fas fa-comments"></i>
                    <div>
                        <h4>HỖ TRỢ 24/7</h4>
                        <p>Chân dài phục vụ 24/7.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="about">
        <div class="container-fluid">
            <img src="./img/Logo2.png">
            <div class="sao1"><i class="fas fa-star sao"></i><i class="fas fa-star sao"></i><i class="fas fa-star sao"></i><i class="fas fa-star sao"></i><i class="fas fa-star sao"></i></div>
            <p><i class="fas fa-crown"></i> Shop chúng tôi luôn đoán chào quý khách/ Khách hàng là Thượng ĐẾ <i class="fas fa-crown"></i></p>
            <p>Chúng tôi luôn đề cao chất lượng sản phẩm hàng đầu</p>
            <p class="cart">Nổi Bật</p>
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 box-about-non">
                        <img src="./img/KINH DAY.png">
                        <p class="p1">Kinh dây</p>
                        <p class="p2">100,000 ₫</p>
                    </div>
                    <div class="col-lg-3 box-about-non">
                        <img src="./img/fullface3.jpg">
                        <p class="p1">Royal M138 V.3</p>
                        <p class="p2">1,500,000 ₫</p>
                    </div>
                    <div class="col-lg-3 box-about-non">
                        <img src="./img/3-4hai.jpg">
                        <p class="p1">Royal M2OC Design </p>
                        <p class="p2">590,000 ₫</p>
                    </div>
                    <div class="col-lg-3 box-about-non">
                        <img src="./img/fullface4.jpg">
                        <p class="p1">Royal M137</p>
                        <p class="p2">1,350,000 ₫</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="container-fluid">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 block-c-1">
                    <img src="./img/logo2.png" alt="logo" width="70px" height="50px">
                    <p>Shop chúng tôi là cửa hàng luôn xem quý khách là Thượng Đế / Shop chúng tôi chỉ cung cấp hàng chất lượng cao</p>
                    <i class="fab fa-facebook-f" style="background-color: #4267B2; padding: 5px 10px"></i>
                    <i class="fab fa-instagram" style="background-color: #3b6994; padding: 5px 8px;"></i>
                    <i class="fab fa-twitter" style="background-color: #2478ba; padding: 5px 5px;"></i>
                    <i class="fab fa-flickr" style="background-color: #e5086f; padding: 5px 7px;"></i>
                </div>
                <div class="col-lg-3 block-c-2">
                    <h5 style="color: #fff; margin-bottom: 10px;">Liên hệ</h5>
                    <div class="row">
                        <div class="col-lg-1"><i class="fa fa-map-marker"></i></div>
                        <div class="col-lg-10">123 hihi, Phường haha, Quận hehe, Tp.HCM</div>
                    </div>
                    <div class="row">
                        <div class="col-lg-1"><i class="fas fa-mobile-alt"></i></div>
                        <div class="col-lg-10">0393912779</div>
                    </div>
                    <div class="row">
                        <div class="col-lg-1"><i class="fa fa-envelope-open"></i></div>
                        <div class="col-lg-10">Tamnmgcs18161@fpt.edu.vn</div>
                    </div>
                </div>
                <div class="col-lg-3 block-c-3">
                    <h5 style="margin-bottom: 10px;">Hỗ trợ</h5>
                    <p>FAQ</p>
                    <p>Chăm sóc khách hàng</p>
                    <p>Vận chuyển và Đổi trả hàng</p>
                    <p>Liên hệ</p>
                </div>
                <div class="col-lg-3 block-c-4">
                    <h5 style="margin-bottom: 12px; padding-top:-43px;">Tin tức</h5>
                    <div class="row">
                        <div class="col-lg-4">
                            <img src="./img/blog1.jpg" alt="img">
                        </div>
                        <div class="col-lg-8">
                            <p class="sup">Đổi mũ bảo hiểm cũ lấy hỗ trợ 100K</p>
                            <div class="divider"></div>
                            <p class="sub">Shop có nhiều mũ đẹp...</p>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 20px;">
                        <div class="col-lg-4">
                            <img src="./img/blog3.jpg" alt="img">
                        </div>
                        <div class="col-lg-8">
                            <p class="sup">Đi phượt cần đem theo cái gì ?</p>
                            <div class="divider"></div>
                            <p class="sub">Hãy ghé shop tôi, tôi sẽ tư vấn...</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <!-- jquery auto img -->
    <script type="text/javascript">
        var counter = 1;
        setInterval(function() {
            document.getElementById('radio' + counter).checked = true;
            counter++;
            if (counter > 2) {
                counter = 1;
            }
        }, 10000);
    </script>
</body>

</html>