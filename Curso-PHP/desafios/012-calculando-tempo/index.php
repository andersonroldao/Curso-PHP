<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio 012</title>
</head>
<body>
    <header>
        <h1>Calculadora de Tempo</h1>
    </header>

    <main>
        <?php 
            $numero = $_GET["numero"] ?? 0;
        ?>

        <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
            <label for="numero">Qual é o total de segundos?</label>
            <input type="number" name="numero" id="idnumero" min="0" required value="<?=$numero?>">

            <input type="submit" value="Calcular" id="enviar">
        </form>
    </main>

    <section>
        <h2>Cálculo de Tempo</h2>

        <?php 
            $semanas = intdiv($numero, 604800);
            $dias = intdiv($numero % 604800, 86400);
            $horas = intdiv($numero % 86400, 3600);
            $minutos = intdiv($numero % 3600, 60);
            $segundos = intdiv($numero % 60, 1);
        ?>

        <p>
            Analisando o valor, temos que <strong><?=number_format($numero, 0, ",", ".")?> segundos<strong>, equivalem a:
        </p>

        <ul>
            <li><?=$semanas?> semanas</li>
            <li><?=$dias?> dias</li>
            <li><?=$horas?> horas</li>
            <li><?=$minutos?> minutos</li>
            <li><?=$segundos?> segundos</li>
        </ul>
    </section>
</body>
</html>