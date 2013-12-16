<?php

include('includes/dbconnect.php');

$id = $_POST['but'];

$queryString = "UPDATE `newsdetails` SET `approved`='1' WHERE newsid='$id';";

//echo $queryString;


$result = mysqli_query($mysqli, $queryString);

if ($result) {
    header("Location: http://localhost/Projects/approvePosts.php");
}
?>
