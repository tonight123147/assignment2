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
            margin-left: 110px;
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

<body>
    <?php
    include "./connect_data.php";
    ?>

    <div class="form-add">
        <div class="bgimg" style=" background-image: url('./imgAdmin/bg1.5.png');">
            <form method="post" action="Xu-li-new-product.php" enctype="multipart/form-data" class="form">
                <table cellpadding="9px;">
                    <th colspan="2"><span style="font-size: 30px;">Thêm Sản Phẩm</span></th>
                    <tr>
                        <td >Tên sản phẩm: </td>
                        <td><input type="text" name="proName" style="width: 230px; height:20px" required /></td>
                    </tr>
                    <tr>
                        <td>Chọn file ảnh</td>
                        <td><input type="file" name="proImage" style="width: 230px; height:20px" required/></td>
                    </tr>
                    <tr>
                        <td>Mô tả: </td>
                        <td><textarea type="text" name="proDesc" style="min-height: 60px;max-height: 100px; min-width: 230px;max-width:230px" required></textarea></td>
                    </tr>
                    <tr>
                        <td>Sản xuất: </td>
                        <td><input type="text" name="proMadeIn" style="width: 230px;height:20px" required></td>
                    </tr>
                    <tr>
                        <td>Giá: </td>
                        <td><input type="text" name="proCost" style="width: 230px;height:20px" required></td>
                    </tr>
                    <tr>
                        <td>Số lượng: </td>
                        <td><input type="text" name="number" style="width: 230px;height:20px" required></td>
                    </tr>
                    <tr>
                        <td>Mã loại: </td>
                        <td><select name="proCateID" style="width: 150px;height:20px"> <!--NAME này ghi dì cũng đc-->
                                <?php
                                $sql = "SELECT cateID, cateName FROM category";
                                $result = $conn->query($sql);
                                while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                    <option value="<?php echo $row["cateID"]; ?>"><?php echo ($row["cateID"] . " - " . $row["cateName"]); ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="hidden" name="proID"></td> <!--hàm này để nó sẽ làm cái ID này tự tăng theo cái mysql đã cho cái ID auto-primkey-->
                    </tr>
                    <tr>
                        <td colspan="2" align="center"><input type="submit" name="submit" style="width: 90px;margin-left:34px ;cursor: pointer" id="submit" value="Thêm"></td>
                    </tr>
                </table>
            </form>
        </div>
        </br>
        </br>
        <a href="Manage-product.php" style="text-decoration: none; margin-left: 220px; position:absolute;margin-top:480px;color:goldenrod;"><i class="fas fa-arrow-circle-left"></i><b> Trang Quản Lý Sản Phẩm</b></a>
    </div>

</body>

</html>