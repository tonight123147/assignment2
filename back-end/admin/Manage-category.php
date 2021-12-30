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
            margin-left: 45px;
        }

        td {
            width: 180px;
            border: 2px solid grey;
            text-align: center;
            padding: 16px;
            color: black;
        }
        .table-list table {
            margin-left: 60px;
        }

    </style>
</head>

<body>
    <?php
    include "./connect_data.php";

    $sql = "SELECT * FROM category";
    $result = $conn->query($sql);
    ?>
    <div class="row">
        <div class=" list">
            <ul>
                <li><a href="Manage-product.php"> Quản lí sản phẩm</a></li>
                <li><a href="Add-new-product.php">Thêm sản phẩm</a></li>
                <li><a href="Manage-category.php"> Quản lí loại sản phẩm</a></li>
                <li><a href="Add-category.php">Thêm loại sản phẩm</a></li>
                <li><a href="index.php">Đăng xuất</a></li>
                <ul>
        </div>
    </div>
    <div class="row">
        <div class="table-list">
                <table>
                    <tr>
                        <td><strong>Id</strong></td>
                        <td><strong>Tên Loại</strong></td>
                        <td><strong>Ngày tạo</strong></td>
                        <td><strong>Ngày Cập Nhật</strong></td>
                        <td><strong>Show</strong></td>
                        <td><strong>Xóa</strong></td>
                        <td><strong>Sửa</strong></td>
                    </tr>

                    <?php
                    while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                        <tr>
                            <td><?php echo $row["cateID"] ?></td>
                            <td><?php echo $row["cateName"]; ?></td>
                            <td><?php echo $row["createDate"]; ?></td>
                            <td><?php echo $row["modifyDate"] ?></td>
                            <td><input type="checkbox" <?php echo $row["isShow"] ?> /></td>
                            <td><a onclick="return Delete('<?php echo $row['cateName']; ?>')" href="Delete-category.php?view=delete&cateID=<?php echo $row["cateID"] ?>"><i class="fas fa-trash-alt" style="color: rgb(206, 152, 4);"></i></a></td>
                            <td><a href="Edit-category.php?view=edit&cateID=<?php echo $row["cateID"] ?>"><i class="fas fa-edit" style="color: rgb(206, 152, 4);"></i></a></td>
                        </tr>
                    <?php
                    }
                    ?>
                </table>
        </div>
    </div>
    <script>
        function Delete(cateName) {
            return confirm(" Bạn có chắc chắn muốn xóa loại sản phẩm: " + cateName + " ? "); //confirm() là hiển thị một hộp thoại với một thông báo được chỉ định,
        }
    </script>

</body>

</html>