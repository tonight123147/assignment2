<?php
	include("./connect_data.php");
		if(!empty($_POST["proCateID"]) && $_FILES["proImage"]['error'] != 4 && !empty($_POST["proName"]) 
			&& !empty($_POST["proDesc"]) 
			&& !empty($_POST["proMadeIn"]) 
			&& !empty($_POST["proCost"]) && !empty($_POST["number"])) {
			move_uploaded_file($_FILES['proImage']['tmp_name'], "../../back-end/imgAdd/" .$_FILES['proImage']['name']);
			$ProCateID = $_POST["proCateID"];
           	$Image = $_FILES['proImage']['name'];	//(../ là lui ra một lần còn vô là /)
            $Name = $_POST["proName"];
			$Desc = $_POST["proDesc"];
			$Made = $_POST["proMadeIn"];
			$Cost = $_POST["proCost"];
			$Number = $_POST["number"];
			$query = "INSERT INTO product (proCateID, proImage, proName, proDesc, proMadeIn, proCost, number) VALUES ('$ProCateID','$Image','$Name','$Desc','$Made','$Cost','$Number')";
			$result = $conn->query($query);
			if($result){
				header("Location:Manage-product.php");
			}
		}else{
			header("Location:Manage-product.php");
		}
// empty trong php dùng để kiểm tra một biến nào đó có giá trị rỗng hoặc chưa được khởi tạo hay không. 