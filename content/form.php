<!-- form -->
<div class="row">
    <div class="col-md-4">
    </div>

    <div class="col-md-4" id="form-bwb">


    <?php
// verifier si post n'est pas vide

        if (!empty($_POST)) {
            
            if (isset($_POST["email"]) && isset($_POST["password"])) {


                if (isset($_COOKIE["email"]) && isset($_COOKIE["password"])){

                    if ($_POST["email"] == $_COOKIE["email"] && $_POST["password"] == $_COOKIE["password"]) {
                        echo "<h2 style='color:blue;'>you're logged as {$_COOKIE["nom"]}!</h2> <br />";
                        echo "<h2 style='color:blue;'>Logout</h2> <br />";

                    } else {
                        echo "<h2 style='color:red;'>email or password is incorrect!</h2> <br />";
                    }

                } else {

                    if (isset($_POST["email"]) && isset($_POST["password"])) {

                        setcookie("email", $_POST["email"], time() + (30), '/');
                        setcookie("password", $_POST["password"], time() + (30), '/');
                    }

                    }

                }

            } 

        ?>



        <h2>Votre Message</h2>
        <form method="POST" action="#">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Message</label>
                <textarea name="message" type="text" class="form-control" id="exampleInputPassword1"></textarea>
            </div>


            <button type="submit" class="btn btn-primary">Envoyer</button>
        </form>
    </div>

    <div class="col-md-4">
        <form method="POST" action="./functions/traitement.php" style="margin-top: 100px; margin-left: 400px;">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="formlabel">Nom</label>
                    <input name="nom" type="nom">
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="formlabel">Email</label>
                    <input name="email" type="email"  id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="formlabel">mot de passe</label>
                    <input name="password" type="password"  id="exampleInputPassword1">
                </div>


                <button type="submit" class="btn btn-primary">S'inscrire</button>
        </form>
    </div>
    </div>
</div>
</div>