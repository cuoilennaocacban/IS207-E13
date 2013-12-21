<div id="sidebar">

    <h3>Navigation</h3>

    <?php
    if (isset($_COOKIE["user"])) {
        $user = $_COOKIE["user"];
        $pre = $_COOKIE["pre"];

//        echo $pre;
//        echo $user;

        if ($pre == 0) {
            ?>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About Us</a></li>
            <li><a href="addpost.php">Add Post</a></li>
            <li><a href="approvePosts.php">Approve Post</a></li>
            <li><a href="addCat.php">Manage Category</a></li>
            <?php
        } else if ($pre == 2) {
            ?>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About Us</a></li>
            <li><a href="approvePosts.php">Approve Post</a></li>
            <?php
        } else if ($pre == 1) {
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
