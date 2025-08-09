FROM php:8.2-cli

# Install dependencies
RUN apt-get update && apt-get install -y git unzip

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Install PHPUnit globally (optional, since it's also in composer.json)
RUN composer global require phpunit/phpunit

WORKDIR /app
COPY . /app
# Do NOT run composer install here; it will be overwritten by the volume mount at runtime.
