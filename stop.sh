#!/usr/bin/env bash

docker-compose stop
docker rm nextcloud_run nextcloud_nextcloud_1 nextcloud_mysql_1 nextcloud_nginx_1
docker volume rm nextcloud_mysql nextcloud_nextcloud
