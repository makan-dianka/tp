<div class="container">
    <div class="row" id="test">
        <div class="col-md-2">
        </div>
        <div class="col-md-8" id="bienvenue">


        <?php
            // authentification avec les cookies
            function auth() {
                if (isset($_SESSION['dataUsers'])) {
                    echo "<h3>Hello {$_SESSION['dataUsers'][0]['nom']} !</h3> <hr>";
                    echo "<p style='color:black;''>Vous êtes connecté en tant que {$_SESSION['dataUsers'][0]['nom']}</p>";
                    echo "<h5><a href='./sessions/destroy.php' class='btn btn-primary'>Deconxion</a></h5>";

                } else if (isset($_COOKIE['nom'])) {
                    echo "<h3>Hello {$_COOKIE["nom"]} !</h3> <hr>";
                    echo "<p style='color:black;''>Vous êtes connecté en tant que {$_COOKIE["nom"]}. Les cookies sont enregistré dans votre navigateur</p>";
                    echo "<h5><a href='./cookies/destroy.php' class='btn btn-primary'>Détruire les cookies</a></h5>";

                } else {
                    echo "<h5 style='color:red;'>Hey anonyme, vous n'êtes pas connecté!</h5> <br />";
                }
            }
            
            auth();
            
        ?>
            
        </div>
        <div class="col-md-2">
        </div>
    </div>
</div>
