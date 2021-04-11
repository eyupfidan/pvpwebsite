<?php
 ini_set('session.gc_maxlifetime', 30*60);
@session_start();
try {
    $ayarlar = array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_CASE => PDO::CASE_NATURAL,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
    );

    $connect = new PDO("mysql:host=localhost;dbname=db_name", "db_username", "password", $ayarlar);

} catch (PDOException $ex) {
    die($ex->getMessage());
}

?>