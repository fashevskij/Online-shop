#!make

validate:
	docker compose exec php-fpm vendor/bin/psalm
	docker compose exec php-fpm vendor/bin/phpcs --standard=PSR12 app --report=diff --colors
	docker compose exec php-fpm vendor/bin/phpstan analyse -l 9 app tests

swagger:
	docker compose exec php-fpm vendor/bin/openapi app -o openapi.yaml

up:
	docker-compose up

build:
	docker-compose build

down:
	docker-compose down

ide-helper:
	docker compose exec php-fpm php artisan ide-helper:generate
	docker compose exec php-fpm php artisan ide-helper:meta
	docker compose exec php-fpm php artisan ide-helper:models -W
