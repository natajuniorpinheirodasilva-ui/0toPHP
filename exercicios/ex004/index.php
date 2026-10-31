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
        $v1 = $_GET["v1"]??0;
        $v2 = $_GET["v2"]??0;        
    ?>

    <main>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
            <label for="v1">Primeiro valor</label>
            <input type="text" name="v1" id="idv1" value="<?=$v1?>">
            
            <label for="v2">Segundo valor</label>
            <input type="text" name="v2" id="idv2" value="<?=$v2?>">

            <input type="submit" value="Enviar">
        </form>
    </main>

    <section id="result">
        <h2>Resultado</h2>
        <?php
            $sum = $v1 + $v2; 
            echo "Resultado entre $v1 e $v2 é = $sum";
        ?>
    </section>
    
</body>
</html>