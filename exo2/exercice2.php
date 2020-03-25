<?php require_once "fonctions.php";?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 2</title>
</head>
<body>
    <form action="exercice2.php" method="POST">
        <input type="radio" name="boutonradio" id="Anglais" value="0">
        <label for="Anglais">Anglais</label><br>
        <input type="radio" name="boutonradio" id="Français" value="1">
        <label for="Français">Français</label><br>
        <input type="submit" value="Afficher">
    </form>
    <?php

        $calendrier=creation_calendrier_bilingue();
        $recup_btn=$_POST["boutonradio"];
        var_dump($recup_btn);
        affichage_calendrier($recup_btn,$calendrier);
    ?>
</body>
</html>