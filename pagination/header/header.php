<?php
    $sql_lietke_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY thutu ASC";
    $query_lietke_danhmuc = mysqli_query($mysqli, $sql_lietke_danhmuc);

    $sql_lietke_danhmuc_mobile = "SELECT * FROM tbl_danhmuc ORDER BY thutu ASC";
    $query_lietke_danhmuc_mobile = mysqli_query($mysqli, $sql_lietke_danhmuc_mobile);
?>

<?php
    if(isset($_GET['quanly']) && $_GET['quanly'] == 'dangxuat') {
        unset($_SESSION['dangky']);
    }
?>


<!-- ---------Header---------- -->
<header <?php if($_GET['quanly'] != 'danhmucsanpham'){echo 'style="height: 250px;"';} ?>>
        <!-- Slide -->
        <?php 
        if($_GET['quanly'] == 'danhmucsanpham') {
        ?>
        <div class="header-slide">
            <div class="header-slide_box">
                <a href="#" class="list-images">
                    <img id="img-slide" src="./img/slider/slider_1.jpg" alt="">
                    <img id="img-slide" src="./img/slider/slider_2.jpg" alt="">
                </a>
            </div>
        </div>

        <?php
        }
        ?>

        <!-- Header top -->
        <div class="header-top">
            <div class="grid wide col">
                <div class="row sm-gutter">
                    <div class="col l-6 m-6">
                        <h4 class="header-top_title">Chào mừng bạn đến với Coffee House !</h4>
                    </div>

                    <div class="col l-6 m-6">
                        <ul class="header-top_right">
                            <?php
                            if(isset($_SESSION['dangky'])) {
                            ?>
                            <li class="header-top_right-item"><a href="account.php?quanly=trangtaikhoan">Tài khoản</a></li>
                            <li class="header-top_right-item header-top_right-item--magrin">/</li>
                            <li class="header-top_right-item"><a href="index.php?quanly=dangxuat">Thoát</a></li>
                            <?php
                            } else {
                            ?>
                            <li class="header-top_right-item"><a href="register.php?quanly=dangky">Đăng ký</a></li>
                            <li class="header-top_right-item header-top_right-item--magrin">/</li>
                            <li class="header-top_right-item"><a href="logIn.php?quanly=dangnhap">Đăng nhập</a></li>
                            <?php
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- --------- Nav --------- -->
        <div class="header-nav">
            <div class="grid wide col header-nav_height header-nav_mobile">
                <div class="header-nav_box">
                    <div class="row header-nav_box--flex">
                        <ul class="header-nav_left">
                            <li class="header-nav_left-item">
                                <a href="index.php?quanly=danhmucsanpham" class="header-nav_left-link 
                                    <?php if(isset($_GET['quanly']) && $_GET['quanly'] == 'danhmucsanpham'){
                                    $class = 'header-nav_left-link--color'; echo $class;} ?>">
                                Trang chủ
                            </a>
                            </li>
                            <li class="header-nav_left-item">
                                <a href="introduce.php?quanly=gioithieu" 
                                class="header-nav_left-link <?php if(isset($_GET['quanly']) && $_GET['quanly'] == 'gioithieu'){
                                    $class = 'header-nav_left-link--color'; echo $class;} ?>">
                                    Giới thiệu
                                </a>
                            </li>
                            <li class="header-nav_left-item header-nav_left-item--p header-nav_left-item--h">
                                <a href="product.php?quanly=tatcasanpham" 
                                class="header-nav_left-link header-nav_left-link--margin <?php if(isset($_GET['quanly']) && $_GET['quanly'] == 'tatcasanpham'){
                                    $class = 'header-nav_left-link--color'; echo $class;} ?>">
                                    Sản phẩm<i class="fas fa-caret-down"></i>
                                </a>
                                <ul class="item-small">
                                <?php
                                    while($row = mysqli_fetch_array($query_lietke_danhmuc)) {
                                ?>
                                    <li><a href="productsByCartegoryMain.php?quanly=<?php echo $row['tendanhmuc']; ?>&id=<?php echo $row['id_danhmuc']; ?>"><?php echo $row["tendanhmuc"]; ?></a></li>
                                <?php
                                    }
                                ?>

                                </ul>
                            </li>
                        </ul>

                        <ul class="header-nav_middle">
                            <li class="header-nav_middle-item">
                                <a href="index.php?quanly=danhmucsanpham" class="header-nav_middle-link <?php if(isset($_GET['quanly']) && $_GET['quanly'] == 'danhmucsanpham'){
                                    $class = 'header-nav_left-link--color'; echo $class;} ?>">
                                    <img src="./img/logo/logo.jpg" alt="">
                                </a>
                            </li>
                        </ul>

                        <ul class="header-nav_right">
                            <li class="header-nav_right-item">
                                <a href="service.php?quanly=dichvu" 
                                class="header-nav_right-link <?php if(isset($_GET['quanly']) && $_GET['quanly'] == 'dichvu'){
                                    $class = 'header-nav_left-link--color'; echo $class;} ?>">
                                    Dịch vụ
                                </a>
                            </li>
                            <li class="header-nav_right-item">
                                <a href="news.php?quanly=tintuc" class="header-nav_right-link <?php if(isset($_GET['quanly']) && $_GET['quanly'] == 'tintuc'){
                                    $class = 'header-nav_left-link--color'; echo $class;} ?>">
                                    Tin tức
                                </a>
                            </li>
                            <li class="header-nav_right-item">
                                <a href="contact.php?quanly=lienhe" class="header-nav_right-link <?php if(isset($_GET['quanly']) && $_GET['quanly'] == 'lienhe'){
                                    $class = 'header-nav_left-link--color'; echo $class;} ?>">
                                    Liên hệ
                                </a>
                            </li>
                        </ul>

                        <div class="cartgroup">
                            <div class="cartgroup-search">
                                <span class="cartgroup-search_link">
                                    <i class="fa-solid fa-magnifying-glass cartgroup-search_icon" style="color: #ffffff;"></i>
                                </span>

                                <div class="searchmini">
                                    <form action="search.php?quanly=timkiem" method="POST" class="search-form">
                                        <input type="text" placeholder="Tìm kiếm..." name="tukhoa" class="search-input">
                                        <button type="submit" name="timkiem" value="Tìm kiếm" class="search-button">
                                            <i class="fa-solid fa-magnifying-glass" style="color: #ffffff;"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                            
                            <div class="xo">|</div>

                            <div class="cartgroup-cart">
                                <a href="cart.php?quanly=giohang" class="cartgroup-cart_link">
                                    <i class="fa-solid fa-bag-shopping" style="color: #e7b45a;"></i>
                                    <span class="cartgroup-cart_number">
                                    <?php
                                        if(isset($_SESSION['cart'])) {
                                            $cartQuantity = count($_SESSION['cart']);
                                            echo $cartQuantity;
                                        } else {
                                            echo '0';
                                        }
                                    ?>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        
        <!-- -------- Nav Mobile ---------- -->
        <div class="header-nav-mobile">
                <div class="header-nav-mobile_icon">
                    <i class="fa-solid fa-bars"></i>
                </div>
        </div>

        <div class="opacity-nav"></div>

        <ul class="header-nav-mobile_list">
            <li class="header-nav-mobile_item-img">
                <span class="header-nav-mobile_item-img_turn-off">x</span>
            </li>
            <li class="header-nav-mobile_item">
                <a href="index.php?quanly=danhmucsanpham" class="header-nav-mobile_link">
                    Trang chủ
                </a>
            </li>
            <li class="header-nav-mobile_item">
                <a href="introduce.php?quanly=gioithieu" class="header-nav-mobile_link">
                    Giới thiệu
                </a>
            </li>
            <li class="header-nav-mobile_item header-nav-mobile_item--icon">
                <a href="product.php?quanly=tatcasanpham" class="header-nav-mobile_link">
                    Sản phẩm 
                </a>

                <i id="icon-nav-small" class="fa-solid fa-plus nav-small-icon"></i>

                <ul class="header-nav-mobile_item-small">
                    <?php
                    while($row_mobile = mysqli_fetch_array($query_lietke_danhmuc_mobile)) {
                    ?>
                    <li class="header-nav-mobile_item-small_item">
                        <a href="productsByCartegoryMain.php?quanly=<?php echo $row_mobile['tendanhmuc']; ?>&id=<?php echo $row_mobile['id_danhmuc']; ?>" class="header-nav-mobile_item-small_link">
                        <?php echo $row_mobile["tendanhmuc"]; ?>
                        </a>
                    </li>
                    <?php
                    }
                    ?>
                </ul>
            </li>
            <li class="header-nav-mobile_item">
                <a href="service.php?quanly=dichvu" class="header-nav-mobile_link">
                    Dịch vụ
                </a>
            </li>
            <li class="header-nav-mobile_item">
                <a href="news.php?quanly=tintuc" class="header-nav-mobile_link">
                    Tin tức
                </a>
            </li>
            <li class="header-nav-mobile_item">
                <a href="contact.php?quanly=lienhe" class="header-nav-mobile_link">
                    Liên hệ
                </a>
            </li>
            <?php
            if(isset($_SESSION['dangky'])) {
            ?>
            <li class="header-nav-mobile_item">
                <a href="account.php?quanly=trangtaikhoan" class="header-nav-mobile_link">
                    <i class="fa-solid fa-user"></i> Tài khoản
                </a>
            </li>
            <li class="header-nav-mobile_item">
                <a href="index.php?quanly=dangxuat" class="header-nav-mobile_link">
                    <i class="fa-solid fa-user-plus"></i> Thoát
                </a>
            </li>
            <?php
            } else {
            ?>
            <li class="header-nav-mobile_item">
                <a href="register.php?quanly=dangky" class="header-nav-mobile_link">
                    <i class="fa-solid fa-user"></i> Đăng ký
                </a>
            </li>
            <li class="header-nav-mobile_item">
                <a href="logIn.php?quanly=dangnhap" class="header-nav-mobile_link">
                    <i class="fa-solid fa-user-plus"></i> Đăng nhập
                </a>
            </li>
            <?php
            }
            ?>
        </ul>
</header>