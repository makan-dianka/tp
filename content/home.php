<div class="container">
    <div class="row" id="test">
        <div class="col-md-2">
        </div>
        <div class="col-md-8" id="bienvenue">


        <?php
            // authentification avec les cookies
            function authCookie() {
                if (isset($_COOKIE["email"]) && isset($_COOKIE["password"])) {
                    echo "<h3>Hello {$_COOKIE["nom"]} !</h3> <hr>";
                    echo "<p style='color:black;''>Vous êtes connecté en tant que {$_COOKIE["nom"]}</p>";
                    echo "<h5><a href='./cookies/destroy.php' class='btn btn-primary'>Deconxion</a></h5>";
                                
                } else {
                        echo "<h5 style='color:red;'>Hey anonyme, vous n'êtes pas connecté!</h5> <br />";
                    }
            }
            
            authCookie();
        ?>
            
        </div>
        <div class="col-md-2">
        </div>
    </div>
</div>
