$login = $args[2]
$mdp = $args[3]
$groupe = $args[4]
$nom = $args[0]
$prenom = $args[1]
[bool]$mdp_unique = $args[5]
$mdp_temp = ConvertTo-SecureString ($mdp) -Force -AsPlainText
if ($mdp_unique -eq $false){
    New-ADUser -Name "$nom" -Surname "$prenom" -SamAccountName "$login" -AccountPassword $mdp_temp -Enabled $true
    echo "Le mot de passe n'est pas unique"
}
elseif($mdp_unique -eq $true) {
    New-ADUser -Name "$nom" -Surname "$prenom" -SamAccountName "$login" -AccountPassword $mdp_temp -Enabled $true -ChangePasswordAtLogon $true
    echo "Le mot de passe est unique"
}
Add-ADGroupMember -Identity $groupe -Members $login
echo "Le login de votre compte est :" $login
echo "Il appartient au groupe :" $groupe
