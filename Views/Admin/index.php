<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>School Admin</title>

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="<?php echo assets_css() ?>dashboard\css\vendor.min.css">
    <link rel="stylesheet" href="<?php echo assets_css() ?>dashboard\vendor\icon-set\style.css">

    <!-- CSS Front Template -->
    <link rel="stylesheet" href="<?php echo assets_css() ?>dashboard\css\theme.min.css?v=1.0">
</head>

<body class="   footer-offset">
    <script src="<?php echo assets_css() ?>dashboard\vendor\hs-navbar-vertical-aside\hs-navbar-vertical-aside-mini-cache.js"></script>
    <!-- ONLY DEV -->

    <!-- Builder -->
    <div id="styleSwitcherDropdown" class="hs-unfold-content sidebar sidebar-bordered sidebar-box-shadow" style="width: 35rem;">
        <div class="card card-lg border-0 h-100">
            <div class="card-header align-items-start">
                <div class="mr-2">
                    <h3 class="card-header-title">Front Builder</h3>
                    <p>Customize your overview page layout. Choose the one that best fits your needs.</p>
                </div>

                <!-- Toggle Button -->
                <a class="js-hs-unfold-invoker btn btn-icon btn-xs btn-ghost-dark" href="javascript:;" data-hs-unfold-options='{
                  "target": "#styleSwitcherDropdown",
                  "type": "css-animation",
                  "animationIn": "fadeInRight",
                  "animationOut": "fadeOutRight",
                  "hasOverlay": true,
                  "smartPositionOff": true
                 }'>
                    <i class="tio-clear tio-lg"></i>
                </a>
                <!-- End Toggle Button -->
            </div>

            <!-- Body -->
            <div class="card-body sidebar-scrollbar">
                <h4 class="mb-1">Layout skins <span id="js-builder-disabled" class="badge badge-soft-danger" style="opacity: 0">Disabled</span></h4>
                <p>3 kinds of layout skins to choose from.</p>

                <div class="row gx-2 mb-5">
                    <!-- Custom Radio -->
                    <div class="col-4 text-center">
                        <div class="text-center">
                            <div class="custom-checkbox-card mb-2">
                                <input type="radio" class="custom-checkbox-card-input" name="layoutSkinsRadio" id="layoutSkinsRadio1" checked="" value="default">
                                <label class="custom-checkbox-card-label" for="layoutSkinsRadio1">
                                    <img class="custom-checkbox-card-img" src="<?php echo assets_css() ?>dashboard\svg\layouts\layouts-sidebar-default.svg" alt="Image Description">
                                </label>
                                <span class="custom-checkbox-card-text">Default</span>
                            </div>
                        </div>
                    </div>
                    <!-- End Custom Radio -->

                    <!-- Custom Radio -->
                    <div class="col-4 text-center">
                        <div class="text-center">
                            <div class="custom-checkbox-card mb-2">
                                <input type="radio" class="custom-checkbox-card-input" name="layoutSkinsRadio" id="layoutSkinsRadio2" value="navbar-dark">
                                <label class="custom-checkbox-card-label" for="layoutSkinsRadio2">
                                    <img class="custom-checkbox-card-img" src="<?php echo assets_css() ?>dashboard\svg\layouts\layouts-sidebar-dark.svg" alt="Image Description">
                                </label>
                                <span class="custom-checkbox-card-text">Dark</span>
                            </div>
                        </div>
                    </div>
                    <!-- End Custom Radio -->

                    <!-- Custom Radio -->
                    <div class="col-4 text-center">
                        <div class="text-center">
                            <div class="custom-checkbox-card mb-2">
                                <input type="radio" class="custom-checkbox-card-input" name="layoutSkinsRadio" id="layoutSkinsRadio3" value="navbar-light">
                                <label class="custom-checkbox-card-label" for="layoutSkinsRadio3">
                                    <img class="custom-checkbox-card-img" src="<?php echo assets_css() ?>dashboard\svg\layouts\layouts-sidebar-light.svg" alt="Image Description">
                                </label>
                                <span class="custom-checkbox-card-text">Light</span>
                            </div>
                        </div>
                    </div>
                    <!-- End Custom Radio -->
                </div>
                <!-- End Row -->

                <h4 class="mb-1">Sidebar layout options</h4>
                <p>Choose between standard navigation sizing, mini or even compact with icons.</p>

                <div class="row gx-2 mb-5">
                    <!-- Custom Radio -->
                    <div class="col-4 text-center">
                        <div class="text-center">
                            <div class="custom-checkbox-card mb-2">
                                <input type="radio" class="custom-checkbox-card-input" name="sidebarLayoutOptions" id="sidebarLayoutOptions1" checked="" value="default">
                                <label class="custom-checkbox-card-label" for="sidebarLayoutOptions1">
                                    <img class="custom-checkbox-card-img" src="<?php echo assets_css() ?>dashboard\svg\layouts\sidebar-default-classic.svg" alt="Image Description">
                                </label>
                                <span class="custom-checkbox-card-text">Default</span>
                            </div>
                        </div>
                    </div>
                    <!-- End Custom Radio -->

                    <!-- Custom Radio -->
                    <div class="col-4 text-center">
                        <div class="text-center">
                            <div class="custom-checkbox-card mb-2">
                                <input type="radio" class="custom-checkbox-card-input" name="sidebarLayoutOptions" id="sidebarLayoutOptions2" value="navbar-vertical-aside-compact-mode">
                                <label class="custom-checkbox-card-label" for="sidebarLayoutOptions2">
                                    <img class="custom-checkbox-card-img" src="<?php echo assets_css() ?>dashboard\svg\layouts\sidebar-compact.svg" alt="Image Description">
                                </label>
                                <span class="custom-checkbox-card-text">Compact</span>
                            </div>
                        </div>
                    </div>
                    <!-- End Custom Radio -->

                    <!-- Custom Radio -->
                    <div class="col-4 text-center">
                        <div class="text-center">
                            <div class="custom-checkbox-card mb-2">
                                <input type="radio" class="custom-checkbox-card-input" name="sidebarLayoutOptions" id="sidebarLayoutOptions3" value="navbar-vertical-aside-mini-mode">
                                <label class="custom-checkbox-card-label" for="sidebarLayoutOptions3">
                                    <img class="custom-checkbox-card-img" src="<?php echo assets_css() ?>dashboard\svg\layouts\sidebar-mini.svg" alt="Image Description">
                                </label>
                                <span class="custom-checkbox-card-text">Mini</span>
                            </div>
                        </div>
                    </div>
                    <!-- End Custom Radio -->
                </div>
                <!-- End Row -->
            </div>
            <!-- End Body -->

            <!-- Footer -->
            <div class="card-footer">
                <div class="row gx-2">
                    <div class="col">
                        <button type="button" id="js-builder-reset" class="btn btn-block btn-lg btn-white">
                            <i class="tio-restore"></i> Reset
                        </button>
                    </div>
                    <div class="col">
                        <button type="button" id="js-builder-preview" class="btn btn-block btn-lg btn-primary">
                            <i class="tio-visible"></i> Preview
                        </button>
                    </div>
                </div>
                <!-- End Row -->
            </div>
            <!-- End Footer -->
        </div>
    </div>
    <!-- End Builder -->

    <!-- Builder Toggle -->
    <div class="d-none d-md-block position-fixed bottom-0 right-0 mr-5 mb-10" style="z-index: 3;">
        <div style="position: fixed; top: 50%; right: 0; margin-right: -.25rem; transform: translateY(-50%); writing-mode: vertical-rl; text-orientation: sideways;">
            <div class="hs-unfold">
                <a id="builderPopover" class="js-hs-unfold-invoker btn btn-sm btn-soft-dark py-3" href="javascript:;" data-template='<div class="d-none d-md-block popover" role="tooltip"><div class="arrow"></div><h3 class="popover-header"></h3><div class="popover-body"></div></div>' data-toggle="popover" data-placement="left" title="<div class='d-flex align-items-center'>Front Builder <a href='#!' class='close close-light ml-auto'><i id='closeBuilderPopover' class='tio-clear'></i></a></div>" data-content="Customize your overview page layout. Choose the one that best fits your needs." data-html="true" data-hs-unfold-options='{
                "target": "#styleSwitcherDropdown",
                "type": "css-animation",
                "animationIn": "fadeInRight",
                "animationOut": "fadeOutRight",
                "hasOverlay": true,
                "smartPositionOff": true
               }'>
                    <i class="tio-tune mr-2"></i>
                    <span class="font-weight-bold text-uppercase">Builder</span>
                </a>
            </div>
        </div>
    </div>
    <!-- End Builder Toggle -->

    <!-- JS Preview mode only -->
    <div id="headerMain" class="d-none">
        <header id="header" class="navbar navbar-expand-lg navbar-fixed navbar-height navbar-flush navbar-container navbar-bordered">
            <div class="navbar-nav-wrap">
                <div class="navbar-brand-wrapper">
                    <!-- Logo -->
                    <a class="navbar-brand" href="index.html" aria-label="Front">
                        <img class="navbar-brand-logo" src="<?php echo assets_css() ?>dashboard\svg\logos\logo.svg" alt="Logo">
                        <img class="navbar-brand-logo-mini" src="<?php echo assets_css() ?>dashboard\svg\logos\logo-short.svg" alt="Logo">
                    </a>
                    <!-- End Logo -->
                </div>

                <div class="navbar-nav-wrap-content-left">
                    <!-- Navbar Vertical Toggle -->
                    <button type="button" class="js-navbar-vertical-aside-toggle-invoker close mr-3">
                        <i class="tio-first-page navbar-vertical-aside-toggle-short-align" data-toggle="tooltip" data-placement="right" title="Collapse"></i>
                        <i class="tio-last-page navbar-vertical-aside-toggle-full-align" data-template='<div class="tooltip d-none d-sm-block" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>' data-toggle="tooltip" data-placement="right" title="Expand"></i>
                    </button>
                    <!-- End Navbar Vertical Toggle -->

                    <!-- Search Form -->
                    <div class="d-none d-md-block">
                        <form class="position-relative">
                            <!-- Input Group -->
                            <div class="input-group input-group-merge input-group-borderless input-group-hover-light navbar-input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="tio-search"></i>
                                    </div>
                                </div>
                                <input type="search" class="js-form-search form-control" placeholder="Tìm kiếm..." aria-label="Search in front" >
                            </div>
                            <!-- End Input Group -->
                        </form>
                    </div>
                    <!-- End Search Form -->
                </div>

                <!-- Secondary Content -->
                <div class="navbar-nav-wrap-content-right">
                    <!-- Navbar -->
                    <ul class="navbar-nav align-items-center flex-row">
                        <li class="nav-item">
                            <!-- Account -->
                            <div class="hs-unfold">
                                <a class="js-hs-unfold-invoker navbar-dropdown-account-wrapper" href="javascript:;" data-hs-unfold-options='{
                                    "target": "#accountNavbarDropdown",
                                    "type": "css-animation"
                                }'>
                                    <div class="avatar avatar-sm avatar-circle">
                                        <img class="avatar-img" src="<?php echo assets_css() ?>dashboard\img\160x160\img6.jpg" alt="Image Description">
                                        <span class="avatar-status avatar-sm-status avatar-status-success"></span>
                                    </div>
                                </a>

                                <div id="accountNavbarDropdown" class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-right navbar-dropdown-menu navbar-dropdown-account" style="width: 16rem;">
                                    <div class="dropdown-item-text">
                                        <div class="media align-items-center">
                                            <div class="avatar avatar-sm avatar-circle mr-2">
                                                <img class="avatar-img" src="<?php echo assets_css() ?>dashboard\img\160x160\img6.jpg" alt="Image Description">
                                            </div>
                                            <div class="media-body">
                                                <span class="card-title h5">Admin</span>
                                                <span class="card-text">admin@example.com</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="dropdown-divider"></div>

                                    <a class="dropdown-item" href="#">
                                        <span class="text-truncate pr-2" title="Profile &amp; account">Thông tin cá nhân</span>
                                    </a>

                                    <a class="dropdown-item" href="#">
                                        <span class="text-truncate pr-2" title="Sign out">Đăng xuất</span>
                                    </a>
                                </div>
                            </div>
                            <!-- End Account -->
                        </li>
                    </ul>
                    <!-- End Navbar -->
                </div>
                <!-- End Secondary Content -->
            </div>
        </header>
    </div>
    <div id="headerFluid" class="d-none">
        <header id="header" class="navbar navbar-expand-xl navbar-fixed navbar-height navbar-flush navbar-container navbar-bordered  ">
            <div class="js-mega-menu navbar-nav-wrap">
                <div class="navbar-brand-wrapper">
                    <!-- Logo -->
                    <a class="navbar-brand" href="index.html" aria-label="Front">
                        <img class="navbar-brand-logo" src="<?php echo assets_css() ?>dashboard\svg\logos\logo.svg" alt="Logo">
                    </a>
                    <!-- End Logo -->
                </div>
            </div>
        </header>
    </div>
    <div id="headerDouble" class="d-none">
        <header id="header" class="navbar navbar-expand-lg navbar-bordered flex-lg-column px-0">
            <div class="navbar-dark w-100">
                <div class="container-fluid">
                    <div class="navbar-nav-wrap">
                        <div class="navbar-brand-wrapper">
                            <!-- Logo -->
                            <a class="navbar-brand" href="index.html" aria-label="Front">
                                <img class="navbar-brand-logo" src="<?php echo assets_css() ?>dashboard\svg\logos\logo-white.svg" alt="Logo">
                            </a>
                            <!-- End Logo -->
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </div>
    <div id="sidebarMain" class="d-none">
        <aside class="js-navbar-vertical-aside navbar navbar-vertical-aside navbar-vertical navbar-vertical-fixed navbar-expand-xl navbar-bordered  ">
            <div class="navbar-vertical-container">
                <div class="navbar-vertical-footer-offset">
                    <div class="navbar-brand-wrapper justify-content-between">
                        <!-- Logo -->
                        <a class="navbar-brand" href="index.html" aria-label="Front">
                            <img class="navbar-brand-logo" src="<?php echo assets_css() ?>dashboard\svg\logos\logo.svg" alt="Logo">
                            <img class="navbar-brand-logo-mini" src="<?php echo assets_css() ?>dashboard\svg\logos\logo-short.svg" alt="Logo">
                        </a>
                        <!-- End Logo -->

                        <!-- Navbar Vertical Toggle -->
                        <button type="button" class="js-navbar-vertical-aside-toggle-invoker navbar-vertical-aside-toggle btn btn-icon btn-xs btn-ghost-dark">
                            <i class="tio-clear tio-lg"></i>
                        </button>
                        <!-- End Navbar Vertical Toggle -->
                    </div>

                    <!-- Content -->
                    <div class="navbar-vertical-content">
                        <ul class="navbar-nav navbar-nav-lg nav-tabs">
                            <!-- Dashboards -->
                            <li class="nav-item ">
                                <a class="js-nav-tooltip-link nav-link " href="layouts\layouts.html" title="Bảng thống kê" data-placement="left">
                                    <i class="tio-home-vs-1-outlined nav-icon"></i>
                                    <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">Bảng thống kê</span>
                                </a>
                            </li>
                            <!-- End Dashboards -->

                            <li class="nav-item">
                                <small class="nav-subtitle" title="Quản lý tài khoản">Quản lý tài khoản</small>
                                <small class="tio-more-horizontal nav-subtitle-replacer"></small>
                            </li>

                            <!-- Training staff -->
                            <li class="navbar-vertical-aside-has-menu ">
                                <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle " href="javascript:;" title="Nhân viên quản lý">
                                    <i class="tio-pages-outlined nav-icon"></i>
                                    <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">Nhân viên quản lý</span>
                                </a>

                                <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                                    <li class="nav-item">
                                        <a class="nav-link " href="referrals.html" title="Tổng">
                                            <span class="tio-circle nav-indicator-icon"></span>
                                            <span class="text-truncate">Tổng</span>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link " href="referrals.html" title="Thêm mới">
                                            <span class="tio-circle nav-indicator-icon"></span>
                                            <span class="text-truncate">Thêm mới</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!-- End Training staff -->

                            <!-- Trainer  -->
                            <li class="navbar-vertical-aside-has-menu ">
                                <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle " href="javascript:;" title="Giáo viên">
                                    <i class="tio-pages-outlined nav-icon"></i>
                                    <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">Giáo viên</span>
                                </a>

                                <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                                    <li class="nav-item">
                                        <a class="nav-link " href="referrals.html" title="Tổng">
                                            <span class="tio-circle nav-indicator-icon"></span>
                                            <span class="text-truncate">Tổng</span>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link " href="referrals.html" title="Thêm mới">
                                            <span class="tio-circle nav-indicator-icon"></span>
                                            <span class="text-truncate">Thêm mới</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!-- End Trainer -->

                            <!-- Trainee  -->
                            <li class="navbar-vertical-aside-has-menu ">
                                <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle " href="javascript:;" title="Học viên">
                                    <i class="tio-pages-outlined nav-icon"></i>
                                    <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">Học viên</span>
                                </a>

                                <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                                    <li class="nav-item">
                                        <a class="nav-link " href="referrals.html" title="Tổng">
                                            <span class="tio-circle nav-indicator-icon"></span>
                                            <span class="text-truncate">Tổng</span>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link " href="referrals.html" title="Thêm mới">
                                            <span class="tio-circle nav-indicator-icon"></span>
                                            <span class="text-truncate">Thêm mới</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!-- End Trainee -->

                            <li class="nav-item">
                                <div class="nav-divider"></div>
                            </li>
                            
                            <li class="nav-item">
                                <small class="nav-subtitle" title="Môn học và Khoá học">Môn học và Khoá học</small>
                                <small class="tio-more-horizontal nav-subtitle-replacer"></small>
                            </li>

                            <li class="nav-item ">
                                <a class="js-nav-tooltip-link nav-link " href="layouts\layouts.html" title="Môn học" data-placement="left">
                                    <i class="tio-dashboard-vs-outlined nav-icon"></i>
                                    <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">Môn học</span>
                                </a>
                            </li>

                            <li class="nav-item ">
                                <a class="js-nav-tooltip-link nav-link " href="layouts\layouts.html" title="Khoá học" data-placement="left">
                                    <i class="tio-dashboard-vs-outlined nav-icon"></i>
                                    <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">Khoá học</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- End Content -->
                </div>
            </div>
        </aside>
    </div>
    <div id="sidebarCompact" class="d-none">
        <aside class="js-navbar-vertical-aside navbar navbar-vertical-aside navbar-vertical navbar-vertical-fixed navbar-expand-xl navbar-bordered  ">
            <div class="navbar-vertical-container">
                <div class="navbar-brand d-flex justify-content-center">
                    <!-- Logo -->
                    <a class="navbar-brand" href="index.html" aria-label="Front">
                        <img class="navbar-brand-logo-short" src="<?php echo assets_css() ?>dashboard\svg\logos\logo-short.svg" alt="Logo">
                    </a>
                    <!-- End Logo -->
                </div>
        </aside>
    </div>

    <script src="<?php echo assets_css() ?>dashboard\js\demo.js"></script>

    <!-- END ONLY DEV -->

    <!-- ========== MAIN CONTENT ========== -->
    <main id="content" role="main" class="main pointer-event">
        <!-- Content -->
        <div class="content container-fluid">
            <!-- Page Header -->
            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col-sm mb-2 mb-sm-0">
                        <h1 class="page-header-title">Bảng thống kê</h1>
                    </div>
                </div>
            </div>
            <!-- End Page Header -->

            <!-- Stats -->
            <div class="row gx-2 gx-lg-3">
                <div class="col-sm-6 col-lg-3 mb-3 mb-lg-5">
                    <!-- Card -->
                    <a class="card card-hover-shadow h-100" href="#">
                        <div class="card-body">
                            <h6 class="card-subtitle">Tổng số tài khoản nhân viên quản lý</h6>

                            <div class="row align-items-center gx-2 mb-1 mt-5">
                                <div class="col-6">
                                    <span class="card-title h1">72,540</span>
                                </div>
                            </div>
                            <!-- End Row -->
                        </div>
                    </a>
                    <!-- End Card -->
                </div>

                <div class="col-sm-6 col-lg-3 mb-3 mb-lg-5">
                    <!-- Card -->
                    <a class="card card-hover-shadow h-100" href="#">
                        <div class="card-body">
                            <h6 class="card-subtitle">Tổng số tài khoản giáo viên</h6>

                            <div class="row align-items-center gx-2 mb-1 mt-5">
                                <div class="col-6">
                                    <span class="card-title h1">29.4%</span>
                                </div>
                            </div>
                            <!-- End Row -->
                        </div>
                    </a>
                    <!-- End Card -->
                </div>

                <div class="col-sm-6 col-lg-3 mb-3 mb-lg-5">
                    <!-- Card -->
                    <a class="card card-hover-shadow h-100" href="#">
                        <div class="card-body">
                            <h6 class="card-subtitle">Tổng số tài khoản học viên</h6>

                            <div class="row align-items-center gx-2 mb-1 mt-5">
                                <div class="col-6">
                                    <span class="card-title h1">56.8%</span>
                                </div>
                            </div>
                            <!-- End Row -->
                        </div>
                    </a>
                    <!-- End Card -->
                </div>

                <div class="col-sm-6 col-lg-3 mb-3 mb-lg-5">
                    <!-- Card -->
                    <a class="card card-hover-shadow h-100" href="#">
                        <div class="card-body">
                            <h6 class="card-subtitle">Tổng các khoá học</h6>

                            <div class="row align-items-center gx-2 mb-1 mt-5">
                                <div class="col-6">
                                    <span class="card-title h1">56.8%</span>
                                </div>
                            </div>
                            <!-- End Row -->
                        </div>
                    </a>
                    <!-- End Card -->
                </div>
            </div>
            <!-- End Stats -->
        </div>
        <!-- End Content -->

        <!-- Footer -->

        <div class="footer">
            <div class="row justify-content-between align-items-center">
                <div class="col">
                    <p class="font-size-sm mb-0">&copy; Front. <span class="d-none d-sm-inline-block">2021 School.</span></p>
                </div>
            </div>
        </div>



        <!-- End Footer -->
    </main>
    <!-- ========== END MAIN CONTENT ========== -->


    <!-- JS Implementing Plugins -->
    <script src="<?php echo assets_css() ?>dashboard\js\vendor.min.js"></script>
    <script src="<?php echo assets_css() ?>dashboard\vendor\chart.js\dist\Chart.min.js"></script>
    <script src="<?php echo assets_css() ?>dashboard\vendor\chart.js.extensions\chartjs-extensions.js"></script>
    <script src="<?php echo assets_css() ?>dashboard\vendor\chartjs-plugin-datalabels\dist\chartjs-plugin-datalabels.min.js"></script>



    <!-- JS Front -->
    <script src="<?php echo assets_css() ?>dashboard\js\theme.min.js"></script>

    <!-- JS Plugins Init. -->
    <script>
        $(document).on('ready', function() {
            // ONLY DEV
            // =======================================================

            if (window.localStorage.getItem('hs-builder-popover') === null) {
                $('#builderPopover').popover('show')
                    .on('shown.bs.popover', function() {
                        $('.popover').last().addClass('popover-dark')
                    });

                $(document).on('click', '#closeBuilderPopover', function() {
                    window.localStorage.setItem('hs-builder-popover', true);
                    $('#builderPopover').popover('dispose');
                });
            } else {
                $('#builderPopover').on('show.bs.popover', function() {
                    return false
                });
            }

            // END ONLY DEV
            // =======================================================


            // BUILDER TOGGLE INVOKER
            // =======================================================
            $('.js-navbar-vertical-aside-toggle-invoker').click(function() {
                $('.js-navbar-vertical-aside-toggle-invoker i').tooltip('hide');
            });


            // INITIALIZATION OF MEGA MENU
            // =======================================================
            var megaMenu = new HSMegaMenu($('.js-mega-menu'), {
                desktop: {
                    position: 'left'
                }
            }).init();



            // INITIALIZATION OF NAVBAR VERTICAL NAVIGATION
            // =======================================================
            var sidebar = $('.js-navbar-vertical-aside').hsSideNav();


            // INITIALIZATION OF TOOLTIP IN NAVBAR VERTICAL MENU
            // =======================================================
            $('.js-nav-tooltip-link').tooltip({
                boundary: 'window'
            })

            $(".js-nav-tooltip-link").on("show.bs.tooltip", function(e) {
                if (!$("body").hasClass("navbar-vertical-aside-mini-mode")) {
                    return false;
                }
            });


            // INITIALIZATION OF UNFOLD
            // =======================================================
            $('.js-hs-unfold-invoker').each(function() {
                var unfold = new HSUnfold($(this)).init();
            });


            // INITIALIZATION OF FORM SEARCH
            // =======================================================
            $('.js-form-search').each(function() {
                new HSFormSearch($(this)).init()
            });


            // INITIALIZATION OF SELECT2
            // =======================================================
            $('.js-select2-custom').each(function() {
                var select2 = $.HSCore.components.HSSelect2.init($(this));
            });


            // INITIALIZATION OF CHARTJS
            // =======================================================
            Chart.plugins.unregister(ChartDataLabels);

            $('.js-chart').each(function() {
                $.HSCore.components.HSChartJS.init($(this));
            });

            var updatingChart = $.HSCore.components.HSChartJS.init($('#updatingData'));

            // CALL WHEN TAB IS CLICKED
            // =======================================================
            $('[data-toggle="chart-bar"]').click(function(e) {
                let keyDataset = $(e.currentTarget).attr('data-datasets')

                if (keyDataset === 'lastWeek') {
                    updatingChart.data.labels = ["Apr 22", "Apr 23", "Apr 24", "Apr 25", "Apr 26", "Apr 27", "Apr 28", "Apr 29", "Apr 30", "Apr 31"];
                    updatingChart.data.datasets = [{
                            "data": [120, 250, 300, 200, 300, 290, 350, 100, 125, 320],
                            "backgroundColor": "#377dff",
                            "hoverBackgroundColor": "#377dff",
                            "borderColor": "#377dff"
                        },
                        {
                            "data": [250, 130, 322, 144, 129, 300, 260, 120, 260, 245, 110],
                            "backgroundColor": "#e7eaf3",
                            "borderColor": "#e7eaf3"
                        }
                    ];
                    updatingChart.update();
                } else {
                    updatingChart.data.labels = ["May 1", "May 2", "May 3", "May 4", "May 5", "May 6", "May 7", "May 8", "May 9", "May 10"];
                    updatingChart.data.datasets = [{
                            "data": [200, 300, 290, 350, 150, 350, 300, 100, 125, 220],
                            "backgroundColor": "#377dff",
                            "hoverBackgroundColor": "#377dff",
                            "borderColor": "#377dff"
                        },
                        {
                            "data": [150, 230, 382, 204, 169, 290, 300, 100, 300, 225, 120],
                            "backgroundColor": "#e7eaf3",
                            "borderColor": "#e7eaf3"
                        }
                    ]
                    updatingChart.update();
                }
            })


            // INITIALIZATION OF BUBBLE CHARTJS WITH DATALABELS PLUGIN
            // =======================================================
            $('.js-chart-datalabels').each(function() {
                $.HSCore.components.HSChartJS.init($(this), {
                    plugins: [ChartDataLabels],
                    options: {
                        plugins: {
                            datalabels: {
                                anchor: function(context) {
                                    var value = context.dataset.data[context.dataIndex];
                                    return value.r < 20 ? 'end' : 'center';
                                },
                                align: function(context) {
                                    var value = context.dataset.data[context.dataIndex];
                                    return value.r < 20 ? 'end' : 'center';
                                },
                                color: function(context) {
                                    var value = context.dataset.data[context.dataIndex];
                                    return value.r < 20 ? context.dataset.backgroundColor : context.dataset.color;
                                },
                                font: function(context) {
                                    var value = context.dataset.data[context.dataIndex],
                                        fontSize = 25;

                                    if (value.r > 50) {
                                        fontSize = 35;
                                    }

                                    if (value.r > 70) {
                                        fontSize = 55;
                                    }

                                    return {
                                        weight: 'lighter',
                                        size: fontSize
                                    };
                                },
                                offset: 2,
                                padding: 0
                            }
                        }
                    },
                });
            });


            // INITIALIZATION OF DATERANGEPICKER
            // =======================================================
            $('.js-daterangepicker').daterangepicker();

            $('.js-daterangepicker-times').daterangepicker({
                timePicker: true,
                startDate: moment().startOf('hour'),
                endDate: moment().startOf('hour').add(32, 'hour'),
                locale: {
                    format: 'M/DD hh:mm A'
                }
            });

            var start = moment();
            var end = moment();

            function cb(start, end) {
                $('#js-daterangepicker-predefined .js-daterangepicker-predefined-preview').html(start.format('MMM D') + ' - ' + end.format('MMM D, YYYY'));
            }

            $('#js-daterangepicker-predefined').daterangepicker({
                startDate: start,
                endDate: end,
                ranges: {
                    'Today': [moment(), moment()],
                    'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                    'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                    'This Month': [moment().startOf('month'), moment().endOf('month')],
                    'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                }
            }, cb);

            cb(start, end);


            // INITIALIZATION OF DATATABLES
            // =======================================================
            var datatable = $.HSCore.components.HSDatatables.init($('#datatable'), {
                select: {
                    style: 'multi',
                    selector: 'td:first-child input[type="checkbox"]',
                    classMap: {
                        checkAll: '#datatableCheckAll',
                        counter: '#datatableCounter',
                        counterInfo: '#datatableCounterInfo'
                    }
                },
                language: {
                    zeroRecords: '<div class="text-center p-4">' +
                        '<img class="mb-3" src="./assets/svg/illustrations/sorry.svg" alt="Image Description" style="width: 7rem;">' +
                        '<p class="mb-0">No data to show</p>' +
                        '</div>'
                }
            });

            $('.js-datatable-filter').on('change', function() {
                var $this = $(this),
                    elVal = $this.val(),
                    targetColumnIndex = $this.data('target-column-index');

                datatable.column(targetColumnIndex).search(elVal).draw();
            });

            $('#datatableSearch').on('mouseup', function(e) {
                var $input = $(this),
                    oldValue = $input.val();

                if (oldValue == "") return;

                setTimeout(function() {
                    var newValue = $input.val();

                    if (newValue == "") {
                        // Gotcha
                        datatable.search('').draw();
                    }
                }, 1);
            });


            // INITIALIZATION OF CLIPBOARD
            // =======================================================
            $('.js-clipboard').each(function() {
                var clipboard = $.HSCore.components.HSClipboard.init(this);
            });
        });
    </script>

    <!-- IE Support -->
    <script>
        if (/MSIE \d|Trident.*rv:/.test(navigator.userAgent)) document.write('<script src="<?php echo assets_css() ?>dashboard/vendor/babel-polyfill/polyfill.min.js"><\/script>');
    </script>
</body>

</html>