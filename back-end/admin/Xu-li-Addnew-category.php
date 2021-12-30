<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
		include "./connect_data.php";
		$CateName = $_POST['cateName'];//post lấy từ form qua
		$sql = "INSERT INTO category (cateName) VALUES ('$CateName')";
		$result = $conn->query($sql);
		if($result){
			header("Location: Manage-category.php");
		}
	?>
</body>
</html>