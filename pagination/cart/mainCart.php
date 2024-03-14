


<!-- ------- Main Cart ------- -->
<div class="main-cart">
        <div class="grid wide col main-cart_none">
            <div class="main-cart_container">
                <div class="main-cart_header col">
                    <h3 class="main-cart_header-cart">
                        Giỏ hàng
                    </h3>
                </div>


                <div class="main-cart_top">
                    <ul class="main-cart_top-list">
                        <li class="main-cart_top-item" style="width: 18%;">Hình ảnh</li>
                        <li class="main-cart_top-item" style="width: 37%;">Thông tin sản phẩm</li>
                        <li class="main-cart_top-item" style="width: 17%;">Đơn giá</li>
                        <li class="main-cart_top-item" style="width: 14%;">Số lượng</li>
                        <li class="main-cart_top-item" style="width: 14%;">Thành tiền</li>
                    </ul>
                </div>

                <?php
                    if(isset($_SESSION['cart'])) {
                        $tongtien = 0;
                        foreach($_SESSION['cart'] as $cart_item) {
                            $thanhtien = $cart_item['soluong']*$cart_item['giasp'];
                            $tongtien = $tongtien + $thanhtien;
                ?>

                <div class="main-cart_between">
                    <div class="main-cart_between-image main-cart_between--same" style="width: 18%;">
                        <a href="./demo.html" class="main-cart_between-image_link">
                            <img src="admin/modules/quanlysp/uploads/<?php echo $cart_item['hinhanh'] ?>" alt="">
                        </a>
                    </div>
                    <div class="main-cart_between-information main-cart_between--same" style="width: 37%;">
                        <div class="main-cart_between-information_container">
                            <p class="main-cart_between-information_text">
                                <a href="./demo.html" class="main-cart_between-information_link">
                                    <?php echo $cart_item['tensanpham']; ?>
                                </a>
                                <p class="main-cart_between-information_money">
                                    Giá: <span> <?php echo number_format($cart_item['giasp'], 0, ',', '.').'₫'; ?></span>
                                </p>
                            </p>
                            <span class="main-cart_between-information_delete">
                                <a href="pagination/product/themgiohang.php?xoa=<?php echo $cart_item['id']; ?>" class="main-cart_between-information_delete-link">
                                    Xoá
                                </a>
                            </span>
                        </div>
                    </div>
                    <div class="main-cart_between-price main-cart_between--same" style="width: 17%;">
                        <span class="main-cart_between-price_money">
                            <?php echo number_format($cart_item['giasp'], 0, ',', '.').'₫'; ?>
                        </span>
                    </div>
                    <div class="main-cart_between-quantity main-cart_between--same" style="width: 14%;">
                        <div class="main-cart_between-quantity_container">
                            <span class="main-cart_between-quantity_number"><?php echo $cart_item['soluong']; ?></span>
                            <div class="main-cart_between-quantity_icon">
                                <a href="pagination/product/themgiohang.php?up=<?php echo $cart_item['id']; ?>" class="main-cart_between-quantity_up main-cart_between-quantity_button">
                                    <i class="fa-solid fa-caret-up"></i>
                                </a>
                                <a href="pagination/product/themgiohang.php?down=<?php echo $cart_item['id']; ?>" class="main-cart_between-quantity_down main-cart_between-quantity_button">
                                    <i class="fa-solid fa-caret-down"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- button up and down -->
                    <!-- <script>
                        let quantityNumber = document.querySelector('.main-cart_between-quantity_number');
                        let quantityUp = document.querySelector('.main-cart_between-quantity_up');
                        let quantityDown = document.querySelector('.main-cart_between-quantity_down');
                        let index = quantityNumber.innerText;
                        console.log(index);

                        quantityUp.addEventListener('click', function() {
                            if(!isNaN(index)) {
                                index++;
                                quantityNumber.innerText = index;
                                console.log(index);
                            }
                        });
                        
                        quantityDown.addEventListener('click', function() {
                            if(!isNaN(index) && index > 1) {
                                index--;
                                quantityNumber.innerText = index;
                                console.log(index);
                            }
                        });
                    </script> -->
                    <!-- ------------------ -->
                    <div class="main-cart_between-into-money main-cart_between--same" style="width: 14%;">
                        <span class="main-cart_between-into-money_total-money">
                            <?php echo number_format($thanhtien, 0, ',', '.').'₫'; ?>
                        </span>
                    </div>
                </div>

                <?php
                        }
                ?>

                <div class="main-cart_bottom">
                    <div class="row main-cart_bottom-row">
                        <div class="col l-5">
                            <div class="main-cart_bottom-left">
                                <div class="main-cart_bottom-left_continue">
                                    <a href="index.php?quanly=danhmucsanpham" class="main-cart_bottom-left_link">
                                        Tiếp tục mua hàng
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col l-7">
                            <div class="main-cart_bottom-right">
                                <div class="main-cart_bottom-right_container">
                                    <div class="main-cart_bottom-right_total-payment">
                                        <span class="main-cart_bottom-right_text">
                                            Tổng tiền thanh toán
                                        </span>
                                    </div>
                                    <div class="main-cart_bottom-right_money">
                                        <span class="main-cart_bottom-right_money-text">
                                            <?php echo number_format($tongtien, 0, ',', '.').'₫'; ?>
                                        </span>
                                    </div>
                                </div>
                                <div class="main-cart_bottom-right_payment">
                                    <a href="paymentOrder.php" class="main-cart_bottom-right_payment-link">
                                        Tiền hành thanh toán
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                    }else {
                ?>
                <div class="main-cart_between">
                    <p>Hiện tại giỏ hàng trống</p>
                </div>
                <?php
                    }
                ?>
            </div>
        </div>
</div>
