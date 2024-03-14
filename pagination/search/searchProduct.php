<?php
    $tukhoa = "";
    if(isset($_POST['timkiem'])) {
        $tukhoa = $_POST['tukhoa'];
    }
    $sql_pro = "SELECT * FROM tbl_sanpham WHERE tbl_sanpham.tensp LIKE '%".$tukhoa."%'";
    $query_pro = mysqli_query($mysqli, $sql_pro);
?>




<!-- --------- Search Product ----------- -->
<div class="searchProduct">
        <div class="grid wide col">
            <div class="searchProduct-container">
                <h2 class="searchProduct-heading">
                    Trang tìm kiếm
                </h2>
                
                <div class="searchProduct-content">
                    <?php
                    $num_results = mysqli_num_rows($query_pro);
                    if($num_results > 0 && $tukhoa != '') {
                    ?>  
                    <p class="searchProduct-result">
                        Có <?php echo $num_results; ?> kết quả tìm kiếm phù hợp
                    </p>
                    <div class="row">
                        <?php
                        while($row = mysqli_fetch_array($query_pro)) {
                        ?>
                        <div class="col l-6 m-6 c-12">
                            <div class="menu-coffee_tab-box">
                                <div class="menu-coffee_tab-img">
                                    <div class="menu-coffee_tab-img_box">
                                        <a href="demo.php?quanly=sanpham&id=<?php echo $row['id_sanpham'] ?>" class="menu-coffee_tab-img_link">
                                            <img src="admin/modules/quanlysp/uploads/<?php echo $row['hinhanh']; ?>" alt="">
                                        </a>
                                    </div>
                                </div>

                                <div class="menu-coffee_tab-info">
                                        <div class="menu-coffee_tab-info_name">
                                            <h3 class="menu-coffee_tab-info_name-h3">
                                                <a href="demo.php?quanly=sanpham&id=<?php echo $row['id_sanpham'] ?>" title="Cà phê Trứng" class="menu-coffee_tab-info_name-link searchProduct-content_link">
                                                    <span><?php echo $row['tensp']; ?></span>
                                                </a>
                                            </h3>
                                        </div>

                                        <div class="menu-coffee_tab-info_money searchProduct-content_money">
                                            <span><?php echo number_format($row['giasp'], 0, ',', '.').'₫' ?></span>
                                        </div>

                                        <div class="menu-coffee_tab-info_text">
                                            <?php echo $row['noidung']; ?>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
                <?php
                } else {
                ?>
                <div class="searchProduct-notFound">
                    Không tìm thấy bất kỳ kết quả nào với từ khóa <?php echo $tukhoa; ?>
                </div>
                <?php
                }
                ?>
            </div>
        </div>
    </div>