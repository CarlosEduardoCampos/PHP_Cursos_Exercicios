<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resutado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado</h1>
    </header>
    <section>
        <?php
            $num = $_GET["numero"] ?? 0;
            //
            print "<p>O número ecolhido foi $num</p>";
            print '<p>O seu antecessor é ' . ($num - 1) .'</p>';
            print '<p>O seu sucessor é ' . ($num + 1) . '</p>'; 
        ?>
    </section>
</body>
</html>