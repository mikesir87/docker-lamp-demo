<?php

function getVar($name, $default) {
    $file = getenv("${name}_FILE");
    if ($file) {
        return trim(file_get_contents($file));
    }
    $data = getenv($name);
    return $data ? $data : $default;
}

function getDb() {
    $username = getVar('DB_USERNAME', 'db_user');
    $password = getVar('DB_PASSWORD', 'secretPassword');
    $host = getVar('DB_HOST', 'db');
    $name = getVar('DB_NAME', 'app_db');

    return new mysqli($host, $username, $password, $name);
}