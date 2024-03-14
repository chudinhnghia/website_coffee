<!-- ------- page --------- -->
<div class="page">
        <div class="grid wide col">
            <ul class="page-list">
                <li class="page-item">
                    <a href="index.php?quanly=danhmucsanpham" class="page-link">Trang chủ</a>
                    <i class="fas fa-circle page-item_icon"></i>
                </li>

                <li class="page-item">
                    <?php
                    if(isset($_GET['quanly']) && $_GET['quanly'] == 'gioithieu') {
                    ?>

                    <strong class="page-item_strong">
                        <span>Giới thiệu</span>
                    </strong>

                    <?php
                    } else if(isset($_GET['quanly']) && $_GET['quanly'] == 'tatcasanpham') {
                    ?>

                    <strong class="page-item_strong">
                        <span>Tất cả sản phẩm</span>
                    </strong>

                    <?php
                    } else if(isset($_GET['quanly']) && $_GET['quanly'] == 'dichvu') {
                    ?>

                    <strong class="page-item_strong">
                        <span>Dịch vụ</span>
                    </strong>

                    <?php
                    } else if(isset($_GET['quanly']) && $_GET['quanly'] == 'tintuc') {
                    ?>

                    <strong class="page-item_strong">
                        <span>Tin tức</span>
                    </strong>

                    <?php
                    } else if(isset($_GET['quanly']) && $_GET['quanly'] == 'lienhe') {
                    ?>

                    <strong class="page-item_strong">
                        <span>Liên hệ</span>
                    </strong>

                    <?php
                    } else if(isset($_GET['quanly']) && $_GET['quanly'] == 'timkiem') {
                    ?>

                    <strong class="page-item_strong">
                        <span>Tìm kiếm</span>
                    </strong>

                    <?php
                    } else if(isset($_GET['quanly']) && $_GET['quanly'] == 'giohang') {
                    ?>

                    <strong class="page-item_strong">
                        <span>Giỏ hàng</span>
                    </strong>

                    <?php
                    } else if(isset($_GET['quanly']) && $_GET['quanly'] == 'dangky') {
                    ?>

                    <strong class="page-item_strong">
                        <span>Đăng ký</span>
                    </strong>

                    <?php
                    } else if(isset($_GET['quanly']) && $_GET['quanly'] == 'dangnhap') {
                    ?>

                    <strong class="page-item_strong">
                        <span>Đăng nhập</span>
                    </strong>

                    <?php
                    } else if(isset($_GET['quanly']) && $_GET['quanly'] == 'trangtaikhoan') {
                        ?>
    
                        <strong class="page-item_strong">
                            <span>Trang khách hàng</span>
                        </strong>
    
                        <?php
                    } else {
                    ?>

                    <strong class="page-item_strong">
                        <span><?php echo $_GET['quanly'] ?></span>
                    </strong>
                    
                    <?php
                    }
                    ?>
                </li>
            </ul>
        </div>
    </div>