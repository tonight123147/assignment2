<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Untitled Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    <link rel="stylesheet" href="./libs/fontawesome-free-5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <style>
            ul {
            margin-top: 150px;
            margin-left: 5px;
            position: relative;
        }

        ul li {
            padding-bottom: 18px;
            list-style-type: none;
        }

        ul li a {
            text-decoration: none;
            font-size: 18px;
            color: black;
        }

        .list ul li {
           float: left;
        }
        .list ul {
            margin-left: 170px;
        }

        .list :not(:last-child) {
            margin-left: 40px;
        }

        td {
            width: 130px;
            border: 2px solid grey;
            text-align: center;
            padding: 16px;
            color: black;
        }
        .table-list table {
            margin-left: 20px;
            margin-top: -50px;
        }
        .row {
            margin-top: -90px;
        }

    </style>
</head>

<body>
    <?php
    include "./connect_data.php";
    $sql = "SELECT * FROM product";
    $result = $conn->query($sql);
    ?>
    <div class=row>
        <div class="list">
            <ul>
                <li><a href="Manage-product.php"> Quản lí sản phẩm</a></li>
                <li><a href="Add-new-product.php">Thêm sản phẩm</a></li>
                <li><a href="Manage-category.php"> Quản lí loại sản phẩm</a></li>
                <li><a href="Add-category.php">Thêm loại sản phẩm</a></li>
                <li><a href="index.php">Đăng xuất</a></li>
                <ul>
        </div>
    </div>
    <div class="table-list">
        <table>
            <tr>
                <td><strong>Id</strong></td>
                <td><strong>Mã loại</strong></td>
                <td><strong>Tên Sản Phẩm</strong></td>
                <td><strong>Hình Ảnh</strong></td>
                <td><strong>Nơi Sản Xuất</strong></td>
                <td><strong>Giá</strong></td>
                <td><strong>Ngày Đăng</strong></td>
                <td><strong>Show</strong></td>
                <td><strong>Xóa</strong></td>
                <td><strong>Sửa</strong></td>
            </tr>

            <?php
            while ($row = mysqli_fetch_assoc($result)) {
            ?>
                <tr>
                    <td><?php echo $row["proID"]; ?></td>
                    <td><?php echo ($row["proCateID"]) ?></td>
                    <td>
                        <?php echo $row["proName"]; ?></td>
                    <td><img style="weight:30px; height:70px" src="<?php echo ("../../back-end/imgAdd/" . $row["proImage"]); ?>"></td>
                    <td><?php echo $row["proMadeIn"]; ?></td>
                    <td><?php echo $row["proCost"] ?>đ</td>
                    <td><?php echo $row["createDate"] ?></td>
                    <td><input type="checkbox" name="check" <?php echo $row["isShow"] ?>></td>
                    <td><a onclick="return Delete('<?php echo $row['proName']; ?>')" href="Delete-product.php?view=delete&proID=<?php echo $row["proID"] ?>"><i class="fas fa-trash-alt" style="color: rgb(206, 152, 4);"></i></a></td>
                    <td><a href="Edit-product.php?view=edit&proID=<?php echo $row["proID"] ?>"><i class="fas fa-edit" style="color: rgb(206, 152, 4);"></i></a></td>
                </tr>
            <?php
            }
            ?>

        </table>
    </div>

    <script>
        function Delete(proName) {
            return confirm(" Bạn có chắc chắn muốn xóa sản phẩm: " + proName + " ? "); //confirm() là hiển thị một hộp thoại với một thông báo được chỉ định,
        }
    </script>

</body>

</html>