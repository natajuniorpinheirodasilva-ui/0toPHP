<?php 
    $num = isset($_GET["num"]) && $_GET["num"] != "" ? $_GET["num"] : 0;
    $quad = sqrt($num) ?? 1;
    $cub = $num ** (1/3) ?? 1;
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
        <h1>Raiz</h1>
    </header>
    
    <main>
        <form
            action="<?= $_SERVER['PHP_SELF'] ?>"
            method="get"
        >
            <label for="num">Forneça o número</label>
            <input type="number" name="num" id="idnum" value="<?=$num?>">
        
            <input type="submit" value="Enviar">
        </form>
    </main>

    <section>
        <h2>Resultado final</h2>
    
        <p>
            Valor fornecido: <?=$num?>
        </p>
        
        <p>
            A raiz quadrada é de <?=$num?> é: <?=$quad?> 
        </p>

        <p>
            A raiz cúbica de <?=$num?> é: <?=$cub?> 
        </p>
    </section>
</body>
</html>
