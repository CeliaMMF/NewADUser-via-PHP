$login = $args[0]
$mdp = $args[1]
$groupe = $args[2]
$mdp_temp = ConvertTo-SecureString ($mdp) -Force -AsPlainText
New-ADUser -Name "$login" -SamAccountName "$login" -AccountPassword $mdp_temp -Enabled $true
Add-ADGroupMember -Identity $groupe -Members $login
echo "Le login de votre compte est :" $login
echo "Il appartient au groupe :" $groupe
