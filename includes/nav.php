<div id="nav" width="900">

    <ul class="clearfix">
        <?php
        include('includes/dbconnect.php');
        $queryString = "SELECT * FROM cat";

        function generateCat($catId, $catName) {
            echo "<li class='catItem'>";
            echo "<a href='cat.php?catId=" . $catId . "'>" . $catName . "</a>";
            echo "</li>";
        }

        if ($result = mysqli_query($mysqli, $queryString)) {

            while ($row = mysqli_fetch_row($result)) {
                generateCat($row[0], $row[1]);
            }
            /* free result set */
            mysqli_free_result($result);
        }
        ?>
    </ul>

</div>

<br>
<br>
