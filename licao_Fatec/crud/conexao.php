<?php

$servidor = 'localhost';
$banco = 'id18842830_db_login';
$usuario = 'id18842830_root';
$senha = 'KmSB2C_~>g7x52Eh';

$conn = mysqli_connect($servidor, $usuario, $senha, $banco);

if(!$conn) {
    die("A conexão falhou: ". mysqli_connect_error());
}

echo "A conexão foi efetuada com sucesso";
echo "<br>";

?>