<!DOCTYPE html>
<html lang="fr">

<head>
<meta charset="UTF-8">
<title>CCGIM - <?=ucfirst($page)?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="icon" type="image/png" href="<?=$cdn_domaine?>/media/log01.png">
<link rel="stylesheet" href="<?=$cdn_domaine?>/assets/css/animate.css">
<link rel="stylesheet" href="<?=$cdn_domaine?>/assets/css/aos.css">
<link rel="stylesheet" href="<?=$cdn_domaine?>/assets/css/bootstrap.min.css">
<link rel="stylesheet" href="<?=$cdn_domaine?>/assets/css/bootstrap-select.min.css">
<link rel="stylesheet" href="<?=$cdn_domaine?>/assets/css/custom-animate.css">
<link rel="stylesheet" href="<?=$cdn_domaine?>/assets/css/fancybox.min.css">
<link rel="stylesheet" href="<?=$cdn_domaine?>/assets/css/flaticon.css">
<link rel="stylesheet" href="<?=$cdn_domaine?>/assets/css/font-awesome.min.css">
<link rel="stylesheet" href="<?=$cdn_domaine?>/assets/css/imp.css">
<link rel="stylesheet" href="<?=$cdn_domaine?>/assets/css/jquery-ui.css">
<link rel="stylesheet" href="<?=$cdn_domaine?>/assets/css/magnific-popup.css">
<link rel="stylesheet" href="<?=$cdn_domaine?>/assets/css/owl.css">
<link rel="stylesheet" href="<?=$cdn_domaine?>/assets/css/rtl.css">
<link rel="stylesheet" href="<?=$cdn_domaine?>/assets/css/scrollbar.css">
<link rel="stylesheet" href="<?=$cdn_domaine?>/assets/css/icomoon.css">
<link rel="stylesheet" href="<?=$cdn_domaine?>/assets/css/jquery.bootstrap-touchspin.css">
<link rel="stylesheet" href="<?=$cdn_domaine?>/assets/css/nice-select.css">
<link rel="stylesheet" href="<?=$cdn_domaine?>/assets/css/module-css/header-section.css">
<link rel="stylesheet" href="<?=$cdn_domaine?>/assets/css/module-css/banner-section.css">
<link rel="stylesheet" href="<?=$cdn_domaine?>/assets/css/module-css/about-section.css">
<link rel="stylesheet" href="<?=$cdn_domaine?>/assets/css/module-css/blog-section.css">
<link rel="stylesheet" href="<?=$cdn_domaine?>/assets/css/module-css/fact-counter-section.css">
<link rel="stylesheet" href="<?=$cdn_domaine?>/assets/css/module-css/faq-section.css">
<link rel="stylesheet" href="<?=$cdn_domaine?>/assets/css/module-css/contact-page.css">
<link rel="stylesheet" href="<?=$cdn_domaine?>/assets/css/module-css/breadcrumb-section.css">
<link rel="stylesheet" href="<?=$cdn_domaine?>/assets/css/module-css/team-section.css">
<link rel="stylesheet" href="<?=$cdn_domaine?>/assets/css/module-css/partner-section.css">
<link rel="stylesheet" href="<?=$cdn_domaine?>/assets/css/module-css/testimonial-section.css">
<link rel="stylesheet" href="<?=$cdn_domaine?>/assets/css/module-css/services-section.css">
<link rel="stylesheet" href="<?=$cdn_domaine?>/assets/css/module-css/footer-section.css">
<link rel="stylesheet" href="<?=$cdn_domaine?>/assets/css/color/colors-thm.css" id="jssDefault">
<link rel="stylesheet" href="<?=$cdn_domaine?>/assets/css/style.css">
<link rel="stylesheet" href="<?=$cdn_domaine?>/assets/css/responsive.css">
<link rel="stylesheet" href="<?=$cdn_domaine?>/assets/libs/intltelinput/css/intlTelInput.min.css"/>
<link rel="stylesheet" href="<?=$cdn_domaine?>/assets/libs/sweetalert/sweetalert.css"  type="text/css">
<style>

