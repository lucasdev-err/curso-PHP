<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    $num = $_GET['numero'] ?? 0;
    ?>
    <main>
        <h1>Informe um número</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">

            <label for="numero">Número</label>
            <input type="number" name="numero" id="numero" value="<?= $num ?>">
            <input type="submit" value="Calcular Raízes">

        </form>
    </main>

    <section>
        <h2>Resultado final</h2>
        <?php
        echo "<p>Analisando o <strong>número $num</strong>, temos:</p>";
        $rquad = $num ** (1 / 2);
        $rcub = $num ** (1 / 3);
        echo "<ul> 
            <li>A sua raiz quadrada é <strong>" . number_format($rquad, "3", ",", ".") . "</strong></li>
            <li>A sua raiz cúbica é <strong>" . number_format($rcub, "3", ",", ".") . "</strong></li>
            </ul>";
        ?>
    </section>
</body>

</html>