$login = $args[0]
$mdp = $args[1]
$mdp_temp = ConvertTo-SecureString ($mdp) -Force -AsPlainText
New-ADUser -Name "$login" -SamAccountName "$login" -AccountPassword $mdp_temp -Enabled $true 
echo "Le login de votre compte est :" $login