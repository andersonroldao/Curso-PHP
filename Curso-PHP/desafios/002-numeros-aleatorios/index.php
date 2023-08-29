<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Números Aleatórios</title>
</head>
<body>
    <main>
        <h1>Trabalhando com números aleatórios</h1>
        <p>Digite um número entre 0 e 100</p>
        
        <?php 
            // rand() = 1951 - Algoritmo Linear Congrential Genarator, a partir do PHP 7.1, é um simples apontamento para mt_rand().
            // mt_rand() = 1997 - Algoritmo Mersenne Twister, 4 vezes mais rápido que o rand nas versões abaixo do PHP 7.1.
            // random_int() - Gera números pseudo aleatórios criptograficamente seguros, mais lendo de todos.

            $min = 0;
            $max = 100;
            $num = rand($min, $max);

            echo "O valor gerado foi $num";
        ?>
        <!--
            <form action="">
                <button id="enviar">&#x1F504; Gerar Outro</button>
            </form>
        -->

        <button id="enviar" onclick="javascrip:document.location.reload()">&#x1F504; Gerar Outro</button>

    </main>
</body>
</html>