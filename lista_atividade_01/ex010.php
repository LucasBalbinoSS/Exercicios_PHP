<!-- Faça um  programa  que  receba  leia  um  inteiro  entre  1  e  7  e  imprima  o  dia  da  semana correspondente a este número. Istoe, domingo se 1, segunda-feira se 2, e assim por diante. -->

<?php

$num1 = 3;

switch ($num1) {
    case 1:
        echo 'Segunda-feira';
        break;
    case 2:
        echo 'Terça-feira';
        break;
    case 3:
        echo 'Quarta-feira';
        break;
    case 4:
        echo 'Quinta-feira';
        break;
    case 5:
        echo 'Sexta-feira';
        break;
    default:
        echo 'Dia inválido, tente novamente';
        break;
}

?>