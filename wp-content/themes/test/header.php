<!DOCTYPE html>
<html class="wide wow-animation scrollTo" lang="en">
<head>
    <title>Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>
    <?php wp_head(); ?>
</head>
<body> <?php wp_body_open(); ?>
<div class="ie-panel"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
<div class="preloader">
    <div class="preloader-body">
        <div class="cssload-container">
            <div class="cssload-double-torus"></div>
        </div>
    </div>
</div>
<div class="page">
    <header class="section page-header header-absolute">
        <!--RD Navbar-->
        <div class="rd-navbar-wrap">
            <nav class="rd-navbar rd-navbar-classic" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="46px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
                <div class="rd-navbar-collapse-toggle rd-navbar-fixed-element-1" data-rd-navbar-toggle=".rd-navbar-collapse"><span></span></div>
                <div class="rd-navbar-aside-outer rd-navbar-collapse">
                    <!--RD Navbar Brand-->
                    <div class="rd-navbar-aside">
                        <div class="rd-navbar-brand">
                            <!--Brand-->
                            <?=renderLogo(); ?>
                        </div>
                        <div class="contacts-wrap">
                            <address class="contact-info reveal-sm-inline-block text-left offset-none">
                                <div class="p unit unit-spacing-xs unit-horizontal ">
                                    <div class="unit-left"><span class="icon icon-xs icon-circle icon-white-17 mdi mdi-phone"></span></div>
                                    <div class="unit-body head-phone">
                                        <?=renderPhones();?>
                                    </div>
                                </div>
                            </address>
                            <address class="contact-info reveal-sm-inline-block text-left">
                                <div class="p unit unit-horizontal unit-spacing-xs">
                                    <div class="unit-left"><span class="icon icon-xs icon-circle icon-white-17 mdi mdi-map-marker"></span></div>
                                    <div class="unit-body">
<?=renderAdress(); ?>
                                    </div>
                                </div>
                            </address>
                        </div>
                    </div>
                </div>
                <div class="rd-navbar-main-outer">
                    <div class="rd-navbar-main">
                        <!--RD Navbar Panel-->
                        <div class="rd-navbar-panel">
                            <!--RD Navbar Toggle-->
                            <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                            <!--RD Navbar Brand-->
                            <div class="rd-navbar-brand">
                                <!--Brand-->
                                <?=renderLogo(); ?>
                            </div>
                        </div>
                        <div class="rd-navbar-main-element">
<?php get_template_part('templates/renderMenu'); ?>

                            <!--RD Navbar Search-->
                            <div class="rd-navbar-search">
                                <button class="rd-navbar-search-toggle rd-navbar-fixed-element-2" data-rd-navbar-toggle=".rd-navbar-search"><span></span></button>
                                <form class="rd-search" action="search-results.html" data-search-live="rd-search-results-live" method="GET">
                                    <div class="form-wrap">
                                        <label class="form-label" for="rd-navbar-search-form-input">Type and hit enter...</label>
                                        <input class="rd-navbar-search-form-input form-input" id="rd-navbar-search-form-input" type="text" name="s" autocomplete="off">
                                        <div class="rd-search-results-live" id="rd-search-results-live"></div>
                                    </div>
                                    <button class="rd-search-form-submit fa-search" type="submit"></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>