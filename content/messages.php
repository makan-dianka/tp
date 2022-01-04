<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Messages</title>
        <link rel="stylesheet" href="main.css">
        <?php include ("./template/bootstrap.php"); ?>
    </head>


    <?php 
    
        $messages = [
            array(
                "email" => "machin@truc.bd",
                "message" => "le super message de machin"
            ),
            array(
                "email" => "micro@loge.db",
                "message" => "le message de merde de micro"
            ),
            array(
                "email" => "stephane@gmail.com",
                "message" => "le message de merde de micro"
            )
        ];
    
    ?>



    <body>
        <?php include ("./template/base.php"); ?>

        <div class="container">
            <div class="row">
                <div class="col-md-2">
                </div>

                <div class="col-md-8" id="msg">
                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">Email</th>
                            <th scope="col">Messages</th>
                            </tr>
                        </thead>

                        <tbody>
                            <!-- partie 1. non recommander-->
                            <?php 
                                foreach ($messages as $msg) {
                                    echo "<tr><td>" .  $msg["email"] . "</td><td>". $msg["message"] . "</td></tr>";
                                }
                            ?> 
                            
                            <!-- partie 2. falcultatif -->
                            <?php foreach ($messages as $i => $message) { ?>
                                <tr>
                                    <td><?php echo $message['email']; ?></td>
                                    <td><?= $message['message'] ?></td>
                                </tr>
                            <?php } ?>

                            
                            <!-- partie 3. recommander -->
                            <?php foreach ($messages as $i => $message) : ?>
                                <tr>
                                    <td><?php echo $message['email']; ?></td>
                                    <td><?= $message['message'] ?></td>
                                </tr>
                            <?php endforeach ?>

                        </tbody>
                    </table>
                </div>

                <div class="col-md-2">
                </div>
            </div>
        </div>
        

    </body>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</html>