<?php
include('includes/dbconnect.php');

function generateNews($id, $title, $preview, $pic, $detail, $postDate) {
    echo "<div id='post'>";

    echo "<table><tr>";
    echo "<td>";
    echo "<div id='pic'><a title='", $title, "' href=''>";
    echo "<img width='250' src='", $pic, "'/>";
    echo "</a>", "</div></td>";

    echo "<td>";
    echo "<h2><a href='/Projects/post.php?id=",$id,"' title='", $title, "'>", $title, "</a></h2>";

    echo "<div id='postDate'><p>Đăng lúc: ", $postDate, "</p></div>";
    echo "<div id='preview'><p>", $preview, "</p><div>";
    echo "</td>";
    echo "</tr></table>";
    echo "</div>";
}

$id = $_SERVER['QUERY_STRING'];
list($temp, $tempId) = split("=", $id);
$queryString = "SELECT * FROM newsdetails WHERE cat='" . $tempId . "' and approved='1'";

if ($result = mysqli_query($mysqli, $queryString)) {
    echo "<br>";
    //printf("Select returned %d rows.\n", mysqli_num_rows($result));
    echo "<div>";

    while ($row = mysqli_fetch_row($result)) {
        generateNews($row[0], $row[2], $row[3], $row[4], $row[5], $row[6]);
    }

    echo "</div>";

    echo "<br>";


    /* free result set */
    mysqli_free_result($result);
}
?>
