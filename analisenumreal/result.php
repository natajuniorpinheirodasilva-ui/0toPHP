<?php 
    $num = (float) ($_GET['num'] ?? 0);

    $i = (int) $num;
    $f = $num - $i;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <header>
        <h1>Resultado</h1>
    </header>

    <section>
        <p>Os valores inteiros são: <?php echo $i; ?></p>
        <p>Os valores fracionarios são: <?php echo $f;?></p>
    </section>
</body>
</html>