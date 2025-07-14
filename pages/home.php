<?php
$countryCode = 'ci';

require_once $controller.'/save.contact.php';
$token = openssl_random_pseudo_bytes(16);
$token = bin2hex($token);
$_SESSION['myformkey'] = $token;
include_once $layout.'/header.php'
?>

<section class="main-slider style1">
    <?php
    include_once $layout.'/slider.php';
    ?>
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

                        <div class="card offre-card mb-3">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-2">
                                    <div class="border-left-line mr-2"></div>
                                    <h5 class="text-success font-weight-bold text-uppercase mb-0">Stagiaire Commis Cuisine</h5>
                                </div>

                                <p class="mb-2 text-muted small">
                                    Publié le <strong>07 May 2025</strong> &nbsp;|&nbsp;
                                    <strong>COCODY</strong> &nbsp;|&nbsp;
                                    <span class="text-danger">Date clôture: <strong>17 Jul 2025</strong></span>
                                </p>

                                <div class="mb-2">
                                    <span class="badge badge-primary text-uppercase">Stage de Qualification</span>
                                    <span class="badge badge-warning text-white text-uppercase">N° Réf: KOUM-48201-05-2025</span>
                                </div>

                                <p class="mb-2 small text-uppercase text-dark">
                                    - Assister le chef de partie de l'entreprise. Préparer les ingrédients.
                                    Réaliser des plats. Organiser le poste de travail. Respecter les normes
                                    d'hygiène et de sécurité. Gestion des stoc...
                                </p>

                                <a href="#" class="btn btn-sm btn-outline-success" data-toggle="modal" data-target="#offreModal">Voir plus</a>
                            </div>
                        </div>










                        <!--                        <div class="single-blog-style1 wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">-->
<!--                            <div class="img-holder">-->
<!--                                <div class="inner">-->
<!--                                    <img src="--><?//=$cdn_domaine?><!--/assets/images/blog/blog-v1-1.jpg" alt="">-->
<!--                                </div>-->
<!--                                <div class="categories-date-box ">-->
<!--                                    <div class="categories-box box-date">-->
<!--                                        <h6 style="text-transform : initial !important;"><span class="flaticon-calendar"></span>Publié le 11/07/2025</h6>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="text-holder short-txt">-->
<!--                                <h3 class="blog-title">-->
<!--                                    <a href="--><?//=$domaine?><!--/blog">Protecting Your Roof From Storm Damage</a>-->
<!--                                </h3>-->
<!--                                <div class="text">-->
<!--                                    <p>Prevents our being able do what we like best every pleasure avoided...</p>-->
<!--                                </div>-->
<!--                                <div class="bottom-box">-->
<!--                                    <div class="left">-->
<!--                                        <a class="btn-two" href="--><?//=$domaine?><!--/blog/ok" style="text-transform: inherit">En savoir plus</a>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
                    </div><div class="col-xl-6 col-lg-6">

                        <div class="card offre-card mb-3">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-2">
                                    <div class="border-left-line mr-2"></div>
                                    <h5 class="text-success font-weight-bold text-uppercase mb-0">Stagiaire Commis Cuisine</h5>
                                </div>

                                <p class="mb-2 text-muted small">
                                    Publié le <strong>07 May 2025</strong> &nbsp;|&nbsp;
                                    <strong>COCODY</strong> &nbsp;|&nbsp;
                                    <span class="text-danger">Date clôture: <strong>17 Jul 2025</strong></span>
                                </p>

                                <div class="mb-2">
                                    <span class="badge badge-primary text-uppercase">Stage de Qualification</span>
                                    <span class="badge badge-warning text-white text-uppercase">N° Réf: KOUM-48201-05-2025</span>
                                </div>

                                <p class="mb-2 small text-uppercase text-dark">
                                    - Assister le chef de partie de l'entreprise. Préparer les ingrédients.
                                    Réaliser des plats. Organiser le poste de travail. Respecter les normes
                                    d'hygiène et de sécurité. Gestion des stoc...
                                </p>

                                <a href="#" class="btn btn-sm btn-outline-success" data-toggle="modal" data-target="#offreModal">Voir plus</a>
                            </div>
                        </div>










                        <!--                        <div class="single-blog-style1 wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">-->
