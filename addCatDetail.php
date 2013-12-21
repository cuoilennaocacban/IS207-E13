<?php
include('includes/dbconnect.php');
        $queryString = "SELECT * FROM cat";

        function generateCat2($catId, $catName) {
            echo "<div>";
            echo "<a href='cat.php?catId=" . $catId . "'>" . $catName . "</a>";
            echo "<form action='deleteCatAction.php' method='post'><button type='submit' name='but' value='$catId'>Delete this Category</button></form>";
            echo "</div>";
        }

        if ($result = mysqli_query($mysqli, $queryString)) {

            while ($row = mysqli_fetch_row($result)) {
                generateCat2($row[0], $row[1]);
            }
            /* free result set */
            mysqli_free_result($result);
        }
?>

<br>
<br>

<div>
    <p>Add more Category</p>
    <form method="post" action="addCatAction.php">
        Tên chuyên mục: <input type="text" name="catName"><br>
        <input type="submit" value="Thêm chuyên mục"><br>
    </form>
</div>
