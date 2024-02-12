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
        $user = "samuka";
        $pass = "samuka55";

        $nome = $_GET["nome"];
        $senha = $_GET["senha"];

        if ($nome === $user && $senha === $pass) {
            echo "<p>É um prazer te conhecer <strong>$nome</strong>! Este é o meu site!</p>";
        } else {
            // Emitir um erro personalizado se as credenciais não coincidirem
            die("Credenciais inválidas");
        }
        ?>

        <a href="javascript:history.go(-1)">voltar</a>
    </main>
</body>

</html>