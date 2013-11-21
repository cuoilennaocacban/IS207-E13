<div id="sidebar">

    <h3>Navigation</h3>

    <?php
    if (isset($_COOKIE["user"])) {
        $user = $_COOKIE["user"];
        $pre = $_COOKIE["pre"];

        if ($pre == 0 || $pre == 1 || $pre == 2) {
            ?>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About Us</a></li>
            <li><a href="addpost.php">Add Post</a></li>
            <?php
        } else {
            ?>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About Us</a></li>
            <?php
        }
    } else {
        ?>
        <li><a href="index.php">Home</a></li>
        <li><a href="about.php">About Us</a></li>
    <?php
}
?>


</div> <!-- end #sidebar -->
