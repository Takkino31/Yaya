<?php require_once 'fonctions.php';?>
<!doctype html>
<html lang="fr">
<head>

  <meta charset="utf-8">
  <title>exercice 1</title>
  <link rel="stylesheet" href="style.css">
  
</head>
<body>
    <form action="exercice1.php" method="POST">
        <label for="chiffre"> Saisir un entier superieur à 10000 </label><br>
        <input type="text" name="chiffre" placeholder="entier superieur 10000"><br>
        <input type="submit" name="valider" value="valider" placeholder="Valider"><br>
    </form>

    <?php

    $regexVerifNbr="/[0-9]+$/";
    if(isset($_POST["valider"] ) && !empty($_POST["chiffre"]) ) {
      $chiffre=$_POST["chiffre"];
        if (preg_match($regexVerifNbr,$chiffre)) {
            $chiffre=intval($chiffre);
            if ($chiffre>=10) {
                echo 'le nombre est '.$chiffre.'<br>';
                $tableau_nbrpremiers=calcul_nombre_premier($chiffre);
                affichage_tableau($tableau_nbrpremiers);
                $moyenne=moyenne_tableau($tableau_nbrpremiers);
                $taille=taille_tableau($tableau_nbrpremiers);
                $tableau_inf_sup=creation_tableau_inf_sup($tableau_nbrpremiers,$moyenne,$taille);
                $nbr_par_page=100;
                pagination($tableau_nbrpremiers,$nbr_par_page);
            }
            else { 
              echo 'Le nombre est trop petit ';
            }
        }
        else {
          echo 'vous n\'avez pas saisi un nombre';
        }
    }
    else {
      echo 'vous n\'avez rien saisi';
    }

    ?>
</body>
</html>