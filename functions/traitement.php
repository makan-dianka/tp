<?php
// commencement de la session
session_start();

// verifier si la session existe
if (!isset($_SESSION["messages"])) {
    $_SESSION["messages"] = [];
}

// verifier si post n'est pas vide
if (!empty($_POST)) {
    $data = [
        "email" => $_POST["email"], "message" => $_POST["message"]
    ];

    array_push($_SESSION["messages"], $data);
    } 



// redirection de url
header("Location: /?page=messages");

?> 