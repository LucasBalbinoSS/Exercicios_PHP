
<?php

$num1 = 9;

switch ($num1) {
    case $num1 % 2 == 0:
        echo "O número $num1 é par!";
        break;
    
    default:
        echo "O número $num1 não é par...";
        break;
}

?>