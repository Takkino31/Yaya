<?php require_once "fonctions.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 4</title>
</head>
<body>
    <form action="" method="post">
        <label for="nombre">Saisir le nombre de phrase</label><br>
        <input type="text" value="<?php if (isset($_POST['nombre'])){echo $_POST['nombre'];} ?>" name="nombre" placeholder="1 et 10"><br><br>
        <input type="submit" value="valider" name="valider"><br>
        <?php
            $alphabet = [
                'A' => 'a', 'B' => 'b', 'C' => 'c', 'D' => 'd', 'E' => 'e', 'F' => 'f',
                'G' => 'g', 'H' => 'h', 'I' => 'i', 'J' => 'j', 'K' => 'k', 'L' => 'l',
                'M' => 'm', 'N' => 'n', 'O' => 'o', 'P' => 'p', 'Q' => 'q', 'R' => 'r',
                'S' => 's', 'T' => 't', 'U' => 'u', 'V' => 'v', 'W' => 'w', 'X' => 'x',
                'Y' => 'y', 'Z' => 'z'
            ];
            if (isset($_POST["valider"]) && !empty($_POST["nombre"]) ) {
                $maj=verification_majuscule($alphabet,$_POST["nombre"]);
                $min=verification_minuscule($alphabet,$_POST["nombre"]);
                if ($maj==0 && $min==0) {
                    if ($_POST["nombre"]<1) {
                        echo "valeur trop petite";
                    }
                    elseif ($_POST["nombre"]>10) {
                        echo "valeur trop grande";
                    }
                    else {
                        $nombre=$_POST["nombre"];
                        for ($i=0; $i < $nombre; $i++) { 
                            echo "mamoudou cons<br>";
                            $value=@$_POST["phrase$i"];
                        ?>
                            <textarea name="phrase<?$i?>" id="" cols="30" rows="2"><?php echo $value; ?></textarea>
                        <?php
                        }
                        echo '<br><input type="submit" value="verifier">';
                    }
                }
                else {
                    echo "Veuillez saisir un nombre entre 1 et 10";
                }
            }
?>
</form>
</body>
</html>
