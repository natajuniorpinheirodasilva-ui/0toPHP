<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Result</h1>
    </header>

    <main>
        <?php
        if (isset($_GET["name"]) && isset($_GET["sname"]) && isset($_GET["address"])) {

            $n = trim($_GET["name"]) ?? "n/A";
            $s = trim($_GET["sname"]) ?? "n/A";
            $a = trim($_GET["address"]) ?? "n/A";

            if (empty($name) || empty($sname) || empty($address)) {
                echo "Fill the form!";
            } else {
                echo "Welcome, <strong>$n $s</strong>. You live in $a";
            }

        } else {
            echo "Invalida access";
        }
        ?>

        <p><a href="javascript:history.go(-1)">Go Back</a></p>
    </main>
</body>
</html>