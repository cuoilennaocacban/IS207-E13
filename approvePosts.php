<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

    <?php
    include('includes/head.php');
    ?>

    <body>
        <div id="container">

            <div id="header">
                <?php
                include('includes/header.php');
                ?>
            </div>

            <div id="right">
                <?php
                include('includes/sidebar.php');
                ?>
            </div>

            <div id="content">
                <?php
                include('includes/nav.php');
                include('getApprove.php');
                ?>
            </div>

            <div id="footer">
                <?php
                include('includes/footer.php');
                ?>
            </div>

        </div>
    </body>

</html>