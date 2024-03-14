<?php
    $sql_demoProduct = "SELECT * FROM tbl_danhmuc, tbl_sanpham WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc AND 
    tbl_sanpham.id_sanpham='$_GET[id]' LIMIT 1";
    $query_demoProduct = mysqli_query($mysqli, $sql_demoProduct);
?>


<!-- ------- Demo product ------- -->
<div class="demo">
        <div class="grid wide col">
            <div class="demo-container">
            <?php 
                while($row = mysqli_fetch_array($query_demoProduct)) {
            ?>
                <form action="pagination/product/themgiohang.php?idsanpham=<?php echo $row['id_sanpham'] ?>" method="POST">
                    <div class="row">
                        <div class="demo-product_images l-6 m-6 c-12">
                            <div class="demo-product_images-top">
                                <a class="demo-product_images-top_link">
                                    <img src="admin/modules/quanlysp/uploads/<?php echo $row['hinhanh'] ?>" alt="" class="demo-product_images-top_img">
                                </a>
                            </div>
                            <div class="demo-product_images-bottom">
                                <span class="demo-product_images-bottom_span">
                                    <img src="admin/modules/quanlysp/uploads/<?php echo $row['hinhanh'] ?>" alt="" class="demo-product_images-bottom_img">
                                </span>
                            </div>
                        </div>

                        <div class="demo-product_content l-6 m-6 c-12">
                            <div class="demo-product_content-top">
                                <div class="demo-product_content-top_star">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                <span class="demo-product_content-top_divide">|</span>
                                <div class="demo-product_content-top_brand">
                                    Thương hiệu: <span class="demo-product_content-top_update">Đang cập nhật</span>
                                </div>
                            </div>

                            <div class="demo-product_content-head">
                                <h2 class="demo-product_content-head_h2"><?php echo $row['tensp'] ?></h2>
                            </div>

                            <div class="demo-product_content-money">
                                <span class="demo-product_content-money_text">
                                    <?php echo number_format($row['giasp'], 0, ',', '.').'₫' ?>
                                </span>
                            </div>

                            <div class="demo-product_content-nearEnd">
                                    <div class="demo-product_content-nearEnd_container">
                                        <div class="demo-product_content-nearEnd_left">
                                            <span class="demo-product_content-nearEnd_left-decrease">
                                                <i class="fa-solid fa-minus"></i>
                                            </span>
                                            <input type="text" name="soluongsp" value="1" maxlength="3" class="demo-product_content-nearEnd_left-number"
                                            onchange="if(this.value == 0)return this.value=1;" onkeypress="validateNumberInput(event)" oninput="changeInput()">
                                            <span class="demo-product_content-nearEnd_left-increase">
                                                <i class="fa-solid fa-plus"></i>
                                            </span>
                                        </div>

                                        <div class="demo-product_content-nearEnd_right">
                                            <button type="submit" name="themgiohang" class="demo-product_content-nearEnd_right-order">
                                                Đặt hàng
                                            </button>
                                        </div>
                                    </div>
                            </div>

                            <div class="demo-product_content-bottom">
                                <span class="demo-product_content-bottom_information">Thông tin:</span>
                                <p class="demo-product_content-bottom_text">
                                    Thông tin sản phẩm đang được cập nhật
                                </p>
                            </div>
                        </div>
                        <?php
                        }
                        ?>
                    </div>
                </form>
            </div>
        </div>
    </div>
