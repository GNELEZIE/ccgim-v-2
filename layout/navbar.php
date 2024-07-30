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
                                <li class="dropdown <?= page_active('ccgim-immobilier') ;?> <?= page_active('ccgim-monetique') ;?>
                                <?= page_active('techniciens') ;?>
                                <?= page_active('formations') ;?>
                                <?= page_active('ccgim-divers') ;?>
                                <?= page_active('ccgim-bureautique') ;?>
                                "><a href="#">Services</a>
                                    <ul>
                                        <li class="<?= page_active('ccgim-immobilier') ;?>"><a href="<?=$domaine?>/ccgim-immobilier">CCGIM IMMOBILIER</a></li>
                                        <li class="<?= page_active('ccgim-bureautique') ;?>"><a href="<?=$domaine?>/ccgim-bureautique">CCGIM BUREAUTIQUE</a></li>
                                        <li class="<?= page_active('ccgim-monetique') ;?>"><a href="<?=$domaine?>/ccgim-monetique">CCGIM MONETIQUE</a></li>
                                        <li class="<?= page_active('ccgim-wifi') ;?>"><a href="<?=$domaine?>/ccgim-wifi">CCGIM WIFI</a></li>
                                        <li class="<?= page_active('formations') ;?>"><a href="<?=$domaine?>/formations">LA FORMATION</a></li>
                                        <li class="<?= page_active('ccgim-divers') ;?>"><a href="<?=$domaine?>/ccgim-divers">CCGIM DIVERS</a></li>
                                    </ul>
                                </li>
<!--                                <li class="--><?//= page_active('logements') ;?><!--"><a href="--><?//=$domaine?><!--/logements">Logements</a></li>-->
                                <li class=""><a href="https://proprietaire.cabinet-ccgim.com">Propriétaire</a></li>
                                <li class=""><a href="https://locataire.cabinet-ccgim.com">Locataire</a></li>
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
                        <a class="btn-one" href="#">
                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                            <span class="txt">Espace client</span>
                        </a>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>