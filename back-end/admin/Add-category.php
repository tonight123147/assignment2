<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width, initial-scale=1.0">
    <title>Add category</title>
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
    <div class="form-add">
        <div class="bgimg" style=" background-image: url('./imgAdmin/bg1.5.png');">
            <form method="post" action="Xu-li-Addnew-category.php" class="form">
                <table cellpadding="6px;">
                    <th colspan="2"><span style="font-size: 30px; color:white">Thêm Loại</span></th>
                    <tr>
                        <td style="color: white; font-size:17px">Tên loại: </td>
                        <td><input type="text" name="cateName" style="width: 230px; height:20px" required/></td> <!--cái required này là hỗ trợ khi nhập thiếu thì nó sẽ bảo và sẽ dừng lại-->
                    </tr>
                    <tr>
                        <td colspan="2" align="center"><input type="submit" name="submit" style="width: 80px; cursor: pointer" id="submit" value="Thêm"></td>
                    </tr>
                </table>
            </form>
        </div>
        </br>
        </br>
        <a href="./Manage-category.php" style="text-decoration: none; margin-left: 170px;position:absolute;margin-top:-220px; color:goldenrod;"><i class="fas fa-arrow-circle-left"></i><b>  Trang Quản Lý Loại</b></a>
    </div>
</body>

</html>