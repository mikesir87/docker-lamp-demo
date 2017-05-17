<?php

error_reporting(E_ERROR);

$db = new mysqli("db", "db_user", "secretPassword", "app_db");

if ($db->connect_errno) {
  http_response_code(500);
  echo "Failed to connect to MySQL: " . $db->connect_error;
  return;
}
echo "LOOKS TO BE OK";
