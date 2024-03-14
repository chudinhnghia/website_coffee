<?php
    session_start();

    include("admin/config/config.php");

    $sql = "SELECT * FROM tbl_dangky LIMIT 1";
    $query = mysqli_query($mysqli, $sql);
?>

<?php
    if(isset($_GET['quanly']) && $_GET['quanly'] == 'dangxuat') {
        unset($_SESSION['dangky']);
    }
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
    <title>Thanh toán hoá đơn Coffee House</title>
</head>
<body>
    <div class="main">
        <div class="grid wide col">
            <form action="checkOut.php" method="POST">
                <div class="row">
                    <div class="col l-8 m-12 c-12">
                        <div class="payment-left">
                            <div class="payment-header">
                                <a href="index.php?quanly=danhmucsanpham" class="payment-header_link">
                                    Coffee House
                                </a>
                            </div>  
                            
                            <div class="row">
                                <div class="col l-6 m-12 c-12">
                                    <div class="payment-form">

                                        <?php
                                            if(!isset($_SESSION['dangky'])) {
                                        ?>

                                        <div class="payment-form_information">
                                            <h3 class="payment-form_information-h3">
                                                Thông tin nhận hàng
                                            </h3>

                                            <a href="logIn.php?quanly=dangnhap" class="payment-form_login">
                                                <i class="fa-regular fa-circle-user"></i>
                                                Đăng nhập
                                            </a>
                                        </div>

                                        <div class="payment-form_content">
                                            <div class="payment-form_box">
                                                <label for="paymentEmail" class="payment-form_label">Email</label>
                                                <input type="email" id="paymentEmail" class="payment-form_input" required>
                                            </div>
                                        </div>

                                        <div class="payment-form_content">
                                            <div class="payment-form_box">
                                                <label for="paymentName" class="payment-form_label">Họ và tên</label>
                                                <input type="text" id="paymentName" class="payment-form_input" required>
                                            </div>
                                        </div>

                                        <div class="payment-form_content">
                                            <div class="payment-form_box">
                                                <label for="paymentPhone" class="payment-form_label">Số diện thoại</label>
                                                <input type="phone" id="paymentPhone" class="payment-form_input" required>
                                            </div>
                                        </div>
                                            
                                        <div class="payment-form_content">
                                            <div class="payment-form_box">
                                                <label for="paymentAddress" class="payment-form_label">Địa chỉ</label>
                                                <input type="text" id="paymentAddress" class="payment-form_input" required>
                                            </div>
                                        </div>

                                        <div class="payment-form_content">
                                            <div class="payment-form_box">
                                                <label for="paymentNote" class="payment-form_label">Ghi chú</label>
                                                <textarea name="note" id="paymentNote" cols="30" rows="10" class="payment-form_input"></textarea>
                                            </div>
                                        </div>

                                        <?php
                                            } else {
                                        ?>

                                        <div class="payment-form_information">
                                            <h3 class="payment-form_information-h3">
                                                Thông tin nhận hàng
                                            </h3>

                                            <a href="paymentOrder.php?quanly=dangxuat" class="payment-form_login">
                                                <i class="fa-solid fa-right-from-bracket"></i>
                                                Đăng xuất
                                            </a>
                                        </div>
                                        
                                        <?php
                                        if($row = mysqli_fetch_array($query)) {
                                        ?>

                                        <div class="payment-form_content">
                                            <div class="payment-form_box">
                                                <label for="paymentEmail" class="payment-form_label">Email</label>
                                                <input type="email" id="paymentEmail" value="<?php echo $row['email'] ?>" name="email" class="payment-form_input payment-form_input--disable" required>
                                            </div>
                                        </div>

                                        <div class="payment-form_content">
                                            <div class="payment-form_box">
                                                <label for="paymentName" class="payment-form_label">Họ và tên</label>
                                                <input type="text" id="paymentName" value="<?php echo $row['tenkhachhang'] ?>" name="hovaten" class="payment-form_input" required>
                                            </div>
                                        </div>

                                        <div class="payment-form_content">
                                            <div class="payment-form_box">
                                                <label for="paymentPhone" class="payment-form_label">Số diện thoại</label>
                                                <input type="phone" id="paymentPhone" value="<?php echo $row['sodienthoai'] ?>" name="phone" class="payment-form_input" required>
                                            </div>
                                        </div>
                                            
                                        <div class="payment-form_content">
                                            <div class="payment-form_box">
                                                <label for="paymentAddress" class="payment-form_label">Địa chỉ</label>
                                                <input type="text" id="paymentAddress" name="address" class="payment-form_input" required>
                                            </div>
                                        </div>

                                        <div class="payment-form_content">
                                            <div class="payment-form_box">
                                                <label for="paymentNote" class="payment-form_label">Ghi chú</label>
                                                <textarea name="note" id="paymentNote" cols="30" rows="10" class="payment-form_input"></textarea>
                                            </div>
                                        </div>

                                        <?php
                                            }
                                        }
                                        ?>

                                    </div>
                                </div>
                    
                                <div class="col l-6 m-12 c-12">
                                    <div class="payment-radio">
                                        <div class="payment-radio_transport">
                                            <h3 class="payment-radio_transport-h3">
                                                Vận chuyển
                                            </h3>

                                            <div class="payment-radio_transport-box">
                                                <input type="radio" id="paymentRadio" class="payment-radio_transport-box_input" checked>
                                                <label for="paymentRadio" class="payment-radio_transport-box_label">
                                                    <p class="payment-radio_transport-box_text">
                                                        Giao hàng tận nơi
                                                    </p>
                                                    <span class="payment-radio_transport-box_money">
                                                        40.000₫
                                                    </span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="payment-radio">
                                        <div class="payment-radio_transport">
                                            <h3 class="payment-radio_transport-h3">
                                                Thanh toán
                                            </h3>

                                            <div class="payment-radio_transport-box payment-radio_transport-box_padding">
                                                <input type="radio" id="paymentRadio2" class="payment-radio_transport-box_input payment-radio_transport-box_input--checked" checked>
                                                <label for="paymentRadio2" class="payment-radio_transport-box_label">
                                                    <p class="payment-radio_transport-box_text">
                                                        Thanh toán khi giao hàng (COD)
                                                    </p>
                                                    <span class="payment-radio_transport-box_money">
                                                        <i class="fa-regular fa-money-bill-1" style="color: #1990c6;"></i>
                                                    </span>
                                                </label>
                                                <div class="payment-radio_transport-box_hidden">
                                                    <p>
                                                        Bạn chỉ phải thanh toán khi nhận được hàng
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col l-4 m-12 c-12">
                        <div class="payment-order">
                            <?php
                            if(isset($_SESSION['cart'])) {
                                $tongtien = 0;
                                $thanhtien = 0;
                                $dem = count($_SESSION['cart']);
                            ?>
                            <h3 class="payment-order_header">
                                Đơn hàng (<?php echo $dem ?> sản phẩm)
                            </h3>
                            
                            <?php
                                foreach($_SESSION['cart'] as $cart_item) {
                                    $thanhtien = $thanhtien + ($cart_item['soluong']*$cart_item['giasp']);
                                    $tongtien = $thanhtien;
                            ?>

                            <div class="payment-order_container">
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
                            </div>
                            <?php
                                    }
                                    
                            ?>

                            <div class="payment-order_count">
                                <div class="payment-order_count-provisional">
                                    <div class="payment-order_count-name">
                                        Tạm tính
                                    </div>

                                    <div class="payment-order_count-money">
                                        <?php echo number_format($thanhtien, 0, ',', '.').'₫'; ?>
                                    </div>
                                </div>

                                <?php
                                }
                                ?>

                                <div class="payment-order_count-transportFee">
                                    <div class="payment-order_count-name">
                                        Phí vận chuyển
                                    </div>

                                    <div class="payment-order_count-money">
                                        40.000₫
                                    </div>
                                </div>

                                <div class="payment-order_count-total">
                                    <div class="payment-order_count-total_name">
                                        Tổng cộng
                                    </div>

                                    <div class="payment-order_count-total_money">
                                        <?php echo number_format($tongtien+40000, 0, ',', '.').'₫'; ?>
                                    </div>
                                    <input type="hidden" name="giatridonhang" id="giatridonhang" value="<?php echo $tongtien + 40000; ?>">
                                </div>

                                <div class="payment-order_count-bottom">
                                    <a href="cart.php?quanly=giohang" class="payment-order_count-bottom_link">
                                        <span class="payment-order_count-bottom_return">❮</span>
                                        Quay về giỏ hàng
                                    </a>

                                    <button type="submit" name="dathang" class="payment-order_count-bottom_btn">
                                        đặt hàng
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>