<?php
if(isset($_POST['nom']) and isset($_POST['phone']) and isset($_POST['email']) and isset($_POST['message']) and isset($_POST['formkey'])){

    extract($_POST);
    $lgt = htmlentities(trim(addslashes(strip_tags($lgt))));

    $date = gmdate('Y-m-d H:i');
    $nom = $_POST['nom'];
    $text = $_POST['message'];
    $dialPhone = $_POST['dialPhone'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];

    $numb = $dialPhone.' '.$phone;

    $lg = $logement->getLogementById($lgt);

    if($lgtDat = $lg->fetch()){

        $subject = trim('Location de maison.');

        include_once $mail.'/location-email.php';
        sendMailToMes($email,$subject, $message);
        echo 'ok';
    }






}