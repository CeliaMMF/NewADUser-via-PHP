$login = $args[0]
$mdp = $args[1]
$groupe = $args[2]
$nom = $args[3]
$prenom = $args[4]
$mdp_temp = ConvertTo-SecureString ($mdp) -Force -AsPlainText
New-ADUser -Name "$nom" -Surname "$prenom" -SamAccountName "$login" -AccountPassword $mdp_temp -Enabled $true
Add-ADGroupMember -Identity $groupe -Members $login
echo "Le login de votre compte est :" $login
echo "Il appartient au groupe :" $groupe
