<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<title>Untitled Document</title>
</head>

<body>
	<?php
	include "./connect_data.php";
	$sql = "SELECT * FROM product WHERE proID = " . $_POST["proID"];
	$check = $conn->query($sql);
	if ($check) {
		$ProName = $_POST["proName"];
		$Desc = $_POST["proDesc"];
		$Made = $_POST["proMadeIn"];
		$Cost = $_POST["proCost"];
		$Number = $_POST["number"];
		$ProCateID = $_POST["proCateID"]; 
		$show = isset($_POST["check"]);
		if ($show) {
			$isShow = 'checked';
		} else {
			$isShow = "";
		}
		while ($row = mysqli_fetch_assoc($check)) {
			if ($_POST["proID"] == $row["proID"]) {
				$sql1 = "UPDATE product SET proName = '$ProName', proDesc = '$Desc', 
					proMadeIn = '$Made', 
					proCost =  '$Cost', number = '$Number', 
					proCateID= '$ProCateID', isShow = '$isShow' WHERE proID = " . $row["proID"];
				$result1 = $conn->query($sql1);
			}
			if ($_FILES["proImage"]["error"] != 4) { //file phai co s //["error"] !=4 là lỗi file tróng
				move_uploaded_file($_FILES['proImage']['tmp_name'], "../../back-end/imgAdd/"
					. $_FILES['proImage']['name']);
				$Image = $_FILES['proImage']['name'];
				$sql2 = "UPDATE product SET proImage = '$Image' WHERE proID = " . $row["proID"];
				$result2 = $conn->query($sql2);
			}
			header("Location: Manage-product.php");
		}
	}
	?>
</body>

</html>