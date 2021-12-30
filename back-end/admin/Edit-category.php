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
            top: 10%;
            left: 35%;
            border: 1px solid grey;
            width: 500px;
            height: 400px;
        }

        .form {
            margin-left: 90px;
            margin-top: 90px;
            position: absolute;
            color: white;
        }

        .bgimg {
            width: 500px;
            height: 400px;
            background-image: none;
            background-repeat: no-repeat;
            background-position: center center;
            background-size: cover;
        }
        body {
            background-color: gray;
        }
    </style>
</head>

<body>
    <?php
    include "./connect_data.php";
    $sql = "SELECT * FROM category WHERE cateID =" . $_GET["cateID"];
    $result = $conn->query($sql);
    while ($row = mysqli_fetch_assoc($result)) {
    ?>
        <div class="form-add">
            <div class="bgimg" style=" background-image: url('./imgAdmin/bg1.5.png');">
                <form method="post" action="Xu-li-edit-category.php" class="form">
                    <table cellpadding="6px;">
                        <th colspan="2"><span style="font-size: 30px;">Sửa Danh Mục</span></th>
                        <tr>
                            <td style="font-size: 20px;">Tên Danh Mục: </td>
                            <td><input type="text" name="cateName" style="width: 200px; height:25px" value="<?php echo $row["cateName"] ?>" /></td>
                        </tr>
                        <tr>
                            <td style="font-size: 19px;">Hiển Thị: </td>
                            <td><input type="checkbox" name="check" <?php echo $row["isShow"] ?>></td>
                        </tr>
                        <tr>
                            <td><input type="hidden" name="cateID" value="<?php echo $row["cateID"]; ?>"></td>
                        <tr>
                            <td colspan="2" align="center"><input type="submit" name="submit" style="width: 90px; height:25px; margin-left:-50px;cursor: pointer" id="submit" value="Cập Nhật"></td>
                        </tr>
                    </table>
                </form>
            </div>
            </br>
            </br>
            <a href="Manage-category.php" style="text-decoration: none; margin-left: 155px;position:absolute;margin-top:-145px;color:goldenrod;"><i class="fas fa-arrow-circle-left"></i><b>  Trang Quản Lý Loại</b></a>
        </div>
    <?php
    }
    ?>

</body>

</html>