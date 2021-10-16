<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?></title>
    <!-- Css file -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="/public/css/admin/setup.css">
    <link rel="stylesheet" href="/public/css/admin/layout.css">
    <link rel="stylesheet" href="/public/css/admin/navbar.css">
    <?php
    if (isset($cssFiles)) {
        foreach ($cssFiles as $file) {
    ?>
            <link rel="stylesheet" href=<?php echo "/public/css/" . $file; ?>>
    <?php
        }
    }
    ?>

</head>

<body>
    <div class="app-wrapper">
        <div class="nav-bar-wrapper">
            <?php include SITE_PATH . "views/blocks/admin/nav_bar.php" ?>
        </div>
        <div class="content-wrapper">
            <header class="header-wrapper">
                <?php include SITE_PATH . "views/blocks/admin/header.php" ?>
            </header>
            <div class="subview-wrapper">
                <?php include  $subview ?>
            </div>
            <footer>
                <?php include SITE_PATH . "views/blocks/admin/footer.php" ?>
            </footer>
        </div>

    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/28dc87ed53.js" crossorigin="anonymous"></script>
    <?php
    if (isset($cssFiles)) {
        foreach ($jsFiles as $file) {
    ?>
            <script src=<?php echo "/public/js/" . $file; ?>></script>
    <?php
        }
    }
    ?>
</body>


</html>