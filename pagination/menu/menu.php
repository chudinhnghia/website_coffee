<?php
    $sql_lietke_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY thutu ASC";
    $query_lietke_danhmuc = mysqli_query($mysqli, $sql_lietke_danhmuc);
    
    $sql_id = "SELECT tbl_danhmuc.id_danhmuc FROM tbl_danhmuc ORDER BY thutu ASC";
    $query_id = mysqli_query($mysqli, $sql_id);
    $row_id = mysqli_fetch_array($query_id);
?>



<!-- --------- Menu ------------ -->
<div class="menu">
            <div class="grid wide col">
                <div class="menu-title">
                    <div class="row">
                        <div class="menu-heading">
                            <h2 class="menu-large-title">
                                Menu hôm nay
                            </h2>
                            <span class="menu-mini-title">
                                Xem menu hôm nay
                            </span>
                        </div>
                    </div>
                </div>

                <div class="menu-coffee">
                    <div class="menu-coffee_menu">
                        <span class="menu-coffee_text-mobile">
                            Cà phê thế giới
                        </span>

                        <i class="fa-solid fa-bars menu-coffee_icon-mobile"></i>

                        <ul class="menu-coffee_list">
                            <?php
                            while($row = mysqli_fetch_array($query_lietke_danhmuc)) {
                                
                            ?>

                            <li class="menu-coffee_item">
                                <a href="index.php?quanly=danhmucsanpham&id=<?php echo $row['id_danhmuc'] ?>" 
                                class="menu-coffee_link menu-coffee_link--tab1 <?php if (isset($_GET['id']) && $_GET['id'] == $row['id_danhmuc'])
                                {$class = 'menu-coffee_link--active'; echo $class;} ?>">
                                <?php echo $row["tendanhmuc"] ?>
                                
                            </a>
                            </li>

                            <?php
                            }
                            ?>           
                        </ul>
                    </div>



                    <?php
                    include("pagination/menu/menu_sp.php");
                    ?>
                </div>
            </div>
        </div>



<script>
    // JavaScript code to automatically redirect to the specified URL
    document.addEventListener('DOMContentLoaded', function() {     
        // Add a condition to prevent infinite redirect
        if (window.location.href.indexOf('quanly=danhmucsanpham&id=') === -1) {
            // Construct the URL
            var redirectUrl = 'index.php?quanly=danhmucsanpham&id=<?php echo $row_id['id_danhmuc'] ?>';

            // Redirect to the specified URL
            window.location.href = redirectUrl;
        }
    });
</script>








            