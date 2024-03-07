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
    <title>Mission - Fusion Group HK</title>
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
            <!-- <a class="logo" href="index.php"> <h2>THE CAPPA <span>Luxury Hotel</span></h2> </a> -->
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
<div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-dark="4"
     data-background="img/slider/mision.jpg">
    <div class="container">
        <div class="row">
            <div class="col-md-12 caption mt-90">
                <h1>

                    <?php if ($_SESSION['language'] == 'CS') { ?>
                        提供最佳体验
                    <?php } else if ($_SESSION['language'] == 'CT') { ?>
                        提供最佳體驗
                    <?php } else { ?>
                        Providing The Best Experience
                    <?php } ?>
                </h1>
            </div>
        </div>
    </div>
</div>

<!-- About -->
<section class="about section-padding clients-bodyNew">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mb-30 animate-box" data-animate-effect="fadeInUp">
                <?php if ($_SESSION['language'] == 'CS') { ?>
                    <div class="section-title">我们的使命</div>
                    <div class="section-subtitle">我们做什么</div>
                    <p>提升品牌形象 / 维护品牌价值 / 提供全方位支持</p>
                    <div class="section-subtitle">融合的理念</div>
                    <p>
                        Fusion诞生于两个热情洋溢的头脑，坚信设计与建造需要携手合作。良好的设计缺乏质量的生产是不够的，而平庸的设计生产在当今时代也不具有竞争力。Fusion将这两个关键因素融合起来，并以出色的服务和全方位的支持打包，为市场提供最佳体验。</p>
                    <div class="section-subtitle">无与伦比的创造力 + 技术卓越 = Fusion Group</div>
                    <p>
                        感谢所有将他们的品牌形象放在我们手中的客户。您对我们的信任激励着我们不断成长和繁荣。我们将与您站在一起，继续提供独特的Fusion体验。</p>
                <?php } else if ($_SESSION['language'] == 'CT') { ?>
                    <div class="section-title">我們的使命</div>
                    <div class="section-subtitle">我們做什麼</div>
                    <p>提升品牌形象 / 維護品牌價值 / 提供全方位支援</p>
                    <div class="section-subtitle">融合的理念</div>
                    <p>
                        Fusion誕生於兩個熱情洋溢的頭腦，堅信設計與建造需要攜手合作。優秀的設計缺乏質量的生產是不夠的，而平庸的設計生產在當今時代也不具有競爭力。Fusion將這兩個關鍵因素融合起來，並以優秀的服務和全方位的支援打包，為市場提供最佳體驗。</p>
                    <div class="section-subtitle">無與倫比的創造力 + 技術卓越 = Fusion Group</div>
                    <p>
                        感謝所有將他們的品牌形象放在我們手中的客戶。您對我們的信任激勵著我們不斷成長和繁榮。我們將與您站在一起，繼續提供獨特的Fusion體驗。</p>
                <?php } else { ?>
                    <div class="section-title">Our Mission</div>
                    <div class="section-subtitle">WHAT WE DO</div>
                    <p> ENHANCE THE IMAGE OF A BRAND /UPHOLDING ITS EQUITY / ALL AROUND BACKUP SUPPORT</p>
                    <div class="section-subtitle">THE FUSION MENTALITY</div>
                    <p>Fusion is born from two enthusiastic minds that firmly believes that design and build need to be
                        working hand in hand. Good design is nothing without quality production, and production of bland
                        design is not competitive in this day and age. Fusion fuses the two critical factors and wrap it
                        with great services and all around support, to provide the best experience in the market.</p>
                    <div class="section-subtitle">UNMATCHED CREATIVENESS + TECHNICAL EXCELLENCE = FUSION GROUP</div>
                    <p>Thank you for every one of our clients that placed their brand images in our hands. Your
                        confidence in us had inspired us to grow and prosper. We shall stand by you and continue to
                        offer the unique Fusion experience.</p>
                <?php } ?>
            </div>
            <div class="col col-md-3 animate-box" data-animate-effect="fadeInUp"><img src="img/rooms/img2.png" alt=""
                                                                                      class="mt-90 mb-30"></div>
            <div class="col col-md-3 animate-box" data-animate-effect="fadeInUp"><img src="img/rooms/img3.png" alt="">
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="footer">
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="footer-bottom-inner">
                        <?php if ($_SESSION['language'] == 'CS') { ?>
                            <p class="footer-bottom-copy-right">©2023 Fusdesign 版权所有 </br>  由 <a
                                        href="https://ngt.hk">NGT Tech</a> 提供支持</p>
                        <?php } else if ($_SESSION['language'] == 'CT') { ?>
                            <p class="footer-bottom-copy-right">©2023 Fusdesign 版權所有 </br>  由 <a
                                        href="https://ngt.hk">NGT Tech</a> 提供技術支援</p>
                        <?php } else { ?>
                            <p class="footer-bottom-copy-right">©2023 Fusdesign All Rights Reserved </br>  Powered By <a
                                        href="https://ngt.hk">NGT Tech</a></p>
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