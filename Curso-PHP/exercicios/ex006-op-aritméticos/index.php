<?php 
    $resultado = "2" + "2"; // Soma
    $resultado1 = "2" . "2"; // Concatenação
    
    var_dump($resultado, $resultado1);

    $resultado2 = 50 / 2 + 3 **2;

    echo "<br><br>O resultado é $resultado2<br><br>";

    $absoluto = abs(-100); // Retira o sinal de um dado.
    $base_convert = base_convert(20, 10, 16); // Conversor de bases numéricas.
    $ceil = ceil(10.6); // Arredonda para cima.
    $floor = floor(10.6); // Arredonda para baixo.
    $round = round(10.6); // Arredondamento aritmético.
    /* $hipotenusa = hypot(); // Calcula a hipotenusa. */
    $inteirodiv = intdiv(13, 2); // Faz a divisão inteira.
    $minimo = min(4, 7, 9, 2, 3, 5, 2); // Mostra o minímo entre uma lista de números.
    $maximo = max(4, 7, 9, 2, 3, 5, 2); // Mostra o máximo entre uma lista de números.
    $pi = pi(); // Mostra o número PI.
    $power = pow(5, 2); // Calcula potenciação e perde a ordem de precedência.
    /* $seno = sen(); // Calcula o seno.
    $coseno = cos(); // Calcula o coseno.
    $tangente = tan(); // Calcula a tangente. */
    $raiz = sqrt(81); // Calcula a raiz quadrada

    echo "O número Absoluto de -100 é $absoluto<br> 
    O número 20 da base 10 para a base 16 é $base_convert<br> 
    O arredondamento maior do número 10.6 é $ceil<br> 
    O arredondamento menor do número 10.6 é $floor<br> 
    O arredondamento aritmético do número 10.6 é $round<br> 
    A divisão inteira entre o número 13 e 2 é $inteirodiv<br> 
    O menor número da lista [4, 7, 9, 2, 3, 5, 2] é $minimo<br> 
    O maior número da lista [4, 7, 9, 2, 3, 5, 2] é $maximo<br> 
    O número PI é $pi<br> 
    O Resultado da potenciação entre 5 e 2 é $power<br>
    A raiz quadrada de 81 é $raiz";
?>