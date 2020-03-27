<?php
#fonction calcul taille tableau
function taille_chaine($chaine){
    $i=0;
    while (isset($chaine[$i])) {
        $i++;
    }
    return $i;
}


    #fonction conversion caractere en minuscule
    function conversion_minuscule($caractere){
        if($caractere>='a' && $caractere<='z'){
            return $caractere;
        }
        else {
            $alphabet =[
                'A' => 'a', 'B' => 'b', 'C' => 'c', 'D' => 'd', 'E' => 'e', 'F' => 'f',
                'G' => 'g', 'H' => 'h', 'I' => 'i', 'J' => 'j', 'K' => 'k', 'L' => 'l',
                'M' => 'm', 'N' => 'n', 'O' => 'o', 'P' => 'p', 'Q' => 'q', 'R' => 'r',
                'S' => 's', 'T' => 't', 'U' => 'u', 'V' => 'v', 'W' => 'w', 'X' => 'x',
                'Y' => 'y', 'Z' => 'z'
            ];
            foreach ($alphabet as $key => $value) {
                if ($caractere==$alphabet[$key]) {
                    $caractere=$value;
                }
            }
            return $caractere;
        }
    }
    
    #fonction conversion caractere en majuscule
    function conversion_majuscule($caractere){
        if($caractere>='A' && $caractere<='Z'){
            return $caractere;
        }
        else {
            $alphabet =[
                'A' => 'a', 'B' => 'b', 'C' => 'c', 'D' => 'd', 'E' => 'e', 'F' => 'f',
                'G' => 'g', 'H' => 'h', 'I' => 'i', 'J' => 'j', 'K' => 'k', 'L' => 'l',
                'M' => 'm', 'N' => 'n', 'O' => 'o', 'P' => 'p', 'Q' => 'q', 'R' => 'r',
                'S' => 's', 'T' => 't', 'U' => 'u', 'V' => 'v', 'W' => 'w', 'X' => 'x',
                'Y' => 'y', 'Z' => 'z'
            ];
            foreach ($alphabet as $key => $value) {
                if ($caractere==$value) {
                    $caractere=$alphabet[$key];
                }
            }
            return $caractere;
        }
    }

    #fonction conversion chaine en minuscule
    function conversion_chaine_minuscule($chaine){
        $taille=taille_chaine($chaine);
        for ($i=0; $i < $taille; $i++) { 
            $chaine[$i]=conversion_minuscule($chaine[$i]);
        }
        return $chaine;
    }

    #fonction conversion chaine en minuscule
    function conversion_chaine_majuscule($chaine){
        $taille=taille_chaine($chaine);
        for ($i=0; $i < $taille; $i++) { 
            $chaine[$i]=conversion_majuscule($chaine[$i]);
        }
        return $chaine;
    }

    #fonction qui permet de transformer un tableau en chaine
    function conversion_tableau_chaine($tableau){
        $taille=taille_chaine($tableau);
        for ($i=0; $i < $taille; $i++) {
            $chaine[$i]=$tableau[$i];
        }
        return $chaine;
    }

    #une fonction qui teste et retourne si un caractère est dans une chaine en dans un tableau
    function recherche_caractere($chaine,$caractere1,$caractere2){
        $taille=taille_chaine($chaine);
        $resultat=0;
        for ($i=0; $i < $taille; $i++) { 
            if ($chaine[$i]==$caractere1 || $chaine[$i]==$caractere2) {
                $resultat++;
            }
        }
        return $resultat;
    }

    #foctionqui teste si une chaine contient un caractere minuscule ou pas
    function verification_caractere_minuscule($chaine){
        $taille=taille_chaine($chaine);
        $resultat=0;
        for ($j=0; $j < $taille; $j++) { 
            $i = 1;
            for( $x = "a"; $i <= 26; $x++ ) {
                if ($chaine[$j]==$x) {
                    $resultat=1;
                }
                $i++;
            }
        }
        return $resultat;
    }

    #foctionqui teste si une chaine contient un caractere majuscule ou pas
    function verification_caractere_majuscule($chaine){
        $taille=taille_chaine($chaine);
        $resultat=0;
        for ($j=0; $j < $taille; $j++) { 
            $i = 1;
            for( $x = "A"; $i <= 26; $x++ ) {
                if ($chaine[$j]==$x) {
                    $resultat=1;
                }
                $i++;
            }
        }
        return $resultat;
    }

    #foctionqui teste si une chaine contient un alphanumerique
    function verification_caractere_alphanumerique($chaine){
        $taille=taille_chaine($chaine);
        for ($j=0; $j < $taille; $j++) { 
            $i = 1;
            for( $x = "0"; $i <= 10; $x++ ) {
                if ($chaine[$j]==$x) {
                    $resultat=1;
                }
                $i++;
            }
        }
        return $resultat;
    }

    #fonction qui calcule et affiche le nombre de champ de texte
    function affichage_champ_texte($nombre_champ){
        for ($i=0; $i < $nombre_champ; $i++) { 
            echo'<br><label for="champ'.$i.'">Saisir un mot</label><br>';
            echo '<input type="text" name="champ'.$i.'" value="" <br>';
        }
        echo '<br><br><input type="submit" name="envoyer" value="verifier">';
    }

    #fonction qui controle de saisie des differents champ
    function controle_saisie_champ($nombre_champ){
        for ($i=0; $i < $nombre_champ; $i++) {
            #verification s'il a saisi quelque chose dans le champ
            if (!empty($_POST["champ".$i])) {
                #verification de la taille du mot
                $nombre_caractere_champ=taille_chaine($_POST["champ".$i]);
                if ($nombre_caractere_champ>20) {
                    echo "un mot ne peut contenir plus de 20 caracteres";
                }
                #verification du nombre de m dans le mot
                $nbr_m=recherche_caractere($chaine,m,M);
                echo 'Il y\'a'.$nbr_m.' de m dans ce champ';
            }
            else {
                echo "Vous n'avez rien saisi";
            }
            
        }
    }
?>
