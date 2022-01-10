<?php
    // enrgistrement du cookies
    function saveCookie() {
        
        setcookie("nom", $_COOKIE["nom"], time() - (60 * 60 * 24), '/');
        setcookie("email", $_COOKIE["email"], time() - (60 * 60 * 24), '/');
        setcookie("password", $_COOKIE["password"], time() - (60 * 60 * 24), '/');
    
        // redirection de url
        header("Location: /?page=home");
    }

    saveCookie()

?>