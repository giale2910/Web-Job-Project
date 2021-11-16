<header class="main-header header-transparent sticky-header">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand logo" href="index.html">
                <img src="/public/images/logos/black-logo.png" alt="logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav header-ml">
                    <li class="nav-item dropdown active">
                        <a  class="nav-link dropdown-toggle" href="home" id="navbarDropdownMenuLink">
                            Home
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link " href="admin/manage-manager" id="navbarDropdownMenuLink2">
                            Admin
                        </a>
                    </li>
                    <?php if (isset($_SESSION["logged"]) && $_SESSION["logged"] === true) { ?>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="management/post-job" id="navbarDropdownMenuLink2">
                                Management
                            </a>
                        </li>
                    <?php } ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="job-listing" id="navbarDropdownMenuLink10">
                            Jobs
                        </a>
                    </li>
                    <li class="nav-item dropdown megamenu-li">
                        <a class="nav-link dropdown-toggle" href="" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> More </a>
                        <div class="dropdown-menu megamenu" aria-labelledby="dropdown01">
                            <div class="megamenu-area">
                                <div class="row sobuz">
                                    <div class="col-sm-4 col-md-4 col-lg-4">
                                        <div class="megamenu-section">
                                            <h6 class="megamenu-title">Pages</h6>
                                            <a class="dropdown-item" href="about.html">About Us</a>
                                            <a class="dropdown-item" href="pricing-plan.html">Pricing Plan</a>
                                            <a class="dropdown-item" href="terms-and-condition.html">Terms And Condition</a>
                                            <a class="dropdown-item" href="how-it-work.html">How It Work</a>
                                            <a class="dropdown-item" href="invoices.html">Invoice</a>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-md-4 col-lg-4">
                                        <div class="megamenu-section">
                                            <h6 class="megamenu-title">Pages</h6>
                                            <a class="dropdown-item" href="contact.html">Contact Us</a>
                                            <a class="dropdown-item" href="gallery.html">Gallery</a>
                                            <a class="dropdown-item" href="typography.html">Typography</a>
                                            <a class="dropdown-item" href="checkout.html">Checkout</a>
                                            <a class="dropdown-item" href="faq.html">Faq</a>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-md-4 col-lg-4">
                                        <div class="megamenu-section">
                                            <h6 class="megamenu-title">Pages</h6>
                                            <a class="dropdown-item" href="icon.html">Icons</a>
                                            <a class="dropdown-item" href="coming-soon.html">Coming Soon</a>
                                            <a class="dropdown-item" href="login.html">Login</a>
                                            <a class="dropdown-item" href="404.html">Error Page</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="d-lg-none d-xl-none nav-item dropdown">
                        <a class="nav-link " href="fav-job" id="navbarDropdownMenuLink10">Favorite List</a>
                    </li>
                    <li class=" d-lg-none d-xl-none nav-item dropdown">
                        <a class="nav-link" href="#editProfileModal" id="navbarDropdownMenuLink10">Edit Profile</a>
                    </li>
                    <li class="d-lg-none d-xl-none nav-item dropdown">
                        <a class="nav-link " href="#changePasswordModal" id="navbarDropdownMenuLink10">Change password</a>
                    </li>
                    <li class="d-lg-none d-xl-none nav-item dropdown">
                        <a class="nav-link " href="logout" id="navbarDropdownMenuLink10">Log out</a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item ">
                        <?php if (isset($_SESSION["logged"]) && $_SESSION["logged"] === true) { ?>
                            <!-- <a class="nav-link" href="logout">
                                <i class="flaticon-logout"></i>Sign Out
                            </a> -->
                            <div class="navbar-buttons ml-auto d-none d-xl-block d-lg-block">
                                <ul>
                                    <li>
                                        <div class="dropdown btns">
                                            <a class="dropdown-toggle" data-toggle="dropdown">
                                                <img src="../../../public/images/ava.png" alt="avatar">
                                                Hi, John
                                            </a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="fav-job"> <i class="iconNav flaticon-heart"></i>Favorite List</a>
                                                <a class="dropdown-item"  data-toggle="modal" href="#editProfileModal"> <i class="iconNav flaticon-pencil"></i>Edit Profile</a>
                                                <a class="dropdown-item" data-toggle="modal" href="#changePasswordModal"> <i class="iconNav flaticon-lock"></i>Change password</a>
                                                <a class="dropdown-item" href="logout"> <i class="iconNav flaticon-logout"></i>Logout</a>
                                            </div>
                                        </div>
                                    </li>
                            
                                </ul>
                            </div>
                        <?php } else { ?>
                            <a class="nav-link" href="login">
                                <i class="flaticon-login"></i>Sign In
                            </a>
                        <?php } ?>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>