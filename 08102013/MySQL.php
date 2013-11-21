<html>

    <head>
        <meta charset="utf-8">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    </head>

    <body>
        
        <?php
        include 'config.php';
        
        //Perform query - CASY
        if ($result = mysqli_query($mysqli, "SELECT * FROM casy")) {
            printf("Select returned %d rows.\n", mysqli_num_rows($result));

            echo "<h1>CA SỸ</h1>";
            echo "<table border='1'>";

            while ($row = mysqli_fetch_row($result)) {

                echo "<tr>";
                echo "<td>";
                printf("%s", $row[0]);
                echo "</td>";
                echo "<td>";
                printf("%s", $row[1]);
                echo "</td>";
                echo "</tr>";
            }

            echo "</table>";

            echo "<br>";


            /* free result set */
            mysqli_free_result($result);
        }

        //Perform query - ALBUM
        if ($result = mysqli_query($mysqli, "SELECT * FROM album")) {
            printf("Select returned %d rows.\n", mysqli_num_rows($result));

            echo "<h1>ALBUM</h1>";
            echo "<table border='1'>";

            while ($row = mysqli_fetch_row($result)) {

                echo "<tr>";

                echo "<td>";
                printf("%s", $row[0]);
                echo "</td>";

                echo "<td>";
                printf("%s", $row[1]);
                echo "</td>";

                echo "<td>";
                printf("%s", $row[2]);
                echo "</td>";

                echo "</tr>";
            }

            echo "</table>";

            echo "<br>";


            /* free result set */
            mysqli_free_result($result);
        }
        ?>

        <br>

        <form action="themCasy.php" method="POST">
            Mã ca sỹ: <input type="number" name="macs" id="macs"><br>
            Tên ca sỹ: <input type="text" name="tencs" id="tencs"><br>
            <input type="submit" value="Thêm ca sỹ (POST)"><br>
        </form>

        <form action="themAlbum.php" method="POST">
            Mã Album: <input type="number" name="macs" id="maalbum"><br>
            Tên Album: <input type="text" name="tencs" id="tenalbum"><br>
            Mã Ca sỹ: 
            <select id="macsCombo" name="macsCombo">
                <?php
                include 'config.php';
                if ($result = mysqli_query($mysqli, "SELECT * FROM casy")) {
                    while ($row = mysqli_fetch_row($result)) {
                        echo "<option value='$row[1]'>$row[1]</option>";
                    }
                }
                ?>
            </select>
            <input type="submit" value="Thêm album (POST)"><br>
        </form>

        <a href="Ajax.php">Tới bài tập Ajax</a>

    </body>

</html>