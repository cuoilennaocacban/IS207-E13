<?php

include('includes/dbconnect.php');

function generateNews($title, $preview, $pic, $detail, $postDate) {
    echo "<div id='post'>";

    echo "<div id='pic'>";
    echo "<img src='", $pic, "'/>";
    echo "</div>";

    echo "<h3>", $title, "</h3>";

    echo "<div id='postDate'><p>Đăng lúc: ", $postDate, "</p></div>";
    echo "<div id='detail'><p>", $detail, "</p><div>";

    echo "</div>";
}

$id = $_SERVER['QUERY_STRING'];
list($temp, $tempId) = split("=", $id);
$queryString = "SELECT * FROM newsdetails WHERE newsid='" . $tempId . "'";

//echo "<p>", $queryString, "</p>";

//echo $tempId;

if ($result = mysqli_query($mysqli, $queryString)) {
    echo "<br>";
    //printf("Select returned %d rows.\n", mysqli_num_rows($result));
    echo "<div>";

    while ($row = mysqli_fetch_row($result)) {
        generateNews($row[1], $row[2], $row[3], $row[4], $row[5]);
    }

    echo "</div>";

    echo "<br>";


    /* free result set */
    mysqli_free_result($result);
}
?>

