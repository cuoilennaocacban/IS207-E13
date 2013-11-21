<?php
include 'config.php';

$maalbum = $_POST["maalbum"];
$tenalbum = $_POST["tenalbum"];
$macs = $_POST["macsCombo"];


if ($maalbum == NULL || $tenalbum == null || $macs == null) {
    echo "<p>không hợp lệ</p>";
} else {

    mysqli_query($mysqli, "INSERT INTO `quanlycasy`.`album` (`MAALBUM`, `TENALBUM`) 
        VALUES ('$maalbum', '$tenalbum','$macs');");
    echo "<p>Thêm thành công</p>";
}

//redirect
header("location: MySQL.php");
?>
