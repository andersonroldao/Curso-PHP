<?php 
    // Recomenda-se utilizar em PHP variáveis com todas letras Minúsculas.
    $nome = "Anderson"; 
    $sobrenome = "Silva";    
    // Variável pode receber uma nova atribuição.
    $nome = "Leonardo";
    $sobrenome = "Santos";
    // Recomenda-se utilizar em PHP constantes com todas letras Maiúsculas.
    // Constante não pode receber uma nova atribuição.
    const PAIS = "Brasil";

    echo "Muito prazer, $nome $sobrenome! Você mora no " . PAIS . ".";

    $nomeCompletoCliente = "Camel Case";
    $telefone_contato_fornecedor = "Snake Case";
?>