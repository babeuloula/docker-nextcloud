<?php
$CONFIG = array (
  'config_is_read_only' => true,
  'instanceid' => 'instanceId',
  'passwordsalt' => 'OHpwve+r2xGJwq3Ei+2y5bkDuRl1g2',
  'secret' => '3XO2teI7h+ViSWgZLRuBcrKy7neZTziIOcryb4J3PBO5d4QU',
  'trusted_domains' => 
  array (
    0 => 'localhost',
  ),
  'datadirectory' => '/var/www/html/data',
  'version' => '17.0.2.1',
  'dbtype' => 'mysql',
  'dbhost' => 'mysql',
  'dbname' => 'nextcloud',
  'dbuser' => 'nextcloud',
  'dbpassword' => 'nextcloud',
  'dbtableprefix' => 'oc_',
  'mysql.utf8mb4' => true,
  'installed' => true,
  'overwrite.cli.url' => 'https://localhost/nextcloud',
  'memcache.local' => '\\OC\\Memcache\\APCu',
  'apps_paths' => 
  array (
    0 => 
    array (
      'path' => '/var/www/html/apps',
      'url' => '/apps',
      'writable' => false,
    ),
    1 => 
    array (
      'path' => '/var/www/html/custom_apps',
      'url' => '/custom_apps',
      'writable' => true,
    ),
  ),
  'mail_smtpmode' => 'smtp',
  'mail_smtphost' => 'mail.gandi.net',
  'mail_smtpport' => '587',
  'mail_smtpsecure' => 'tls',
  'mail_smtpauth' => true,
  'mail_smtpauthtype' => 'LOGIN',
  'mail_smtpname' => 'contact@jeremy-reynaud.fr',
  'mail_smtppassword' => '\'G8jm!*2rG3Asfq&iYk^@\'',
  'mail_from_address' => false,
  'mail_domain' => false,
  'default_language' => 'fr',
  'force_language' => 'fr',
  'default_locale' => 'fr_FR',
  'force_locale' => 'fr_FR',
  'objectstore' => 
  array (
    'class' => '\\OC\\Files\\ObjectStore\\S3',
    'arguments' => 
    array (
      'bucket' => 'dev.local',
      'autocreate' => true,
      'key' => 'SCW24B4M603RGKSHWHQE',
      'secret' => '4ffcfc51-31b9-4455-b22b-8fdcbcb0584e',
      'hostname' => 'https://s3.fr-par.scw.cloud',
      'port' => '433',
      'use_ssl' => true,
      'region' => 'fr-par',
    ),
  ),
  'memcache.distributed' => '\\OC\\Memcache\\Redis',
  'memcache.locking' => '\\OC\\Memcache\\Redis',
  'redis' => 
  array (
    'host' => false,
    'password' => false,
    'port' => false,
  ),
  'dbport' => '',
);
