<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="style.css" media="screen" />
        <link href="menu.css" rel="stylesheet" type="text/css">
        <script src="jquery.js" type="text/javascript"></script>
        <script src="menu.js" type="text/javascript"></script>
        <title>CHƯƠNG TRÌNH QUẢN LÝ SINH VIÊN</title>
    </head>
    <body>
        <table border>
            <tr>
                <td width="300"></td>
                <td>
                    <h1>CHƯƠNG TRÌNH QUẢN LÝ SINH VIÊN</h1>
                    <h2><center>Thêm bộ môn</center></h2>
                </td>
                <td width="300"></td>
            </tr>

            <tr>
                <td colspan="3" height="500" valign="top">
                    <div>
                        <div id="menu">
                            <ul class="menu">
                                <li><a class="parent" href="#"><span>Thêm</span></a>
                                    <div><ul>
                                            <li><a href="themkhoa.php"><span>Thêm khoa</span></a></li>
                                            <li><a href="#"><span>Thêm bộ môn</span></a></li>
                                            <li><a href="#"><span>Thêm sinh viên</span></a></li>
                                        </ul></div>
                                </li>
                                <li><a class="parent" href="#"><span>Tìm kiếm</span></a>
                                    <div>
                                        <ul>
                                            <li><a href="#"><span>Tìm bộ môn theo tên</span></a></li>
                                            <li><a href="#"><span>Tìm sinh viên theo mã số</span></a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li><a class="parent" href="#"><span>Liệt kê</span></a>
                                    <div><ul>
                                            <li><a href="#"><span>Liệt kê bộ môn</span></a></li>
                                            <li><a href="#"><span>Liệt kê thông tin sinh viên theo bộ môn</span></a></li>
                                        </ul></div>
                                </li>
                                <li><a class="parent" href="#"><span>Xóa</span></a>
                                    <div><ul>
                                            <li><a href="#"><span>Xóa khoa theo mã khoa</span></a></li>
                                        </ul></div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div>
                        <form>
                            Mã khoa: <input type="text"/><br>
                            Tên khoa: <input type="text"/><br>
                            <input type="button" value="Thêm"/>
                            <input type="button" value="Reset"/>
                        </form>
                        <a href="index.php">Quay về trang chủ</a>
                    </div>
                </td>
            </tr>

            <tr>
                <td colspan="3">
                    <div>
                        <h3>Sinh viên thực hiện: Trần Văn Tuấn</h3>
                        <h3>Mã số sinh viên: 10520642</h3>
                    </div>
                </td>
            </tr>

            <?php
            // put your code here
            ?>
        </table>
    </body>
</html>
