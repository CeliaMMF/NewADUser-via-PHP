$login = $args[2]
$mdp = $args[3]
$groupe = $args[4]
$nom = $args[0]
$prenom = $args[1]
[bool]$mdp_unique = $args[5]
$mdp_temp = ConvertTo-SecureString ($mdp) -Force -AsPlainText
if ($mdp_unique -eq 0){
    New-ADUser -Name "$nom" -Surname "$prenom" -SamAccountName "$login" -AccountPassword $mdp_temp -Enabled $true
    $unique = Write-Output "Le mot de passe n'est pas unique"
}
elseif($mdp_unique -eq 1) {
    New-ADUser -Name "$nom" -Surname "$prenom" -SamAccountName "$login" -AccountPassword $mdp_temp -Enabled $true -ChangePasswordAtLogon $true
    $unique = Write-Output "Le mot de passe est unique"
}
Add-ADGroupMember -Identity $groupe -Members $login
$log = Write-Output "Le login de votre compte est :" $login
$grp = Write-Output "Il appartient au groupe :" $groupe
$test = "Test"
return $log, $grp, $unique, $test, $mdp_unique