<!--                            <div class="img-holder">-->
<!--                                <div class="inner">-->
<!--                                    <img src="--><?//=$cdn_domaine?><!--/assets/images/blog/blog-v1-1.jpg" alt="">-->
<!--                                </div>-->
<!--                                <div class="categories-date-box ">-->
<!--                                    <div class="categories-box box-date">-->
<!--                                        <h6 style="text-transform : initial !important;"><span class="flaticon-calendar"></span>Publié le 11/07/2025</h6>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="text-holder short-txt">-->
<!--                                <h3 class="blog-title">-->
<!--                                    <a href="--><?//=$domaine?><!--/blog">Protecting Your Roof From Storm Damage</a>-->
<!--                                </h3>-->
<!--                                <div class="text">-->
<!--                                    <p>Prevents our being able do what we like best every pleasure avoided...</p>-->
<!--                                </div>-->
<!--                                <div class="bottom-box">-->
<!--                                    <div class="left">-->
<!--                                        <a class="btn-two" href="--><?//=$domaine?><!--/blog/ok" style="text-transform: inherit">En savoir plus</a>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
                    </div>

                    </div>
                </div>
             </section>

        <div class="row">
            <div class="col-xl-12 text-center">
                <div class="service-style1__bottom-text">
                    <div class="btns-box">
                        <a class="btn-one style2 btn-primary" href="#">
                            <span class="txt"> Voir plus d'actualité</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>