/*#18a3f4*/
.btn-one, .main-menu .navigation>li>a,.single-service-style1 .title-holder .button-box a, .single-features-style1 .button-box a, .about-style2__image-box .overlay-box h3,.breadcrumb-area .title h2{
    text-transform: inherit !important;
}
.sidebar-contact-info-box .round-box h6, .mobile-menu .navigation li>a,.main-menu .navigation>li>ul>li>a, .authorised-person-info .name span{
    text-transform: inherit !important;
}
.btn-one{
    line-height: 43px;
    border-radius: 6px;
}
.header-bottom-content.style-two .top-navigation .menu-list > li > a {
    padding: 10px 20px;
}
.main-slider.style1 .content .btns-box a.btn-one{
    padding: 5px 10px !important;
    border-radius: 6px;
    line-height: 43px !important;
}
.img-holder img{
    object-fit: cover;
    width: 100%;
    height: 270px;
}
.img-dg{
    border-radius: 100%;
    position: absolute;
    top: 105px;
    right: 92px;
    width: 269px;
    box-shadow: rgb(0 0 0 / 24%) 0 3px 8px;
    border: 7px solid #18a3f4;
}
.p-0{
    padding: 0 !important;
}
a {
    color: var(--thm-base);
}
.bg-dg{
    background-color: #0000fe;
    background-image: url(<?=$cdn_domaine?>/media/thm-pattern-5.png);
    padding: 100px 0;
}

.bg-dg ul li:before {
    content: "\f11b";
    font-family: flaticon !important;
    position: absolute;
    left: -5px;
}
.dg-image{
    border: 11px solid #fff;
    box-shadow: rgb(0 0 0 / 16%) 0 1px 4px;
}
figcaption{
    text-align: center;
    color: #fff;
    font-size: 25px;
    padding-top: 21px;
}
.contact-form-box1 form input[type="text"]{
    height: 40px !important;
    border: 2px solid #ececf6;
    border-radius: 6px;
}
.contact-form-box1 form textarea{
    border: 2px solid #ececf6;
    border-radius: 6px;
    height: inherit;
}
.iti{
    width: 100% !important;
}
.logo{
    width: 100px;
}
.sticky-header .logo {
    padding: 0 !important;
}
.contact-form-box1 form input[type="text"]:focus {
    color: #171717;
    border-color: inherit !important;
}

.apartments-content .text-content .bottom-content {
    padding: 0 20px 8px !important;
}
.apartments-content .image-content {
    border-radius: 0;
}

.owl-carousel .owl-nav button.owl-prev{
    position: absolute;
    top: 47%;
    left: 5px;
    background: #00000057;
    padding: 5px 13px !important;
    border-radius: 50px;
    color: #fff;
    font-size: 26px;
}
.owl-carousel .owl-nav button.owl-next{
    position: absolute;
    top: 47%;
    right: 5px;
    background: #00000057 !important;
    padding: 5px 13px !important;
    border-radius: 50px !important;
    color: #fff !important;
    font-size: 26px !important;
}
.owl-carousel .owl-nav button.owl-prev:hover, .owl-carousel .owl-nav .owl-next:hover{
    background: #000 !important;
    color: #fff !important;
}
.owl-dots{
    position: absolute;
}
.text-box-home h3{
    margin-bottom: 0;
    margin-top: 9px;
}
.apartments-content .text-content .bottom-content .rent-price {

    font-size: 13px !important;

}

.text-content h3{
    font-size: 17px !important;
    padding-top: 10px;
}
.apartments-content .text-content .top-content {
    border: 1px solid #E4E4E4;
    padding: 0 20px 20px;
    margin-top: -3px;
}
.apartments-content .text-content .bottom-content {
    padding: 0 20px 8px !important;
    font-size: 13px;
    color: #9d9d9d;
    font-weight: 500;
    border: 1px solid #E4E4E4;
    border-top: none;
    border-radius: 0 0 5px 5px;
}
.d-flex{
    display: flex;
}

.w20{
    width: 20%;
}
.w25{
    width: 25%;
}
.w30{
    width: 30% !important;
}
.w40{
    width: 40%;
}
.w50{
    width: 50% !important;
}
.w60{
    width: 60%;
}
.w70{
    width: 70% !important;
}
.w80{
    width: 80%;
}
.w100{
    width: 100%;
}
.line-h33{
    line-height: 33px !important;
}
.pagination>li>span {
    padding: 9px 12px !important;
}
.pagination-link ul li.active a {
    background-color:  var(--thm-base) !important;
    color: #ffffff;
}
.pagination-link ul li a {

}
.pagination>li>a{
    padding: 9px 18px !important;
}
.apartment-sidebar2 {
    box-shadow: rgb(0 0 0 / 16%) 0 1px 4px !important;
}
.form-bg.seven {
    box-shadow: none;
    padding: 15px;
    border-radius: 5px;
}
.form-content label {
    text-transform: inherit;
    margin-bottom: 3px !important;
    font-size: 13px !important;
}
.contact .input-style{
    border: 2px solid #d2d8d8 !important;
    border-radius: 6px !important;
    width: 100%;
    padding: 5px;
}
.mot-dg p{
    margin-bottom: 0;
}
.videos video{
    width: 70%;
}

