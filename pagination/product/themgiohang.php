<?php
    session_start();
    include("../../admin/config/config.php");

    // them so luong
    if(isset($_GET['up'])) {
        $id = $_GET['up'];
        foreach($_SESSION['cart'] as $cart_item) {
            if($cart_item['id'] != $id) {
                $product[] = array('tensanpham'=>$cart_item['tensanpham'], 'id'=>$cart_item['id'], 'soluong'=>$cart_item['soluong'], 
                    'giasp'=>$cart_item['giasp'], 'hinhanh'=>$cart_item['hinhanh'], 'masanpham'=>$cart_item['masanpham']);
                $_SESSION['cart'] = $product;
            }else {
                $tangsoluong = $cart_item['soluong'] + 1;
                $product[] = array('tensanpham'=>$cart_item['tensanpham'], 'id'=>$cart_item['id'], 'soluong'=>$tangsoluong, 
                    'giasp'=>$cart_item['giasp'], 'hinhanh'=>$cart_item['hinhanh'], 'masanpham'=>$cart_item['masanpham']);
                $_SESSION['cart'] = $product;
            }
        }
        header("Location: ../../cart.php?quanly=giohang");
    }

    // Giam so luong
    if(isset($_GET['down'])) {
        $id = $_GET['down'];
        foreach($_SESSION['cart'] as $cart_item) {
            if($cart_item['id'] != $id) {
                $product[] = array('tensanpham'=>$cart_item['tensanpham'], 'id'=>$cart_item['id'], 'soluong'=>$cart_item['soluong'], 
                    'giasp'=>$cart_item['giasp'], 'hinhanh'=>$cart_item['hinhanh'], 'masanpham'=>$cart_item['masanpham']);
                $_SESSION['cart'] = $product;
            }else {
                $giamsoluong = $cart_item['soluong'] - 1;
                if($cart_item['soluong'] > 1) {
                    $product[] = array('tensanpham'=>$cart_item['tensanpham'], 'id'=>$cart_item['id'], 'soluong'=>$giamsoluong, 
                        'giasp'=>$cart_item['giasp'], 'hinhanh'=>$cart_item['hinhanh'], 'masanpham'=>$cart_item['masanpham']);
                }else {
                    $product[] = array('tensanpham'=>$cart_item['tensanpham'], 'id'=>$cart_item['id'], 'soluong'=>$cart_item['soluong'], 
                        'giasp'=>$cart_item['giasp'], 'hinhanh'=>$cart_item['hinhanh'], 'masanpham'=>$cart_item['masanpham']);
                }
                $_SESSION['cart'] = $product;
            }
        }
        header("Location: ../../cart.php?quanly=giohang");
    }

    // Xoa san pham
    if(isset($_SESSION['cart']) && isset($_GET['xoa'])) {
        $id = $_GET['xoa'];
        foreach($_SESSION['cart'] as $cart_item) {
            if($cart_item['id'] != $id) {
                $product[] = array('tensanpham'=>$cart_item['tensanpham'], 'id'=>$cart_item['id'], 'soluong'=>$cart_item['soluong'], 
                    'giasp'=>$cart_item['giasp'], 'hinhanh'=>$cart_item['hinhanh'], 'masanpham'=>$cart_item['masanpham']);
            }
            $_SESSION['cart'] = $product;
            header("Location: ../../cart.php?quanly=giohang");
        }
    }

    // Them san pham vao gio hang
    if(isset($_POST['themgiohang'])) {
        // session_destroy();
        $id = $_GET['idsanpham'];
        $soluong = $_POST['soluongsp'];
        $sql = "SELECT * FROM tbl_sanpham WHERE id_sanpham = '".$id."' LIMIT 1";
        $query = mysqli_query($mysqli, $sql);
        $row = mysqli_fetch_array($query);
        
        if($row) {
            $new_product = array(array('tensanpham'=>$row['tensp'], 'id'=>$id, 'soluong'=>$soluong, 'giasp'=>$row['giasp'],
                'hinhanh'=>$row['hinhanh'], 'masanpham'=>$row['masp']));
        // Kiem tra session gio hang ton tai
            if(isset($_SESSION['cart'])) {
                $found = false;
                foreach($_SESSION['cart'] as $cart_item) {
                    // Neu du lieu trung lap
                    if($cart_item['id'] == $id) {
                        $tongsoluong = $soluong+$cart_item['soluong'];
                        $product[] = array('tensanpham'=>$cart_item['tensanpham'], 'id'=>$cart_item['id'], 'soluong'=>$tongsoluong, 
                            'giasp'=>$cart_item['giasp'], 'hinhanh'=>$cart_item['hinhanh'], 'masanpham'=>$cart_item['masanpham']);
                        $found = true;
                    }else {
                        // Neu du lieu khong bi trung lap
                        $product[] = array('tensanpham'=>$cart_item['tensanpham'], 'id'=>$cart_item['id'], 'soluong'=>$cart_item['soluong'], 
                            'giasp'=>$cart_item['giasp'], 'hinhanh'=>$cart_item['hinhanh'], 'masanpham'=>$cart_item['masanpham']);
                    }
                }
                if($found == false) {
                    // Lien ket du lieu new_product voi product
                    $_SESSION['cart'] = array_merge($product, $new_product);
                }else {
                    $_SESSION['cart'] = $product;
                }
            }else {
                $_SESSION['cart'] = $new_product;
            }
        }
        header("Location: ../../cart.php?quanly=giohang");
    }
    
?>

