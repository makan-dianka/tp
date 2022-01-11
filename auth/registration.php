<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <title>Login page</title>
        <link rel="stylesheet" href="/main.css">
    </head>

    <body class='login-body'>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                </div>

                <div class="col-md-4" id="reg-page">
                    <h2>S'inscrire</h2>
                    <form method="POST" action="/sessions/save.php">
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
                        <p>Vous avez déjà un compte ? <a href='/auth/login.php'>Connectez-vous</a></p>
                    </form>
                    <p><a href='/' style='text-decoration: none;'>Home</a></p>
                </div>

                <div class="col-md-4">
                </div>
            </div>
        </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>