<?php
setcookie("user", "", time() - 3600);
setcookie("pre", "", time() - 3600);
header("Location: http://localhost/Projects/index.php");
?>
