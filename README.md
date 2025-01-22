# Sokz
Blog / Articles about socks

Depuis powershell, installez Scoop via ces deux lignes:
Set-ExecutionPolicy -ExecutionPolicy RemoteSigned -Scope CurrentUser
Invoke-RestMethod -Uri https://get.scoop.sh | Invoke-Expression

Puis 

scoop install composer
scoop bucket add versions
scoop install versions/php83

scoop install openssl

composer create-project symfony/skeleton Sokz
cd my_project_directory
composer require webapp
