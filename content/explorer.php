<?php

$current = (isset($_GET['folder'])) ? $_GET['folder'] : "/";
$parent = substr($current,0, strrpos($current, '/'));
$files = scandir($current);
$current = $current == "/" ? "" : $current;
unset($files[0]);
unset($files[1]);
?>

<body class="body-explorer">
    <div class="container">
        <div class="row" id="test">
                <h4>Explorer les fichiers:</h4>
                <hr>
                <?php if ($current != "") : ?>

                    <div class='col-3'>
                        <div class='card'>
                            <div class='card-body'>

                                <?php if ($parent != "") : ?>
                                    <a href="?page=explorer&folder=<?= $parent?>" style="text-decoration: none; margin: 10px;"> 
                                        <img src='/assets/img/retour.jpg' width='50' height='50'> Retour 
                                    </a>
                                <?php else : ?>
                                    <a href="?page=explorer" style="text-decoration: none; margin: 10px;"> 
                                        <img src='/assets/img/retour.jpg' width='50' height='50'> Retour 
                                    </a>
                                <?php endif ?>

                            </div>
                        </div>
                    </div>

                <?php endif ?>

                <?php foreach ($files as $file) : ?>
                    <?php $fullPath = $current . "/" . $file ?>

                    <div class='col-3'>
                        <div class='card'>
                            <div class='card-body'>

                                <?php if (is_dir($fullPath)) : ?>
                                    
                                    <a href="?page=explorer&folder=<?= $fullPath?>" style="text-decoration: none;"> <img src='/assets/img/folder2.png' width='50' height='50'> <?= $file; ?> </a>

                                <?php else : ?>

                                    <img src='/assets/img/file2.png' width='50' height='50'>
                                    <?= $file; ?>

                                <?php endif ?>

                            </div>
                        </div>
                    </div>

                <?php endforeach ?>

        </div>
        <br />
    </div>
</body>