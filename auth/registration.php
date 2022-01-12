<body class="login-body">
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
</body>