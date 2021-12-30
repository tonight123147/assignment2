<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
		include "./connect_data.php";
        $ProID = $_GET['proID'];
		$sql = "DELETE FROM product WHERE proID ='$ProID' ";
		$result = $conn->query($sql);
		if($result){
			header("Location: Manage-product.php");
		}
	?>
</body>
</html>