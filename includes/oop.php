<?php


    // class JeMoeder
    // {
    //
    //     function __construct($naam)
    //     {
    //
    //     }
    //
    //     function GeboorteGeven($arbortus) {
    //         if ($arbortus == true) {
    //             echo "Je bent niet geboren, Je moeder heeft je vermoord";
    //         } elseif ($arbortus == false) {
    //             echo "Je bent geboren, Beter pleeg je zelfmoord aangezien je moeder het nog niet heeft gedaan";
    //         }
    //
    //     }
    //
    //     function SexHebben($slachtoffer, $condoom) {
    //         if ($slachtoffer == "je vader" && $condoom == true) {
    //             echo "Je zult nooit geboren worden";
    //         } elseif ($slachtoffer == "vluchteling" && $condoom == false) {
    //             echo "Je zult geboren worden als een neger en niet van je officiele vader";
    //         }
    //
    //     }
    // }



    /**
     *
     */
    class forum
    {

        function login($username, $password) {


            include "includes/connection.php";

            $loginQuery = $con->prepare("SELECT id FROM users WHERE leerlingnummer = ? AND wachtwoord = ?");
            $loginQuery->execute(array($username, sha1($password)));
            $loginData = $loginQuery->fetch();

            if (!empty($loginData)) {

                $_SESSION['isLoggedIn'] = true;
                $_SESSION['username'] = $username;
                return true;
            } else {
                return false;
            }

        }

        function register($voornaam, $achternaam, $password, $email, $leerlingnummer, $geboortedatum) {
            include "includes/connection.php";
            // $voornaamCheck = $con->prepare("SELECT id FROM users WHERE naam = ?");
            // $voornaamCheck->execute(array($voornaam));
            // $voornaamCheckOutput = $voornaamCheck->fetchAll();
            // $achternaamCheck = $con->prepare("SELECT id FROM users WHERE naam = ?");
            // $achternaamCheck->execute(array($voornaam));
            // $achternaamCheckOutput = $achternaamCheck->fetchAll();
            // $emailCheck = $con->prepare("SELECT id FROM users WHERE email = ?");
            // $emailCheck->execute(array($email));
            // $emailCheckOutput = $emailCheck->fetch();
            // $leerlingnummerCheck = $con->prepare("SELECT id FROM users WHERE naam = ?");
            // $leerlingnummerCheck->execute(array($voornaam));
            // $leerlingnummerCheckOutput = $leerlingnummerCheck->fetchAll();
            //
            //
            // if (!empty($voornaamCheckOutput) && !empty($emailCheckOutput) && !empty($achternaamCheckOutput) && !empty($leerlingnummerCheckOutput)) {
            //     return false;
            // }  else {
            session_start();
            $registerQuery = $con->prepare("INSERT INTO users (naam, achternaam, wachtwoord, email, leerlingnummer, geboortedatum) VALUES(?, ?, ?, ?, ?, ?)");
            $registerQuery->execute(array($voornaam, $achternaam, sha1($password), $email, $leerlingnummer, $geboortedatum));
            return false;
            // }
        }

        function isLoggedIn($loggedIn) {
            if ($loggedIn == true) {
                return true;
            } else {
                return false;
            }

        }
    }



?>
