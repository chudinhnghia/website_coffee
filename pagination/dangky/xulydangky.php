<?php
    session_start();
    include("../../admin/config/config.php");

    
    if(isset($_POST['dangky'])) {
        $tenkhachhang = $_POST['hovaten'];
        $email = $_POST['email'];
        $sodienthoai = $_POST['sdt'];
        $matkhau = md5($_POST['matkhau']);
        $sql_dangky = mysqli_query($mysqli, "INSERT INTO tbl_dangky(tenkhachhang, email, sodienthoai, matkhau) VALUE(
            '".$tenkhachhang."', '".$email."', '".$sodienthoai."', '".$matkhau."')");
        if($sql_dangky) {
            $_SESSION['dangky'] = $tenkhachhang;
            header("Location: ../../index.php?quanly=danhmucsanpham");
        }
    }
?>