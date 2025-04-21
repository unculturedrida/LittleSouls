<?php
// session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>header</title>
</head>
<body>
<header class="header kleon-default-nav">				
            <div class="d-none d-xl-block">
                <div class="header-inner d-flex align-items-center justify-content-around justify-content-xl-between flex-wrap flex-xl-nowrap gap-3 gap-xl-5">
                    <div class="header-left-part d-flex align-items-center flex-grow-1 w-100">
                        <div class="header-search w-100">
                            <form class="search-form" action="#">
                                <input type="text" name="search" class="keyword form-control w-100" placeholder="Search">
                                <button type="submit" class="btn"><img src="assets/img/svg/search.svg" alt=""></button>
                            </form>
                        </div>
                    </div>

                    <div class="header-right-part d-flex align-items-center flex-shrink-0">
                        <ul class="nav-elements d-flex align-items-center list-unstyled m-0 p-0">
                            <li class="nav-item nav-color-switch d-flex align-items-center gap-3">
                                <div class="sun"><img src="assets/img/sun.svg" alt="img"></div>
                                <div class="switch">
                                    <input type="checkbox" id="colorSwitch" value="false" name="defaultMode">
                                    <div class="shutter">
                                        <span class="lbl-off"></span>
                                        <span class="lbl-on"></span>
                                        <div class="slider bg-primary"></div>
                                    </div>
                                </div>
                                <div class="moon"><img src="assets/img/moon.svg" alt="img"></div>
                            </li>


                            <li class="nav-item nav-author">
                                <a href="#" class="nav-toggler" data-bs-toggle="dropdown" aria-expanded="false">
                                    <!-- <img src="assets/img/nav_author.jpg" alt="img" width="54" class="rounded-2"> -->
                                    <div class="nav-toggler-content">
                                        <h6 class="mb-0"><?php echo $_SESSION['firstname']." ".$_SESSION['lastname']; ?></h6>
                                        <div class="ff-heading fs-14 fw-normal text-gray">Super Admin</div>
                                    </div>
                                </a>
                                <div class="dropdown-widget dropdown-menu p-0 admin-card">
                                    <div class="dropdown-wrapper">
                                        <div class="card mb-0">
                                            <div class="card-header p-3 text-center">
                                               
                                                <div class="mt-2">
                                                    <h6 class="mb-0 lh-18"><?php echo $_SESSION['firstname']." ".$_SESSION['lastname']; ?></h6>
                                                    <div class="fs-14 fw-normal text-gray">Super Admin</div>
                                                </div>
                                            </div>
                                            <div class="card-body p-3">
                                        <ul class="list-unstyled p-0 m-0">
                                            <li>
                                                <a href="admin-change-password.php"
                                                    class="fs-14 fw-normal text-dark d-block p-1"><i
                                                        class="bi bi-gear me-2"></i> Change Password</a>
                                            </li>
                                        </ul>
                                    </div>
                                            <div class="card-footer p-3">
                                                <a href="includes/logout-script.php" class="btn btn-outline-gray bg-transparent w-100 py-1 rounded-1 text-dark fs-14 fw-medium"><i class="bi bi-box-arrow-right"></i> Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="small-header d-flex align-items-center justify-content-between d-xl-none">
                <div class="logo">
                    <a href="index.php" class="d-flex align-items-center gap-3 flex-shrink-0">
                        <img src="assets/img/logo-icon.svg" alt="logo">
                        <div class="position-relative flex-shrink-0">
                            <img src="assets/img/logo-text.svg" alt="" class="logo-text">
                            <img src="assets/img/logo-text-white.svg" alt="" class="logo-text-white">
                        </div>
                    </a>
                </div>
                <div>
                    <button type="button" class="kleon-header-expand-toggle"><span class="fs-24"><i class="bi bi-three-dots-vertical"></i></button>
                    <button type="button" class="kleon-mobile-menu-opener"><span class="close"><i class="bi bi-arrow-left"></i></span> <span class="open"><i class="bi bi-list"></i></span></button>
                </div>
            </div>

        </header>
        
        <!-- Vertical Nav -->
        <div class="kleon-vertical-nav">
            <!-- Logo  -->
            <div class="logo d-flex align-items-center justify-content-between">
                <a href="index.php" class="d-flex align-items-center gap-3 flex-shrink-0">
                    <img src="assets/img/logo-icon.png" alt="logo">
                    
                </a>
                <button type="button" class="kleon-vertical-nav-toggle"><i class="bi bi-list"></i></button>
            </div>

            <div class="kleon-navmenu">
                <h6 class="hidden-header text-gray text-uppercase ls-1 ms-4 mb-4">Main Menu</h6>
                <ul class="main-menu">
                    
                    <li class="menu-section-title text-gray ff-heading fs-16 fw-bold text-uppercase mt-4 mb-2"><span>Home</span></li>
                    <li class="menu-item"><a href="index.php"><span class="nav-icon flex-shrink-0"></span> <span class="nav-text">Dashboard</span></a></li>
                    
                    <!-- Admins -->
                    <li class="menu-section-title text-gray ff-heading fs-16 fw-bold text-uppercase mt-4 mb-2"><span>Admins</span></li>                    
                    <li class="menu-item"><a href="admins.php"><span class="nav-icon flex-shrink-0"><i class="bi bi-person-plus fs-18"></i></span> <span class="nav-text">Admins</span></a></li>
                     
                    </li>
                     <!-- Website -->
                    <li class="menu-section-title text-gray ff-heading fs-16 fw-bold text-uppercase mt-4 mb-2"><span>Web Content</span></li>                    
                    <li class="menu-item"><a href="alumni-courses.php"><span class="nav-icon flex-shrink-0"></span> <span class="nav-text">Courses</span></a></li>
                    <li class="menu-item"><a href="alumni-events.php"><span class="nav-icon flex-shrink-0"></span> <span class="nav-text">Events</span></a></li>
                    <li class="menu-item"><a href="alumni-news.php"><span class="nav-icon flex-shrink-0"></span> <span class="nav-text">News</span></a></li>
                    <li class="menu-item"><a href="alumni-gallery.php"><span class="nav-icon flex-shrink-0"></span> <span class="nav-text">Gallery</span></a></li>
                    </li>
                    

                    
                    
                </ul>
            </div>


            <div class="card border-0 rounded-0 mt-6">
                <div class="card-body p-0">
                    <h6 class="text-gray lh-20 mb-0">Admin Dashboard</h6>
                    <h6 class="text-gray fs-14 fw-medium">Made  by <a href="https://www.linkedin.com/in/rida-zulfiqar-713607248">Rida Zulfiqar</a></h6>
                </div>
            </div>
        </div>
        
        <!-- Theme Customizer Panel -->
        <button class="aside_open btn btn-primary position-fixed z-index-9 rounded-circle p-0 m-0 d-flex align-items-center justify-content-center" type="button" data-bs-toggle="offcanvas" data-bs-target="#themeSwitcher"><i class="bi bi-gear-fill fs-20"></i></button>
        <div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="themeSwitcher">
            <div class="offcanvas-header bg-light-200">
                <h5 class="offcanvas-title">Theme Customizer</h5>
                <button type="button" class="aside_close btn btn-danger z-index-9 rounded-circle p-0 m-0 d-flex align-items-center justify-content-center" data-bs-dismiss="offcanvas" aria-label="Close"><i class="bi bi-x-lg"></i></button>
            </div>
            <div class="offcanvas-body bg-white p-0">
                <div class="bg-light-500 p-4 flex-grow-1">
                    <h6 class="mb-3 lh-16">Theme Color Mode</h6>
                    <div>
                        <div class="form-switch p-0">
                            <label class="form-label mb-0" for="colorSwitch4">Light</label>
                            <input type="checkbox" class="form-check-input border-0 m-0 mx-3" id="colorSwitch4">
                            <label class="form-label mb-0" for="colorSwitch4">Dark</label>
                        </div>
                    </div>
                </div>


                <div class="bg-light-200 p-4 flex-grow-1">
                    <h6 class="mb-3 lh-16">Navigation Layout</h6>
                    <div class="row">
                        <div class="col-4">
                            <div class="form-check form-check-inline with-layout-image m-0">
                                <input type="radio" class="form-check-input" id="verticalNav" name="checkLayout" value="vertical" checked>
                                <label class="form-label mb-0" for="verticalNav">
                                    <span class="d-inline-block mb-2">
                                        <img class="light-version img-fluid rounded-1" src="assets/img/customizer/vertical-light.png" alt="img">
                                        <img class="dark-version img-fluid rounded-1" src="assets/img/customizer/vertical-dark.png" alt="img">
                                    </span>
                                    <span class="label-text">Vertical</span>
                                </label>
                            </div>                                
                        </div>                                
                        
                    </div>
                </div>


                <div class="bg-light-500 p-4 flex-grow-1">
                    <h6 class="mb-3 lh-16">Vertical Navigation Styles</h6>
                    <div>
                        <div class="form-check form-check-inline">
                            <input type="radio" class="form-check-input" id="fullwidthNav" name="checkVerticalNav" value="fullwidth" checked>
                            <label class="form-label mb-0" for="fullwidthNav">Fullwidth</label>
                        </div>                                
                        <div class="form-check form-check-inline">
                            <input type="radio" class="form-check-input" id="collapseNav" name="checkVerticalNav" value="collapse">
                            <label class="form-label mb-0" for="collapseNav">Collapse</label>
                        </div>
                    </div>
                </div>


                <div class="bg-light-200 p-4 flex-grow-1">
                    <h6 class="mb-3 lh-16">Header Position</h6>
                    <div>
                        <div class="form-check form-check-inline">
                            <input type="radio" class="form-check-input" id="scrollableHeader" name="headerPosition" value="scrollable" checked>
                            <label class="form-label mb-0" for="scrollableHeader">Scrollable</label>
                        </div>                                
                        <div class="form-check form-check-inline">
                            <input type="radio" class="form-check-input" id="fixedHeader" name="headerPosition" value="fixed">
                            <label class="form-label mb-0" for="fixedHeader">Fixed</label>
                        </div>
                    </div>
                </div>

                
            </div>
        </div>

        <!-- Header Modal Search -->
        <div class="modal fade header-search-modal" id="searchModal" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <form class="search-form" action="#">
                            <input type="text" name="search" class="keyword form-control w-100" placeholder="Search">
                            <button type="submit" class="btn"><img src="assets/img/svg/search.svg" alt=""></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</body>
</html>