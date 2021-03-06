<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard </title>

    <link rel="apple-touch-icon" href="<?= base_url('/public/dashboard/assets/images/apple-touch-icon.png') ?>">
    <link rel="shortcut icon" href="<?= base_url('/public/dashboard/assets/images/favicon.ico') ?>">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="<?= base_url('/public/dashboard/css/bootstrap.min3f0d.css?v2.2.0') ?>">
    <link rel="stylesheet" href="<?= base_url('/public/dashboard/css/bootstrap-extend.min3f0d.css?v2.2.0') ?>">
    <link rel="stylesheet" href="<?= base_url('/public/dashboard/assets/css/site.min3f0d.css?v2.2.0') ?>">

    <!-- Skin tools (demo site only) -->
    <link rel="stylesheet" href="<?= base_url('/public/dashboard/css/skintools.min3f0d.css?v2.2.0') ?>">
    <script src="<?= base_url('/public/dashboard/assets/js/sections/skintools.min.js') ?>"></script>

    <!-- Plugins -->
    <link rel="stylesheet" href="<?= base_url('/public/dashboard/vendor/animsition/animsition.min3f0d.css?v2.2.0') ?>" >
    <link rel="stylesheet" href="<?= base_url('/public/dashboard/vendor/asscrollable/asScrollable.min3f0d.css?v2.2.0') ?>" >
    <link rel="stylesheet" href="<?= base_url('/public/dashboard/vendor/switchery/switchery.min3f0d.css?v2.2.0') ?>" >
    <link rel="stylesheet" href="<?= base_url('/public/dashboard/vendor/intro-js/introjs.min3f0d.css?v2.2.0') ?>" >
    <link rel="stylesheet" href="<?= base_url('/public/dashboard/vendor/slidepanel/slidePanel.min3f0d.css?v2.2.0') ?>" >
    <link rel="stylesheet" href="<?= base_url('/public/dashboard/vendor/flag-icon-css/flag-icon.min3f0d.css?v2.2.0') ?>" >

    <!-- Plugins For This Page -->
    <link rel="stylesheet" href="<?= base_url('/public/dashboard/vendor/chartist-js/chartist.min3f0d.css?v2.2.0') ?>">
    <link rel="stylesheet" href="<?= base_url('/public/dashboard/vendor/aspieprogress/asPieProgress.min3f0d.css?v2.2.0') ?>">
    <link rel="stylesheet" href="<?= base_url('/public/dashboard/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.min3f0d.css?v2.2.0') ?>">

    <!-- Page -->
    <link rel="stylesheet" href="<?= base_url('/public/dashboard/assets/examples/css/dashboard/ecommerce.min3f0d.css?v2.2.0') ?>">

    <!-- Fonts -->
    <link rel="stylesheet" href="<?= base_url('/public/dashboard/fonts/web-icons/web-icons.min3f0d.css?v2.2.0') ?>">
    <link rel="stylesheet" href="<?= base_url('/public/dashboard/fonts/brand-icons/brand-icons.min3f0d.css?v2.2.0') ?>">
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>

    <link rel="stylesheet" href="<?= base_url('/public/dashboard/fonts/font-awesome/font-awesome.min3f0d.css?v2.2.0') ?>">

    <!--[if lt IE 9]>
    <script src="<?= base_url('/public/dashboard/vendor/html5shiv/html5shiv.min.js') ?>"></script>
    <![endif]-->

    <!--[if lt IE 10]>
    <script src="<?= base_url('/public/dashboard/vendor/media-match/media.match.min.js') ?>"></script>
    <script src="<?= base_url('/public/dashboard/vendor/respond/respond.min.js') ?>"></script>
    <![endif]-->

    <!-- Scripts -->
    <script src="<?= base_url('/public/dashboard/vendor/modernizr/modernizr.min.js') ?>"></script>
    <script src="<?= base_url('/public/dashboard/vendor/breakpoints/breakpoints.min.js') ?>"></script>
    <script>
        Breakpoints();
    </script>
</head>

<body class="@yield('body')">

