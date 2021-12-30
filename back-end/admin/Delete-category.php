<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
		include "./connect_data.php";
		$CateID = $_GET['cateID']; //$_get này sẽ lấy cái name của hàng có hàm (&&cateID) dòng 105 bên manage_cate
		$sql = "DELETE FROM category WHERE cateID = '$CateID'";
		$result = $conn->query($sql);
		if($result){
			header("Location: Manage-category.php");
		}
	?>
</body>
</html>