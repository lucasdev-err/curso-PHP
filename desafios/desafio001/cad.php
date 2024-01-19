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
        <h1>Resultado Final</h1>
        <?php
        $num = $_GET["num"];
        echo "<p>O número é <strong>$num</strong></br> 
        O seu antecessor é ". ($num - 1) ."</br>
        O seu sucessor é ". ($num + 1) ."
        </p>";
        
        ?>



        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>

</html>