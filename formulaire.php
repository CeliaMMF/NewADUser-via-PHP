<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Other/html.html to edit this template
-->

<html>
    <head>
        <title>Forumlaire Création ADUser</title>
        <meta charset="UTF-8" />
    </head>
    <body>
        <section>
            <form action="reponse1.php" method="post"> 
               	<p>Entrez votre prénom :
        <input type="text" name="prenom" size="20" required /></p>
    <p>Entrez votre nom :
        <input type="text" name="nom" size="20" required /></p>
    <p>Entrez le groupe utilisateurs voulu :
    <?php 
    
    $liste = file(groupe.txt);
    function Liste_deroulante($listeChoix, $name){
        $taille = count($listeChoix);
        $list = "<select name ='$name' size = '$taille' >";
        foreach($listeChoix as $valeur){
            $list .= "<option value='$valeur'>$valeur</option>";
        }
        $list .="</select>";
        return $list; 
    }
    echo Liste_deroulante($liste, "groupe");
    ?>
        
        <p>Entrez votre mot de passe pour votre session (8 caractères dont 1 minuscule, 1 majuscule, 1 caractères spécial et 1 chiffre) :
       <input type="password" name="mdp" size="8" required /></p>
    <input type="submit" value="Envoyer" />
        <input type="reset" value="Annuler" />
            </form>
        </section>
    </body>
</html>
