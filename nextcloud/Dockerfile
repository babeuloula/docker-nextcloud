ARG NEXTCLOUD_VERSION

FROM nextcloud:${NEXTCLOUD_VERSION}-fpm-alpine

COPY nextcloud/config.php /var/www/html/config/config.php

RUN chown www-data:root /var/www/html/config/config.php
