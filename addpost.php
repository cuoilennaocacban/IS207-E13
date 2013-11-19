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
                <form method="post" action="addPostTemp.php">
                    <br></br>
                    Tiêu đề: <input type="text" name="title"></input><br></br>
                    Hình đại diện: <input type="text" name="pic"></input><br></br>
                    Xem trước: <input type="text" name="preview"></input><br></br>
                    <textarea name="input"></textarea><br></br>
                    <input type="submit" value="Gửi bài viết"/><br></br>
                </form>
            </div>

            <div id="footer">
                <?php
                include('includes/footer.php');
                ?>
            </div>

        </div>
    </body>

</html>