<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h1>Resultado</h1>
    </header>
    <main>
        <?php
        $num = $_GET["number"];
        $mais = $num + 1;
        $menos = $num - 1;

        echo "o numero é $num, ";
        echo "o sucessor $mais, ";
        echo "o antecessor $menos";
        ?>
        <a href="javascript:history.go(-1)">voltar</a>
    </main>
</body>

</html>