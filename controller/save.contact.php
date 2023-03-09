<?php

if(isset($_POST['nom'])  and isset($_POST['message']) and isset($_POST['phone']) and  isset($_SESSION['myformkey']) and isset($_POST['formkey']) and $_SESSION['myformkey'] == $_POST['formkey']){

    extract($_POST);

    $date = gmdate('Y-m-d H:i');
    $nom = $_POST['nom'];
    $message = $_POST['message'];
    $dialPhone = $_POST['dialPhone'];
    $phone = $_POST['phone'];
    $numb = $dialPhone.' '.$phone;


    $messages = 'Bonjour, <br/><br/> Vous avez un nouveau message ! <br/><br/>Nom : '.$nom.'<br/><br/>Téléphone : '.$numb.'<br/><br/> Téléphone : '.$numb.'<br/><br/>'. $message;

        $sujet = trim('Nouveau message');
        sendMailToMe($numb,$nom,$sujet,$messages);
        echo 'ok';



}