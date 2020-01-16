<?php

$CONFIG = [
    'config_is_read_only' => true,

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
    'dbtableprefix' => '',
    'mysql.utf8mb4' => true,

    'installed' => false,
    'overwrite.cli.url' => 'https://'.getenv('NEXTCLOUD_HOSTNAME').'/nextcloud',
    'memcache.local' => '\OC\Memcache\APCu',
    'apps_paths' =>[
        [
            'path' => OC::$SERVERROOT.'/apps',
            'url' => '/apps',
            'writable' => false,
        ],
        [
            'path' => OC::$SERVERROOT.'/custom_apps',
            'url' => '/custom_apps',
            'writable' => true,
        ],
    ],

    'mail_smtpmode' => 'smtp',
    'mail_smtphost' => getenv('SMTP_HOST'),
    'mail_smtpport' => getenv('SMTP_PORT') ?: (getenv('SMTP_SECURE') ? 465 : 25),
    'mail_smtpsecure' => getenv('SMTP_SECURE') ?: '',
    'mail_smtpauth' => getenv('SMTP_NAME') && getenv('SMTP_PASSWORD'),
    'mail_smtpauthtype' => getenv('SMTP_AUTHTYPE') ?: 'LOGIN',
    'mail_smtpname' => getenv('SMTP_NAME') ?: '',
    'mail_smtppassword' => getenv('SMTP_PASSWORD') ?: '',
    'mail_from_address' => getenv('MAIL_FROM_ADDRESS'),
    'mail_domain' => getenv('MAIL_DOMAIN'),

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

    'memcache.distributed' => '\OC\Memcache\Redis',
    'memcache.locking' => '\OC\Memcache\Redis',
    'redis' => [
        'host' => getenv('REDIS_HOST'),
        'password' => getenv('REDIS_HOST_PASSWORD'),
        'port' => getenv('REDIS_HOST_PORT'),
    ],
];