.authorised-person-info .name span {
    text-transform: inherit !important;
    font-size: 15px;
}

.p79-0{
    padding: 79px 0 !important;
}

.prix-bold{
    padding-top: 20px !important;
    font-weight: bold !important;
}
.btn-register{
    background: #18a3f4;
    color: #fff !important;
}
.btn-register:hover{
    background: #158cd1;
}
.localBtn{
    width: 100%;
    padding: 8px;
    border-radius: 6px;
}
.bg-lgts{
    background-color: #18a3f4 !important;
    padding: 52px 0;
}

.title-search{
    margin: 0;
    text-align: center;
    color: #fff;
}
.family-apartment-content .apartment-description:before {
    position: absolute;
    content: "";
    width: 60px;
    height: 8px;
    bottom: -12px;
}
.default-gradient-before:before {
    background: #18a3f4;
    background: -moz-linear-gradient(left, #18a3f4 0%, #1487ca 100%);
    background: -webkit-linear-gradient(left, #18a3f4 0%, #18a3f4 100%);
    background: linear-gradient(to right, #18a3f4 0%, #18a3f4 100%);
    filter:
}
.family-apartment-content .apartment-description {
    font-size: 16px !important;
    font-weight: normal !important;
    position: relative !important;

}
.family-apartment-content .rent {
    font-weight: 600 !important;
    font-size: 18px !important;
    margin-bottom: 0 !important;
    color: #777 !important;
}
.font30{
    font-size: 30px !important;
}

.nav-outer.style1 .mobile-nav-toggler {
    padding: 0px 0 1px !important;
}

.mobile-nav-toggler .inner {
    padding: 2px 2px  !important;
}
.mobile-nav-toggler .icon-bar {
    height: 5px !important;
    width: 54px !important;

}



</style>

</head>

<body>

<div class="boxed_wrapper ltr">
    <div class="loader-wrap">
        <div class="preloader"></div>
        <div class="layer layer-one"><span class="overlay"></span></div>
        <div class="layer layer-two"><span class="overlay"></span></div>
        <div class="layer layer-three"><span class="overlay"></span></div>
    </div>

    <header class="main-header header-style-one">
        <div class="header-style-one__inner">
            <div class="main-logo-box">
                <a href="<?=$domaine?>"><img src="<?=$cdn_domaine?>/media/log01.png" class="logo" alt="Logo" title=""></a>
            </div>
            <div class="header-style-one__header-content">
                <div class="header-top">
                    <div class="auto-container">
                        <div class="outer-box">
                            <div class="header-top__right">
                                <div class="header-contact-info text-right-rtl">
                                    <ul>
                                        <li>
                                            <div class="icon">
                                                <span class="flaticon-phone-call-3"></span>
                                            </div>
                                            <div class="text">
                                                <h6><a href="tel:002250707856528">+225 07 07 85 65 28</a></h6>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <span class="flaticon-email-1"></span>
                                            </div>
                                            <div class="text">
                                                <h6><a href="mailto:support@cabinet-ccgim.com">support@cabinet-ccgim.com</a></h6>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="header-social-link">
                                    <div class="social-link">
                                        <ul class="clearfix">
                                            <li>
                                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <?php
                include_once $layout.'/navbar.php';
                ?>
            </div>
        </div>
        <div class="sticky-header">
            <div class="container">
                <div class="clearfix">
                    <div class="logo float-left">
                        <a href="<?=$domaine?>" class="img-responsive"><img src="<?=$cdn_domaine?>/media/log01.png" class="logo" alt="" title=""></a>
                    </div>
                    <div class="right-col float-right">
                        <nav class="main-menu clearfix"></nav>
                    </div>
                </div>
            </div>
        </div>
        <?php
        include_once $layout.'/navbar-mobile.php';
        ?>
    </header>

