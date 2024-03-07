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
    <title>Fusion Group HK</title>
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
<nav class="navbar navbar-expand-lg" style="height: 120px">
    <div class="container-fluid">
        <!-- Logo -->
        <div class="logo-wrapper">
            <a class="logo" href="index.php"> <img src="img/logo.png" class="logo-img-home" alt=""> </a>
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

<!-- Spa-Wellness Slider -->
<header class="header slider">
    <div class="owl-carousel owl-theme">
        <!-- The opacity on the image is made with "data-overlay-dark="number". You can change it using the numbers 0-9. -->
        <div class="text-center item bg-img" data-overlay-dark="3" data-background="img/spa/banner.png"></div>
    </div>
    <!-- arrow down -->
    <div class="arrow bounce text-center">
        <a href="#" data-scroll-nav="1" class=""> <i class="ti-arrow-down"></i> </a>
    </div>
</header>
<!-- Spa-Wellness Content -->

<section class="about section-padding clients-bodyNew">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mb-30 animate-box" data-animate-effect="fadeInUp">
                <?php
                if ($_SESSION['language'] == 'CS') {
                    ?>
                    <div class="section-title">富爾進設計國際有限公司</div>
                    <div style="text-align: justify">
                        <p>
                            富爾進設計國際有限公司“富爾進”是一家國際專業設計和生產公司，專門從事高品質零售家具和配件生產、創意設計、空間規劃和項目管理。富爾進成立於2000年，我們一直與世界各地的一流國際品牌合作，開發和管理他們的零售項目。除了具有維護品牌股權和遵循嚴格準則的專業知識外，我們還創造了許多一瞬間就能被認出的設計，有助於提高品牌的曝光度和知名度。</p>
                        <p>
                            富爾進深知將創意吸引人的設計與現實世界的實用性融合的重要性。我們努力通過從設計階段到安裝及以後的零售裝修需求，為客戶提供全方位的前所未有的體驗。我們還在中國設立了自己的家具生產工廠，為商店、櫃台和路演項目提供一站式服務。</p>
                        <p>
                            富爾進在香港零售市場有著穩固的存在和認可，並迅速將其業務擴展到中國內地、澳門和亞洲其他地區，以便向該地區更多的受益品牌提供獨特的富爾進體驗。</p>
                    </div>
                    <?php
                } else if ($_SESSION['language'] == 'CT') {
                    ?>
                    <div class="section-title">富爾進設計國際有限公司</div>
                    <div style="text-align: justify">
                        <p>
                            正純設計國際有限公司（簡稱「正純」）是一家國際化的頂尖室內設計公司，專門從事創意設計、空間規劃、高品質的傢俱製作及專案管理。正純於2000年創立，一直與國際尊貴品牌合作，專注於設計新概念店鋪及專櫃並為品牌鑽研陳列細節。正純在遵守國際品牌集團的嚴格準則下，創作了無數個有效增加品牌曝光率的設計，成功提升品牌的形象及銷售業績。
                        </p>
                        <p>
                            正純明白到創新、時尚和別具風格的設計，需融合於現實生活的重要性。為了向客戶提供一個前所未有的體驗，我們從設計、生產、安裝乃至翻新護理，都一絲不苟為客戶提供專業意見及解決技術性的問題。
                            我們亦在國內自設廠房提供傢俱生產，為各品牌的獨立店、百貨專櫃、路演和展覽等提供一站式設計及生產管理。
                        </p>
                        <p>
                            正純在香港的零售市場擁有穩固的地位和相當的市場佔有率，並在過往幾年間迅速擴展業務範圍至中國、澳門、泰國、澳洲及日本等亞太地區。
                        </p>
                    </div>
                    <?php
                } else {
                    ?>
                    <div class="section-title">Fusion Design International Limited</div>
                    <div style="text-align: justify">
                        <p>Fusion Design International Limited “Fusion” is an international professional design and
                            production company specializing in top-quality retail furniture and accessories productions,
                            creative design, space planning and project management. Fusion was founded in the year 2000,
                            we have been partnering with 1st tier international labels all around the world in
                            developing and managing their retail projects. Other than having the expertise to uphold the
                            equity of the brands and to follow their strict guidelines, we have also created many
                            instantly recognizable designs that have helped heighten the brands' exposure and awareness
                            levels.</p>
                        <p>Fusion understands at heart the importance of fusing creative attractive designs with
                            real-world practicality. We strive to provide an all-around unprecedented experience to our
                            clients by taking care of all the retail renovation needs from the design stage up until
                            installation and beyond. We also set up our own factory in China for furniture production,
                            to provide one-stop service for projects of shop, counter and roadshow.</p>
                        <p>Fusion has a firm presence and recognition in the Hong Kong Retail Market, and is fast
                            spreading its wings to PRC, Macau and other parts of Asia so as to deliver the unique Fusion
                            Experience to more beneficiary Brands around the region.</p>
                    </div>
                    <?php
                }
                ?>
            </div>
            <div class="col col-md-3 animate-box d-flex align-items-center justify-content-center"
                 data-animate-effect="fadeInUp"><img src="img/rooms/img2.png" alt=""
                                                     class="mt-90 mb-30"></div>
            <div class="col col-md-3 animate-box" data-animate-effect="fadeInUp"><img src="img/rooms/img3.png" alt="">
            </div>
        </div>
    </div>
</section>

<section class="rooms-page section-padding" data-scroll-index="1">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <?php if ($_SESSION['language'] == 'CS') { ?>
                        水疗与健康
                    <?php } else if ($_SESSION['language'] == 'CT') { ?>
                        水療與健康
                    <?php } else { ?>
                        Spa & Wellness
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services -->
<section class="services section-padding2">
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
                        <div class="butn-dark btn1">
                            <a href="#">
                                <span>
                                    <?php if ($_SESSION['language'] == 'CS') { ?>
                                        阅读更多
                                    <?php } else if ($_SESSION['language'] == 'CT') { ?>
                                        閱讀更多
                                    <?php } else { ?>
                                        Read More
                                    <?php } ?>
                                </span>
                            </a>
                        </div>
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