<?php
    //fonction creation du calendrier bilingue
    function creation_calendrier_bilingue(){
        $calendrier = [
                1 => ['January','Janvier'],
                2 => ['February','Février'],
                3 => ['March','Mars'],
                4 => ['April','Avril'],
                5 => ['May','Mai'],
                6 => ['June','Juin'],
                7 => ['July','Juillet'],
                8 => ['August','Aout'],
                9 => ['September','Septembre'],
                10 => ['October','Octobre'],
                11 => ['November','Novembre'],
                12 => ['December','Décembre']
        ];
        return $calendrier;
    }
    ?>

<?php
    function affichage_calendrier($valeur_btn,$calendrier) {
        echo "<table border='2'>";
        echo "<tr>";
            for ($i=1; $i <=12 ; $i++) {
                echo "<td border='2'>".$calendrier[$i][$valeur_btn]."</td>";
                if ($i==4 || $i==8) {
                    echo "</tr>";
                }
            }
            echo "</tr>";
        echo "</table>";
    }
?>

