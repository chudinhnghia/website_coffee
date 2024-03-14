<?php
    session_start();
    include("admin/config/config.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="./css/grid.css">
    <link rel="stylesheet" type="text/css" href="./css/base.css">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <link rel="stylesheet" type="text/css" href="./css/responsive.css">
    <title>Coffee House - Cảm ơn</title>
</head>
<body>
    <?php
    if(!isset($_SESSION['dangky'])) {
    ?>
    <div class="notLoggedInYet">
        Bạn chưa đăng nhập tài khoản, vui lòng mời bạn đăng nhập click <a href="logIn.php?quanly=dangnhap">Tại đây</a>
    </div>
    <?php
    } else {
        if(isset($_SESSION['dangky'])) {
            if(isset($_POST['dathang'])) {
                $email = $_POST['email'];
                $sql_dangky = "SELECT * FROM tbl_dangky WHERE tbl_dangky.email = '$email' LIMIT 1";
                $query_dangky = mysqli_query($mysqli, $sql_dangky);
                $row_dangky = mysqli_fetch_array($query_dangky);
                $hoten = $_POST['hovaten'];
                $sdt = $_POST['phone'];
                $diachi = $_POST['address'];
                $giatridonhang = $_POST['giatridonhang'];
                $iddangky = $row_dangky['id_dangky'];
                $sql_donhang = mysqli_query($mysqli, "INSERT INTO tbl_donhang(email, hoten, sdt, diachi, giatridonhang, id_dangky) VALUE(
                '".$email."', '".$hoten."', '".$sdt."', '".$diachi."', '".$giatridonhang."', '".$iddangky."')");
            
        
    ?>

    <div class="main checkOut-main">
        <div class="grid wide col">
            <a href="index.php?quanly=danhmucsanpham" class="checkOut-header payment-header_link">
                Coffee House
            </a>

            <div class="row">
                <div class="col l-7 m-7 c-12">
                    <div class="checkOut-left">
                        <div class="checkOut-left_header">
                            <div class="checkOut-left_header-checkMark">
                                <i class="fa-solid fa-check" style="color: #8ec343;"></i>
                            </div>

                            <div class="checkOut-left_header-right">
                                <div class="checkOut-left_header-right_h3">
                                    Cảm ơn bạn đã đặt hàng
                                </div>
                            </div>
                        </div>

                        <div class="checkOut-left_information">
                            <div class="checkOut-left_information-left">
                                <h2 class="checkOut-left_information-left_h2">
                                    Thông tin mua hàng
                                </h2>
                                <p class="checkOut-left_information-left_text">
                                    <?php echo $hoten; ?>
                                </p>
                                <p class="checkOut-left_information-left_text">
                                    <?php echo $email; ?>
                                </p>
                                <p class="checkOut-left_information-left_text">
                                    <?php echo $sdt; ?>
                                </p>
                                <div class="checkOut-left_information-left_paymentMethods">
                                    <h3>Phương thức thanh toán</h3>
                                    <p>Thanh toán khi giao hàng (COD)</p>
                                </div>
                            </div>

                            <div class="checkOut-left_information-right">
                                <h2 class="checkOut-left_information-right_h2">
                                    Địa chỉ nhận hàng
                                </h2>
                                <p class="checkOut-left_information-right_text">
                                    <?php echo $diachi; ?>
                                </p>
                                <div class="checkOut-left_information-right_paymentMethods">
                                    <h3>Phương thức vận chuyển</h3>
                                    <p>Giao hàng tận nơi</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    
                <?php
                    if(isset($_SESSION['cart'])) {
                        $tongtien = 0;
                        $thanhtien = 0;
                        $dem = count($_SESSION['cart']);
                ?>

                <div class="col l-5 m-5 c-12">
                    <div class="checkOut-order">
                        <div class="checkOut-order_header">
                            Đơn hàng (<?php echo $dem ?> sản phẩm)
                        </div>

                        <div class="checkOut-order_products">
                            <div class="payment-order_container checkOut-order_products-box">

                                <?php
                                foreach($_SESSION['cart'] as $cart_item) {
                                    $thanhtien = $thanhtien + ($cart_item['soluong']*$cart_item['giasp']);
                                    $tongtien = $thanhtien;
                                ?>

                                <div class="payment-order_products">
                                    <div class="payment-order_products-image">
                                        <img src="admin/modules/quanlysp/uploads/<?php echo $cart_item['hinhanh'] ?>" alt="">
                                        <div class="payment-order_products-quantity">
                                        <?php echo $cart_item['soluong']; ?>
                                        </div>
                                    </div>
        
                                    <div class="payment-order_products-box">
                                        <div class="payment-order_products-name">
                                            <?php echo $cart_item['tensanpham']; ?>
                                        </div>
            
                                        <div class="payment-order_products-money">
                                            <?php echo number_format($cart_item['giasp'], 0, ',', '.').'₫'; ?>
                                        </div>
                                    </div>
                                </div>

                                <?php
                                }
                                ?>

                            </div>
                        </div>

                        <div class="payment-order_count checkOut-order_count">
                            <div class="payment-order_count-provisional checkOut-order_count-provisional">
                                <div class="payment-order_count-name">
                                    Tạm tính
                                </div>

                                <div class="payment-order_count-money">
                                    <?php echo number_format($thanhtien, 0, ',', '.').'₫'; ?>
                                </div>
                            </div>

                            <div class="payment-order_count-transportFee checkOut-order_count-transportFee">
                                <div class="payment-order_count-name">
                                    Phí vận chuyển
                                </div>

                                <div class="payment-order_count-money">
                                    40.000₫
                                </div>
                            </div>

                            <div class="payment-order_count-total checkOut-order_count-total">
                                <div class="payment-order_count-total_name">
                                    Tổng cộng
                                </div>

                                <div class="payment-order_count-total_money">
                                    <?php echo number_format($tongtien+40000, 0, ',', '.').'₫'; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <?php
                    }
                ?>

            </div>

            <div class="checkOut-bottom">
                <a href="pagination/checkOut/xulycart.php?xoatatca=1" class="checkOut-btn">
                    Tiếp tục mua hàng
                </a>
            </div>
        </div>
    </div>

    <?php
            }
        }
    }
    ?>
</body>
</html>