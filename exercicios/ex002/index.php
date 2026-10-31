<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../style.css">
</head>
<body>
    <?php 
        $bol = false;
        $num = 3e2;

        if($bol) {
            echo "Loop working";
        } else {
            echo "Loop not working" . "<br>";
            echo $num;
        }
    ?>
    <br>
    <?php
        $vet = [1, 2, "olá!"];
    
        var_dump($vet);
    ?>
    <br>
    <?php
        const ANIMAL = "Elefante";

        $nom = "Rodrigo";
        $snom = "Roger";

        echo "$nom \"Minotauro\" $snom";
    ?>


</body>
</html>
