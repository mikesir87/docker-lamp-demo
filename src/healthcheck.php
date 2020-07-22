<?php

error_reporting(E_ERROR);

require("db.php");
$db = getDb();

if ($db->connect_errno) {
  http_response_code(500);
  echo "Failed to connect to MySQL: " . $db->connect_error;
  return;
}
echo "LOOKS TO BE OK";
