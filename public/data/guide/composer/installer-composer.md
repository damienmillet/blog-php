Installation manuelle =>  https://getcomposer.org/download/

```shell
sudo rm /usr/local/bin/composer.phar
sudo wget https://getcomposer.org/download/1.9.1/composer.phar -P /usr/local/bin
# Creer un executable
echo 'php73 /usr/local/bin/composer.phar $*' > /usr/local/bin/composer
sudo chmod +x /usr/local/bin/composer
```

# test

ou simplement avec brew :

```brew install composer```
