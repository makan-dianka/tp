<?php
// commencement de la session
session_start();

// verifier si la session existe
if (!isset($_SESSION["dataUsers"])) {
    $_SESSION["dataUsers"] = [];
}

// verifier si post n'est pas vide
if (!empty($_POST)) {

    if (isset($_POST['nom']) && isset($_POST['email']) && isset($_POST['password'])) {

        $data = [
            "nom" => $_POST["nom"],
            "email" => $_POST["email"],
            "password" => $_POST["password"]
        ];

        array_push($_SESSION["dataUsers"], $data);

        // enregistrement des cookies
        setcookie("nom", $_POST["nom"], time() + (60 * 60 * 24 * 30), '/');
        setcookie("email", $_POST["email"], time() + (60 * 60 * 24 * 30), '/');

        // redirection de url
        header("Location: /?page=home");    
    } 
}

?> 