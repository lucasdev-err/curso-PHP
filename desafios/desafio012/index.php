<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício PHP</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    $usuSeg = $_GET['usuSeg'] ?? 60
    ?>
    <main>
        <h1>Calculadora de Tempo</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="usuSec">Qual é o total de segundos?</label>
            <input type="number" name="usuSeg" id="usuSeg" value="<?= $usuSeg ?>">
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Totalizando tudo</h2>
        <p>Analisando o valor que você digitou, <?= $usuSeg ?> segundos equivalem a um total de:</p>
        <?php
        $seg = $usuSeg % 60;
        $min = intdiv($usuSeg, 60) % 60;
        $hor = intdiv(intdiv($usuSeg, 60), 60) % 24;
        $dia = intdiv(intdiv(intdiv($usuSeg, 60), 60), 24) % 7;
        $sem = intdiv(intdiv(intdiv(intdiv($usuSeg, 60), 60), 24), 7);

        echo
        "<ul>
            <li>$sem semanas</li>
            <li>$dia dias</li>
            <li>$hor horas</li>
            <li>$min minutos</li>
            <li>$seg segundos</li>
        </ul>";
        ?>
    </section>
</body>

</html>