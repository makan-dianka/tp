<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explorateur de fichiers</title>
    <link rel="stylesheet" href="main.css">
    <?php include ("./template/bootstrap.php"); ?>
</head>
<body>
    <?php include ("./template/base.php"); ?>

    <div class="container">
        <div class="row" id="test">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">
                <h4>Explorer les fichiers:</h4>
                <hr>
                <?php
                    // $currentPath = getcwd();
                    // chdir("content");
                    // $path = getcwd();
                    $path = "./content";
                    $content = scandir($path);

                    echo "<h3 id='path'>{$path}></h3>";

                    foreach ($content as $element) {
                        $fullPath = $path ."/". $element;
                        if (is_dir($fullPath)){
                            echo "<a href='{$fullPath}'><img src='./img/folder2.png' width='50' height='50'>{$element}</a><br />";
                        } else {

                            echo "<img src='./img/file2.png' width='50' height='50'>";
                            echo "{$element} <br />";
                        
                        }
                        
                    }
                ?>

                
            </div>
            <div class="col-md-2">
            </div>
        </div>
    </div>
</body>
</html>