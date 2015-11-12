<?php

if (getenv('DB_1_ENV_MYSQL_DATABASE')) {
  $databases = array(
      'default' =>
          array(
              'default' =>
                  array(
                      'database' => getenv('DB_1_ENV_MYSQL_DATABASE'),
                      'username' => getenv('DB_1_ENV_MYSQL_USER'),
                      'password' => getenv('DB_1_ENV_MYSQL_PASSWORD'),
                      'host' => getenv('DB_1_PORT_3306_TCP_ADDR'),
                      'port' => '',
                      'driver' => 'mysql',
                      'prefix' => '',
                  ),
          ),
  );
}