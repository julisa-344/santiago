<?php

/**
 * Configuration file for database connection.
 *
 * This file contains an array with the database connection details and creates a mysqli object for database connection.
 *
 * @var array $config An array with the database connection details.
 * @var string $config['db_host'] The database host.
 * @var string $config['db_user'] The database username.
 * @var string $config['db_pass'] The database password.
 * @var string $config['db_name'] The database name.
 *
 * @var mysqli $mysqli A mysqli object for database connection.
 *
 * @throws Exception If there is a MySQL connection error.
 */

$config = array(
    'db_host' => 'localhost',
    'db_user' => 'root',
    'db_pass' => '',
    'db_name' => 'test'
);

$mysqli = new mysqli($config['db_host'], $config['db_user'], $config['db_pass'], $config['db_name']);
if ($mysqli->connect_errno) {
    die('MySQL connection error: ' . $mysqli->connect_errno);
}