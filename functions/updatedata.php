<?php
include '../config/config.php';

$stu_id = $_REQUEST['sid'];
$stu_name = $_REQUEST['sname'];
$stu_address = $_REQUEST['saddress'];
$stu_class = $_REQUEST['sclass'];
$stu_phone = $_REQUEST['sphone'];

print_r($_REQUEST);

$sql = "UPDATE student SET sname = '$stu_name', saddress = '$stu_address', sclass = '$stu_class', sphone = '$stu_phone' WHERE sid = $stu_id";

mysqli_query($conn, $sql) or die("⚠️Query Failed.");

header("Location: http://localhost/my_projects/CRUD_app/");

mysqli_close($conn);
?>