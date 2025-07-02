<?php
include '../config/config.php';

$stu_name = $_REQUEST['sname'];
$stu_address = $_REQUEST['saddress'];
$stu_class = $_REQUEST['sclass'];
$stu_phone = $_REQUEST['sphone'];


$sql = "INSERT INTO student (sname, saddress, sclass, sphone) VALUES ('$stu_name', '$stu_address', '$stu_class', '$stu_phone')";

mysqli_query($conn, $sql) or die("⚠️Query Failed");

header("Location: http://localhost/my_projects/CRUD_app/");

mysqli_close($conn);
?>