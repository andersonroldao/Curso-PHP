<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Raízes</title>
</head>
<body>
    <header>
        <h1>Escolha um número e veja sua raiz quadrada e sua raiz cúbica.</h1>
    </header>

    <main>
        <?php 
            $numero = $_GET["numero"] ?? 0;
            if ($numero == "") {
                $numero = 0;
            }
        ?>

        <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
            <h2>Informe um número</h2>

            <label for="numero">Número:</label>
            <input type="number" name="numero" id="idnumero" min="0" value="<?=$numero?>">

            <input type="submit" value="Calcular Raízes" id="enviar">
        </form>
    </main>

    <section>
        <h2>Resultado final</h2>

        <?php 
            $raizQuadrada = sqrt($numero);
            $raizCubica = $numero ** (1 / 3);
        ?>

        <p>
            Analisando o <strong>número <?=number_format($numero, 0, ",", ".")?></strong>, temos:
        </p>

        <ul>
            <li>
                A sua raiz quadrada é <strong><?=number_format($raizQuadrada, 3, ",", ".")?></strong>.
            </li>
            <li>
                A sua raiz cúbica é <strong><?=number_format($raizCubica, 3, ",", ".")?></strong>.
            </li>
        </ul>
    </section>
</body>
</html>