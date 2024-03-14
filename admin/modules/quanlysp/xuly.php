<?php
    include("../../config/config.php");

    $masp = $_POST["masanpham"];
    $tensp = $_POST["tensanpham"];
    $giasp = $_POST["giasanpham"];
    // xu ly hinh anh
    $hinhanh = $_FILES['hinhanhsanpham']['name'];
    $hinhanh_tmp = $_FILES['hinhanhsanpham']['tmp_name'];
    $hinhanh = time().'_'.$hinhanh;
    $noidungsp = $_POST["noidungsanpham"];
    // xu ly danh muc
    $danhmuc = $_POST["danhmuc"];
    
    if(isset($_POST["themsp"])) {
        // them
        $sql_them = "INSERT INTO tbl_sanpham(masp, tensp, giasp, hinhanh, noidung, id_danhmuc) VALUE ('".$masp."', '".$tensp."', '".$giasp."', '".$hinhanh."', '".$noidungsp."','".$danhmuc."')";
        mysqli_query($mysqli, $sql_them);
        move_uploaded_file($hinhanh_tmp, 'uploads/'.$hinhanh);
        header('Location: ../../index.php?action=quanlysanpham&query=them');
    } else if (isset($_POST['suasp'])) {
        // sua
        // if(isset($hinhanh)) {
            $sql_update = "UPDATE tbl_sanpham SET masp='".$masp."', tensp='".$tensp."', giasp='".$giasp."', hinhanh='".$hinhanh."', noidung='".$noidungsp."', id_danhmuc='".$danhmuc."' WHERE id_sanpham='$_GET[idsanpham]'";
            move_uploaded_file($hinhanh_tmp, 'uploads/'.$hinhanh);

            // xoa anh khi update
            $id = $_GET['idsanpham'];
            $sql = "SELECT * FROM tbl_sanpham WHERE id_sanpham = '$id' LIMIT 1";
            $query = mysqli_query($mysqli, $sql);
            while($row = mysqli_fetch_array($query)) {
                unlink('uploads/'.$row['hinhanh']);
            }
        // }
        mysqli_query($mysqli, $sql_update);
        header('Location: ../../index.php?action=quanlysanpham&query=them');
    } else {
        $id = $_GET['idsanpham'];
        $sql = "SELECT * FROM tbl_sanpham WHERE id_sanpham = '$id' LIMIT 1";
        $query = mysqli_query($mysqli, $sql);

        while($row = mysqli_fetch_array($query)) {
            unlink('uploads/'.$row['hinhanh']);
        }

        $sql_xoa = "DELETE FROM tbl_sanpham WHERE id_sanpham = '".$id."'";
        mysqli_query($mysqli, $sql_xoa);
        header('Location: ../../index.php?action=quanlysanpham&query=them');
    }
?>