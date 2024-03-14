<?php
    session_start();
    include("../../admin/config/config.php");
    if(isset($_POST['dangnhap'])) {
        $email = $_POST['email'];
        $matkhau = md5($_POST['password']);
        $sql = "SELECT * FROM tbl_dangky WHERE email='".$email."' AND matkhau='".$matkhau."' LIMIT 1";
        $row = mysqli_query($mysqli, $sql);
        $count = mysqli_num_rows($row);

        if($count > 0 ) {
            $row_data = mysqli_fetch_array($row);
            $_SESSION['dangky'] = $row_data['id_dangky'];
            header("Location: ../../account.php?quanly=trangtaikhoan");
        }else {
            echo "<p style='color: red; text-align: center;'>Email hoặc mật khẩu không chính xác! Vui lòng nhập lại</p>";
        }
    }
?>