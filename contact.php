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
    <title>Contact - Fusion Group HK</title>
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
                            echo '客户端';
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
                <h1>Contact Us</h1>
            </div>
        </div>
    </div>
</div>

<!-- Contact -->
<section class="contact section-padding">
    <div class="container">
        <div class="row mb-90">
            <div class="col-md-6 mb-60">
                <h3>Fusion Group HK</h3>
                <p> The online essay help is a viable option if you’re struggling to write an essay. Assistance with
                    writing essays is accessible on a variety of sites that provide a variety of essay writing
                    solutions. Writing assistance for essays can writemyessays offer many advantages.These are generally
                    low-cost and can provide top-quality papers. When you’re searching for assistance with your essay on
                    a particular area or broad array of topics, the experts at these websites are highly skilled and
                    knowledgeable with their specialization.</p>
                <p>If you’re having trouble learning how to compose an admissions essay then you should consider an
                    expert writing service to write it for you. MyAdmissionsEssay can help you with graduate schools and
                    PhDs. Although the service assures only original and authentic work However, that is usually not
                    100% true. There are write my essay review instances when it has turned out to be fraudulent, and
                    some customers have complained about the quality of the service.</p>
                <p>If you are required to write an essay, you can turn write paper for me to the essay writing services.
                    They can provide expert assistance, and turnaround times of three minutes or less. The prices are
                    typically affordable. Additionally, they provide useful blog content and 24/7 assistance to
                    customers.</p>
            </div>


            <div class="col-md-5 mb-30 offset-md-1">
                <h3>Get in touch</h3>
                <form method="post" class="contact__form"
                      action="https://duruthemes.com/demo/html/cappa/demo1-light/mail.php">
                    <!-- form message -->
                    <div class="row">
                        <div class="col-12">
                            <div class="alert alert-success contact__msg" style="display: none" role="alert"> Your
                                message was sent successfully.
                            </div>
                        </div>
                    </div>
                    <!-- form elements -->
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <input name="name" type="text" placeholder="Your Name *" required>
                        </div>
                        <div class="col-md-6 form-group">
                            <input name="email" type="email" placeholder="Your Email *" required>
                        </div>
                        <div class="col-md-6 form-group">
                            <input name="phone" type="text" placeholder="Your Number *" required>
                        </div>
                        <div class="col-md-6 form-group">
                            <input name="subject" type="text" placeholder="Subject *" required>
                        </div>
                        <div class="col-md-12 form-group">
                            <textarea name="message" id="message" cols="30" rows="4" placeholder="Message *"
                                      required></textarea>
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="butn-dark2"><span>Send Message</span></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- Map Section -->
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