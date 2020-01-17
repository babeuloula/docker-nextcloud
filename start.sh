#!/usr/bin/env bash

set -e

readonly CURRENT_PATH=$(dirname $(realpath $0))

cd ${CURRENT_PATH};

. ./lib/functions.sh

check_requirements

parse_env_docker

docker-compose stop
docker-compose build --parallel
if [[ -z "$(docker network ls -f name="${NETWORK}" --format "{{.Name}}")" ]]; then
    docker network create "${NETWORK}"
fi
docker-compose run --name nextcloud nextcloud sh -c "chown -R www-data:root /var/www/html/config; chmod -R 0644 /var/www/html/config"
docker-compose up -d

block_success "Environment is started!"
