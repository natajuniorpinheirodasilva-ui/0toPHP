<?php 
    $limit = $_GET["limit"];
    $result = rand(0, $limit);
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

    <main>
        <p>Número aleatório gerado: <?php echo $result; ?></p>
    </main>
</body>
</html>