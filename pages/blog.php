<?php
$countryCode = 'ci';

if(isset($doc[1]) and !isset($doc[2])){
    $dataOfSl = $utilisateur->getOffreBySlug($doc[1]);
    if($dataOfSlug = $dataOfSl->fetch()){

    }else{
        header('location:'.$domaine.'/error');
        exit();
    }
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

    <section class="blog-page blog-page-one bg-offre" style="padding: 50px 0 0;">
        <div class="container">

            <div class="row text-right-rtl">

                <?php
                $dataOff = $utilisateur->getAllOffre();

                while($dataOffres = $dataOff->fetch()){
                    if(html_entity_decode(stripslashes($dataOffres["typ"])) == "Offres d'emploi"){

                        $bgcolor = "badge-primary";

                    }elseif(html_entity_decode(stripslashes($dataOffres["typ"])) == "Achats"){

                        $bgcolor = "badge-warning";

                    }elseif(html_entity_decode(stripslashes($dataOffres["typ"])) == "Ventes"){

                        $bgcolor = "badge-info";

                    }elseif(html_entity_decode(stripslashes($dataOffres["typ"])) == "Locations"){

                        $bgcolor = "badge-danger";

                    }else{
                        $bgcolor = "badge-success";
                    }

                    if($dataOffres["date_cloture"] == '0000-00-00 00:00:00'){

                        $date_clotures = '';
                        $cotes = '';


                    }else{
                        $date_clotures = '<span class="text-danger">Date clôture:   <strong>'. afficherDateFr($dataOffres["date_cloture"]).'</strong></span>';
                        $cotes = '&nbsp;|&nbsp;';
                    }

                    ?>

                    <div class="col-xl-6 col-lg-6">
                        <div class="card offre-card mb-3">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-2">
                                    <div class="border-left-line mr-2"></div>
                                    <h5 class="text-success font-weight-bold text-uppercase mb-0"><?= html_entity_decode(stripslashes($dataOffres["titre"])) ?></h5>
                                </div>

                                <p class="mb-2 text-muted small">
                                    Publié le <strong> <?=afficherDateFr($dataOffres["date_offre"]) ?> </strong> <?=$cotes?>
                                    <!--                                <strong>COCODY</strong> &nbsp;|&nbsp;-->
                                    <?=$date_clotures?>
                                </p>

                                <div class="mb-2">
                                    <span class="badge <?=$bgcolor?> text-uppercase"><?= html_entity_decode(stripslashes($dataOffres["typ"])) ?></span>
                                    <!--                                <span class="badge badge-warning text-white text-uppercase">N° Réf: KOUM-48201-05-2025</span>-->
                                </div>

                                <p class="mb-2 small text-uppercase text-dark">
                                    <?= html_entity_decode(stripslashes($dataOffres["samury"])) ?>
                                </p>

                                <a href="<?=$domaine?>/blog/<?=html_entity_decode(stripslashes($dataOffres["slug_offre"])) ?>" class="btn btn-sm btn-outline-success">Voir plus</a>
                            </div>
                        </div>
                    </div>

                <?php
                }
                ?>


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
                            <h2><?= html_entity_decode(stripslashes($dataOfSlug["typ"])) ?></h2>
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
                            <div class="text-holder">
                                <div class="top-text">
                                    <div class="top">
                                        <h3 class="blog-title">
                                            <?= html_entity_decode(stripslashes($dataOfSlug["titre"])) ?>
                                        </h3>
                                        <div class="">
                                            <p><?= html_entity_decode(stripslashes($dataOfSlug["description"])) ?></p>
                                        </div>
                                    </div>

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
                                     style="background-image: url(<?=$cdn_domaine?>/media/thm-pattern-7.png);">
                                </div>
                                <h3><span class="border-left"></span>Offres recents</h3>
                            </div>

                            <div class="sidebar-blog-post">
                                <ul class="blog-post">
                                    <?php
                                    $data_Of = $utilisateur->getAllOffre4();

                                    while($data_Offre = $data_Of->fetch()){


                                    ?>
                                    <li>
                                        <div class="">
                                            <div class="title-box">
                                                <div class="date"><?=afficherDateFr($data_Offre["date_offre"]) ?></div>
                                                <h4><a href="<?=$domaine?>/blog/<?=html_entity_decode(stripslashes($data_Offre["slug_offre"])) ?>"><?= html_entity_decode(stripslashes($data_Offre["titre"])) ?></a></h4>
                                            </div>
                                        </div>
                                    </li>
                                    <?php
                                    }
                                    ?>

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
