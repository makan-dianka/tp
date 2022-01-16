<?php
/* Connect to a MySQL database using driver invocation */
// initiate connection & manage error

try {
    $dbh = new PDO('mysql:db=portofolio; host=127.0.0.1:3333', 'root', '1234');
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}

// $sql = "SELECT * FROM user;";
// $sth = $dbh->prepare($sql);
// $sth->execute();
// $sth->fetchAll();
 
// var_dump($sth);