<?php

$message = '
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" style="font-family: Helvetica Neue, Helvetica, Arial, sans-serif;  font-size: 14px; margin: 0;">
<head>
    <meta name="viewport" content="width=device-width"/>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <link rel="icon" href="'.$cdn_domaine.'/media/log01.png" type="image/x-icon">
    <title>CCGIM</title>


    <style type="text/css">
        body{
            font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
            box-sizing: border-box; font-size: 14px;
            -webkit-font-smoothing: antialiased;
            -webkit-text-size-adjust: none;
            width: 100% !important;
            height: 100%;
            line-height: 1.6em;
            background-color: #f6f6f6;
            margin: 0;
        }

        .body-wrap{
            font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
            box-sizing: border-box;
            font-size: 14px;
            width: 100%;
            background-color: #f6f6f6;
            margin: 0;
        }


        tr{
            font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
            box-sizing: border-box;
            font-size: 14px;
            margin: 0;
        }


        td{
            font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
            box-sizing: border-box;
            font-size: 14px;
            vertical-align: top;
            margin: 0;
        }



        td.container{
            width:600px;
            font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
            box-sizing: border-box;
            font-size: 14px;
            vertical-align: top;
            display: block !important;
            max-width: 600px !important;
            clear: both !important;
            margin: 0 auto;

        }


        div.content{
            font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
            box-sizing: border-box;
            font-size: 14px;
            max-width: 600px;
            display: block;
            margin: 0 auto;
            padding: 20px;
        }

        table.main{
            font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
            box-sizing: border-box;
            font-size: 14px;
            border-radius: 3px;
            margin: 0; border: none;
        }

        td.content-wrap{
            font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
            box-sizing: border-box;
            font-size: 14px;
            vertical-align: top;
            margin: 0;padding: 30px;
            border: 3px solid #18a3f45c;
            display: inline-block;
            border-radius: 7px;
            background-color: #fff;
            width : 600px

        }

        meta.mymeta{
            font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
            box-sizing: border-box;
            font-size: 14px;
            margin: 0;
        }

        td a{
            display: block;
            margin-bottom: 10px;
        }

        td.content-block{
            font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
            box-sizing: border-box;
            font-size: 14px;
            vertical-align: top;
            margin: 0;
            padding: 0 0 20px;


        }

        .td-logo{
            text-align: center;
        }

        td.content-block a.btn-primary{
            font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
            box-sizing: border-box;
            font-size: 14px;
            color: #FFF;
            text-decoration: none;
            line-height: 2em;
            font-weight: bold;
            text-align: center;
            cursor: pointer;
            display: inline-block;
            border-radius: 5px;
            background-color: #18a3f4;
            margin: 0;
            border-color: #18a3f4;
            border-style: solid;
            border-width: 8px 16px;
        }


        div.desabonne{
            font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
            box-sizing: border-box;
            font-size: 14px;
            width: 100%;
            clear: both;
            color: #999;
            margin: 0;

        }



        td.aligncenter{
            font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
            box-sizing: border-box;
            font-size: 12px;
            vertical-align: top;
            color: #999;
            text-align: center;
            margin: 0;
            padding: 0 0 20px;
        }


        a.desabon{
            font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
            box-sizing: border-box;
            font-size: 12px;
            color: #999;
            text-decoration: underline;
            margin: 0;

        }
    </style>
</head>

<body>

<table class="body-wrap">
    <tr>
        <td valign="top"></td>
        <td class="container" valign="top">
            <div class="content">
                <table class="main" width="100%" cellpadding="0" cellspacing="0" itemprop="action" itemscope itemtype="https://schema.org/ConfirmAction">
                    <tr>
                        <td class="content-wrap" valign="top">
                            <meta itemprop="name" content="Confirm Email"  class="mymeta">
                            <table width="100%" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td class="td-logo">
                                        <a href="'.$domaine.'"><img src="'.$cdn_domaine.'/media/log01.png" height="100" /></a> <br/>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="content-block" valign="top">
                                        <h2>Location de maison</h2>
                                         <h3>Information Locataire</h3>
                                        <h5>Maison : '.html_entity_decode(stripslashes($lgtDat["nom_lgt"])).' ,</h5>
                                        <h5>Nom et prénom : '.$nom.' ,</h5>
                                        <h5>Téléphone  : '.$numb.' ,</h5>
                                        <h5>Email  : '.$email.' ,</h5>
                                        <h5>Message : '.$mess.' ,</h5>
                                        <hr>
                                    </td>
                                </tr>

                                <tr>

                                    <td class="content-block" valign="top">
                                        <h3>Information propriétaire</h3>
                                        <h5>Nom et prénom : '.html_entity_decode(stripslashes($lgtDat["nom_agent"])).' ,</h5>
                                        <h5>Téléphone locataire : '.html_entity_decode(stripslashes($lgtDat["phone_lgt"])).' ,</h5>
                                    </td>
                                </tr>

                                <tr>
                                    <td valign="top">Cordialement, <br/>CCGIM</td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </div>
        </td>
        <td valign="top"></td>
    </tr>
</table>
<div class="desabonne pt-0">
    <table width="100%">
        <tr>
            <td class="aligncenter content-block" align="center" valign="top">
                Merci de ne passe répondre à cet email.<br/>
                Copyright © 2023 CCGIM. Tous droits réservés.
            </td>
        </tr>
    </table>
</div>
</body>
</html>
';