<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<nav class="site-navbar navbar navbar-default navbar-fixed-top navbar-mega" role="navigation">

    <div class="navbar-header">
        <button type="button" class="navbar-toggle hamburger hamburger-close navbar-toggle-left hided"
                data-toggle="menubar">
            <span class="sr-only">Toggle navigation</span>
            <span class="hamburger-bar"></span>
        </button>
        <button type="button" class="navbar-toggle collapsed" data-target="#site-navbar-collapse"
                data-toggle="collapse">
            <i class="icon wb-more-horizontal" aria-hidden="true"></i>
        </button>
        <div class="navbar-brand navbar-brand-center site-gridmenu-toggle" data-toggle="gridmenu">
            <img class="navbar-brand-logo" src="<?= base_url('/public/dashboard/assets/images/logo.png') ?>" title="Remark">
            <span class="navbar-brand-text hidden-xs"> Pivot</span>
        </div>
        <button type="button" class="navbar-toggle collapsed" data-target="#site-navbar-search"
                data-toggle="collapse">
            <span class="sr-only">Toggle Search</span>
            <i class="icon wb-search" aria-hidden="true"></i>
        </button>
    </div>

    <div class="navbar-container container-fluid">
        <!-- Navbar Collapse -->
        <div class="collapse navbar-collapse navbar-collapse-toolbar" id="site-navbar-collapse">
            <!-- Navbar Toolbar -->
            <ul class="nav navbar-toolbar">
                <li class="hidden-float" id="toggleMenubar">
                    <a data-toggle="menubar" href="#" role="button">
                        <i class="icon hamburger hamburger-arrow-left">
                            <span class="sr-only">Toggle menubar</span>
                            <span class="hamburger-bar"></span>
                        </i>
                    </a>
                </li>
                <li class="hidden-xs" id="toggleFullscreen">
                    <a class="icon icon-fullscreen" data-toggle="fullscreen" href="#" role="button">
                        <span class="sr-only">Toggle fullscreen</span>
                    </a>
                </li>
                <li class="hidden-float">
                    <a class="icon wb-search" data-toggle="collapse" href="#" data-target="#site-navbar-search"
                       role="button">
                        <span class="sr-only">Toggle Search</span>
                    </a>
                </li>

            </ul>
            <!-- End Navbar Toolbar -->

            <!-- Navbar Toolbar Right -->
            <ul class="nav navbar-toolbar navbar-right navbar-toolbar-right">

                <li class="dropdown">
                    <a style="text-transform: capitalize;" data-toggle="dropdown" href="javascript:void(0)" title="Notifications" aria-expanded="false"
                       data-animation="scale-up" role="button">
                        Hello <?=(isset($_SESSION['username']) ? $_SESSION['username'] : "Guest")?>
                    </a>

                </li>
                <li class="dropdown">
                    <a class="navbar-avatar dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false"
                       data-animation="scale-up" role="button">
              <span class="avatar avatar-online">
                <img src="<?= base_url('/public/dashboard/portraits/5.jpg') ?>" alt="...">
                <i></i>
              </span>
                    </a>
                    <ul class="dropdown-menu" role="menu">
                        <li role="presentation">
                            <a href="" role="menuitem"><i class="icon wb-user" aria-hidden="true"></i> Profile</a>
                        </li>
                        <li role="presentation">
                            <a href="" role="menuitem"><i class="icon wb-settings" aria-hidden="true"></i> Password Reset</a>
                        </li>
                        <li class="divider" role="presentation"></li>
                        <li role="presentation">
                            <a href="<?= base_url('/user/logout')?>" role="menuitem"><i class="icon wb-power" aria-hidden="true"></i> Logout</a>
                        </li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="javascript:void(0)" data-animation="scale-up"
                       aria-expanded="false">
                        <span class="flag-icon flag-icon-ng"></span>
                    </a>
                </li>

            </ul>
        </div>
        <!-- End Navbar Collapse -->

        <!-- Site Navbar Seach -->
        <div class="collapse navbar-search-overlap" id="site-navbar-search">
            <form role="search">
                <div class="form-group">
                    <div class="input-search">
                        <i class="input-search-icon wb-search" aria-hidden="true"></i>
                        <input type="text" class="form-control" name="site-search" placeholder="Search...">
                        <button type="button" class="input-search-close icon wb-close" data-target="#site-navbar-search"
                                data-toggle="collapse" aria-label="Close"></button>
                    </div>
                </div>
            </form>
        </div>
        <!-- End Site Navbar Seach -->
    </div>
</nav>

<div class="site-menubar">
    <div class="site-menubar-body">
        <div>
            <div>
                <ul class="site-menu">
                    <li class="site-menu-category">General</li>
                    <li class="site-menu-item has-sub active open">
                        <a href="">
                            <i class="site-menu-icon wb-dashboard" aria-hidden="true"></i>
                            <span class="site-menu-title">Dashboard</span>
                        </a>
                    </li>
                    <li class="site-menu-item has-sub active ">
                        <a href="javascript:void(0)">
                            <i class="site-menu-icon wb-user" aria-hidden="true"></i>
                            <span class="site-menu-title">Profile</span>
                            <span class="site-menu-arrow"></span>
                        </a>
                        <ul class="site-menu-sub">
                            <li class="site-menu-item">
                                <a class="animsition-link" href="<?= base_url('/user/edit_profile')?>">
                                    <span class="site-menu-title">Update Profile</span>
                                </a>
                                <a class="animsition-link" href="view-profile.html">
                                    <span class="site-menu-title">View Profile</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="site-menu-item has-sub active ">
                        <a href="javascript:void(0)">
                            <i class="site-menu-icon wb-grid-4" aria-hidden="true"></i>
                            <span class="site-menu-title">Products</span>
                            <span class="site-menu-arrow"></span>
                        </a>
                        <ul class="site-menu-sub">
                            <li class="site-menu-item">
                                <a class="animsition-link" href="<?= base_url('/product/create')?>">
                                    <span class="site-menu-title">Create Product</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="<?= base_url('/product')?>">
                                    <span class="site-menu-title">View Products</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <?php if ($_SESSION['is_admin'] === true) : ?>
                        <li class="site-menu-item has-sub active ">
                            <a href="javascript:void(0)">
                                <i class="site-menu-icon wb-grid-4" aria-hidden="true"></i>
                                <span class="site-menu-title">Admin</span>
                                <span class="site-menu-arrow"></span>
                            </a>
                            <ul class="site-menu-sub">
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="<?= base_url('/admin/list_products')?>">
                                        <span class="site-menu-title">Manage Products</span>
                                    </a>
                                </li>
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="<?= base_url('/admin/list_users')?>">
                                        <span class="site-menu-title">Manage Users</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    <?php endif; ?>

                </ul>


            </div>
        </div>
    </div>

    <div class="site-menubar-footer">
        <a href="javascript: void(0);" class="fold-show" data-placement="top" data-toggle="tooltip"
           data-original-title="Settings">
            <span class="icon wb-settings" aria-hidden="true"></span>
        </a>
        <a href="javascript: void(0);" data-placement="top" data-toggle="tooltip" data-original-title="Lock">
            <span class="icon wb-eye-close" aria-hidden="true"></span>
        </a>
        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" data-placement="top" data-toggle="tooltip" data-original-title="Logout">
            <span class="icon wb-power" aria-hidden="true"></span>
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
    </div>
</div>
