<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="./css/grid.css">
    <link rel="stylesheet" type="text/css" href="./css/base.css">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <link rel="stylesheet" type="text/css" href="./css/responsive.css">
    <title>Giao diện website Coffee House</title>
</head>
<body>
    
    <?php
        session_start();
        include("admin/config/config.php");
        include("pagination/header/header.php");
        include("pagination/container/container.php");
        include("pagination/menu/menu.php");
        include("pagination/news/tintuc.php");
        include("pagination/footer/footer.php");
        include("pagination/goToTopBtn/goToTopBtn.php");
    ?>
    
    <script src="./js/header-slide.js"></script>
    <script src="./js/changeMenu.js"></script>
    <script src="./js/script.js"></script>
</body>
</html>