<?php
$countryCode = 'ci';

if(isset($doc[1]) and !isset($doc[2])){

}

$token = openssl_random_pseudo_bytes(16);
$token = bin2hex($token);
$_SESSION['myformkey'] = $token;
include_once $layout.'/header.php';

if(isset($doc[0]) and !isset($doc[1])){

    ?>
    <section class="breadcrumb-area">
        <div class="breadcrumb-area-bg" style="background-image: url(<?=$cdn_domaine?>/media/news0.jpg);">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="inner-content">
                        <div class="title" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
                            <h2>Actualité</h2>
                        </div>
                        <div class="breadcrumb-menu" data-aos="fade-up" data-aos-easing="linear"
                             data-aos-duration="1500">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="blog-page blog-page-one" style="padding: 50px 0 0;">
        <div class="container">
            <div class="sec-title pb-17 center text-center">
                <div class="sub-title">
                    <h6><span class="border-left"></span> Notre actualité <span class="border-right"></span></h6>
                </div>
            </div>
            <div class="row text-right-rtl">
                <div class="col-xl-6 col-lg-6">
                    <div class="single-blog-style1 wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="img-holder">
                            <div class="inner">
                                <img src="<?=$cdn_domaine?>/assets/images/blog/blog-v1-1.jpg" alt="">
                            </div>
                            <div class="categories-date-box ">
                                <div class="categories-box box-date">
                                    <h6 style="text-transform : initial !important;"><span class="flaticon-calendar"></span>Publié le 11/07/2025</h6>
                                </div>
                            </div>
                        </div>
                        <div class="text-holder short-txt">
                            <h3 class="blog-title">
                                <a href="<?=$domaine?>/blog">Protecting Your Roof From Storm Damage</a>
                            </h3>
                            <div class="text">
                                <p>Prevents our being able do what we like best every pleasure avoided...</p>
                            </div>
                            <div class="bottom-box">
                                <div class="left">
                                    <a class="btn-two" href="<?=$domaine?>/blog" style="text-transform: inherit">En savoir plus</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

<?php
}else{
    ?>

    <section class="breadcrumb-area">
        <div class="breadcrumb-area-bg" style="background-image: url(<?=$cdn_domaine?>/media/news0.jpg);">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="inner-content">
                        <div class="title" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
                            <h2>Actualité</h2>
                        </div>
                        <div class="breadcrumb-menu" data-aos="fade-up" data-aos-easing="linear"
                             data-aos-duration="1500">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="blog-page blog-page-one">
    <div class="container">

    <div class="row text-right-rtl">
    <div class="col-xl-8 col-lg-7">
    <div class="blog-details-content">

    <div class="single-blog-style1 single-blog-style1--blog-large blog-details wow fadeInUp"
         data-wow-delay="00ms" data-wow-duration="1500ms">
        <div class="img-holder">
            <div class="inner">
                <img src="<?=$cdn_domaine?>/assets/images/blog/blog-v3-1.jpg" alt="">
            </div>
            <div class="categories-date-box">
                <div class="categories-box">
                    <h6><span class="flaticon-open-archive"></span>Maintenance</h6>
                </div>
                <div class="date-box">
                    <h3>20<br><span>Jul</span></h3>
                </div>
            </div>
        </div>
        <div class="text-holder">
            <div class="top-text">
                <div class="top">
                    <div class="big-text">D</div>
                    <div class="inner-text">
                        <p>enounce with righteous indignation and mens who are so beguiled
                            demord charm some pleasure the moment saying through shrinkings from
                            all the and pains these cases are perfectly simple and easy to
                            distinguish. In a free hour.
                        </p>
                    </div>
                </div>
                <div class="inner">
                    <p>choice there anyone who loves or pursues news of desires pain and
                        troubles that are boundry equal blame belongs to those who fail in their
                        duty through weakness.
                    </p>
                    <p>Every pleasure is to be welcomed and every pain avoided but in certain
                        circumstances and all owing to the claims righteous indignation and
                        dislike men who are beguiled and demoralized by the charms of pleasure
                        of the moment.
                    </p>
                </div>
            </div>
            <h3 class="blog-title">
                Want Your Roof Done Right?
            </h3>
            <div class="text">
                <p>Prevents our being able to do what we like best, every pleasure is to be
                    welcomed and every pain avoided but in certain circumstances and owing to
                    the claims righteous indignation and dislike men who are so beguiled and
                    demoralized by the charms of pleasure of the moment, so blinded by desire,
                    that they cannot foresee the pain and troubles.
                </p>
                <p>Welcomed and every pain avoided but in certain circumstances owing that
                    claims righteous indignation and dislike men who are so beguiled.
                </p>
            </div>

            <div class="blog-details-quote-box">
                <div class="inner-content">
                    <div class="icon">
                        <span class="flaticon-quote-3"></span>
                    </div>
                    <div class="inner-text">
                        <h3>Business it will frequently occur that greater pleasures
                            have repudiated choose enjoy annoying.</h3>
                        <h5>/ Max Banjamin</h5>
                    </div>
                </div>
            </div>

            <div class="blog-details-text-1">
                <p>Do what we like best every pleasure is to be welcomed and every pain avoided
                    but in certains circumstances and owing to the claim righteous indignation
                    dislike men who are so beguiled and demoralized by the charms of pleasure of
                    the moment.</p>
            </div>

            <div class="blog-details-text-2">
                <h2>Metal Roofing Is a Smart Choice</h2>
                <p>Idea of denouncing pleasure and praising pain was born and will give you
                    complete account of the system and expound the actual teachings of the great
                    explorer of the truth the master builder of human happiness one rejects
                    dislikes pleasure. </p>
            </div>

            <div class="blog-details-text-3">
                <div class="top-title">
                    <div class="icon">
                        <span class="flaticon-diamond-symbol"></span>
                    </div>
                    <h3>No Leaks, Just Peaks</h3>
                </div>
                <div class="inner-text">
                    <p>No one rejects, dislikes, or avoids pleasure itself, because it is
                        pleasure, but because those who do not know how to pursue pleasure.</p>
                </div>
            </div>

            <div class="blog-details-text-4">
                <div class="top-title">
                    <div class="icon">
                        <span class="flaticon-diamond-symbol"></span>
                    </div>
                    <h3>Making Rainy Days Sunny</h3>
                </div>
                <div class="inner-text">
                    <p>Give you a complete account of the system, and expound the actual
                        teachings of the great explorer of the truth, the master-builder of
                        human.</p>
                </div>
                <ul>
                    <li>Expound the actual teachings of the great.</li>
                    <li>Loves or pursues or desires to obtain pain of itself, because it is
                        pain.</li>
                    <li>Occasionally circumstances occur in which toil procure.</li>
                    <li>Laborious physical exercise, except to obtain some advantage from it.
                    </li>
                </ul>
            </div>



        </div>
    </div>















    </div>

    </div>

    <!--Start Thm Sidebar Box-->
    <div class="col-xl-4 col-lg-5">
    <div class="thm-sidebar-box">

    <div class="single-sidebar-box">
        <div class="sidebar-search-box">
            <form class="search-form" action="#">
                <input placeholder="Recherhcer..." type="text">
                <button type="submit">
                    <i class="fa fa-search" aria-hidden="true"></i>
                </button>
            </form>
        </div>
    </div>


    <div class="single-sidebar-box">
        <div class="sidebar-title">
            <div class="pattern-bg"
                 style="background-image: url(<?=$cdn_domaine?>/assets/images/pattern/thm-pattern-7.png);">
            </div>
            <h3><span class="border-left"></span>Articles recents</h3>
        </div>

        <div class="sidebar-blog-post">
            <ul class="blog-post">
                <li>
                    <div class="inner">
                        <div class="img-box">
                            <img src="<?=$cdn_domaine?>/assets/images/sidebar/sidebar-blog-post1.jpg"
                                 alt="Awesome Image">
                            <div class="overlay-content">
                                <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <div class="title-box">
                            <div class="date">20, Jul 2021</div>
                            <h4><a href="#">Protecting Your Roof<br> From Storm...</a></h4>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="inner">
                        <div class="img-box">
                            <img src="<?=$cdn_domaine?>/assets/images/sidebar/sidebar-blog-post2.jpg"
                                 alt="Awesome Image">
                            <div class="overlay-content">
                                <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <div class="title-box">
                            <div class="date">15, Jun 2021</div>
                            <h4><a href="#">How To Weather Proof<br> Your Roof This...</a></h4>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="inner">
                        <div class="img-box">
                            <img src="<?=$cdn_domaine?>/assets/images/sidebar/sidebar-blog-post3.jpg"
                                 alt="Awesome Image">
                            <div class="overlay-content">
                                <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <div class="title-box">
                            <div class="date">30, Jun 2021</div>
                            <h4><a href="#">5 Most Common Causes<br> Of Roof Leaks</a></h4>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>








    </div>
    </div>
    <!--End Thm Sidebar Box-->


    </div>

    </div>
    </section>






<?php
}
?>

<?php
include_once $layout.'/footer.php'
?>
