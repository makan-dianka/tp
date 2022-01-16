<?php
$HOST = '127.0.0.1:3333'; //Nom donné dans le docker-compose.yml
$USER = 'root'; // user et pwd du docker compose
$PASS = '1234';
$DB = 'portofolio';

$CONN = new mysqli($HOST, $USER, $PASS, $DB);
if(!$CONN) {echo "Erreur de connexion à MSSQL<br />";}
else{
        echo "Connexion à mySQL ok<br />";
        // mysqli_close($conn);
}