<?php 
    $nome = "Anderson";
    $sobrenome = "Roldão";
    const estado = 'RS';

    // com interpretação
    echo "Olá $nome $sobrenome \u{1f596}<br>"; 
    // sem interpretação
    echo 'Olá $nome $sobrenome \u{1f596}<br>'; 
    // concatenação
    echo "Moro no Estado do " . estado . " \u{1F3F4}<br><br>";

    // aspas dentro de aspas (sequência de escape)
    $nome = "Rodrigo";
    $sobrenome = "Nogueira";

    echo "$nome \"Minotauro\" $sobrenome <br><br>";

    //HereDoc
    $canal = "Curso em Vídeo";
    $ano = date('Y');

    echo <<< FRASE
        Olá galera do $canal
               tudo bem com vocês?
            Sejam bem-vindos ao ano $ano,
        Abraços! \u{1f596} <br>
    FRASE;

    //NowDoc
    $canal = "Curso em Vídeo";
    $ano = date('Y');

    echo <<< 'FRASE'
        Olá galera do $canal
                tudo bem com vocês?
            Sejam bem-vindos ao ano $ano,
        Abraços! \u{1f596}
    FRASE;
?>