<?php

if (!defined('DB_HOST')) {
    define("DB_HOST", "");
}

if (!defined('DB_DATABASE')) {
    define("DB_DATABASE", "");
}

if (!defined('DB_USER')) {
    define("DB_USER", "");
}

if (!defined('DB_PASSWORD')) {
    define("DB_PASSWORD", "");
}

$conn = new PDO("mysql:dbname=" . DB_DATABASE . ";host=" . DB_HOST . "", DB_USER, DB_PASSWORD);

?>