<?php

include 'config.php';

if (isset($_GET['macs'])) {
    $id = $_GET['macs'];
}

//$id = $_SERVER['QUERY_STRING'];
//echo $id;
//($temp, $tempId) = split("=", $id);
$queryString = "SELECT * FROM album WHERE macs='" . $id . "'";

//echo $queryString;

$result = mysqli_query($mysqli, $queryString);

echo "Tên Album: ";
echo "<select id='maalbum' name='maalbum'>";

while ($row = mysqli_fetch_row($result)) {
    echo "<option value='$row[0]'>$row[1]</option>";
}

echo "</select>";



//if ($result = mysqli_query($mysqli, "SELECT * FROM casy")) {
//    
//}
?>
