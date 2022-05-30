$nom = $args[0]
$prenom = $args[1]
$login = $args[2]
$mdp = $args[3]
$groupe = $args[4]
New-ADUser -Name "$nom" -Surname "$prenom" -SamAccountName "$login" -AccountPassword $mdp -Enabled $true
Add-ADGroupMember -Identity $groupe -Members $login
$log = Write-Output "Le login de votre compte est :" $login
$grp = Write-Output "Il appartient au groupe :" $groupe
return $log, $grp, $unique, $test, $mdp_unique
Stop-Transcript
