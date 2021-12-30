<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Untitled Document</title>
    <link rel="stylesheet" href="./libs/fontawesome-free-5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <style>
        .form-add {
            position: absolute;
            top: 6%;
            left: 27%;
            border: 2px solid black;
            width: 600px;
            height: 550px;
            background: burlywood;
            color: white;
            font-weight: bold;
        }

        .form {
            margin-left: 100px;
            margin-top: 5px;
        }

        body {
            background: grey;
        }

        td {
            font-size: 20px
        }

        .bgimg {
            width: 600px;
            height: 550px;
            background-image: none;
            background-repeat: no-repeat;
            background-position: center center;
            background-size: cover;
            position: absolute;
        }
    </style>
</head>
</head>

<body>

    <?php
    include "./connect_data.php";
    $ProID = $_GET['proID'];
    $sql = "SELECT * FROM product WHERE proID = '$ProID'";
    $result = $conn->query($sql);
    while ($row = mysqli_fetch_assoc($result)) {
    ?>
        <div class="form-add">
            <div class="bgimg" style=" background-image: url('./imgAdmin/bg1.5.png');">
                <form method="post" action="Xu-li-edit-product.php" enctype="multipart/form-data" class="form">
                    <table cellpadding="6px;">
                        <th colspan="2"><span style="font-size: 30px;">Sửa Sản Phẩm</span></th>

                        <tr>
                            <td>Tên sản phẩm: </td>
                            <td><input type="text" name="proName" style="width: 230px; height:20px" value="<?php echo $row["proName"]; ?>" /></td>
                        </tr>
                        <tr>
                            <td>Chọn file ảnh</td>
                            <td><input type="file" name="proImage" style="width: 230px; " /></td>
                        </tr>
                        <tr>
                            <td>Mô tả: </td>
                            <td><textarea type="text" name="proDesc" style="min-height: 60px;max-height: 100px; min-width: 230px;max-width:230px;"><?php echo $row["proDesc"]; ?></textarea></td> <!---->
                        </tr>
                        <tr>
                            <td>Sản xuất tại: </td>
                            <td><input type="text" name="proMadeIn" style="width: 230px; height:20px" value="<?php echo $row["proMadeIn"]; ?>"></td>
                        </tr>
                        <tr>
                            <td>Giá: </td>
                            <td><input type="text" name="proCost" style="width: 230px; height:20px" value="<?php echo $row["proCost"]; ?>"></td>
                        </tr>
                        <tr>
                            <td>Số lượng: </td>
                            <td><input type="text" name="number" style="width: 230px; height:20px" value="<?php echo $row["number"]; ?>"></td>
                        </tr>
                        <tr>
                            <!-- này phải để xuống dưới mới được-->
                            <td>Mã loại: </td>
                            <td>
                                <select name="proCateID">
                                    <?php
                                    $sql1 = "SELECT cateID, cateName FROM category";
                                    $result1 = $conn->query($sql1);
                                    while ($row1 = mysqli_fetch_assoc($result1)) {
                                        if ($row1["cateID"] == $row["proCateID"]) {
                                    ?>
                                        <option selected value="<?php echo $row1["cateID"] ?>"><?php echo ($row1["cateID"] . " - " . $row1["cateName"]); ?></option>
                                    <?php 
                                        } else {
                                    ?>
                                        <option value="<?php echo $row1["cateID"] ?>"><?php echo ($row1["cateID"] . " - " . $row1["cateName"]); ?></option>
                                    <?php
                                        }
                                    }
                                    ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Hiển thị: </td>
                            <td><input type="checkbox" name="check" <?php echo $row["isShow"] ?>></td>
                        </tr>
                        <tr>
                            <td><input type="hidden" name="proID" value="<?php echo $row["proID"]; ?>"></td>
                            <!--đẻ lấy proID qua xử lý-->
                        </tr>
                        <tr>
                            <td colspan="2" align="center"><input type="submit" name="submit" style="width: 95px; height:25px; cursor: pointer" id="submit" value="Cập nhật"></td>
                        </tr>
                    </table>
                </form>
                </br>
                </br>
                <a href="Manage-product.php" style="text-decoration: none; margin-left: 200px; position:absolute;margin-top:-30px;color:goldenrod;"><i class="fas fa-arrow-circle-left"></i><b> Trang Quản Lý Sản Phẩm</b></a>
            </div>
        </div>
    <?php
    }
    ?>

</body>

</html>