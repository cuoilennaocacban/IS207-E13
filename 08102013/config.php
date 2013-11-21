<?php

$mysqli = new mysqli("localhost", "root", "", "quanlycasy");
mysqli_query($mysqli, "SET NAMES UTF8");

if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
//echo $mysqli->host_info . "\n";

echo "<br>";
?>
