<?php

include('includes/dbconnect.php');

function generateNews($id, $title, $preview, $pic, $detail, $postDate) {
    echo "<div id='post'>";

    echo "<table><tr>";
    echo "<td>";
    echo "<div id='pic'><a title='", $title, "' href=''>";
    echo "<img src='", $pic, "'/>";
    echo "</a>", "</div></td>";

    echo "<td>";
    echo "<h3><a href='/Projects/post.php?id=",$id,"' title='", $title, "'>", $title, "</a></h3>";

    echo "<div id='postDate'><p>Đăng lúc: ", $postDate, "</p></div>";
    echo "<div id='preview'><p>", $preview, "</p><div>";
    echo "</td>";
    echo "</tr></table>";
    echo "</div>";
}

$queryString = "SELECT * FROM newsdetails";

if ($result = mysqli_query($mysqli, $queryString)) {
    echo "<br>";
    //printf("Select returned %d rows.\n", mysqli_num_rows($result));

    echo "<h1>NEWS</h1>";
    echo "<div>";

    while ($row = mysqli_fetch_row($result)) {
        generateNews($row[0], $row[1], $row[2], $row[3], $row[4], $row[5]);
    }

    echo "</div>";

    echo "<br>";


    /* free result set */
    mysqli_free_result($result);
}
?>
