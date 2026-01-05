<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from coderthemes.com/adminox/layouts/pages-starter.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 26 May 2025 14:40:33 GMT -->

<head>
    <meta charset="utf-8" />
    <title>Mantenimiento de Productos</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="../../public/assets/images/favicon.ico">

    <!-- Sweet Alert css-->
    <link href="../../public/assets/vendor/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="../../public/assets/vendor/datatables.net-bs5/css/dataTables.bootstrap5.min.css">

    <link rel="stylesheet" href="../../public/assets/vendor/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css">
    <link rel="stylesheet" href="../../public/assets/vendor/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css">
    <link rel="stylesheet" href="../../public/assets/vendor/datatables.net-select-bs5/css/select.bootstrap5.min.css">

    <!-- Vendor css -->
    <link href="../../public/assets/css/vendor.min.css" rel="stylesheet" type="text/css" />

    <!-- App css -->
    <link href="../../public/assets/css/app.min.css" rel="stylesheet" type="text/css" id="app-style" />

    <!-- Icons css -->
    <link href="../../public/assets/css/icons.min.css" rel="stylesheet" type="text/css" />

    <!-- Theme Config Js -->
    <script src="../../public/assets/js/config.js"></script>
</head>

<body>
    <!-- Begin page -->
    <div class="wrapper">


        <!-- Sidenav Menu Start -->
        <div class="sidenav-menu">

            <!-- Brand Logo -->
            <a href="index.html" class="logo">
                <span class="logo-light">
                    <span class="logo-lg"><img src="../../public/assets/images/logo-light.png" alt="logo"></span>
                    <span class="logo-sm"><img src="../../public/assets/images/logo-sm.png" alt="small logo"></span>
                </span>

                <span class="logo-dark">
                    <span class="logo-lg"><img src="../../public/assets/images/logo-dark.png" alt="dark logo"></span>
                    <span class="logo-sm"><img src="../../public/assets/images/logo-sm.png" alt="small logo"></span>
                </span>
            </a>

            <!-- Sidebar Hover Menu Toggle Button -->
            <button class="button-sm-hover">
                <i class="ti ti-circle align-middle"></i>
            </button>

            <!-- Full Sidebar Menu Close Button -->
            <button class="button-close-fullsidebar">
                <i class="ti ti-x align-middle"></i>
            </button>

            <div data-simplebar>

                <!--- Sidenav Menu -->
                <ul class="side-nav">
                    <li class="side-nav-title">Navigation</li>

                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarDashboard" aria-expanded="false" aria-controls="sidebarDashboard" class="side-nav-link">
                            <span class="menu-icon"><i data-lucide="airplay"></i></span>
                            <span class="menu-text"> Dashboard </span>
                        </a>
                    </li>


                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarAppsEmail" aria-expanded="false" aria-controls="sidebarAppsEmail" class="side-nav-link">
                            <span class="menu-icon"><i data-lucide="mail"></i></span>
                            <span class="menu-text"> Mantenimiento </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarAppsEmail">
                            <ul class="sub-menu">
                                <li class="side-nav-item">
                                    <a href="email-inbox.html" class="side-nav-link">
                                        <span class="menu-text">Producto</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>

                <div class="clearfix"></div>
            </div>
        </div>
        <!-- Sidenav Menu End -->

        <!-- Topbar Start -->
        <header class="app-topbar">
            <div class="page-container topbar-menu">
                <div class="d-flex align-items-center gap-1">

                    <!-- Brand Logo -->
                    <a href="index.html" class="logo">
                        <span class="logo-light">
                            <span class="logo-lg"><img src="../../public/assets/images/logo-light.png" alt="logo"></span>
                            <span class="logo-sm"><img src="../../public/assets/images/logo-sm.png" alt="small logo"></span>
                        </span>

                        <span class="logo-dark">
                            <span class="logo-lg"><img src="../../public/assets/images/logo-dark.png" alt="dark logo"></span>
                            <span class="logo-sm"><img src="../../public/assets/images/logo-sm.png" alt="small logo"></span>
                        </span>
                    </a>

                    <!-- Sidebar Menu Toggle Button -->
                    <button class="sidenav-toggle-button px-2">
                        <i data-lucide="menu" class="font-22"></i>
                    </button>

                    <!-- Horizontal Menu Toggle Button -->
                    <button class="topnav-toggle-button px-2" data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">
                        <i data-lucide="menu" class="font-22"></i>
                    </button>

                    <form class="app-search d-none d-sm-flex align-items-center">
                        <div class="app-search-box">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search...">
                                <div class="input-group-append">
                                    <button class="btn btn-icon" type="submit">
                                        <i data-lucide="search" class="font-16"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>

                    <!-- Mega Menu Dropdown -->
                    <div class="topbar-item d-none d-md-flex">
                        <div class="dropdown">
                            <a href="#" class="topbar-link btn btn-link px-2 dropdown-toggle drop-arrow-none fw-medium" data-bs-toggle="dropdown" data-bs-trigger="hover" data-bs-offset="0,17" aria-haspopup="false" aria-expanded="false">
                                Pages <i class="mdi mdi-chevron-down ms-1"></i>
                            </a>

                            <div class="dropdown-menu dropdown-menu-xxl p-0">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <div class="p-3">
                                            <h5 class="mb-2 fw-semibold">UI Components</h5>
                                            <ul class="list-unstyled megamenu-list">
                                                <li>
                                                    <a href="#!">Widgets</a>
                                                </li>
                                                <li>
                                                    <a href="extended-dragula.html">Dragula</a>
                                                </li>
                                                <li>
                                                    <a href="ui-dropdowns.html">Dropdowns</a>
                                                </li>
                                                <li>
                                                    <a href="extended-ratings.html">Ratings</a>
                                                </li>
                                                <li>
                                                    <a href="extended-sweetalerts.html">Sweet Alerts</a>
                                                </li>
                                                <li>
                                                    <a href="extended-scrollbar.html">Scrollbar</a>
                                                </li>
                                                <li>
                                                    <a href="form-range-slider.html">Range Slider</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="p-3">
                                            <h5 class="mb-2 fw-semibold">Applications</h5>
                                            <ul class="list-unstyled megamenu-list">
                                                <li>
                                                    <a href="apps-ecommerce-products.html">eCommerce Pages</a>
                                                </li>
                                                <li>
                                                    <a href="apps-hospital-doctors.html">Hospital</a>
                                                </li>
                                                <li>
                                                    <a href="apps-email.html">Email</a>
                                                </li>
                                                <li>
                                                    <a href="apps-calendar.html">Calendar</a>
                                                </li>
                                                <li>
                                                    <a href="apps-kanban.html">Kanban Board</a>
                                                </li>
                                                <li>
                                                    <a href="apps-invoices.html">Invoice Management</a>
                                                </li>
                                                <li>
                                                    <a href="pages-pricing.html">Pricing</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="col-md-4 bg-light bg-opacity-50">
                                        <div class="p-3">
                                            <h5 class="mb-2 fw-semibold">Extra Pages</h5>
                                            <ul class="list-unstyled megamenu-list">
                                                <li>
                                                    <a href="javascript:void(0);">Left Sidebar with User</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">Menu Collapsed</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">Small Left Sidebar</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">New Header Style</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">My Account</a>
                                                </li>
                                                <li>
                                                    <a href="pages-coming-soon.html">Maintenance & Coming Soon</a>
                                                </li>
                                            </ul>
                                        </div> <!-- end .bg-light-->
                                    </div> <!-- end col-->
                                </div> <!-- end row-->
                            </div> <!-- .dropdown-menu-->
                        </div> <!-- .dropdown-->
                    </div> <!-- end topbar-item -->
                </div>

                <div class="d-flex align-items-center gap-1">

                    <div class="topbar-item d-none d-sm-flex">
                        <button class="topbar-link" id="light-dark-mode" type="button">
                            <i data-lucide="moon" class="font-22 light-mode"></i>
                            <i data-lucide="sun" class="font-22 dark-mode"></i>
                        </button>
                    </div>

                    <!-- Language Dropdown -->
                    <div class="topbar-item  d-none d-sm-flex">
                        <div class="dropdown">
                            <button class="topbar-link" data-bs-toggle="dropdown" data-bs-offset="0,25" type="button" aria-haspopup="false" aria-expanded="false">
                                <img src="../../public/assets/images/flags/us.jpg" alt="user-image" class="w-100" height="16" id="selected-language-image">
                            </button>

                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item" data-translator-lang="en">
                                    <img src="../../public/assets/images/flags/us.jpg" alt="user-image" class="me-1" height="12" data-translator-image> <span class="align-middle">English</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item" data-translator-lang="hi">
                                    <img src="../../public/assets/images/flags/germany.jpg" alt="user-image" class="me-1" height="12" data-translator-image> <span class="align-middle">Germany</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <img src="../../public/assets/images/flags/italy.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Italian</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <img src="../../public/assets/images/flags/russia.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Russian</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <img src="../../public/assets/images/flags/spain.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Spanish</span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Notification Dropdown -->
                    <div class="topbar-item">
                        <div class="dropdown">
                            <button class="topbar-link dropdown-toggle drop-arrow-none position-relative" data-bs-toggle="dropdown" data-bs-offset="0,25" type="button" data-bs-auto-close="outside" aria-haspopup="false" aria-expanded="false">
                                <i data-lucide="bell" class="font-22"></i>
                                <span class="badge bg-pink rounded-circle noti-icon-badge">4</span>
                            </button>

                            <div class="dropdown-menu p-0 dropdown-menu-end dropdown-menu-lg" style="min-height: 300px;">
                                <div class="p-2 border-bottom bg-primary">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h6 class="m-0 font-16 fw-medium text-white"> Notifications</h6>
                                        </div>
                                        <div class="col-auto">
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle drop-arrow-none link-dark" data-bs-toggle="dropdown" data-bs-offset="0,15" aria-expanded="false">
                                                    <i class="mdi mdi-cog-outline font-22 align-middle text-white"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <!-- item-->
                                                    <a href="javascript:void(0);" class="dropdown-item">Mark as Read</a>
                                                    <!-- item-->
                                                    <a href="javascript:void(0);" class="dropdown-item">Delete All</a>
                                                    <!-- item-->
                                                    <a href="javascript:void(0);" class="dropdown-item">Do not Disturb</a>
                                                    <!-- item-->
                                                    <a href="javascript:void(0);" class="dropdown-item">Other Settings</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="position-relative z-2" style="max-height: 300px;" data-simplebar>
                                    <!-- item-->
                                    <div class="dropdown-item notification-item py-2 text-wrap active" id="notification-1">
                                        <span class="d-flex align-items-center">
                                            <span class="me-3 position-relative flex-shrink-0">
                                                <div class="avatar avatar-md">
                                                    <span class="avatar-title bg-success rounded-circle">
                                                        <i class="mdi mdi-cog-outline font-20"></i>
                                                    </span>
                                                </div>
                                            </span>
                                            <span class="flex-grow-1 text-muted">
                                                <p class="fw-medium mb-0 text-dark">New settings</p>
                                                <span class="font-12">There are new settings available</span>
                                            </span>
                                            <span class="notification-item-close">
                                                <button type="button" class="btn btn-ghost-danger rounded-circle btn-sm btn-icon" data-dismissible="#notification-1">
                                                    <i class="mdi mdi-close font-16"></i>
                                                </button>
                                            </span>
                                        </span>
                                    </div>

                                    <!-- item-->
                                    <div class="dropdown-item notification-item py-2 text-wrap" id="notification-2">
                                        <span class="d-flex align-items-center">
                                            <span class="me-3 position-relative flex-shrink-0">
                                                <div class="avatar avatar-md">
                                                    <span class="avatar-title bg-info rounded-circle">
                                                        <i class="mdi mdi-bell-outline font-20"></i>
                                                    </span>
                                                </div>
                                            </span>
                                            <span class="flex-grow-1 text-muted">
                                                <p class="fw-medium mb-0 text-dark">Updates</p>
                                                <span class="font-12">There are 2 new updates available</span>
                                            </span>
                                            <span class="notification-item-close">
                                                <button type="button" class="btn btn-ghost-danger rounded-circle btn-sm btn-icon" data-dismissible="#notification-1">
                                                    <i class="mdi mdi-close font-16"></i>
                                                </button>
                                            </span>
                                        </span>
                                    </div>

                                    <!-- item-->
                                    <div class="dropdown-item notification-item py-2 text-wrap" id="notification-3">
                                        <span class="d-flex align-items-center">
                                            <span class="me-3 position-relative flex-shrink-0">
                                                <div class="avatar avatar-md">
                                                    <span class="avatar-title bg-danger rounded-circle">
                                                        <i class="mdi mdi-account-plus-outline font-20"></i>
                                                    </span>
                                                </div>
                                            </span>
                                            <span class="flex-grow-1 text-muted">
                                                <p class="fw-medium mb-0 text-dark">New Users</p>
                                                <span class="font-12">You have 10 unread messages</span>
                                            </span>
                                            <span class="notification-item-close">
                                                <button type="button" class="btn btn-ghost-danger rounded-circle btn-sm btn-icon" data-dismissible="#notification-1">
                                                    <i class="mdi mdi-close font-16"></i>
                                                </button>
                                            </span>
                                        </span>
                                    </div>

                                    <!-- item-->
                                    <div class="dropdown-item notification-item py-2 text-wrap" id="notification-4">
                                        <span class="d-flex align-items-center">
                                            <span class="me-3 position-relative flex-shrink-0">
                                                <div class="avatar avatar-md">
                                                    <span class="avatar-title bg-primary rounded-circle">
                                                        <i class="mdi mdi-comment-account-outline font-20"></i>
                                                    </span>
                                                </div>
                                            </span>
                                            <span class="flex-grow-1 text-muted">
                                                <p class="fw-medium mb-0 text-dark">Caleb Flakelar commented on Admin</p>
                                                <span class="font-12">4 days ago</span>
                                            </span>
                                            <span class="notification-item-close">
                                                <button type="button" class="btn btn-ghost-danger rounded-circle btn-sm btn-icon" data-dismissible="#notification-1">
                                                    <i class="mdi mdi-close font-16"></i>
                                                </button>
                                            </span>
                                        </span>
                                    </div>

                                    <!-- item-->
                                    <div class="dropdown-item notification-item py-2 text-wrap mb-5" id="notification-5">
                                        <span class="d-flex align-items-center">
                                            <span class="me-3 position-relative flex-shrink-0">
                                                <div class="avatar avatar-md">
                                                    <span class="avatar-title bg-info rounded-circle">
                                                        <i class="mdi mdi-bell-outline font-20"></i>
                                                    </span>
                                                </div>
                                            </span>
                                            <span class="flex-grow-1 text-muted">
                                                <p class="fw-medium mb-0 text-dark">Updates</p>
                                                <span class="font-12">There are 2 new updates available</span>
                                            </span>
                                            <span class="notification-item-close">
                                                <button type="button" class="btn btn-ghost-danger rounded-circle btn-sm btn-icon" data-dismissible="#notification-1">
                                                    <i class="mdi mdi-close font-16"></i>
                                                </button>
                                            </span>
                                        </span>
                                    </div>
                                </div>


                                <!-- All-->
                                <a href="javascript:void(0);" class="dropdown-item notification-item position-fixed z-2 bottom-0 text-center text-reset text-decoration-underline link-offset-2 fw-bold notify-item border-top border-light py-2">
                                    View All
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- User Dropdown -->
                    <div class="topbar-item nav-user">
                        <div class="dropdown">
                            <a class="topbar-link dropdown-toggle drop-arrow-none px-0" data-bs-toggle="dropdown" data-bs-offset="0,19" type="button" aria-haspopup="false" aria-expanded="false">
                                <img src="../../public/assets/images/users/avatar-1.jpg" width="32" class="rounded-circle me-lg-2 d-flex" alt="user-image">
                                <span class="d-lg-flex flex-column gap-1 d-none">
                                    <span class="my-0">Maxine K</span>
                                </span>
                                <i data-lucide="chevron-down" class="d-none d-sm-flex" height="12"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <div class="dropdown-header noti-title">
                                    <h6 class="text-overflow m-0">Welcome !</h6>
                                </div>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <i class="mdi mdi-account-circle-outline me-1 font-17 align-middle"></i>
                                    <span class="align-middle">My Account</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <i class="mdi mdi-wallet-outline me-1 font-17 align-middle"></i>
                                    <span class="align-middle">Wallet : <span class="fw-semibold">$985.25</span></span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <i class="mdi mdi-cog-outline me-1 font-17 align-middle"></i>
                                    <span class="align-middle">Settings</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <i class="mdi mdi-lifebuoy me-1 font-17 align-middle"></i>
                                    <span class="align-middle">Support</span>
                                </a>

                                <div class="dropdown-divider"></div>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <i class="mdi mdi-lock-outline me-1 font-17 align-middle"></i>
                                    <span class="align-middle">Lock Screen</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item active fw-semibold text-danger">
                                    <i class="mdi mdi-logout me-1 font-17 align-middle"></i>
                                    <span class="align-middle">Sign Out</span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Button Trigger Customizer Offcanvas -->
                    <div class="topbar-item">
                        <button class="topbar-link" data-bs-toggle="offcanvas" data-bs-target="#theme-settings-offcanvas" type="button">
                            <i data-lucide="settings" class="font-22"></i>
                        </button>
                    </div>
                </div>
            </div>
        </header>
        <!-- Topbar End -->



        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->
        <div class="page-content">

            <div class="page-container">

                <div class="card page-title-box rounded-0">
                    <div class="d-flex align-items-sm-center flex-sm-row flex-column gap-2">
                        <div class="flex-grow-1">
                            <h4 class="font-18 fw-semibold mb-0">Productos</h4>
                        </div>

                        <div class="text-end">
                            <ol class="breadcrumb m-0 py-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Adminox</a></li>

                                <li class="breadcrumb-item"><a href="javascript: void(0);">Productos</a></li>
                            </ol>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="header-title">CRUD</h5>
                                <p class="card-subtitle">
                                    Desde esta ventana podra dar mantenimiento a los productos...
                                </p>

                                <div>
                                    <div class="d-flex flex-wrap align-items-center gap-2">
                                        <button id="btnnuevo" class="btn btn-primary waves-effect waves-light">Nuevo Registro</button>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body pt-2">
                                <table id="producto_data" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                        <tr>
                                            <th>Nombre</th>
                                            <th>Descripcion</th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div> <!-- end row -->

            </div> <!-- container -->

            <!-- Footer Start -->
            <footer class="footer">
                <div class="page-container">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start">
                            <script>
                                document.write(new Date().getFullYear())
                            </script> © Adminox - By <span class="fw-bold text-decoration-underline text-uppercase text-reset font-12">Coderthemes</span>
                        </div>
                        <div class="col-md-6">
                            <div class="text-md-end footer-links d-none d-md-block">
                                <a href="javascript: void(0);">About</a>
                                <a href="javascript: void(0);">Support</a>
                                <a href="javascript: void(0);">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- end Footer -->

        </div>
        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->


    <!-- Theme Settings -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="theme-settings-offcanvas" style="width: 260px;">
        <div class="bg-primary d-flex align-items-center gap-2 p-3 offcanvas-header">
            <h5 class="flex-grow-1 text-white mb-0">Theme Settings</h5>

            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>

        <div class="offcanvas-body p-3 h-100" data-simplebar>
            <div class="mb-3">
                <h5 class="mb-3 font-16 fw-bold">Color Scheme</h5>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="data-bs-theme" id="layout-color-light" value="light">
                    <label class="form-check-label" for="layout-color-light">Light</label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="data-bs-theme" id="layout-color-dark" value="dark">
                    <label class="form-check-label" for="layout-color-dark">Dark</label>
                </div>
            </div>


            <div class="mb-3">
                <h5 class="mb-3 font-16 fw-bold">Topbar Color</h5>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="data-topbar-color" id="topbar-color-light" value="light">
                    <label class="form-check-label" for="topbar-color-light">Light</label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="data-topbar-color" id="topbar-color-dark" value="dark">
                    <label class="form-check-label" for="topbar-color-dark">Dark</label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="data-topbar-color" id="topbar-color-brand" value="brand">
                    <label class="form-check-label" for="topbar-color-brand">Brand</label>
                </div>
            </div>

            <div class="mb-3">
                <h5 class="mb-3 font-16 fw-bold">Menu Color</h5>

                <div class="form-check sidebar-setting">
                    <input class="form-check-input" type="radio" name="data-menu-color" id="sidenav-color-light" value="light">
                    <label class="form-check-label" for="sidenav-color-light">Light</label>
                </div>

                <div class="form-check sidebar-setting">
                    <input class="form-check-input" type="radio" name="data-menu-color" id="sidenav-color-dark" value="dark">
                    <label class="form-check-label" for="sidenav-color-dark">Dark</label>
                </div>

                <div class="form-check sidebar-setting">
                    <input class="form-check-input" type="radio" name="data-menu-color" id="sidenav-color-brand" value="brand">
                    <label class="form-check-label" for="sidenav-color-brand">Brand</label>
                </div>
            </div>

            <div class="mb-3" id="sidebarSize">
                <h5 class="mb-3 font-16 fw-bold">Sidebar Size</h5>

                <div class="form-check sidebar-setting">
                    <input class="form-check-input" type="radio" name="data-sidenav-size" id="sidenav-size-default" value="default">
                    <label class="form-check-label" for="sidenav-size-default">Default</label>
                </div>

                <div class="form-check sidebar-setting">
                    <input class="form-check-input" type="radio" name="data-sidenav-size" id="sidenav-size-compact" value="compact">
                    <label class="form-check-label" for="sidenav-size-compact">Compact</label>
                </div>

                <div class="form-check sidebar-setting">
                    <input class="form-check-input" type="radio" name="data-sidenav-size" id="sidenav-size-small" value="condensed">
                    <label class="form-check-label" for="sidenav-size-small"> Condensed</label>
                </div>

                <div class="form-check sidebar-setting">
                    <input class="form-check-input" type="radio" name="data-sidenav-size" id="sidenav-size-small-hover" value="sm-hover">
                    <label class="form-check-label" for="sidenav-size-small-hover">Hover View</label>
                </div>

                <div class="form-check sidebar-setting">
                    <input class="form-check-input" type="radio" name="data-sidenav-size" id="sidenav-size-full" value="full">
                    <label class="form-check-label" for="sidenav-size-full">Full Layout</label>
                </div>

                <div class="form-check sidebar-setting">
                    <input class="form-check-input" type="radio" name="data-sidenav-size" id="sidenav-size-fullscreen" value="fullscreen">
                    <label class="form-check-label" for="sidenav-size-fullscreen">Hidden</label>
                </div>
            </div>

            <div class="mb-3">
                <h5 class="mb-3 font-16 fw-bold">Layout Mode</h5>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="data-layout-mode" id="layout-mode-fluid" value="fluid">
                    <label class="form-check-label" for="layout-mode-fluid">Fluid</label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="data-layout-mode" id="layout-mode-boxed" value="boxed">
                    <label class="form-check-labe" for="layout-mode-boxed">Boxed</label>
                </div>
            </div>
        </div>

        <div class="d-flex align-items-center gap-2 px-3 py-2 offcanvas-header border-top border-dashed">
            <button type="button" class="btn w-50 btn-danger" id="reset-layout">Reset</button>
            <a href="https://1.envato.market/y2YAD" class="btn w-50 btn-info" target="_blank">Buy Now</a>
        </div>

    </div>
    <?php require_once("modalmantenimiento.php"); ?>
    <!-- Vendor js -->
    <script src="../../public/assets/js/vendor.min.js"></script>

    <!-- App js -->
    <script src="../../public/assets/js/app.js"></script>

    <!-- Sweet Alerts js -->
    <script src="../../public/assets/vendor/sweetalert2/sweetalert2.min.js"></script>

    <script src="../../public/assets/vendor/datatables.net/js/dataTables.min.js"></script>
    <script src="../../public/assets/vendor/datatables.net-bs5/js/dataTables.bootstrap5.min.js"></script>


    <script src="../../public/assets/vendor/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../../public/assets/vendor/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js"></script>

    <script src="../../public/assets/vendor/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../../public/assets/vendor/datatables.net-buttons-bs5/js/buttons.bootstrap5.min.js"></script>

    <script src="../../public/assets/vendor/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="../../public/assets/vendor/datatables.net-buttons/js/buttons.print.min.js"></script>

    <script src="../../public/assets/vendor/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="../../public/assets/vendor/datatables.net-select/js/dataTables.select.min.js"></script>

    <script src="../../public/assets/js/pages/table-gridjs.js"></script>

    <script src="mntproducto.js"></script>
</body>


<!-- Mirrored from coderthemes.com/adminox/layouts/pages-starter.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 26 May 2025 14:40:33 GMT -->

</html>