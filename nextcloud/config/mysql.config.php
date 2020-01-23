<?php

$AUTOCONFIG['dbtype'] = 'mysql';
$AUTOCONFIG['dbhost'] = 'mysql';
$AUTOCONFIG['dbname'] = getenv('MYSQL_DATABASE');
$AUTOCONFIG['dbuser'] = getenv('MYSQL_USER');
$AUTOCONFIG['dbpassword'] = getenv('MYSQL_PASSWORD');
$AUTOCONFIG['dbtableprefix'] = '';
$AUTOCONFIG['mysql.utf8mb4'] = true;
$AUTOCONFIG["directory"] = "/var/www/html/data";
