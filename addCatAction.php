<?php
include('includes/dbconnect.php');
$catName = $_POST['catName'];

$queryString = "INSERT INTO `news`.`cat` (`catName`) 
    VALUES ('$catName');";

//echo $queryString;

$result = mysqli_query($mysqli, $queryString);

echo $result;

if ($result) {
    echo "<p>Thêm thành công</p>";
    //redirect
    header("Location: http://localhost/Projects/addCat.php");
}
else
{
}
?>
