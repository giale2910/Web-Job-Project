<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?></title>
    <!-- Css file -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="/public/css/customer/setup.css">
    <link rel="stylesheet" href="/public/css/customer/footer/footer.css">
    <link rel="stylesheet" href="/public/css/customer/header/header.css">

    <!-- homepage -->
    <link rel="stylesheet" href="/public/css/customer/homepage/homepage.css" /> 
    <!-- endhomepage -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons+Outlined" rel="stylesheet">

     <!-- homepage -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.7.5/swiper-bundle.min.css"/>
    <!-- endhomepage -->
    
    <?php
    if (isset($cssFiles)) {
        foreach ($cssFiles as $file) {
    ?>
            <link rel="stylesheet" href=<?php echo "/public/" . $file; ?>>
    <?php
        }
    }
    ?>

</head>

<body>
    <?php include SITE_PATH . "views/blocks/customer/header.php" ?>

    <?php include $subview ?>

    <?php include SITE_PATH . "views/blocks/customer/footer.php" ?>

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/28dc87ed53.js" crossorigin="anonymous"></script>

    <script src="/public/js/customer/header/header.js"></script>

    <!-- homepage -->
    <!-- ======== SwiperJS ======= -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.7.5/swiper-bundle.min.js"></script>
    <!-- Custom Scripts -->
    <script src="/public/js/customer/homepage/homepage.js"></script>
    <!-- endhomepage -->

    <?php
    if (isset($cssFiles)) {
        foreach ($jsFiles as $file) {
    ?>
            <script src=<?php echo "/public/" . $file; ?>></script>
    <?php
        }
    }
    ?>
</body>


</html>