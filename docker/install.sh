#!/usr/bin/env bash

set -e

readonly DOCKER_PATH=$(dirname $(realpath $0))

cd ${DOCKER_PATH};

. ./lib/functions.sh

check_requirements

parse_env_docker

docker-compose stop
docker-compose build --parallel
if [[ -z "$(docker network ls -f name="${NETWORK}" --format "{{.Name}}")" ]]; then
    docker network create "${NETWORK}"
fi
docker-compose up -d

block_success "Environment is started!"
