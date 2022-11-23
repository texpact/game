<?php

// echo "Deleting form here";

$stu_id = $_GET['id'];

include "config.php";


$sql = "DELETE FROM student WHERE sid = {$stu_id}";

$result = mysqli_query($conn, $sql);

header("Location: http://localhost/game/game/index.php");

mysqli_close($conn);

?>