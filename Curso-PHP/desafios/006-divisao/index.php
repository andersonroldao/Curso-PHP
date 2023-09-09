<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Divisão</title>
</head>
<body>
    <header>
        <h1>Anatomia de uma Divisão</h1>
    </header>

    <?php 
        $dividendo = $_GET['dividendo'];
        if ($dividendo == "") {
            $dividendo = 0;
        };

        $divisor = $_GET['divisor'];
        if ($divisor == "") {
            $divisor = 1;
        };
    ?>

    <main>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="dividendo">Dividendo</label>
            <input type="number" name="dividendo" id="iddividendo" min="1" value="<?=$dividendo?>">

            <label for="divisor">Divisor</label>
            <input type="number" name="divisor" id="iddivisor" min="1" value="<?=$divisor?>">

            <input type="submit" value="Analisar" id="enviar">
        </form>
    </main>

    <section>
        <h2>Estrutura da Divisão</h2>

        <?php 
            $dividendo = $_GET['dividendo'];
            if ($dividendo == "") {
                $dividendo = 0;
            };

            $divisor = $_GET['divisor'];
            if ($divisor == "") {
                $divisor = 1;
            };

            $divisao = intdiv($dividendo, $divisor);
            $resto = $dividendo % $divisor;
            echo "O dividendo é $dividendo, o divisor é $divisor, o resultado da divisão é $divisao e o resto é $resto";
        ?>
    </section>
</body>
</html>