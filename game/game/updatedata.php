<?php

$stu_id = $_POST["sid"];
$stu_name = $_POST["sname"];
$stu_address = $_POST["saddress"];
$stu_class = $_POST["sclass"];
$stu_phone = $_POST["sphone"];

include "config.php";

// $sql = "UPDATE student SET sid = '{$stu_id}', sname = '{$stu_name}', saddress = '{$stu_address}', sclass = '{$stu_class}', sphone = '{$stu_phone}'";

// $result = mysqli_query($conn, $sql);

$sql = "UPDATE student SET sname = '{$stu_name}', saddress = '{$stu_address}', sclass = '{$stu_class}', sphone = '{$stu_phone}' WHERE sid = '{$stu_id}'";

$result = mysqli_query($conn, $sql);

header("Location: http://localhost/game/game/index.php");

mysqli_close($conn);

?>