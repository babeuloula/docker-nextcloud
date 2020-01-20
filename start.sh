#!/usr/bin/env bash

set -e

readonly CURRENT_PATH=$(dirname $(realpath $0))

cd ${CURRENT_PATH};

. ./lib/functions.sh

check_requirements

parse_env_docker

if [[ ! -f ./nextcloud/config.php ]]; then
    cp ./nextcloud/config.sample.php ./nextcloud/config.php
fi

./stop.sh
docker-compose build --parallel
if [[ -z "$(docker network ls -f name="${NETWORK}" --format "{{.Name}}")" ]]; then
    docker network create "${NETWORK}"
fi
docker-compose run --name nextcloud_run nextcloud sh -c "chown -R www-data:root /var/www/html/config; chmod -R 0755 /var/www/html/config"
docker-compose up -d --remove-orphans

block_success "Environment is started!"
