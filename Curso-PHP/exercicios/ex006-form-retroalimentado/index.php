<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>FORM RETROALIMENTADO</title>
</head>
<body>
    <header>
        <h1>FORMULÁRIO RETROALIMENTADO</h1>
    </header>

    <?php 
        $valor1 = $_GET["valor1"] ?? 0;
        $valor2 = $_GET["valor2"] ?? 0;
        $soma = $valor1 + $valor2;
    ?>

    <main>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="valor1">Valor 1</label>
            <input type="number" name="valor1" id="idvalor1" value="<?=$valor1?>">

            <label for="valor2">Valor 2</label>
            <input type="number" name="valor2" id="idvalor2" value="<?=$valor2?>">

            <input type="submit" value="Somar" id="enviar">
        </form>
    </main>

    <section>
        <h2>Resultado da soma</h2>

        <?php
            echo "<p>A soma entre os valores $valor1 e $valor2 é <strong>igual a $soma</strong>.</p>";
        ?>
    </section>
</body>
</html>