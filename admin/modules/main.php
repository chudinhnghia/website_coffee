<div class="main">
    <?php
    $tam = isset($_GET['action']) ? $_GET['action'] : "";
    $query = isset($_GET['query']) ? $_GET['query'] : '';
    

    if($tam == 'quanlydanhmucsanpham' && $query == 'them') {
        include("modules/quanlydanhmucsp/them.php");
        include("modules/quanlydanhmucsp/lietke.php");
    }else if($tam == 'quanlydanhmucsanpham' && $query == 'sua') {
        include("modules/quanlydanhmucsp/sua.php");
    }else if($tam == 'quanlysanpham' && $query == 'them') {
        include("modules/quanlysp/them.php");
        include("modules/quanlysp/lietke.php");
    }else if($tam == 'quanlysanpham' && $query == 'sua') {
        include("modules/quanlysp/sua.php");
    }
    else {
        include("modules/dashboard.php");
    }
    ?>
</div>