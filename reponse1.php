
        <?php
        // récupération des zones de saisie dans des variables locales
        $prenom = $_POST["prenom"];
        $nom = $_POST["nom"];
        $mdp = $_POST["mdp"];
        $groupe = $_POST["groupe"];
        $login = $prenom . "." . $nom ;
        $login = strtolower($login);
        if(isset($_POST["mdptemp"])){
                $mdp_unique = "unique";
                //$cmd = "powershell.exe -ExecutionPolicy Bypass -NoProfile -File \"NewADUser.ps1\" $nom $prenom $login $mdp $groupe $mdp_unique";
                        echo "Coché"
        }
        else{
                $mdp_unique = "valide";
                $cmd = "powershell.exe -ExecutionPolicy Bypass -NoProfile -File \"NewADUser.ps1\" $nom $prenom $login $mdp $groupe";
                echo "Pas coché"
        }
        // affichage
        echo "Bonjour  $prenom $nom <br />";
        echo "votre session à bien été créé voici le login $login, il fait parti du groupe $groupe<br />";
        echo "Et voici votre mot de passe $mdp<br />" ;
        echo $cmd;
        //Shell_Exec("echo 'shell exec'");
      
    