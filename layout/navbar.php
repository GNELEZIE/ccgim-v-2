<div class="header">
    <div class="auto-container">
        <div class="outer-box">
            <div class="header-left">
                <div class="nav-outer style1 clearfix">
                    <div class="mobile-nav-toggler">
                        <div class="inner">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </div>
                    </div>
                    <nav class="main-menu style1 navbar-expand-md navbar-light">
                        <div class="collapse navbar-collapse show clearfix"
                             id="navbarSupportedContent">
                            <ul class="navigation clearfix">
                                <li class="<?= page_active('') ;?>"><a href="<?=$domaine?>">Accueil</a></li>
                                <li class="<?= page_active('a-propos') ;?>"><a href="<?=$domaine?>/a-propos">A propos</a></li>
                                <li class="dropdown <?= page_active('vente-logement') ;?> <?= page_active('louer-logement') ;?> <?= page_active('techniciens') ;?>"><a href="#">Services</a>
                                    <ul>
                                        <li class="<?= page_active('vente-logement') ;?>"><a href="<?=$domaine?>/vente-logement">Vente et Achat un logement</a></li>
                                        <li class="<?= page_active('louer-logement') ;?>"><a href="<?=$domaine?>/louer-logement">Louer un logement</a></li>
                                        <li class="<?= page_active('techniciens') ;?>"><a href="<?=$domaine?>/techniciens">Louer un techniciens</a></li>
                                    </ul>
                                </li>
                                <li class="<?= page_active('logements') ;?>"><a href="<?=$domaine?>/logements">Logements</a></li>
                                <li class="<?= page_active('locataire') ;?>"><a href="<?=$app_domaine?>/connexion" target="_blank">Locataires</a></li>
                                <li class="<?= page_active('propriétaires') ;?>"><a href="<?=$app_domaine?>/connexion" target="_blank">Propriétaires</a></li>
                                <li class="<?= page_active('contacts') ;?>"><a href="<?=$domaine?>/contacts">Contact</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>

            <div class="header-right">

                <div class="space-box1"></div>
                <div class="header-right_buttom">
                    <div class="btns-box">
                        <a class="btn-one" href="<?=$app_domaine?>/inscription" target="_blank">
                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                            <span class="txt">S'inscrire</span>
                        </a>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>