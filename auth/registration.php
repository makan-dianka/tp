<?php 
    include "./database/pdo.php";

    if (isset($_POST["nom"]) && isset($_POST["email"]) && isset($_POST["password"])) {
        
        $encodepassword = password_hash($_POST["password"], PASSWORD_DEFAULT);
        $sql = "INSERT INTO login (username, email, mdp) VALUES ('" . $_POST["nom"] . "', '" . $_POST["email"] . "', '" . $encodepassword . "')";

        $request = $CONN -> prepare($sql);
        $request -> execute();
    
        
        // la session
        if (!isset($_SESSION["dataUsers"])) {
            $_SESSION["dataUsers"] = [];

            $data = [
                "nom" => $_POST["nom"],
                "email" => $_POST["email"],
                "password" => $_POST["password"]
            ];
    
            array_push($_SESSION["dataUsers"], $data);

        }

    }

    
?>


<body class="login-body">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
            </div>

            <div class="col-md-4" id="reg-page">
                <h2>S'inscrire</h2>

                <?php if (isset($_POST['nom'])) :?>
                     <?= "<div class='alert alert-success' role='alert'>Merci ". $_SESSION["dataUsers"][0]["nom"] . " d'être inscrit sur notre site. <a href='./?page=login'>Connectez-vous ici</a></div>"; ?>
                <?php endif ?>

                <form method="POST" action="./?page=registration">
                    <div class="mb-3">
                        <label for="nom" class="form-label">Nom</label>
                        <input name='nom' placeholder="veuillez entrer votre nom"  type="nom" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input name='email' placeholder="veuillez entrer votre email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input name="password" placeholder="veuillez entrer votre mot de passe" type="password" class="form-control" id="exampleInputPassword1" required>
                    </div>

                    <button type="submit" class="btn btn-primary">S'inscrire</button> <br /> <br />
                    <p>Vous avez déjà un compte ? <a href='./?page=login'>Connectez-vous</a></p>
                </form>
                <p><a href='/' style='text-decoration: none;'>Home</a></p>
            </div>

            <div class="col-md-4">
            </div>
        </div>
    </div>
</body>