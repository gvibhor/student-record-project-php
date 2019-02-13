<?php
return [
    'database_conn_mysql' => [
        'driver'      => 'mysql',
        'host'        => env('BASIC_CONN_HOST'    , ''),
        'port'        => env('BASIC_CONN_PORT'    , '3306'),
        'database'    => env('BASIC_CONN_DATABASE', ''),
        'username'    => env('BASIC_CONN_USERNAME', ''),
        'password'    => env('BASIC_CONN_PASSWORD', ''),
        'unix_socket' => env('BASIC_CONN_SOCKET'  , ''),
        'charset'     => 'utf8mb4',
        'collation'   => 'utf8mb4_unicode_ci',
        'prefix'      => '',
        'strict'      => true,
        'engine'      => null,
        'options'   => [
            \PDO::ATTR_EMULATE_PREPARES => true
        ]
    ],
];