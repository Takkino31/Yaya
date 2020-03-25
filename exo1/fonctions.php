<?php ini_set("memory_limit","40M"); ?>
<?php
        //fonction calcul nombre premier*/
    function calcul_nombre_premier($nombre) {
        $elementstableau=-1;
        $tableau=array();
        for ($i=2; $i < $nombre; $i++) {
            $k=0;
            for ($j=2; $j <$i && $k<1; $j++) {
                if ($i % $j == 0) {
                    $k+=1;
                    $j=$i;
                }
            }
            if ($k==0) {
                $tableau[$elementstableau++]=$i;
            }
        }
        return $tableau;
    }
?>
<?php
    // fonction affichage tableau
    function affichage_tableau($tableau){
        foreach ($tableau as $value) {
            echo "$value ";
        }
    }

    
?>

<?php
    //fonction calcul moyenne tableau
    function moyenne_tableau($tableau){
        $nbr_elements=0;
        $somme_elements=0;
        foreach ($tableau as $value) {
            $somme_elements+=$value;
            $nbr_elements+=1;
        }
        return ($somme_elements/$nbr_elements);
    }
?>
    
<?php
    //fonction calcul taille tableau
    function taille_tableau($tableau){
        $element=0;
        foreach ($tableau as $elements) {
            $elements=$elements;
            $element++;
        }
        return $element;
    }
?>

<?php
    //fonction creation tableau associatif inf sup et remplissage
    function creation_tableau_inf_sup($tableau,$moyenne){
        $tableau_inf_sup=[
            'inferieur' => [],
            'superieur' => []
        ];
        $inf=0;
        $sup=0;
            foreach ($tableau as $nbr_premier) {
                if ($moyenne > $nbr_premier) {
                    $tableau_inf_sup['inferieur'][$inf++]=$nbr_premier;
                }
                else {
                    $tableau_inf_sup['superieur'][$sup++]=$nbr_premier;
                }
            }
        return $tableau_inf_sup;
    }

?>

<?php
    //fonction pagination pour les nombres premiers
    function pagination($tableau,$nbr_premier_par_page){

        $taille=taille_tableau($tableau);
        $nbr_page=ceil($taille / $nbr_premier_par_page);
        for ($i=0; $i < $nbr_page ; $i++) { 
            $p=$i+1;
            echo"<a href='exercice1.php?p=$p'>page $p </a>";
            
        }
        $ligne_debut=0;
        $ligne_fin=10;

        $url_num_page=$_SERVER["HTTP_SEC_FETCH_USER"];
        $page=$url_num_page[1];
        echo "<br>******".$page."******<br>";
        echo '<table border="2">';
        for ($ligne=$ligne_debut; $ligne < $ligne_fin; $ligne++) {
            $colonne_debut=0;
            $colonne_fin=10;
            echo '<tr border="2">';
            for ($colonne=$colonne_debut; $colonne < $colonne_fin ; $colonne++) { 
                $k=$ligne*$colonne+$page*($nbr_premier_par_page);
                echo '<td border="2">'.$tableau[$k].'</td>';
            }
            echo'</tr>';
        }
        echo '<table>';
    }
?>