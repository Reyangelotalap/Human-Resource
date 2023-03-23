<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Header</title>
    <link rel="stylesheet" href="../../css/main.min.css">
    <link rel="stylesheet" href="../../node_modules/@fortawesome/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="../../node_modules/bootstrap-icons/font/bootstrap-icons.css">

    <link rel="stylesheet" href="../include/css/header.css">
    <link rel="stylesheet" href="../include/css/main.css">
    <link rel="stylesheet" href="../include/css/sidebar.css">
</head>
<body>

<nav class="navbar navbar-expand-md fixed-top bg-primary border-bottom border-5 border-yellow" id="navigation">
    <div class="container-fluid">

        <div class="px-2">
            <i class="bi bi-list p-1 fs-4 text-secondary rounded-pill" id="btn"></i>
            <a href="../dashboard/pm-dashboard.php" class="navbar-brand text-secondary p-2 fs-3">
                <i class="bi bi-circle-fill fs-4"></i>
                <span class="fw-semibold brandname">RGBC</span>
            </a>     
        </div>


        <div class="px-1">
            <button class="navbar-toggler text-secondary p-2 border-0" 
            type="button" 
            data-bs-toggle="collapse" 
            data-bs-target="#navbarNavDropdown" 
            aria-controls="navbarNavDropdown" 
            aria-expanded="false" 
            aria-label="Toggle navigation"
            id="navlink">
            <i class="icon fa-solid fa-ellipsis"></i>
            </button>
        </div>

        <div class="collapse navbar-collapse" id="navbarNavDropdown">

            <div class="search-bar d-flex">
                <form class="search-form d-flex align-items-center" method="POST" action="#" aria-label="Search"> 
                    <input type="text" placeholder="Search" title="Enter search keyword"> 
                    <button type="submit" title="Search">
                        <i class="bi bi-search"></i>    
                    </button>
                </form>
            </div>
            
            <ul class="navbar-nav ms-auto align-items-center">

                <li class="nav-item mx-2">
                    <a class="nav-link text-secondary rounded p-2" href="#" id="navlink">
                        <i class="itt fa-regular fa-message d-none d-md-block " 
                        data-bs-placement="bottom" 
                        data-bs-custom-class="custom-tooltip"
                        data-bs-title="Messages">
                        </i>
                        <p class="d-md-none d-sm-block m-0 fs-6">Messages</p>
                    </a>
                </li>

                <li class="nav-item mx-2">
                    <a class="nav-link text-secondary rounded p-2" href="#" id="navlink">
                        <i class="itt fa-regular fa-bell d-none d-md-block"
                        data-bs-placement="bottom" 
                        data-bs-custom-class="custom-tooltip"
                        data-bs-title="Notification">
                        </i>
                        <p class="d-md-none d-sm-block m-0 fs-6">Notification</p>
                    </a>
                </li>

                <li class="nav-item dropdown mx-2">
                    <a href="#" class="text-secondary"
                    type="button" 
                    data-bs-toggle="dropdown" 
                    data-bs-display="static" 
                    aria-expanded="false">
                    <img src="../../../Job Portal/Image/3135715.png"  
                    width="32px" 
                    height="32px" 
                    class="itt rounded-pill d-none d-md-block"
                    data-bs-placement="bottom" 
                    data-bs-custom-class="custom-tooltip"
                    data-bs-title="Profile">
                    <span class="d-md-none d-sm-block p-2 fs-6 rounded" id="navlink">
                    Profile
                    </span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-lg-end m-3" id="userMenu">

                        <div class="text-center border-bottom border-1 ">

                            <div class="m-1 p-2">
                                <img src="../../../Job Portal/Image/3135715.png"
                                width="40px" 
                                height="40px" 
                                class="rounded-pill">
                            </div>

                            <div>
                                <h4 class="m-0 text-dark">Admin</h4>
                                <small class="text-muted m-0">HR-1 Admin</small> 
                            </div>

                        </div>

                        

                        <ul class="navbar-nav d-flex flex-column">
                            <li class="nav-item border-bottom border-1">
                                <a href="../../user-profile/user-profile.php" class="dropdown-item text-dark py-2 px-4">
                                <i class="bi bi-person-circle px-2 fs-5"></i>
                                <span>Profile</span>
                                </a>
                            </li>
                            <!-- <li class="nav-item border-bottom border-1">
                                <a href="#" class="dropdown-item text-dark py-2 px-4">
                                <i class="bi bi-gear px-2 fs-5"></i>
                                <span>Edit Profile</span>
                                </a>
                            </li> -->
                            <li class="nav-item border-bottom border-1">
                                <a href="../dashboard/logout.php" class="dropdown-item text-dark py-2 px-4">
                                <i class="bi bi-box-arrow-right px-2 fs-5"></i>
                                <span>Logout</span>
                                </a>   
                            </li>
                        </ul>

                    </div>

                </li>

            </ul>
       
        </div>

    </div>
</nav>

<?php
include '../include/sidebar.php';
?>



</body>
</html>