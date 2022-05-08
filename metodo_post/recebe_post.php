<?php

if (isset($_POST['nome']) && isset($_POST['idade'])) {
    $nome = limpaPost($_POST['nome']);
    $idade = limpaPost($_POST['idade']);

    echo "<h3>Seu nome é $nome, e você tem $idade anos de idade.</h3>";
}

function limpaPost($valor) {
    $valor = trim($valor);
    $valor = stripslashes($valor);
    $valor = htmlspecialchars($valor);
    return $valor;
}

?>