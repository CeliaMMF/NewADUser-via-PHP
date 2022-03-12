$login = $args[2]
$mdp = $args[3]
$groupe = $args[4]
$nom = $args[0]
$prenom = $args[1]
$mdp_unique = $true
$mdp_temp = ConvertTo-SecureString ($mdp) -Force -AsPlainText
if (!$mdp_unique){
    New-ADUser -Name "$nom" -Surname "$prenom" -SamAccountName "$login" -AccountPassword $mdp_temp -Enabled $true
}
else{
    New-ADUser -Name "$nom" -Surname "$prenom" -SamAccountName "$login" -AccountPassword $mdp_temp -Enabled $true --ChangePasswordAtLogon $true
}
Add-ADGroupMember -Identity $groupe -Members $login
Write-Output "Le login de votre compte est :" $login
Write-Output "Il appartient au groupe :" $groupe
