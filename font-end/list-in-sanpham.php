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
    <link rel="stylesheet" href="./list-sanpham.css">
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
                            <span style="font-size: 13px; vertical-align:1px;">&nbsp;Tamnmgcs18161@fpt.edu.vn</span>
                        </a>
                    </li>
                    <li class="top-bar-1">
                        <a href="./user/sign-up.php">
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
                        <li><a href="./home.php">Trang Chủ</a></li>
                        <li><a style="color: rgba(243, 199, 3, 0.924);" href="./sanpham.php">Sản Phẩm</a></li><!--sty color này sẽ thây dổi màu chữ khi mình click và nó-->
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
        <div class="container-fluid">
            <div class="row" style="text-align: center; margin-left:44%;">
                <h2><strong>Sản Phẩm</strong></h2>
            </div>
            <div class="row product2">
                <?php
                include "./connect_data.php";
                $sql = "SELECT * FROM category WHERE isShow = 'checked'";
                $result = $conn->query($sql);
                echo "<ul>";
                while ($row = mysqli_fetch_assoc($result)) {
                    if($row['cateID'] == ($_GET['cateID'])) { //get ghi cái name nó giống cái name trên url chỗ giấu nháy (view=list&"cateID") và hàm if đó là sẽ ss từ cái name bên table Mydata và cái get từ cái URL 
                ?>
                    <li><a href="list-in-sanpham.php?view=list&cateID=<?php echo $row["cateID"]; ?>" style="color: rgba(243, 199, 3, 0.924);" ><?php echo $row['cateName']; ?></a></li>

                <?php 
                    } else {
                ?>
                     <li><a href="list-in-sanpham.php?view=list&cateID=<?php echo $row["cateID"]; ?>"><?php echo $row['cateName']; ?></a></li>
                <?php
                    }
                }
                echo "</ul>";
                ?>

            </div>
            <div class="now product3">
                <?php
                $CateID = $_GET["cateID"];
				// $sql = "SELECT * FROM category WHERE cateID = '$CateID'";
				// $result = $conn->query($sql);
				// $name = "none";
				$query = "SELECT * FROM product WHERE proCateID = '$CateID' AND isShow = 'checked'";
				$result = $conn->query($query);
                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                    <div class="col-12 col-sm-6 col-md-4 p-2">
                        <div class="img-center">
                            <div class="text-center">
                                <img style="width:150px;" src="<?php echo ("../back-end/imgAdd/" . $row["proImage"]); ?>" />
                                <!--ngay chỗ (./img) là bơi vì mình để ở floder khác nên nhúng như vậy hiện img lên-->
                            </div>
                            <div class="caption">
                                <h4><?php echo $row["proName"]; ?></h4>
                                <h5><?php echo $row["proCost"]; ?>VNĐ</h5>
                                <button class=" btn btn-costs"><a href="Detail-sanpham.php?view=detail&proID=<?php echo $row["proID"]; ?>">Detail</a></button>
                                <button class=" btn Buy"><a href="cart.php?view=cart&proID=<?php echo $row["proID"] ?>">Buy</a></button>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
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
                            <img src="./img/blog1.png" alt="img">
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
</body>

</html>