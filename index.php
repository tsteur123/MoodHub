<?php
    session_start();
    include "includes/oop.php";

    $login = New forum;

    if (isset($_POST['send'])) {
        $data = $login->login($_POST['leerlingnummer'], $_POST['wachtwoord']);

        if ($data == true) {
            echo "Je bent ingelogd";
            header("Location:profile/profile.php");

        } else {
            echo "De gegevens zijn fout";
        }
    }
?>
<!DOCTYPE html>
<html>
<!DOCTYPE html>
<!-- HTML5 Boilerplate -->
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>forum profile</title>
        <meta name="description" content="This is the Responsive Grid System, a quick, easy and flexible way to create a responsive web site.">
        <meta name="keywords" content="responsive, grid, system, web design">
        <meta name="author" content="www.grahamrobertsonmiller.co.uk">
        <meta http-equiv="cleartype" content="on">
        <link rel="shortcut icon" href="/favicon.ico">
        <meta name="HandheldFriendly" content="True">
        <meta name="MobileOptimized" content="320">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="profile/css/html5reset.css" media="all">
        <link rel="stylesheet" href="profile/css/col.css" media="all">
        <link rel="stylesheet" href="profile/css/2cols.css" media="all">
        <link rel="stylesheet" href="profile/css/3cols.css" media="all">
        <link rel="stylesheet" href="profile/css/4cols.css" media="all">
        <link rel="stylesheet" href="profile/css/5cols.css" media="all">
        <link rel="stylesheet" href="profile/css/6cols.css" media="all">
        <link rel="stylesheet" href="profile/css/7cols.css" media="all">
        <link rel="stylesheet" href="profile/css/8cols.css" media="all">
        <link rel="stylesheet" href="profile/css/9cols.css" media="all">
        <link rel="stylesheet" href="profile/css/10cols.css" media="all">
        <link rel="stylesheet" href="profile/css/11cols.css" media="all">
        <link rel="stylesheet" href="profile/css/12cols.css" media="all">
        <link rel="stylesheet" href="profile/css/style.css" media="all">
        <style type="text/css">
            body { padding:2em; font : 100%/1.4 'Helvetica Neue', arial, helvetica, helve, sans-serif;
            }
            h1 { font-size:2.2em; padding:0 0 .5em 0; }
            h2 { font-size:1.5em; }
            .header { padding:1em 0; }
            .col { background: #ccc; padding:1em 0; text-align:center;}
        </style>
    </head>
    <body>
        <div class="section group">
            <div class="col span_2_of_2">
                <img src="profile/img/logo.png" alt="">
            </div>
        </div>
        <div class="section group">
            <div class="col span_2_of_3">
            <h1>Login</h1>
            <br />log hier in met je leerling account
            <br />
                <form class="login" method="post">
                    leerlingnummer <input type="text" name="leerlingnummer"><br>
                    wachtwoord <input type="password" name="wachtwoord"><br>
                    <input type="submit" name="send" value="send">
                </form>
                <form class="" action="register.php" method="post">
                    <input type="submit" name="Goregister" value="register">
                </form>
            <br />
            </div>
            <div class="col span_1_of_3">
            <h1>Nieuws van het Alfa College</h1>
            <a class="twitter-timeline" data-width="400" data-height="500" href="https://twitter.com/Alfacollege">Tweets by Alfacollege</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
            </div>
        </div>
        <div class="section group">
            <div class="col span_2_of_2">
            Copyright &copy; <i>2017 Ontworpen door: Thomas Steur en Sebastiaan Boi</i> Alle rechten voorbehouden.
            </div>
        </div>
    </body>
</html>
