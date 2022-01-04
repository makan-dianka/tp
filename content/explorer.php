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

            $path_content = "./contents";

            if (is_dir($path_content)) {

                $content_dir = scandir($path_content);

                foreach ($content_dir as $key => $file) {

                    $path_file = "${path_content}/${file}";

                    if (is_file($path_file)) {

                        $keywords = explode(".", $file);
                        $file_name = htmlspecialchars($keywords[0]);

                        echo "<a href='./?page=${file_name}' class='block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-4'>${file_name}</a>";
                    }

                    // Mettre option erreur (appel fonction 404)
                }
            } else {

                $path_404 = "./contents/404.php";

                if (is_file($path_404)) {
                    include $path_404;
                } else {
                    echo "404";
                }
            }

        ?>
</body>
</html>