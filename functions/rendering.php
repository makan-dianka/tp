<?php


function getCard() {

    return  "
        <div class='col-2'>
            <div class='card'>
                <div class='card-body'>
                    <a href='#'>....</a>
                </div>
            </div>
        </div>
    ";
}


function getFolderCard() {

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
           
}


?>