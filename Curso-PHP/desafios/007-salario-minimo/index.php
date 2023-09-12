<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Salário Mínimo</title>
</head>
<body>
    <header>
        <h1>Veja quantos salários mínimos vale seu salário</h1>
    </header>

    <?php 
        $moeda = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
        $salario = $_GET["numero"];
        if (empty($salario)) {
            $salario = 0;
        }

        $salariomin = 1320;
    ?>

    <main>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
            <h2>Informe seu salário</h2>

            <label for="numero">Salário (R$):</label>
            <input type="number" name="numero" id="idnumero" min="0" step="0.01" placeholder="Não use ponto para separar milhar 1000,00" autofocus value="<?=$salario?>">

            <input type="submit" value="Calcular" id="enviar">

            <p>*Considerendo o salário mínimo de <strong>R$ 1.320,00.</strong></p>
        </form>
    </main>

    <Section>
        <h2>Resultado Final</h2>

        <?php
            $divisao = intdiv($salario, $salariomin);
            $resto = $salario - ($salariomin*$divisao);

            echo "<p>Quem recebe um salário de " . numfmt_format_currency($moeda, $salario, "BRL") . " ganha <strong>$divisao salário(s) mínimo(s)*</strong> + " . numfmt_format_currency($moeda, $resto, "BRL") . ".</p>";
        ?>
    </Section>
</body>
</html>