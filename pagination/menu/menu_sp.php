                    <?php
                        $sql_lietke_sp = "SELECT * FROM tbl_danhmuc, tbl_sanpham WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc AND 
                        tbl_sanpham.id_danhmuc='$_GET[id]' ORDER BY tbl_sanpham.id_sanpham DESC";
                        $query_lietke_sp = mysqli_query($mysqli, $sql_lietke_sp);
                    ?>
                    
                    
                    <div class="menu-coffee_content">
                        <div id="" class="menu-coffee_tab" style="display: block;">
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
                                
                                <div class="col l-12 m-12 c-12">
                                    <div class="see-more">
                                        <a href="product.php?quanly=tatcasanpham" class="see-more_link">
                                            Xem thêm <i class="fa-solid fa-caret-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>                     
                    </div>