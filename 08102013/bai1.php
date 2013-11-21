<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

    <head>
        <meta charset="utf-8"> 
            <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    </head>

    <body>

        <?php

        function CreateTable($col, $row) {
            echo "<table border='1'>";
            echo "<tr>";
            echo "<td>MSSV</td><td>Họ tên</td><td>Điểm trung bình</td>";
            echo "</tr>";
            for ($i = 0; $i < $row; $i++) {
                echo "<tr>";
                for ($j = 0; $j < $col; $j++) {
                    echo "<td>";
                    echo "data cell ";
                    echo $i;
                    echo "-";
                    echo $j;
                    echo "</td>";
                }
                echo "</tr>";
            }
            echo "</table";
        }

        function CreateTableWithArray($array) {
            $r = count($array);
            $c = count($array[0]);

            echo "<table border='1'>";
            echo "<tr>";
            echo "<td>STT</td><td>MSSV</td><td>Họ tên</td><td>Điểm trung bình</td>";
            echo "</tr>";
            for ($i = 0; $i < $r; $i++) {
                echo "<tr>";
                echo "<td>";
                echo $i;
                echo "</td>";
                for ($j = 0; $j < $c; $j++) {
                    echo "<td>";
                    echo $array[$i][$j];
                    echo "</td>";
                }
                echo "</tr>";
            }
            echo "</table";
        }

        $sv = array(
            array("10520642", "Trần Văn Tuấn", "9.0"),
            array("10520340", "Đặng Thanh Duy", "8.0"),
            array("10520000", "Tên gì đó", "7.0"),
            array("10520001", "Tên gì đó 2", "6.0")
        );

        CreateTableWithArray($sv);
        ?>

    </body>
</html>

