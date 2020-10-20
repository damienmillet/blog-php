need xdebug

```
bin/phpunit --coverage-html
```

phpunit ne fonctionne pas
	Solution : composer update symfony/flex --no-plugins,
	Solution : composer require --dev symfony/phpunit-bridge

On se met a jour :
	composer update

Depreciation bcrypt:
	bcrypt to auto dans config/packages/security.yaml


./vendor/bin/simple-phpunit fait une maj et s'execute



```
@codeCoverageIgnore
```