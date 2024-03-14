<?php
    if(isset($_GET['action']) && $_GET['action'] == 'dangxuat') {
        unset($_SESSION['dangnhap']);
        header('Location: login.php');
    }
?>

<ul class="menuAdmin-list">
    <li><a href="index.php?action=quanlydanhmucsanpham&query=them">Quản lý danh mục sản phẩm</a></li>
    <li><a href="index.php?action=quanlysanpham&query=them">Quản lý sản phẩm</a></li>
    <li><a href="index.php?action=dangxuat">Đăng xuất</a></li>
</ul>