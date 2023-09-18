<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Médias</title>
</head>
<body>
    <header>
        <h1>Médias Aritméticas</h1>
    </header>

    <main>
        <?php 
            $numero1 = $_GET["numero1"] ?? 0;
            $peso1 = $_GET["peso1"] ?? 1;
            $numero2 = $_GET["numero2"] ?? 0;
            $peso2 = $_GET["peso2"] ?? 1;
        ?>

        <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
            <h2>Informe os valores</h2>

            <label for="numero1">1º Valor:</label>
            <input type="number" name="numero1" id="idnumero1" min="0" max="10" required value="<?=$numero1?>">

            <label for="peso1">1º Peso:</label>
            <input type="number" name="peso1" id="idpeso1" min="1" max="10" required value="<?=$peso1?>">

            <label for="numero2">2º Valor:</label>
            <input type="number" name="numero2" id="idnumero2" min="0" max="10" required value="<?=$numero2?>">

            <label for="peso2">2º Peso:</label>
            <input type="number" name="peso2" id="idpeso2" min="1" max="10" required value="<?=$peso2?>">

            <input type="submit" value="Calcular Médias" id="enviar">
        </form>
    </main>

    <section>
        <h2>Cálculo das Médias</h2>

        <?php 
            $mediaSimples = ($numero1 + $numero2) / 2;
            $mediaPonderada = ($numero1 * $peso1 + $numero2 * $peso2) / ($peso1 + $peso2);
        ?>

        <p>
            Analisando os <strong>valores <?=$numero1 . "</strong> e <strong>" . $numero2?></strong>, temos:
        </p>

        <ul>
            <li>
                A <strong>Média Aritmética Simples</strong> entre os valores <strong><?=$numero1 . "</strong> e <strong>" . $numero2?></strong> é igual a <strong><?=number_format($mediaSimples, 2, ",", ".")?></strong>.
            </li>
            <li>
                A <strong>Média Aritmética Ponderada</strong> com pesos <strong><?=$peso1 . "</strong> e <strong>" . $peso2 ?></strong> é igual a <strong><?=number_format($mediaPonderada, 2, ",", ".")?></strong>.
            </li>
        </ul>
    </section>
</body>
</html>