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
    $ano = date("Y");
    $nasc = $_GET['nasc'] ?? 2000;
    ?>
    <main>
        <h1>Calculando a sua idade</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="nasc">Em que ano você nasceu?</label>
            <input type="number" name="nasc" id="nasc" value="<?= $nasc ?>">
            <label for="ano">Quer saber sua idade em que ano? (Atualmente estamos em
                <strong><?= $ano ?></strong>)</label>
            <input type="number" name="ano" id="ano" value="<?= $ano ?>">
            <input type="submit" value="Calcular idade">
        </form>
    </main>
    <section>
        <h2>Resultado</h2>
        <?php
        $idade = $ano - $nasc;
        echo "<p>Quem nasceu em $nasc tem <strong>$idade anos</strong> em $ano!</p>";
        ?>
    </section>
</body>

</html>