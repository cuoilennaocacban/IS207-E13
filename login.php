<?php

include('includes/dbconnect.php');

$userName = $_POST['username'];
$password = $_POST['password'];

$queryString = "SELECT * FROM userpre WHERE username='" . $userName . "'";

//echo $queryString;

$result = mysqli_query($mysqli, $queryString);

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_row($result);
    if ($password == $row[2]) {
        echo "<p>Xin chào " . $row[1] . "</p>";
//        echo $row[1];
//        echo $row[3];
        setcookie("user", $row[1], time() + 3600);
        setcookie("pre", $row[3], time() + 3600);
        header("Location: http://localhost/Projects/index.php");
        exit;
    }
    else
        echo "<p>Đăng nhập sai</p>";
}
else {
    echo "<p>Thông tin đăng nhập không tồn tại</p>";
}
?>
