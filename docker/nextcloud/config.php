<?php

$CONFIG = [
    'instanceid' => getenv('NEXTCLOUD_INSTANCE_ID'),
    'passwordsalt' => getenv('NEXTCLOUD_PASSWORD_SALT'),
    'secret' => getenv('NEXTCLOUD_SECRET'),
    'trusted_domains' => [
        [getenv('NEXTCLOUD_HOSTNAME')]
    ],
    'datadirectory' => '/var/www/nextcloud/data',
    'version' => getenv('NEXTCLOUD_VERSION'),
    'dbtype' => 'mysql',
    'dbhost' => 'mysql',
    'dbname' => getenv('MYSQL_DATABASE'),
    'dbuser' => getenv('MYSQL_USER'),
    'dbpassword' => getenv('MYSQL_PASSWORD'),
    'dbtableprefix' => 'uc_',
    'installed' => false,
    'overwrite.cli.url' => 'https://'.getenv('NEXTCLOUD_HOSTNAME').'/nextcloud',

    'default_language' => getenv('NEXTCLOUD_LANGUAGE'),
    'force_language' => getenv('NEXTCLOUD_LANGUAGE'),
    'default_locale' => getenv('NEXTCLOUD_LOCALE'),
    'force_locale' => getenv('NEXTCLOUD_LOCALE'),

    'objectstore' => [
        'class' => '\\OC\\Files\\ObjectStore\\S3',
        'arguments' => [
            'bucket' => getenv('BUCKET_NAME'),
            'autocreate' => true,
            'key'    => getenv('BUCKET_KEY'),
            'secret' => getenv('BUCKET_SECRET'),
            'hostname' => getenv('BUCKET_HOSTNAME'),
            'port' => getenv('BUCKET_PORT'),
            'use_ssl' => 433 == getenv('BUCKET_PORT'),
            'region' => getenv('BUCKET_REGION'),
        ],
    ],
];
