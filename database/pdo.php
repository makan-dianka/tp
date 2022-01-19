<?php
    $DB_TYPE = 'mysql'; //Type of database<br>
    $DB_HOST = '192.168.68.63:3399'; //Host name<br>
    $DB_USER = 'root'; //Host Username<br>
    $DB_PASS = '1234'; //Host Password<br>
    $DB_NAME = 'tutoseu'; //Database name<br><br>


    try {
        
        $CONN = new PDO("$DB_TYPE:host=$DB_HOST; dbname=$DB_NAME;", $DB_USER, $DB_PASS); // PDO Connection

    } catch (PDOException $e) {
        echo 'Connection failed: ' . $e -> getMessage();
    }