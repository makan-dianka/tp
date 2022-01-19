<?php
    function hanoi ($nb_disques, $depart, $arrivee, $intermediaire){
        if($nb_disques>0){
            hanoi($nb_disques - 1, $depart, $intermediaire, $arrivee);
            var_dump("deplacement de" . $depart . "vers" . $arrivee);
            hanoi($nb_disques - 1, $intermediaire, $arrivee, $depart);

        }
    }
    hanoi(3, "gauche", "droite", "milieu");
?>