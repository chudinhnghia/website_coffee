<?php
    $sql_lietke_sp = "SELECT * FROM tbl_danhmuc, tbl_sanpham WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc ORDER BY tbl_sanpham.id_sanpham ASC";
    $query_lietke_sp = mysqli_query($mysqli, $sql_lietke_sp);
?>

<!-- --------- All Product ------------ -->
<div class="menu menu-page-product">
    <div class="grid wide col">
        <div class="menu-title">
            <div class="row">
                <div class="menu-heading">
                    <h2 class="menu-large-title">
                        tất cả sản phẩm
                    </h2>
                </div>
            </div>
        </div>

        <div class="menu-coffee">
            <div class="menu-coffee_content">
                <div id="content-tabb1" class="menu-coffee_tab" style="display: block;">
                    <div class="row">
                        <?php
                        while($row = mysqli_fetch_array($query_lietke_sp)) {
                        ?>
                        <div class="col l-6 m-6 c-12">
                            <div class="menu-coffee_tab-box">
                                <div class="menu-coffee_tab-img">
                                    <div class="menu-coffee_tab-img_box">
                                        <a href="demo.php?quanly=sanpham&id=<?php echo $row['id_sanpham'] ?>" class="menu-coffee_tab-img_link">
                                            <img src="admin/modules/quanlysp/uploads/<?php echo $row['hinhanh'] ?>" alt="">
                                        </a>
                                    </div>
                                </div>

                                <div class="menu-coffee_tab-info">
                                        <div class="menu-coffee_tab-info_name">
                                            <h3 class="menu-coffee_tab-info_name-h3">
                                                <a href="demo.php?quanly=sanpham&id=<?php echo $row['id_sanpham'] ?>" title="Cà phê Trứng" class="menu-coffee_tab-info_name-link">
                                                    <span><?php echo $row['tensp'] ?></span>
                                                </a>
                                            </h3>
                                        </div>

                                        <div class="menu-coffee_tab-info_money">
                                            <span><?php echo number_format($row['giasp'], 0, ',', '.').'₫' ?></span>
                                        </div>

                                        <div class="menu-coffee_tab-info_text">
                                        <?php echo $row['noidung'] ?>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>