<?php
$countryCode = 'ci';

require_once $controller.'/save.contact.php';
$token = openssl_random_pseudo_bytes(16);
$token = bin2hex($token);
$_SESSION['myformkey'] = $token;
include_once $layout.'/header.php'
?>

    <section class="breadcrumb-area">
        <div class="breadcrumb-area-bg" style="background-image: url(<?=$cdn_domaine?>/media/breadcrumb-1.jpg);">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="inner-content">
                        <div class="title" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
                            <h2>Contact</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="contact-info-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-12">
                    <div class="single-contact-info-box">
                        <div class="icon">
                            <span class="flaticon-pin-1"></span>
                        </div>
                        <div class="text-holder">
                            <div class="pattern-bg"
                                 style="background-image: url(<?=$cdn_domaine?>/media/thm-pattern-3.png);"></div>
                            <div class="top">
                                <h3>Notre siège</h3>
                            </div>
                            <p>Abidjan – YOPOUGON attié 9 <sup>ième</sup> tranche (Toit Rouge OFFOUMOU YAPO)</p>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-12">
                    <div class="single-contact-info-box">
                        <div class="icon">
                            <span class="flaticon-phone-call-3"></span>
                        </div>
                        <div class="text-holder">
                            <div class="pattern-bg"
                                 style="background-image: url(<?=$cdn_domaine?>/media/thm-pattern-3.png);"></div>
                            <div class="top">
                                <h3>Téléphone</h3>
                            </div>
                            <p class="text1"><a href="tel:002252723469365"> 27 23 46 93 65 / +225 07 07 85 65 28</a> <br></p>
                            <p class="text1"><a href="tel:002250103325924"> +225 01 03 32 59 24 / +225 05 04 92 79 51</a> <br></p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-12">
                    <div class="single-contact-info-box">
                        <div class="icon">
                            <span class="flaticon-email-1"></span>
                        </div>
                        <div class="text-holder">
                            <div class="pattern-bg"
                                 style="background-image: url(<?=$cdn_domaine?>/media/thm-pattern-3.png);"></div>
                            <div class="top">
                                <h3> Email</h3>
                            </div>
                            <p class="text1"><a href="mailto:support@ccigim.com">support@cabinet-ccgim.com</a> <br>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="main-contact-form-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="contact-page-map-outer">
                        <div class="map-canvas" data-zoom="12" data-lat="5.3491243" data-lng="-4.0989193"
                             data-type="roadmap"  data-title="CCGIM"
                             data-icon-path="<?=$cdn_domaine?>/media/map-marker.png"
                             data-content="YOPOUGON, ANANERAIE<br><a href='mailto:support@ccigim.com'>support@ccigim.com</a>">
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="contact-style1_form contact-form-box1">
                        <div class="top-title">
                            <h2>Contactez-nous</h2>
                        </div>
                        <div class="contact-form">
                            <form id="contactForm"  class="default-form1" method="post" novalidate="novalidate">
                                <div class="row">
                                    <div class="col-xl-12 pb-2">
                                        <div class="input-box">
                                            <input type="text" name="nom" id="nom" placeholder="Nom & Prénom" required="" aria-required="true">
                                        </div>
                                    </div>
                                    <div class="col-xl-12 pb-2">
                                        <div class="input-box">
                                            <input type="tel" class="form-control style-input" id="phone" name="phone" maxlength="10" required>
                                            <input type="hidden"  name="isoPhone" id="isoPhone" value="">
                                            <input type="hidden"  name="dialPhone" id="dialPhone" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-12 pb-2">
                                        <div class="input-box">
                                            <textarea name="message" id="message" rows="7" placeholder="Message"></textarea>
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
<script src="<?=$cdn_domaine?>/assets/js/map-script.js"></script>

<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAbrw-XzkpRJ8D17_XYxILPlIdfxL3E9lc&amp;callback=initMap">
</script>
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