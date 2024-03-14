<?php
    session_start();
    include("config/config.php");
    if(isset($_POST['dangnhap'])) {
        $taikhoan = $_POST['username'];
        $matkhau = md5($_POST['password']);
        $sql = "SELECT * FROM tbl_admin WHERE username='".$taikhoan."' AND password='".$matkhau."' LIMIT 1";
        $row = mysqli_query($mysqli, $sql);
        $count = mysqli_num_rows($row);
        if($count > 0) {
            $_SESSION['dangnhap'] = $taikhoan;
            header("Location: index.php");
        }else {
            echo '<p style="text-align: center;">Thông tin tài khoản hoặc mật khẩu không chính xác</p>';
            // header("Location: login.php");
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/styleAdmin.css">
    <title>Đăng nhập Admin</title>
</head>
<body>
    <form action="" autocomplete="off" method="POST">
        <div class="mainLogin">
            <table border="1" style="text-align: center;">
                <tr>
                    <td colspan="2">Đăng nhập Admin</td>
                </tr>

                <tr>
                    <td>Tài khoản</td>
                    <td><input type="text" name="username"></td>
                </tr>

                <tr>
                    <td>Mật khẩu</td>
                    <td><input type="text" name="password"></td>
                </tr>

                <tr>
                    <td colspan="2"><input type="submit" name="dangnhap" value="Đăng nhập"></td>
                </tr>
            </table>
        </div>
    </form>
</body>
</html>