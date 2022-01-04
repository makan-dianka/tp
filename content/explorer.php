<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explorateur de fichiers</title>
    <?php include ("./template/bootstrap.php"); ?>
</head>
<body>
    <?php include ("./template/base.php"); ?>

    <h2>Explorer :</h2>
    <?php
        $path = "content";
        $content = scandir($path, $sorting_order = SCANDIR_SORT_ASCENDING, $context = null);
        
        print_r($content);
    

        $test = str_replace(".php", "", $content);
        print_r($test);
    ?>
</body>
</html>