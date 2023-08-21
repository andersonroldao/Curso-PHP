<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos Primitivos</title>
</head>
<body>
    <h1>Tipos Primitivos em PHP</h1>
    <?php
    /* 
        0x = hexadecimal,
        0b = Binário,
        0e = Potenciação,
        0  = Octal 
    */
    $number = 300 - 0x12c + (int)"0.3e3"; // Coerção
    echo "O tipo e o valor da variável é: ";
    var_dump($number);

    // Array
    $vetor = [4, 1.25, 8, 20, 1, 3]; 
    var_dump($vetor);
    
    // Object
    class Pessoa {
        private string $nome;
    }

    $pessoa = new Pessoa;
    var_dump($pessoa);

    ?>
</body>
</html>