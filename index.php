<?php session_start() ?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formulaire</title>
        <?php include ("./template/bootstrap.php"); ?>
        <link rel="stylesheet" href="/assets/css/main.css">
        <link rel="icon" href="/assets/img/php.jpg">
    </head>
    <body>
        <!-- include content -->
        <?php include ("./template/base.php"); ?>
        
        <?php 
            if (isset($_GET["page"])) {
                $page = $_GET["page"]; 
            } else {
                $page = "home";
            }
            
            $path = "./content/${page}.php";
            $path2 = "./auth/${page}.php";


            if (is_file($path)) {
                include $path;
            }
            
            elseif (is_file($path2)) {
                    include $path2;
                }
            
            else {
                    include "./error/404.php";
                } 
        ?>

    </body>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</html>