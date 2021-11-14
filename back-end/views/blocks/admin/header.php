<header class="main-header header-2 fixed-header">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand logo pad-0" href="index.html">
                <img src="img/logos/black-logo.png" alt="logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto d-lg-none d-xl-none">
                    <li class="nav-item dropdown">
                        <a href="manage-manager" class="nav-link">Manage Managers</a>
                    </li>
                    <li class="nav-item dropdown active">
                        <a href="manage-user" class="nav-link">Manage Users</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#changePasswordModal" class="nav-link">Change Password</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a data-toggle="modal" href="#editProfileModal" class="nav-link">Edit Profile</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a data-toggle="modal" href="logout" class="nav-link">Logout</a>
                    </li>
        
                </ul>
                <div class="navbar-buttons ml-auto d-none d-xl-block d-lg-block">
                    <ul>
                        <li>
                            <div class="dropdown btns">
                                <a class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="../../../public/images/ava.png" alt="avatar">
                                    Hi, John
                                </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" data-toggle="modal" href="#editProfileModal"> <i class="iconNav flaticon-pencil"></i>Edit Profile</a>
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