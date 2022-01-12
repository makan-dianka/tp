<?php
require_once ("data.php");

if (isset($_GET["q"])) {
    
    $varicelle = strtolower($_GET["q"]) ;
    $result = "";
    if ($varicelle != ""){
        foreach ($a as $name){ 
            if (strpos(strtolower($name) , $varicelle) !== false){
            $result .= $name . "<br /> ";
            } 
        }

        if ($result != "") {
            echo $result;
        } else {
            echo "<span style='color:Sienna;'>oups, not find !</span>";
        }
    } 

}