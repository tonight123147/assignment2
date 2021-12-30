<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Untitled Document</title>
</head>

<body>
    <?php
    include "./connect_data.php";
    $sql = "SELECT * FROM category WHERE cateID = " . $_POST['cateID'];
    $check = $conn->query($sql);
    if ($check) {
        $name = $_POST["cateName"];
        $checkShow = isset($_POST["check"]);
        if ($checkShow) {
            $show = "checked";
        } else {
            $show = "";
        }
        while ($row = mysqli_fetch_assoc($check)) {
            $sql = "UPDATE category SET cateName = '$name', isShow = '$show' WHERE cateID = " . $row["cateID"];
            $result = $conn->query($sql);
            if ($result) {
                header("Location: Manage-category.php");
            }
        }
    }
    ?>
</body>

</html>