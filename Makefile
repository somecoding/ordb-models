
test:
	docker-compose exec php-cli bash -c 'cd /var/www && XDEBUG_MODE=off ./vendor/bin/phpunit'