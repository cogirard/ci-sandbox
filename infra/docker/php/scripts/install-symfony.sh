#!/bin/sh

apk add git bash curl

# Install Symfony CLI
curl -1sLf 'https://dl.cloudsmith.io/public/symfony/stable/setup.alpine.sh' | bash
apk add symfony-cli

GIT_AUTHOR_NAME='IT-ROOM' EMAIL='developpement@itroom.fr' symfony new --webapp --version=6.2 /tmp/new-project
rm -rf /tmp/new-project/docker-compose.*

cd /tmp/new-project || exit

# Install webpack
composer require symfony/webpack-encore-bundle

# Install grumphp
curl https://gitlab.com/-/snippets/2118653/raw/master/grumphp.yml -o grumphp.yml
composer require --dev phpstan/phpstan phpro/grumphp orm-fixtures friendsofphp/php-cs-fixer povils/phpmnd

cp -rT /tmp/new-project /app