<section class="service-style1-area">
    <div class="pattern-bg" style="background-image: url(<?=$cdn_domaine?>/media/thm-pattern-2.png);"></div>
    <div class="container">
        <div class="sec-title center text-center">
            <div class="sub-title">
                <h6><span class="border-left"></span> Nos services <span class="border-right"></span></h6>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4 col-lg-12 wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                <div class="single-service-style1">
                    <div class="inner-box">
                        <div class="img-holder">
                            <img src="<?=$cdn_domaine?>/media/vm01.jpg" alt="">
                        </div>
                        <div class="title-holder">
                            <a href="<?=$domaine?>/ccgim-immobilier">
                            <div class="pattern-bg" style="background-image: url(<?=$cdn_domaine?>/media/thm-pattern-1.png);">

                            </div>
                            </a>
                            <div class="inner-text">
                                <h3> <a href="<?=$domaine?>/ccgim-monetique">CCGIM IMMOBILIER </a></h3>
                                <div class="text">
                                    <p>Nous sommes une Agence immobilière agréée spécialisée dans la gestions des baux...</p>
                                </div>
                            </div>

                            <div class="button-box">
                                <a href="<?=$domaine?>/ccgim-immobilier">En savoir plus</a>
                            </div>
                            <div class="icon">
                                <span class="flaticon-roof"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-12 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                <div class="single-service-style1">
                    <div class="inner-box">
                        <div class="img-holder">
                            <img src="<?=$cdn_domaine?>/media/am.jpg" alt="Services">
                        </div>
                        <div class="title-holder">
                            <div class="pattern-bg"
                                 style="background-image: url(<?=$cdn_domaine?>/media/thm-pattern-1.png);"></div>
                            <div class="inner-text">
                                <h3><a href="<?=$domaine?>/formations">FORMATIONS</a></h3>
                                <div class="text">
                                    <p>Stages de préparation pour la validation de BTS</p>
                                </div>
                            </div>
                            <div class="button-box">
                                <a href="<?=$domaine?>/formations">En savoir plus</a>
                            </div>
                            <div class="icon">
                                <span class="flaticon-roof-1"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-12 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                <div class="single-service-style1">
                    <div class="inner-box">
                        <div class="img-holder">
                            <img src="<?=$cdn_domaine?>/media/tch.jpg" alt="">
                        </div>
                        <div class="title-holder">
                            <div class="pattern-bg" style="background-image: url(<?=$cdn_domaine?>/media/thm-pattern-1.png);"></div>
                            <div class="inner-text">
                                    <h3><a href="<?=$domaine?>/ccgim-divers">CCGIM DIVERS</a></h3>
                                <div class="text">
                                    <p>Infographie et mini imprimerie (LOGO, Faire part, carte de Viste, calendrier…</p>
                                </div>
                            </div>
                            <div class="button-box">
                                <a href="<?=$domaine?>/ccgim-divers">En savoir plus</a>
                            </div>
                            <div class="icon">
                                <span class="flaticon-roof-2"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--<div class="row">
            <div class="col-xl-12 text-center">
                <div class="service-style1__bottom-text">
                    <div class="btns-box">
                        <a class="btn-one style2" href="#">
                            <span class="txt"> Voir plus de services</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>-->

    </div>
</section>
<section class="about-style1-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="">
                    <div class="inner">
                        <img src="<?=$cdn_domaine?>/media/villa4.jpg" alt="">
                    </div>
                </div>
            </div>

            <div class="col-xl-6">
                <div class="about-style1__content">
                    <div class="sec-title p-0">
                        <div class="sub-title p-0">
                            <h6><span class="border-left"></span>Présentation</h6>
                        </div>
                    </div>
                    <div class="inner-content">
                        <div class="text-box pt-2">
                            <p>
                                Le Cabinet CCGIM est une agence immobilière agréée qui totalise plus de 10 ans d'expertise. Nous sommes spécialisés dans l’accompagnement des investisseurs ou propriétaires terriens dans la réalisation de leurs projets immobiliers.
                                Nous faisons la promotion des baux administratifs afin de trouver les meilleurs logements pour les agents des Forces de Défense et de Sécurité de notre pays.
                                En effet le besoin en logement par an est estimé à plus de 5 000 pour les nouveaux agents de tous les secteurs confondus sortant fraichement des différentes écoles de formation (Forces Armées, Gendarmerie, Police, douanes, garde pénitentiaire, marin et aviateur…) Oui ! le bail administratif est plus sûr donc plus rentable.

                            </p>
                        </div>
                        <div class="btns-box pt-3">
                            <a class="btn-one" href="<?=$domaine?>/a-propos">
                                <span class="txt">En savoir plus</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="features-style1-area">
<div class="pattern-bg" style="background-image: url(<?=$cdn_domaine?>/media/thm-pattern-4.png);"></div>
<div class="container features-box">
    <div class="row">
        <div class="col-xl-3 col-lg-6 col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="100ms"
             data-wow-duration="1500ms">
            <div class="single-features-style1 first-child text-center">
                <div class="single-features-style1__bg" style="background-image: url(<?=$cdn_domaine?>/media/features-1.jpg);"></div>
                <div class="counting-box"></div>
                <div class="inner">
                    <div class="static-content">
                        <div class="icon">
                            <span class="flaticon-protection"></span>
                        </div>
                        <h3>Sécurité</h3>
                    </div>
                    <div class="overlay-content">
                        <h3>Sécurité</h3>
                        <p>Aucun souci à se faire ! Toutes les plateformes de transaction sécurisée sont intégrées.</p>
                    </div>
                </div>
                <div class="button-box">
                    <a href="<?=$domaine?>/a-propos"><span class="fa fa-angle-right"></span>Détails</a>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-lg-6 col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="200ms"
             data-wow-duration="1500ms">
            <div class="single-features-style1 text-center">
                <div class="single-features-style1__bg"
                     style="background-image: url(<?=$cdn_domaine?>/media/features-1.jpg);"></div>
                <div class="counting-box"></div>
                <div class="inner">
                    <div class="static-content">
                        <div class="icon">
                            <span class="flaticon-quality"></span>
                        </div>
                        <h3>Fiabilité</h3>
                    </div>
                    <div class="overlay-content">
                        <h3>Fiabilité</h3>
                        <p>Tout est fait pour la satisfaction de nos clients.</p>
                    </div>
                </div>
                <div class="button-box">
                    <a href="<?=$domaine?>/a-propos"><span class="fa fa-angle-right"></span>Détails</a>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="300ms"
             data-wow-duration="1500ms">
            <div class="single-features-style1 bordernone text-center">
                <div class="single-features-style1__bg"
                     style="background-image: url(<?=$cdn_domaine?>/media/features-1.jpg);"></div>
                <div class="counting-box"></div>
                <div class="inner">
                    <div class="static-content">
                        <div class="icon">
                            <span class="flaticon-construction-and-tools"></span>
                        </div>
                        <h3>Équipe professionnelle</h3>
                    </div>
                    <div class="overlay-content">
                        <h3>Équipe professionnelle</h3>
                        <p>Nous avons une équipe très compétente disponible toutes vos préoccupations.</p>
                    </div>
                </div>
                <div class="button-box">
                    <a href="<?=$domaine?>/a-propos"><span class="fa fa-angle-right"></span>Détails</a>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="400ms"
             data-wow-duration="1500ms">
            <div class="single-features-style1 text-center">
                <div class="single-features-style1__bg"
                     style="background-image: url(<?=$cdn_domaine?>/media/features-1.jpg);"></div>
                <div class="counting-box"></div>
                <div class="inner">
                    <div class="static-content">
                        <div class="icon">
                            <span class="flaticon-comment"></span>
                        </div>
                        <h3>Disponibilité</h3>
                    </div>
                    <div class="overlay-content">
                        <h3>Disponibilité</h3>
                        <p>Toute une équipe à votre disposition pour vous écouter et vous servir !</p>
                    </div>
                </div>
                <div class="button-box">
                    <a href="<?=$domaine?>/a-propos"><span class="fa fa-angle-right"></span>Détails</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="fact-counter-box">
    <div class="container">
        <div class="sec-title center text-center">
            <div class="sub-title">
                <h6><span class="border-left"></span> Statitisque <span class="border-right"></span>
                </h6>
            </div>
            <h2>Nos chiffres</h2>
        </div>
        <div class="row">
            <div class="col-xl-3 col-lg-6 col-md-6">
                <div class="single-fact-counter text-center wow slideInUp" data-wow-delay="00ms"
                     data-wow-duration="1500ms">
                    <div class="inner">
                        <div class="pattern-bg" style="background-image: url(<?=$cdn_domaine?>/media/thm-pattern-3.png);"></div>
                        <div class="icon">
                            <span class="flaticon-roof-3"></span>
                        </div>
                        <div class="count-outer count-box">
                            <span class="count-text" data-speed="3000" data-stop="1">0</span>
                            <span class="k">k</span>
                        </div>
                    </div>
                    <div class="title">
                        <h3>Locataires </h3>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6">
                <div class="single-fact-counter text-center wow slideInUp" data-wow-delay="100ms" data-wow-duration="1500ms"><div class="inner">
                        <div class="pattern-bg" style="background-image: url(<?=$cdn_domaine?>/media/thm-pattern-3.png);"></div>
                        <div class="icon">
                            <span class="flaticon-worker"></span>
                        </div>
                        <div class="count-outer count-box">
                            <span class="count-text" data-speed="3000" data-stop="84">0</span>
                        </div>
                    </div>
                    <div class="title">
                        <h3>Techniciens</h3>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6">
                <div class="single-fact-counter text-center wow slideInUp" data-wow-delay="200ms"
                     data-wow-duration="1500ms">
                    <div class="inner">
                        <div class="pattern-bg"
                             style="background-image: url(<?=$cdn_domaine?>/media/thm-pattern-3.png);"></div>
                        <div class="icon">
                            <span class="flaticon-award"></span>
                        </div>
                        <div class="count-outer count-box">
                            <span class="count-text" data-speed="3000" data-stop="06">0</span>
                            <span class="k">k</span>
                        </div>
                    </div>
                    <div class="title">
                        <h3>Récompenses Reçues</h3>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6">
                <div class="single-fact-counter text-center wow slideInUp" data-wow-delay="300ms"
                     data-wow-duration="1500ms">
                    <div class="inner">
                        <div class="pattern-bg" style="background-image: url(<?=$cdn_domaine?>/media/thm-pattern-3.png);"></div>
                        <div class="icon">
                            <span class="flaticon-happy"></span>
                        </div>
                        <div class="count-outer count-box">
                            <span class="count-text" data-speed="3000" data-stop="99">0</span>
                            <span class="k">%</span>
                        </div>
                    </div>
                    <div class="title">
                        <h3>Clients Satisfaits</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>

<section class="bg-dg">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="inner-box">
                    <div class="sec-title pb-2" style="margin-bottom: 0">
                        <h2 class="text-white">Mot du fondateur et gérant</h2>
                    </div>
                    <div class="inner-content mot-dg">
                        <div class="text">
                            <p class="text-white">
                                J’ai été le chef du service logement de la Marine Nationale chargé de la gestion des baux administratifs de janvier 2003 au 31 Décembre 2014. Ces douze années passées dans la gestion des baux ont forgé mon destin. Aujourd’hui je suis agent immobilier agréé de Côte d’Ivoire.
                            </p>
                            <p class="text-white">
                                Le CCGIM est donc le fruit de ce si long chemin. Douze ans d’expériences, douze ans d’expertises dans la gestion immobilière.  Au CCGIM, nous faisons la promotion des baux administratifs.
                            </p>
                            <p class="text-white">
                                Notre particularité, c'est la transparence, la fiabilité et la sincérité dans la gestion immobilière.
                            </p>
                            <p class="text-white">
                                Je suis particulièrement heureux, en ma qualité de gérant du cabinet conseil et gestion immobilière de vous souhaiter à tous la bienvenue sur notre site web www.cabinet-ccgim.com
                            </p>
                            <p class="text-white">
                                Je voudrais saisir par la même occasion, l’opportunité que nous offrent les moyens multimédias de communication dont l’internet de toucher le public cible (propriétaires, locataires, investisseurs…) en mettant en exergue notre expertise et transparence dans la gestion immobilière.
                            </p>
                            <p class="text-white">
                                Nous innovons en mettant à la disposition du propriétaire à la fin de chaque mois les relevés des paiements de ses baux administratifs et les fiches des encaissements par quartier de ses locataires. De sorte qu’il suive ‘’mois par mois’’ le rendement de son investissement.
                            </p>
                            <p class="text-white">
                                Le recouvrement des loyers avec les locataires se fait dans le strict respect de la dignité des locataires. Le CCGIM n’encaisse pas les locataires à domicile, librement et en toute discrétion, le locataire paie son loyer par versement sur les comptes bancaires du CCGIM ou par dépôt mobile money sur nos comptes.
                            </p>
                            <p class="text-white">
                                La digitalisation de la gestion à travers notre site web, vient de donner un coup d’innovation dans la gestion transparente qui fonde notre leitmotiv. En effet, le propriétaire pourra à chaque instant consulter le niveau d’acquittement de chaque locataire afin d’envisager un éventuel recours à la justice pour son expulsion ou non.
                            </p>
                            <p class="text-white">
                                Le locataire aura également son accès lui permettant aussi de suivre ses acquittements de loyers.

                            </p>
                            <p class="text-white">

                            </p>


                            <p class="text-white">
                                Le CCGIM va plus loin en créant trois espaces de consultation :
                            </p>
                        </div>
                        <ul class="text-white">
                            <li> l’un pour les logements à louer disponibles, mais aussi les opportunités de vente de maisons ou de terrains.</li>
                            <li>le second pour le répertoire des locations de bennes de sable, de graviers, de matériels et engins BTP. (Echafaudages, bétonneuse, bois etc.)</li>
                            <li>le troisième pour la consultation du répertoire des techniciens en bâtiment (Maçon, peintre, carreleur, staffeur, électricien, plombier, décorateur, fleuriste …)</li>

                        </ul>
                        <p class="text-white m-0 pt-3">
                            Je voudrais que les utilisateurs de ce site web, tirent le plus grand profit des échanges interactifs et dynamiques qu’il mettra à votre disposition. Enfin, le nouveau site donnera la possibilité aux usagers de saisir le cabinet CCGIM de toute question d’intérêt particulier et d’obtenir de façon interactive une prompte réponse satisfaisante.
                            Bonne navigation.
                        </p>
                        <p class="text-white m-0 pt-3">
                            Bonne navigation.
                        </p>

                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <figure>
                    <img src="<?=$cdn_domaine?>/media/dg01.jpg" class="dg-image" alt=""/>
                    <figcaption>

                        <div class="authorised-person-info">
                            <div class="signature">
                                <img src="<?=$cdn_domaine?>/media/signature002.png" alt="">
                            </div>
                            <div class="name">
                                <h3 class="text-white">BAGAYOGO Amadou</h3>
                                <span class="text-white">Fondateur et gérant</span>
                            </div>
                        </div>
                    </figcaption>
                </figure>

            </div>
        </div>
    </div>
</section>


<section class="contact-info-style1-area">
    <div class="contact-info-area__bg"
         style="background-image: url(<?=$cdn_domaine?>/media/contact-info-area__bg.jpg);"></div>
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="contact-info__box paroller-2">
                    <div class="sec-title center text-center wow slideInDown" data-wow-delay="100ms"
                         data-wow-duration="1500ms">
                        <div class="sub-title">
                            <h6><span class="border-left"></span> Voulez-vous louer une maison ? <span
                                    class="border-right"></span></h6>
                        </div>
                    </div>
                    <h2><a href="tel:002250707856528">+225 07 07 85 65 28</a></h2>
                    <div class="btn-box wow slideInUp" data-wow-delay="200ms" data-wow-duration="1000ms">
                        <a class="btn-one" href="#">
                            <span class="txt">Appelez maintenant</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="fact-counter-box pb-5">
    <div class="container pb-5">
        <div class="icon wow zoomIn animated text-center videos" data-wow-delay="300ms" data-wow-duration="1500ms">
            <video width="" height="" controls>
                <source src="<?=$cdn_domaine?>/media/videos/3.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>

        </div>
    </div>
</section>


<section class="contact-style1-area">
        <div class="contact-style1_inner">
                <div class="contact-style1_inner-bg" style="background-image: url(<?=$cdn_domaine?>/media/contact-style1_inner-bg.jpg);"></div>
            <div class="base-bg"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-5">
                        <div class="contact-form-box1">
                            <div class="sec-title">
                                <div class="sub-title">
                                    <h6><span class="border-left"></span>Avez vous une préoccupation ?</h6>
                                </div>
                                <h2>Contactez-nous</h2>
                            </div>
                            <form id="contactForm"  class="default-form1" method="post" novalidate="novalidate">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="input-box">
                                            <input type="text" name="nom" id="nom" placeholder="Nom & Prénom" required="" aria-required="true">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="input-box">
                                            <input type="tel" class="form-control style-input" id="phone" name="phone" maxlength="10" required>
                                            <input type="hidden"  name="isoPhone" id="isoPhone" value="">
                                            <input type="hidden"  name="dialPhone" id="dialPhone" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="input-box">
                                            <textarea name="message" id="message" rows="5" placeholder="Message"></textarea>
                                        </div>

                                        <div class="button-box">
                                            <input type="hidden" class="form-control" name="formkey" value="<?=$token?>">
                                            <button class="btn-one" type="submit" data-loading-text="envoi en cours...">
                                                <span class="txt"> <i class="loarder"></i><i class="fas fa-circle-notch fa-spin pagi-icon"></i> Envoyer une demande</span>
                                            </button>
                                        </div>

                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>


                </div>
            </div>
        </div>
</section>

<?php
include_once $layout.'/footer.php'
?>
<script>
    $(document).ready(function(){

        var contactform = $('#contactForm');
        contactform.submit(function(e){
            e.preventDefault();
            $('.loarder').html('<i class="fas fa-circle-notch fa-spin pagi-icon"></i>');
            var value = document.getElementById('contactForm');
            var form = new FormData(value);

            $.ajax({
                method: 'post',
                url: '<?=$domaine?>/controle/save.contact',
                data: form,
                contentType:false,
                cache:false,
                processData:false,
                success: function(data){
//                alert(data);
                    if(data == "ok"){
                        swal("Votre message a été envoyé avec succès !!!","", "success");
                        $('.loarder').html('');
                        $('#phone').val('');
                        $('#message').val('');
                        $('#nom').val('');

                    }else if(data == "1"){
                        $('.loarder').html('');
                        swal("Action Impossible !", " Votre adresse email n\'est pas correct", "error");
                    }
                    else {
                        $('.loarder').html('');
                        swal("Action Impossible !", "Une erreur s\'est produite lors du traitement des données !", "error");
                    }
                },
                error: function (error, ajaxOptions, thrownError) {
                    alert(error.responseText);
                }
            });

        });


        $("#phone").keyup(function (event) {
            if (/\D/g.test(this.value)) {
                this.value = this.value.replace(/\D/g, '');
            }
        });

        var inputPhone = document.querySelector("#phone");
        window.intlTelInput(inputPhone, {
            initialCountry: '<?=$countryCode?>',
            onlyCountries: ["ci"],
            utilsScript: "<?=$cdn_domaine?>/assets/libs/intltelinput/js/utils.js"
        });
        var iti = window.intlTelInputGlobals.getInstance(inputPhone);
        var countryData = iti.getSelectedCountryData();
        $('#isoPhone').val(countryData["iso2"]);
        $('#dialPhone').val(countryData["dialCode"]);
        inputPhone.addEventListener("countrychange", function() {
            var iti = window.intlTelInputGlobals.getInstance(inputPhone);
            var countryData = iti.getSelectedCountryData();
            $('#isoPhone').val(countryData["iso2"]);
            $('#dialPhone').val(countryData["dialCode"]);
        });
    })
</script>