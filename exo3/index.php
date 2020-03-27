<?php require_once "fonction.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 3</title>
</head>
<body>
    <form action="" method="post">
        <label for="nombre">Saisir un nombre entre 1 et 10</label><br>
        <input type="text" value="<?php if (isset($_POST['nombre'])){echo $_POST['nombre'];} ?>" name="nombre" placeholder="1 et 10"><br><br>
        <input type="submit" value="valider" name="valider"><br>
        <?php
            if (isset($_POST["valider"]) && !empty($_POST["nombre"]) ) {
                $maj=verification_caractere_majuscule($_POST["nombre"]);
                $min=verification_caractere_minuscule($_POST["nombre"]);
                if ($maj==0 && $min==0) {
                    if ($_POST["nombre"]<1) {
                        echo "valeur trop petite";
                    }
                    elseif ($_POST["nombre"]>10) {
                        echo "valeur trop grande";
                    }
                    else {
                        $nombre=$_POST["nombre"];
                        echo "Bravo ".$nombre;
                        affichage_champ_texte($nombre);
                        if (isset($_POST["envoyer"])) {
                            controle_saisie_champ($nombre);
                        }
                    }
                }
                else {
                    echo "Veuillez saisir un nombre entre 1 et 10";
                }
            }
            else {
                echo "vous n'avez rien saisi";
            }
        ?>
    </form>
</body>
</html>

<?php
    
?>