<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formulaire</title>
        <link rel="stylesheet" href="main.css">
        <?php include ("./template/bootstrap.php"); ?>
    </head>
    <body>
        <?php include ("./template/base.php"); ?>
        <div class="container">
            <!-- include content -->
            <div class="row">
                <div class="col-md-4">
                </div>

                <div class="col-md-4" id="form-bwb">
                    <h2>Se connecter</h2>
                    <form>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Message</label>
                            <textarea type="text" class="form-control" id="exampleInputPassword1"></textarea>
                        </div>


                        <button type="submit" class="btn btn-primary">Connexion</button>
                    </form>
                </div>

                <div class="col-md-4">
                </div>
            </div>
        </div>
        
    </body>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</html>