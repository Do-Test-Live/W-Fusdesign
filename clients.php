<?php
session_start();
if (!isset($_SESSION['language'])) {
    $_SESSION['language'] = 'EN';
    echo "<script>window.location.href='index.php';</script>";
}
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <title>Clients - Fusion Group HK</title>
    <link rel="shortcut icon" href="img/favicon.png"/>
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css2?family=Barlow&amp;family=Barlow+Condensed&amp;family=Gilda+Display&amp;display=swap">
    <link rel="stylesheet" href="css/plugins.css"/>
    <link rel="stylesheet" href="css/style.css"/>
</head>
<body>
<!-- Preloader -->
<div class="preloader-bg"></div>
<div id="preloader">
    <div id="preloader-status">
        <div class="preloader-position loader"><span></span></div>
    </div>
</div>
<!-- Progress scroll totop -->
<div class="progress-wrap cursor-pointer">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"/>
    </svg>
</div>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg">
    <div class="container">
        <!-- Logo -->
        <div class="logo-wrapper">
            <a class="logo" href="index.php"> <img src="img/logo.png" class="logo-img" alt=""> </a>
        </div>
        <!-- Button -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar"
                aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation"><span
                class="navbar-toggler-icon"><i class="ti-menu"></i></span></button>
        <!-- Menu -->
        <div class="collapse navbar-collapse" id="navbar">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">
                        <?php
                        if ($_SESSION['language'] == 'CS')
                            echo '首页';
                        else if ($_SESSION['language'] == 'CT')
                            echo '首頁';
                        else
                            echo 'Home';
                        ?>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="clients.php">
                        <?php
                        if ($_SESSION['language'] == 'CS')
                            echo '客户';
                        else if ($_SESSION['language'] == 'CT')
                            echo '客戶端';
                        else
                            echo 'Clients';
                        ?>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <?php
                        if ($_SESSION['language'] == 'CS')
                            echo '个人资料';
                        else if ($_SESSION['language'] == 'CT')
                            echo '個人檔案';
                        else
                            echo 'Profile';
                        ?>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="mission.php">
                        <?php
                        if ($_SESSION['language'] == 'CS')
                            echo '使命';
                        else if ($_SESSION['language'] == 'CT')
                            echo '使命';
                        else
                            echo 'Mission';
                        ?>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="services.php">
                        <?php
                        if ($_SESSION['language'] == 'CS')
                            echo '服务';
                        else if ($_SESSION['language'] == 'CT')
                            echo '服務';
                        else
                            echo 'Services';
                        ?>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">
                        <?php
                        if ($_SESSION['language'] == 'CS')
                            echo '联系';
                        else if ($_SESSION['language'] == 'CT')
                            echo '聯繫';
                        else
                            echo 'Contact';
                        ?>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button"
                       data-bs-toggle="dropdown" data-bs-auto-close="outside"
                       aria-expanded="false">Language <i class="ti-angle-down"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="language.php?language=EN" class="dropdown-item"><span>EN</span></a></li>
                        <li><a href="language.php?language=CT" class="dropdown-item"><span>简体中文</span></a></li>
                        <li><a href="language.php?language=CS" class="dropdown-item"><span>繁</span></a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Header Banner -->
<div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-dark="3"
     data-background="img/slider/contact.jpg">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-left caption mt-90">
                <h1>
                    <?php if ($_SESSION['language'] == 'CS') { ?>
                        客户
                    <?php } else if ($_SESSION['language'] == 'CT') { ?>
                        客戶
                    <?php } else { ?>
                        Clients
                    <?php } ?>
                </h1>
            </div>
        </div>
    </div>
</div>

