
        <?php
        // récupération des zones de saisie dans des variables locales
        $prenom = $_POST["prenom"];
        $nom = $_POST["nom"];
        $mdp = $_POST["mdp"];
        $groupe = $_POST["groupe"];
        $login = $nom . "." . $prenom ;
        $login = strtolower($login);
        // affichage
        $cmd = "powershell.exe -ExecutionPolicy Bypass -NoProfile -File \"NewADUser.ps1\" $nom $prenom $login $mdp $groupe";
        echo $cmd;
        // $output = Shell_Exec("$cmd");
        // echo $output;
        // echo "Et voici votre mot de passe $mdp<br />" ;
      
    