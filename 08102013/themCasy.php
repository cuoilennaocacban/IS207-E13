<?php

include 'config.php';

$macs = $_POST["macs"];
$tencs = $_POST["tencs"];

if ($macs == NULL || $tencs == null) {
    echo "<p>Mã Ca sỹ hoặc tên ca sỹ không hợp lệ</p>";
} else {

    mysqli_query($mysqli, "INSERT INTO `quanlycasy`.`casy` (`MACS`, `TENCS`) VALUES ('$macs', '$tencs');");
    echo "<p>Thêm thành công</p>";
}

//redirect
header("location: MySQL.php");
?>
