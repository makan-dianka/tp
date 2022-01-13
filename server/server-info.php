<!-- Obtention des information du server -->

<?
// tableau contenant les infos du server
$server = [
    'Hôte distant' =>  $_SERVER['SERVER_NAME'],
    'Socket' =>  $_SERVER['HTTP_HOST'],
    'Server d\'hôte' =>  $_SERVER['SERVER_SOFTWARE'],
    'Chemin du document' =>  $_SERVER['DOCUMENT_ROOT'],
    'Chemin absolu' =>  $_SERVER['SCRIPT_FILENAME'],
    'Page courant' =>  $_SERVER['PHP_SELF'],
    'Nom du fichier' =>  $_SERVER['SCRIPT_NAME'],
];

// tableau contenant les infos du client
$client = [
    'Info du system' =>  $_SERVER['HTTP_USER_AGENT'],
    'Adresse IP ' =>  $_SERVER['REMOTE_ADDR'],
    'Numero du PORT' =>  $_SERVER['REMOTE_PORT'],
];

