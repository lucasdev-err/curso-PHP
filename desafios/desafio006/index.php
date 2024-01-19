<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>

        <?php
        $divisor = $_GET['divisor'] ?? 1;
        $dividendo = $_GET['dividendo'] ?? 0;
        ?>
        <h1>Anatomia de uma Divisão</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="dividendo">Dividendo</label>
            <input type="number" name="dividendo" id="dividendo" value="<?= $dividendo ?>">

            <label for="divisor">Divisor</label>
            <input type="number" name="divisor" id="divisor" min= "0" value="<?= $divisor ?>">

            <input type="submit" value="Analisar">
        </form>
    </main>

    <section>
        <h2>Estrutura da Divisão</h2>
        <?php
        if ($divisor == 0) {
            echo "<p><strong>ERRO! UM NÚMERO NAO PODE SER DIVIDIDO POR 0!</strong></p>";
        } else {
            $resto = $dividendo % $divisor;
            $quo = intdiv($dividendo, $divisor);
            echo "<table class='divisao'>";
            echo "<tr>";
            echo "<td>$dividendo</td>";
            echo "<td>$divisor</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>$resto</td>";
            echo "<td>$quo</td>";
            echo "</tr>";
            echo "</table>";
        }
        ?>
    </section>
</body>

</html>