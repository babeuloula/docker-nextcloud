#!/usr/bin/env bash

set -e

readonly CURRENT_PATH=$(dirname $(realpath $0))

cd ${CURRENT_PATH};

. ./lib/functions.sh

check_requirements

parse_env_docker

docker-compose down
docker-compose build --parallel
if [[ -z "$(docker network ls -f name="${NETWORK}" --format "{{.Name}}")" ]]; then
    docker network create "${NETWORK}"
fi
docker-compose up -d --remove-orphans

block_success "Environment is started!"
