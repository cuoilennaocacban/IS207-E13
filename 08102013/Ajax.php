<html>

    <head>
        <meta charset="utf-8">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    </head>

    <body>
        <?php
        include 'config.php';
        ?>

        <script>
            $(document).ready(function() {
                $("#tenCsCombo").click(function() {
                    var selectedSinger = $("#tenCsCombo").val();
                    $.ajax({
                        type: "GET",
                        url: 'album.php',
                        data: {macs: selectedSinger},
                        success: function(data)
                        {
                            $("#albumTable").html(data);
                        }
                    })
                });
            });
        </script>

        <form action="themAlbum.php" method="POST">
            Tên Ca sỹ: 
            <select id="tenCsCombo" name="tenCsCombo">
                <?php
                include 'config.php';
                if ($result = mysqli_query($mysqli, "SELECT * FROM casy")) {
                    while ($row = mysqli_fetch_row($result)) {
                        echo "<option value='$row[0]'>$row[1]</option>";
                    }
                }
                ?>
            </select>
        </form>
        <br>

        <div id="albumTable" name="albumTable">

        </div>

        <form action="themCasy.php" method="POST" style="display: none;">
            Mã ca sỹ: <input type="number" name="macs" id="macs"><br>
            Tên ca sỹ: <input type="text" name="tencs" id="tencs"><br>
            <input type="submit" value="Thêm ca sỹ (POST)"><br>
        </form>

        <form action="themAlbum.php" method="POST" style="display: none;">
            Mã Album: <input type="number" name="macs" id="maalbum"><br>
            Tên Album: <input type="text" name="tencs" id="tenalbum"><br>
            Mã Ca sỹ: 
            <select id="macsCombo" name="macsCombo">
                <?php
                include 'config.php';
                if ($result = mysqli_query($mysqli, "SELECT * FROM casy")) {
                    while ($row = mysqli_fetch_row($result)) {
                        echo "<option value='$row[0]'>$row[0]</option>";
                    }
                }
                ?>
            </select>
            <input type="submit" value="Thêm album (POST)"><br>
        </form>

    </body>

</html>
