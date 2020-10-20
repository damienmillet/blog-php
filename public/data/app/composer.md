# Composer



```shell
composer -V 	//Version
composer self-update //update composer
```



Installation manuelle =>  https://getcomposer.org/download/

```shell
sudo rm /usr/local/bin/composer.phar
sudo wget https://getcomposer.org/download/1.9.1/composer.phar -P /usr/local/bin
# Creer un executable
echo 'php73 /usr/local/bin/composer.phar $*' > /usr/local/bin/composer
sudo chmod +x /usr/local/bin/composer
```



Installer les dependance d'un package composer

```
composer install xxx
```

Creer les autoload apres chaque ajout 

```shell
composer dumpautoload -o
```

Supprimer le package

```
composer remove alexdw/trumbowyg-bundle
```



```bash
composer install --no-dev --optimize-autoloader --classmap-authoritative
```



```
Unused`

`https://packagist.org/packages/icanhazstring/composer-unused`
```

