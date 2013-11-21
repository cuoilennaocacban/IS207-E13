<?php include('variables/variables.php'); ?>
<div>
<!--    <script>
        $(document).ready(function() {
            $("#loginForm").submit(function() {
                var userName = $("#username").val();
                var passWord = $("#password").val();
                //alert("Entering ajax")
                $.post("login.php",
                        {
                            username: userName,
                            password: passWord
                        },
                function(data)
                {
                    //alert("Success");
                    $("#loginDiv").html(data);
                })
                //alert("Done with ajax");
            })
        });
    </script>-->

    <script>
        function deleteCookie()
        {
            $.post
        }
    </script>

    <div id="loginDiv">
        <!--        <form id="loginForm" action="login.php" method="post">
                    Username: <input type="text" id="username" name="username" />
                    Password: <input type="text" id="password" name="password" />
                    <input type="submit" value="Login" />
                </form>-->
        <?php
        if (isset($_COOKIE["user"])) {
            $user = $_COOKIE["user"];
            $pre = $_COOKIE["pre"];
            echo "<table><tr>";
            echo "<td><p>Xin chào " . $user . "</p></td>";
            echo "<td><form id='logoutForm' method='POST' action='logout.php'>";
            echo "<input type='submit' value='Logout'>";
            echo "</form></td></tr></table>";
        } else {
            ?>
            <form id="loginForm" method="POST" action="login.php">
                Username: <input type="text" id="username" name="username" />
                Password: <input type="text" id="password" name="password" />
                <input type="submit" value="Login" />
            </form>
            <?php
        }
        ?>

    </div>
    <h2>Thông tin công nghệ</h2>
</div>
