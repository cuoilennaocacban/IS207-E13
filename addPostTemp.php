<?php

include('includes/head.php');
include('includes/dbconnect.php');
$html_content = $_POST['input'];
$title = $_POST['title'];
$pic = $_POST['pic'];
$preview = $_POST['preview'];

echo $html_content;
echo $title;

$queryString = "INSERT INTO `news`.`newsdetails` (`title`, `preview`, `picture`, `details`, `postdate`, `isTop`) 
    VALUES ('$title','$preview','$pic', '$html_content', NOW(), b'0');";

mysqli_query($mysqli, $queryString);

echo "<p>Thêm thành công</p>";
//redirect
header("location: index.php");
?>