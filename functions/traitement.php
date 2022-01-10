<?php
// verifier si post n'est pas vide
if (!empty($_POST)) {
    
    if (isset($_POST["email"]) && isset($_POST["password"])) {

        setcookie("nom", $_POST["nom"], time() + (60 * 60 * 24 * 30), '/');
        setcookie("email", $_POST["email"], time() + (60 * 60 * 24 * 30), '/');
        setcookie("password", $_POST["password"], time()+ (60 * 60 * 24 * 30), '/');
  
    }

}


// redirection de url
header("Location: /?page=form");

?>