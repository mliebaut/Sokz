# Sokz
Blog / Articles about socks

Depuis powershell, installez Scoop via ces deux lignes:

Set-ExecutionPolicy -ExecutionPolicy RemoteSigned -Scope CurrentUser
Invoke-RestMethod -Uri https://get.scoop.sh | Invoke-Expression

Puis

```shell
scoop install composer
scoop bucket add versions
scoop install versions/php83

symfony.exe server:ca:install
symfony composer install
``` 
