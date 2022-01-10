<?php
    // authentification avec les cookies
    function authCookie() {
        if (!empty($_POST)) {
            
            if (isset($_POST["email"]) && isset($_POST["password"])) {

                if (isset($_COOKIE["email"]) && isset($_COOKIE["password"])){

                    if ($_POST["email"] == $_COOKIE["email"] && $_POST["password"] == $_COOKIE["password"]) {
                        
                        echo "<h2 style='color:blue;'>you're logged as {$_COOKIE["nom"]}!</h2> <br />";
                        

                    } else {
                        echo "<h3 style='color:red;'>email or password incorrect!</h3> <br />";
                    }

                } 

            }

        }
    }

?>