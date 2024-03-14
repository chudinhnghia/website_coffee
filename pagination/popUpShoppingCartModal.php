<?php
    include("../admin/config/config.php");
    $sql_cart = "SELECT * FROM tbl_danhmuc, tbl_sanpham WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc AND 
    tbl_sanpham.id_sanpham='$_GET[id]' ORDER BY tbl_sanpham.id_sanpham DESC";
    $query_cart = mysqli_query($mysqli, $sql_cart);
?>



<!-- ------- Pop Up Shopping Cart Modal ------- -->
<div class="popUpShoppingCartModal popUp-effect">
        <div class="popup-overlay"></div>
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="row">
                    <?php
                    while($row = mysqli_fetch_array($query_cart)) {
                    ?>
                    <div class="col l-6 m-6 c-12">
                        <div class="modal-left">
                            <div class="modal-left_top">
                                <span class="modal-left_top-icon">
                                    <i class="fa-solid fa-check"></i>
                                </span>
                                <p class="modal-left_top-text">
                                    Sản phẩm đã được thêm vào giỏ hàng
                                </p>
                            </div>

                            <div class="modal-left_bottom">
                                <div class="modal-left_bottom-image">
                                    <img src="admin/modules/quanlysp/uploads/<?php echo $row['hinhanh'] ?>" alt="" class="modal-left_bottom-img">
                                </div>
                                <div class="modal-left_bottom-content">
                                    <div class="modal-left_bottom-content_name">
                                        <?php echo $row['tensp'] ?>
                                    </div>
                                    <div class="modal-left_bottom-content_money">
                                        <?php echo $row['giasp'].'đ' ?> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col l-6 m-6 c-12">
                        <div class="modal-right">
                            <div class="modal-right_top">
                                <a href="./cart.html" class="modal-right_top-link">
                                    Giỏ hàng của bạn (<span class="modal-right_top-link_number">1</span> sản phẩm)
                                </a>
                            </div>
                            <div class="modal-right_between">
                                <span class="modal-right_between-total">Tổng tiền:</span>
                                <span class="modal-right_between-money">50.000đ</span>
                            </div>
                            <div class="modal-right_bottom">
                                <a href="#" class="modal-right_bottom-link">
                                    Tiến hành thanh toán
                                </a>
                            </div>
                            <div class="modal-right_delete">
                                <i class="fa-solid fa-xmark"></i>
                            </div>
                            <!-- --- JS Pop Up Shopping Cart Modal ---  -->
                            <script>
                                let buttonOrder = document.querySelector('.demo-product_content-nearEnd_right-order');
                                let deleteOrder = document.querySelector('.modal-right_delete');
                                let popUpOverlay = document.querySelector('.popup-overlay');
                                let popUpShoppingCartModal = document.querySelector('.popUpShoppingCartModal');
                                // let popUpBlur = document.querySelector('.popUp-effect');

                                buttonOrder.addEventListener('click', function() {
                                    popUpShoppingCartModal.style.display = 'block';
                                    // popUpBlur.classList.add('popUp-blur');
                                });

                                deleteOrder.addEventListener('click', function() {
                                    popUpShoppingCartModal.style.display = 'none';
                                    // popUpBlur.classList.remove('popUp-blur');
                                });

                                popUpOverlay.addEventListener('click', function() {
                                    popUpShoppingCartModal.style.display = 'none';
                                    // popUpBlur.classList.remove('popUp-blur');
                                });
                            </script>
                        </div>
                    </div>
                    <?php 
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>