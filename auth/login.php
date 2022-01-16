<body class="login-body">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
            </div>

            <div class="col-md-4" id="login-page">

                
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

                                } else {
                                    echo "<p style='color:red;'>Vous n'êtes pas enregistré! Inscrivez-vous d'abord puis revenez sur cette page</p>";
                                }

                            }

                        }
                    }

                    authCookie()
                ?>


                <h2>Se connecter</h2>
                <form method="POST" action="#">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input name='email' placeholder="saisissez votre email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input name="password" placeholder="saisissez votre mot de passe" type="password" class="form-control" id="exampleInputPassword1" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Connexion</button> <br /> <br />
                    <p>Vous n'avez pas un compte ? <a href='./?page=registration'>Inscrivez-vous</a></p>
                </form>
                <p><a href='/' style='text-decoration: none;'>Home</a></p>
            </div>

            <div class="col-md-4">
            </div>
        </div>
    </div>
</body>
