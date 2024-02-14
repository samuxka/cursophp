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
        <h1>analisador de Número</h1>
        <?php
        $num = $_POST["number"] ?? 0;

        echo "<p>Analisando o número <strong>" . number_format($num, 3, ",", ".") . "</strong> informado pelo usuário:</p>";

        $int = (int) $num;
        $fra = $num - $int;

        echo "<ul>
                    <li>A parte inteira do seu número é <strong>" . number_format($int, 0, ",", ".") . "</strong></li><br>
                    <li>A parte fracionada do seu número é <strong>" . number_format($fra, 3, ".") . "</strong></li>
                </ul>";
        ?><br>
        <button onclick="javascript:history.go(-1)">voltar</button>
    </main>
</body>
</body>

</html>