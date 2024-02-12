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
        <h1>Numero aleatorio</h1>
    </header>
    <main>
        <?php
            $numeroAleatorio = rand(1, 100);
            echo "o numero gerado foi $numeroAleatorio";
        ?>
        <input type="submit" value="Gerar outro" reload>
    </main>
</body>

</html>