<!-- Contact -->
<section class="services section-padding2 pt-5 clients-body">
    <div class="container">
        <div class="row">
            <div class="col-md-6 p-0 animate-box" data-animate-effect="fadeInLeft">
                <div class="img left">
                    <a href="#"><img src="img/spa/1st.jpg" alt=""></a>
                </div>
            </div>
            <div class="col-md-6 p-0 images1" data-animate-effect="fadeInRight">
                <div>
                    <div class="cont text-left">
                        <div class="butn-dark btn1"><a href="#"><span>
                                    <?php if ($_SESSION['language'] == 'CS') { ?>
                                        阅读更多
                                    <?php } else if ($_SESSION['language'] == 'CT') { ?>
                                        閱讀更多
                                    <?php } else { ?>
                                        Read More
                                    <?php } ?>
                                </span></a></div>
                    </div>
                </div>
            </div>

            <!--
                        <div class="col-md-6 p-0 images1">
                            <div class="butn-dark btn1"><a href="#"><span>Read More</span></a></div>
                        </div>-->
        </div>
        <div class="row">
            <div class="col-md-6 p-0 images2 order-lg-0 order-1" data-animate-effect="fadeInRight">
                <div>
                    <div class="cont text-left">
                        <div class="butn-dark btn1"><a href="#"><span>
                                    <?php if ($_SESSION['language'] == 'CS') { ?>
                                        阅读更多
                                    <?php } else if ($_SESSION['language'] == 'CT') { ?>
                                        閱讀更多
                                    <?php } else { ?>
                                        Read More
                                    <?php } ?>
                                </span></a></div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 p-0 animate-box order-lg-1 order-0" data-animate-effect="fadeInLeft">
                <div class="img left">
                    <a href="#"><img src="img/spa/2nd.jpg" alt=""></a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 p-0 animate-box" data-animate-effect="fadeInLeft">
                <div class="img left">
                    <a href="#"><img src="img/spa/3rd.jpg" alt=""></a>
                </div>
            </div>
            <div class="col-md-6 p-0 images3 " data-animate-effect="fadeInRight">
                <div>
                    <div class="cont text-left">
                        <div class="butn-dark btn1"><a href="#"><span>
                                    <?php if ($_SESSION['language'] == 'CS') { ?>
                                        阅读更多
                                    <?php } else if ($_SESSION['language'] == 'CT') { ?>
                                        閱讀更多
                                    <?php } else { ?>
                                        Read More
                                    <?php } ?>
                                </span></a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 p-0 images4 order-lg-0 order-1" data-animate-effect="fadeInRight">
                <div>
                    <div class="cont text-left">
                        <div class="butn-dark btn1"><a href="#"><span>
                                    <?php if ($_SESSION['language'] == 'CS') { ?>
                                        阅读更多
                                    <?php } else if ($_SESSION['language'] == 'CT') { ?>
                                        閱讀更多
                                    <?php } else { ?>
                                        Read More
                                    <?php } ?>
                                </span></a></div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 p-0 animate-box order-lg-1 order-0" data-animate-effect="fadeInLeft">
                <div class="img left">
                    <a href="#"><img src="img/spa/4th.jpg" alt=""></a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 p-0 animate-box" data-animate-effect="fadeInLeft">
                <div class="img left">
                    <a href="#"><img src="img/spa/1st.jpg" alt=""></a>
                </div>
            </div>
            <div class="col-md-6 p-0 images1" data-animate-effect="fadeInRight">
                <div>
                    <div class="cont text-left">
                        <div class="butn-dark btn1"><a href="#"><span>
                                    <?php if ($_SESSION['language'] == 'CS') { ?>
                                        阅读更多
                                    <?php } else if ($_SESSION['language'] == 'CT') { ?>
                                        閱讀更多
                                    <?php } else { ?>
                                        Read More
                                    <?php } ?>
                                </span></a></div>
                    </div>
                </div>
            </div>

            <!--
                        <div class="col-md-6 p-0 images1">
                            <div class="butn-dark btn1"><a href="#"><span>Read More</span></a></div>
                        </div>-->
        </div>
        <div class="row">
            <div class="col-md-6 p-0 images2 order-lg-0 order-1" data-animate-effect="fadeInRight">
                <div>
                    <div class="cont text-left">
                        <div class="butn-dark btn1"><a href="#"><span>
                                    <?php if ($_SESSION['language'] == 'CS') { ?>
                                        阅读更多
                                    <?php } else if ($_SESSION['language'] == 'CT') { ?>
                                        閱讀更多
                                    <?php } else { ?>
                                        Read More
                                    <?php } ?>
                                </span></a></div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 p-0 animate-box order-lg-1 order-0" data-animate-effect="fadeInLeft">
                <div class="img left">
                    <a href="#"><img src="img/spa/2nd.jpg" alt=""></a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 p-0 animate-box" data-animate-effect="fadeInLeft">
                <div class="img left">
                    <a href="#"><img src="img/spa/3rd.jpg" alt=""></a>
                </div>
            </div>
            <div class="col-md-6 p-0 images3 " data-animate-effect="fadeInRight">
                <div>
                    <div class="cont text-left">
                        <div class="butn-dark btn1"><a href="#"><span>
                                    <?php if ($_SESSION['language'] == 'CS') { ?>
                                        阅读更多
                                    <?php } else if ($_SESSION['language'] == 'CT') { ?>
                                        閱讀更多
                                    <?php } else { ?>
                                        Read More
                                    <?php } ?>
                                </span></a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 p-0 images4 order-lg-0 order-1" data-animate-effect="fadeInRight">
                <div>
                    <div class="cont text-left">
                        <div class="butn-dark btn1"><a href="#"><span>
                                    <?php if ($_SESSION['language'] == 'CS') { ?>
                                        阅读更多
                                    <?php } else if ($_SESSION['language'] == 'CT') { ?>
                                        閱讀更多
                                    <?php } else { ?>
                                        Read More
                                    <?php } ?>
                                </span></a></div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 p-0 animate-box order-lg-1 order-0" data-animate-effect="fadeInLeft">
                <div class="img left">
                    <a href="#"><img src="img/spa/4th.jpg" alt=""></a>
                </div>
            </div>
        </div>
    </div>
</section>

<footer class="footer">
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="footer-bottom-inner">
                        <?php if ($_SESSION['language'] == 'CS') { ?>
                            <p class="footer-bottom-copy-right">©2023 Fusdesign 版权所有 </br>  由 <a href="https://ngt.hk">NGT Tech</a> 提供支持</p>
                        <?php } else if ($_SESSION['language'] == 'CT') { ?>
                            <p class="footer-bottom-copy-right">©2023 Fusdesign 版權所有 </br>  由 <a href="https://ngt.hk">NGT Tech</a> 提供技術支援</p>
                        <?php } else { ?>
                            <p class="footer-bottom-copy-right">©2023 Fusdesign All Rights Reserved </br>  Powered By <a href="https://ngt.hk">NGT Tech</a></p>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- jQuery -->
<script src="js/jquery-3.6.3.min.js"></script>
<script src="js/jquery-migrate-3.0.0.min.js"></script>
<script src="js/modernizr-2.6.2.min.js"></script>
<script src="js/imagesloaded.pkgd.min.js"></script>
<script src="js/jquery.isotope.v3.0.2.js"></script>
<script src="js/pace.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/scrollIt.min.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/jquery.magnific-popup.js"></script>
<script src="js/YouTubePopUp.js"></script>
<script src="js/select2.js"></script>
<script src="js/datepicker.js"></script>
<script src="js/smooth-scroll.min.js"></script>
<script src="js/custom.js"></script>
</body>

</html>