<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <h1>Numero aleatorio</h1>
        <?php
        $numeroAleatorio = rand(1, 1000);
        echo "o numero gerado foi $numeroAleatorio";
        ?>
        <button onclick="javascript:document.location.reload()">De novo</button>
    </main>
</body>

</html>