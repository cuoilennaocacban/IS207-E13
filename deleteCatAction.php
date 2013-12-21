<?php
include('includes/dbconnect.php');

$id = $_POST['but'];

$queryString = "DELETE FROM `news`.`cat` WHERE `cat`.`catId` = $id";

//echo $queryString;


$result = mysqli_query($mysqli, $queryString);

if ($result) {
    header("Location: http://localhost/Projects/addCat.php");
}
?>
