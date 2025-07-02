<?php
include '../config/config.php';

$stu_id = $_REQUEST['id'];

$sql = "DELETE FROM student WHERE sid = $stu_id";

mysqli_query($conn, $sql) or die("⚠️Query Failed");

header("Location: http://localhost/my_projects/CRUD_app/index.php");

mysqli_close($conn);

?>