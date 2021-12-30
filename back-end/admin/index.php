<!DOCTYPE html>
<html lang="vi">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin</title>
	<style>
		.login-form {
			position: absolute;
			left: 40%;
			top: 30%;
			border: 2px solid yellow;
			background: wheat;
		}

		ul {
			list-style-type: none;
			margin-left: 30px;
			margin-top: 40px;
		}

		ul li a {
			text-decoration: none;
			color: white;
			font-weight: bold;
			font-size: 20px;
		}

		ul li :hover {
			color: gray;
		}
		.bgimg {
            width: 350px;
            height: 200px;
            background-image: none;
            background-repeat: no-repeat;
            background-position: center center;
            background-size: cover;
			position: absolute;
        }
		body {
			background-color: gray;
		}
	</style>
</head>

<body>
	<div class="login-form" style="width: 350px; height: 200px;">
		<div class="bgimg" style=" background-image: url('./imgAdmin/bg1.5.png');">
			<h3 style="text-align: center; color:white ;font-size: 25px;">Xin chào Admin nhó Ỏ ỏ ỏ</h3>
			<ul>
				<li><a href="./Manage-product.php">Quản lí sản phẩm</a></li>
				<li><a href="./Manage-category.php">Quản lí loại sản phẩm</a></li>
			</ul>
		</div>
	</div>';
</body>

</html>