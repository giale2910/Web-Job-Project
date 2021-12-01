<header class="main-header header-2 fixed-header" style="z-index:9;">
    <!-- <div class="container-fluid"> -->
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="index.html">
                <img width=50 height=50 src="https://www.internship.edu.vn/wp-content/uploads/Logo-OISP-260x260-1-200x200.png" alt="logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto d-lg-none d-xl-none">
                    <li class="nav-item dropdown">
                        <a href="dashboard" class="nav-link">Dashboard</a>
                    </li>
                    <li class="nav-item dropdown active">
                        <a href="post-job" class="nav-link">Post a Job</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="manage-job" class="nav-link">Manage Jobs</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a data-toggle="modal" href="#changePasswordModal"  class="nav-link">Change Password</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a data-toggle="modal" href="#editProfileModal" class="nav-link">Edit Profile</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="logout" class="nav-link">Logout</a>
                    </li>
                </ul>
                <div class="navbar-buttons ml-auto d-none d-xl-block d-lg-block">
                    <ul>
                        <li>
                            <div class="dropdown btns">
                                <a class="dropdown-toggle" data-toggle="dropdown">
                                    <!-- <img src="../../../public/images/ava.png" alt="avatar"> -->
                                    <img src="<?php if($userInfo["image"] !== ''){ ?> ../../public/images/uploadImage/<?= $userInfo["image"]?> <?php }else{ ?>  ../../public/images/ava.png <?php }?>" style="height:50px;width:50px;border-radius:50px;"alt="avatar">

                                    Hi, <?= $userInfo["first_name"] ?>
                                </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" data-toggle="modal" href="#editProfileModal" > <i class="iconNav flaticon-pencil"></i>Edit Profile</a>
                                    <a class="dropdown-item" data-toggle="modal" href="#changePasswordModal"> <i class="iconNav flaticon-lock"></i>Change password</a>
                                    <a class="dropdown-item" href="logout"> <i class="iconNav flaticon-logout"></i>Logout</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>