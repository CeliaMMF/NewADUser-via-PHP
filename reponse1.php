
        <?php
        // récupération des zones de saisie dans des variables locales
        $prenom = $_POST["prenom"];
        $nom = $_POST["nom"];
        $mdp = $_POST["mdp"];
        $groupe = $_POST["groupe"];
        $login = $prenom . "." . $nom ;
        $login = strtolower($login);
        $cmd = "powershell.exe -ExecutionPolicy Bypass -NoProfile -File \"NewADUser.ps1\" $login $mdp $groupe $nom $prenom";
        // affichage
        echo "Bonjour  $prenom $nom <br />";
        echo "votre session à bien été créé voici le login $login, il fait parti du groupe $groupe<br />";
        echo "Et voici votre mot de passe $mdp<br />";
        Shell_Exec("$cmd");
      
    