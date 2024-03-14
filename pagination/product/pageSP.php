<?php
    $sql_pageSP = "SELECT * FROM tbl_danhmuc, tbl_sanpham WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc AND 
    tbl_sanpham.id_sanpham='$_GET[id]' LIMIT 1";
    $query_pageSP = mysqli_query($mysqli, $sql_pageSP);
?>

<!-- ------- page --------- -->
<div class="page">
            <div class="grid wide col">
                <?php
                while($row = mysqli_fetch_array($query_pageSP)) {
                ?>
                <ul class="page-list">
                    <li class="page-item">
                        <a href="index.php?quanly=danhmucsanpham" class="page-link">Trang chủ</a>
                        <i class="fas fa-circle page-item_icon"></i>
                    </li>

                    <li class="page-item">
                        <a href="productsByCartegoryMain.php?quanly=<?php echo $row['tendanhmuc']; ?>&id=<?php echo $row['id_danhmuc']; ?>" class="page-link"><?php echo $row['tendanhmuc'] ?></a>
                        <i class="fas fa-circle page-item_icon"></i>
                    </li>

                    <li class="page-item">
                        <strong class="page-item_strong">
                            <span><?php echo $row['tensp'] ?></span>
                        </strong>
                    </li>
                </ul>
                <?php
                }
                ?>
            </div>
        </div>