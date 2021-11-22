<!DOCTYPE html>
<html lang="en">

<head>
    <title>JOBB - Job Board HTML Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">

    <!-- External CSS libraries -->
    <link rel="stylesheet" type="text/css" href="/public/css/imported/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/public/css/imported/animate.min.css">
    <link rel="stylesheet" type="text/css" href="/public/css/imported/bootstrap-submenu.css">

    <link rel="stylesheet" type="text/css" href="/public/css/imported/bootstrap-select.min.css">
    <link rel="stylesheet" type="text/css" href="/public/css/imported/magnific-popup.css">
    <link rel="stylesheet" type="text/css" href="/public/css/imported/daterangepicker.css">
    <link rel="stylesheet" href="/public/css/imported/leaflet.css" type="text/css">
    <link rel="stylesheet" href="/public/css/imported/map.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="/public/fonts/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/public/fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" type="text/css" href="/public/fonts/linearicons/style.css">
    <link rel="stylesheet" type="text/css"  href="/public/css/imported/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" type="text/css"  href="/public/css/imported/dropzone.css">
    <link rel="stylesheet" type="text/css"  href="/public/css/imported/slick.css">

    <!-- Custom stylesheet -->
    <link rel="stylesheet" type="text/css" id="style_sheet" href="/public/css/imported/skins/midnight-blue.css">
    <link rel="stylesheet" type="text/css" href="/public/css/imported/component/header.css?version=4">
    <link rel="stylesheet" type="text/css" href="/public/css/imported/component/public.css">
    <link rel="stylesheet" type="text/css" href="/public/css/imported/component/footer.css">
    <link rel="stylesheet" type="text/css" href="/public/css/imported/component/custom-animation.css">
    <link rel="stylesheet" type="text/css" href="/public/css/imported/style.css?version=1231">
    <link rel="stylesheet" type="text/css" href="/public/css/imported/homepage.css?version=123416">  




    <!-- Favicon icon -->
    <link rel="shortcut icon" href="/public/images/favicon.ico" type="image/x-icon" >
    

    <!-- Google fonts -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,300,700">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Dosis%7CMontserrat:200,300,400,500,600,700,800,900%7CNunito+Sans:200,300,400,600,700,800,900">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link rel="stylesheet" type="text/css" href="/public/css/imported/ie10-viewport-bug-workaround.css">

    <script  src="/public/js/imported/ie-emulation-modes-warning.js"></script>

    <?php include SITE_PATH . "views/blocks/customer/header.php" ?>
</head>

<body>

    <?php include $subview ?>
    <div class="modal fade" id="editProfileModal" role="dialog">
        <div class="modal-dialog  modal-dialog-centered modal-lg">
            <?php include 'views/account/editProfile.php' ?>
        </div>
    </div> 

    <div class="modal fade" id="changePasswordModal" role="dialog">
        <div class="modal-dialog  modal-dialog-centered">
            <?php include 'views/account/changePassword.php' ?>
        </div>
    </div> 


    <script src="/public/js/imported/jquery-2.2.0.min.js"></script>
    <script src="/public/js/imported/popper.min.js"></script>
    <script src="/public/js/imported/bootstrap.min.js"></script>
    <script  src="/public/js/imported/bootstrap-submenu.js"></script>
    <script  src="/public/js/imported/rangeslider.js"></script>
    <script  src="/public/js/imported/jquery.mb.YTPlayer.js"></script>
    <script  src="/public/js/imported/bootstrap-select.min.js"></script>
    <script  src="/public/js/imported/jquery.easing.1.3.js"></script>
    <script  src="/public/js/imported/jquery.scrollUp.js"></script>
    <script  src="/public/js/imported/jquery.mCustomScrollbar.concat.min.js"></script>
    <script  src="/public/js/imported/leaflet.js"></script>
    <script  src="/public/js/imported/leaflet-providers.js"></script>
    <script  src="/public/js/imported/leaflet.markercluster.js"></script>
    <script  src="/public/js/imported/moment.min.js"></script>
    <script  src="/public/js/imported/daterangepicker.min.js"></script>
    <script  src="/public/js/imported/dropzone.js"></script>
    <script  src="/public/js/imported/slick.min.js"></script>
    <script  src="/public/js/imported/jquery.filterizr.js"></script>
    <script  src="/public/js/imported/jquery.magnific-popup.min.js"></script>
    <script  src="/public/js/imported/jquery.countdown.js"></script>
    <script  src="/public/js/imported/maps.js"></script>
    <script  src="/public/js/imported/app.js?version=3"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script  src="/public/js/imported/ie10-viewport-bug-workaround.js"></script>
    <!-- Custom javascript -->
    <script  src="/public/js/imported/ie10-viewport-bug-workaround.js"></script>

</body>

<footer>
    <?php include SITE_PATH . "views/blocks/customer/footer.php" ?>
</footer>

</html>