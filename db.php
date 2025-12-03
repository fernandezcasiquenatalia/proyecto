<?php
define('DB_HOST','TU_HOST');
define('DB_USER','TU_USUARIO');
define('DB_PASS','TU_PASSWORD');
define('DB_NAME','TU_DB');

function getPDO(){
    $dsn="mysql:host=".DB_HOST.";dbname=".DB_NAME.";charset=utf8mb4";
    return new PDO($dsn,DB_USER,DB_PASS,[PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION]);
}
?>
