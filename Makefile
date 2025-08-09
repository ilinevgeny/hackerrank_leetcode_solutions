.PHONY: test help rebuild shell composer-install

test:
	@docker-compose run --rm php vendor/bin/phpunit $(ARGS)

rebuild:
	@docker-compose build --no-cache

shell:
	@docker-compose run --rm php bash

composer-install:
	@docker-compose run --rm php composer install

help:
	@echo "Usage:"
	@echo "  make test -- [phpunit args]               # Run PHPUnit with args, e.g. make test -- --version"
	@echo "  make rebuild                             # Rebuild Docker container"
	@echo "  make shell                               # Open bash shell in container"
	@echo "  make composer-install                    # Run composer install in container"

# Allow passing arguments after '--' without quotes
ARGS = $(wordlist 2,$(words $(MAKECMDGOALS)),$(MAKECMDGOALS))
%::
	@:
