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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="./Detailcss.css">
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
                            <span style="font-size: 13px; vertical-align:1px;">&nbsp;tamnmgcs18161</span>
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
        <div class="container-fluid product">
            <div class="row" style="text-align: center; margin-left:40%;">
                <h2><strong> Chi Tiết Sản Phẩm</strong></h2>
            </div>
            <div class="now product3">
                <?php
                include "./connect_data.php";
                $ProID = $_GET['proID']; //tạo biến này để lấy cái get trên URL chỗ view xuống
                $sql = "SELECT * FROM product WHERE proID = '$ProID' ";
                $result =  $conn->query($sql);
                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                    <div class="content-detail" style="margin-top: 20px;">
                        <img style="width:300px;" src="<?php echo( "../back-end/imgAdd/"  .$row["proImage"]); ?>" /> <!--nối chuỗi trong php là dấu chấm-->
                        <!--ngay chỗ (./img) là bơi vì mình để ở floder khác nên nhúng như vậy hiện img lên-->
                        <div class="content">
                            <h2 style="font-weight: bold;"><?php echo $row["proName"]; ?></h2>
                            <p><strong>Mô tả : </strong><?php echo $row["proDesc"]; ?></p>
                            <p><strong>Sản xuất : </strong><?php echo $row["proMadeIn"]; ?></p>
                            <p><strong>Số lượng :</strong> <?php if($row["number"] > 0) { echo "còn hàng";}else{echo"Hết hàng";} ?></p>
                            <h3 style="color:rgb(206, 152, 4)"><strong>Giá: </strong><?php echo $row["proCost"]; ?>VNĐ</h3>
                            <button class=" btn Buy"><a href="cart.php?view=cart&proID=<?php echo $row["proID"] ?>">Buy</a></button>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </section>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>