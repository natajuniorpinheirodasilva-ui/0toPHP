<?php 
    $n1 = isset($_GET["n1"]) && $_GET["n1"] != "" ? $_GET["n1"] : 0;
    $n2 = isset($_GET["n2"]) && $_GET["n2"] != "" ? $_GET["n2"] : 0;
    $n3 = isset($_GET["n3"]) && $_GET["n3"] != "" ? $_GET["n3"] : 0;
    $n4 = isset($_GET["n4"]) && $_GET["n4"] != "" ? $_GET["n4"] : 0;
    $media = ($n1 + $n2 + $n3 + $n4) / 4;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../style.css">
</head>
<body>
    <header>
        <h1>Média aritimética simples</h1>
    </header>

    <main>
        <form
            action="<?=$_SERVER['PHP_SELF']?>"
            method="get"
        >
            <label for="n1">Primeiro valor:</label>
            <input type="number" name="n1" id="n1" placeholder="Digite o primeiro valor" value="<?=$n1?>">
            
            <label for="n2">Segundo valor</label>
            <input type="number" name="n2" id="n2" placeholder="Digite o segundo valor" value="<?=$n2?>"> 

            <label for="n3">Terceiro valor</label>
            <input type="number" name="n3" id="n3" placeholder="Digite o terceiro valor" value="<?=$n3?>">

            <label for="n4">Quarto valor</label>
            <input type="number" name="n4" id="n4" placeholder="Digite o quarto valor" value="<?=$n4?>">

            <input type="submit" value="Enviar">
        </form>
    </main>

    <section>
        <header>
            <h2>Resultado</h2>
        </header>
        <p>A média aritmética dos valores inseridos é: <?=$media?></p>
    </section>
    
</body>
</html>
