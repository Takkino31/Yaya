<?php

# 1er objectif F1

#fonction calcul taille chaine
function taille_chaine($chaine) {
    $i = 0;
    while (isset($chaine[$i])) {
        $i++;
    }
    return $i;
}

#fonction verification point à la fin de chaque phrase
function verification_point_fin($chaine) {
    $taille = taille_chaine($chaine) - 1;
    $resultat = 0;
    if ($chaine[$taille] == ' .' || $chaine[$taille] == ' !' || $chaine[$taille] == ' ?') {
        $resultat = 1;
    }
    return $resultat;
}

#nombre de phrase dans le texte
function nbr_phrase($texte) {
    for ($i = 0; $i < taille_chaine($texte); $i++) {
        $nbr_phrase = 0;
        if ($texte[$i] == '.' || $texte[$i] == '!' || $texte[$i] == '?') {
            $nbr_phrase++;
        }
    }
    return $nbr_phrase;
}

function recuperation_phrase($chaine, $taille) {
    $regex = "/ \. | ?| !/";
    for ($i = 0; $i < $taille; $i++) {
        $verification_espace = preg_match($regex, $chaine);
        if ($verification_espace) {
            $phrase = preg_split($regex, $chaine);
        }
    }
    return $phrase;
}

#fonction verification caractere sur le nombre de champ

function verification_majuscule($chaine) {
    $resultat = 0;
    $taille = taille_chaine($chaine);
    for ($i = 0; $i < $taille; $i++) {

        $j = 1;
        for ($x = "A"; $j <= 26; $x++) {
            if ($chaine[$i] == $x) {
                return $resultat = 1;
            }
            $j++;
        }
    }
    return $resultat;
}

#fonction verification caractere sur le nombre de champ
function verification_minuscule($chaine) {
    $resultat = 0;
    $taille = taille_chaine($chaine);
    for ($i = 0; $i < $taille; $i++) {

        $j = 1;
        for ($x = "a"; $j <= 26; $x++) {
            if ($chaine[$i] == $x) {
                return $resultat = 1;
            }
            $j++;
        }
    }
    return $resultat;
}

#fonction vérification majuscule premier caractere
function debut_phrase($chaine) {
    return verification_majuscule($chaine[0]);

}



#vetification espace avant premiere caractere
function nombre_espace_avant_premier_caractere($chaine) {
    $taille = taille_chaine($chaine);
    $i = 0;
    $nbr_espace = 0;
    while ($i < $taille) {
        if ($chaine[$i] == ' ') {
            $nbr_espace++;
            $i++;
        }
        else {
            $i = $taille;
        }
    }
    return $nbr_espace;
}

#fonction supprimer espace avant premier caractere
function supprimer_espace_debut($chaine) {
    $espace = nombre_espace_avant_premier_caractere($chaine);
    $nouvelle_chaine = " ";
    $taille = taille_chaine($chaine) - $espace;
    for ($i = 0; $i < $taille; $i++) {
        $nouvelle_chaine[$i] = $chaine[$espace + $i];
    }
    return $nouvelle_chaine;
}

#fonction validation phrase
function valider_phrase($phrase) {
    $espace = nombre_espace_avant_premier_caractere($phrase);
    if ($espace != 0) {
        $phrase = supprimer_espace_debut($phrase);
    }

    $majuscule_debut = debut_phrase($phrase);
    if ($majuscule_debut == 0) {
        echo "Une phrase doit commencer par une majuscule";
    }
    else {
        echo "Sa grammaire mokk na Une prase commence toujours par une majuscule";
    }

    $point_final = verification_point_fin($phrase);
    if ($point_final == 0) {
        echo "Iow tamite phrase point lay jéxé";
    }
    else {
        echo "Point final d'accord";
    }

}

#Fin du 1er objectif

#2e Objectif F2
