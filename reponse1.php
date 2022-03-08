<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
    <head>
        <meta charset="UTF-8" />
        <title>Récupération des saisies : reponse1.php</title>
    </head>
    <body>
        <?php
        // récupération des zones de saisie dans des variables locales
        $prenom = $_POST["prenom"];
        $nom = $_POST["nom"];
        $mdp = $_POST["mdp"];
        $login = $prenom . "." . $nom ;
        $login = strtolower($login);
        // affichage
        echo "Bonjour  $prenom $nom <br />";
        echo "votre session à bien été créé voici le login $login<br />";
        echo "Et voici votre mot de passe $mdp<br />";
        echo Shell_Exec ('powershell.exe -executionPolicy bypass -File ".\NewADUser.ps1 '.$login.' '.$mdp.'"');
        ?>
    </body>
    