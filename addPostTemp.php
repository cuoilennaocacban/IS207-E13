<?php

include('includes/head.php');
include('includes/dbconnect.php');
$html_content = $_POST['input'];
$title = $_POST['title'];
$pic = $_POST['pic'];
$preview = $_POST['preview'];
$cat = $_POST['catSelect'];

//echo $html_content;
//echo $title;

$queryString = "INSERT INTO `news`.`newsdetails` (`title`,`cat`, `preview`, `picture`, `details`, `postdate`, `isTop`,`approved`) 
    VALUES ('$title','$cat','$preview','$pic', '$html_content', NOW(), b'0', b'0');";

//echo $queryString;

$result = mysqli_query($mysqli, $queryString);

echo $result;

if ($result) {
    echo "<p>Thêm thành công</p>";
    //redirect
    header("Location: http://localhost/Projects/index.php");
}
else
{
}
?>