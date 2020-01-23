<?php

$CONFIG = [
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
