<?php

include_once"conexao.php";
$acao = $_GET['acao'];
if(isset($_GET['id'])){
$id = $_GET['id'];
}

switch($acao){
    case 'inserir':
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $data = $_POST['data'];
    $mensagem = $_POST['mensagem'];

    $sqlInsert = "INSERT INTO users (user_name,user_email,user_data, user_mensagem)
    values ('$nome', '$email', '$data', '$mensagem')";

    if (!mysqli_query($conn,$sqlInsert)) {
        die("Erro ao inserir as informações do formulario na tabela users: ".mysqli_error($conexao));
    }   else{
            echo "<script language='javascript' type='text/javascript'>
    alert('Dados cadastrados com sucesso!')
    window.location.href='crud.php?acao=selecionar'</script>";
}
    break;

    case 'montar':
        $id = $_GET['id'];
        $sql = 'SELECT * FROM users WHERE user_id = '.$id;
        $resultado = mysqli_query($conn, $sql) or die("Erro ao retornar os dados");
        echo "<form method='post' name='dados' action='crud.php?acao=atualizar' onSubmit='return enviardados();'>";
        echo "<table width='588' border='0' algin='center'>";
        
        while($registro = mysqli_fetch_array($resultado)){
            echo " <tr>";
            echo " <td width='118'> <font size='1' face='Verdana, Arial, Helvetica, sans-serif'> Código: </font></td>";
            echo " <td width='460'>";
            echo " <input name='id' type='text' class='formbutton' id='id' size='5' maxlength='10' readonly value=".$id. ">";
            echo " </td>";
            echo " </tr>";
            echo " <tr>";
            echo " <td width='118'> <font size='1' face='Verdana, Arial, Helvetica, sans-serif'> Nome <strong>: </strong> </font></td>";
            echo " <td width='460'>";
            echo " <input name='nome' type='text' class='formbutton' id='nome' value=".$registro['user_name'].">";
            echo " </td>";
            echo " </tr>";
            echo " <tr>";
            echo " <td width='118'> <font size='1' face='Verdana, Arial, Helvetica, sans-serif'> Data <strong>: </strong> </font></td>";
            echo " <td width='460'>";
            echo " <input name='data' type='date' class='formbutton' id='data' value=".$registro['user_date'].">";
            echo " </td>";
            echo " </tr>";
            echo " <tr>";
            echo " <td width='118'> <font size='1' face='Verdana, Arial, Helvetica, sans-serif'> Email <strong>: </strong> </font></td>";
            echo " <td width='460'>";
            echo " <input name='email' type='text' class='formbutton' id='email' value=".$registro['user_email'].">";
            echo " </td>";
            echo " </tr>";
            echo " <tr>";
            echo " <td width='118'> <font size='1' face='Verdana, Arial, Helvetica, sans-serif'> Mensagem <strong>: </strong> </font></td>";
            echo " <td width='460'>";
            echo " <textarea name='mensagem' cols='50' rows='8' class='formbutton' id='mensagem'>".htmlspecialchars($registro['user_mensagem'])."</textarea>";
            echo " </td>";
            echo " </tr>";
            echo "<tr>";
            echo "<td height='22'></td>";
            echo "<td>";
            echo "<input name='Submit' type='submit' class='formobjects' value='Atualizar'>";
            echo "<input name='Reset' type='reset' class='formobjects' value='Limpar campos'>";
            echo "<button class='waves-effect waves-light btn' type='submit' name='action' formaction='crud.php?acao=selecionar'>Consultar
            </button>";
            echo "</td>";
            echo "</tr>";
            }
        echo "</table>";
        echo "</form>";

        break;

    case 'atualizar':
        
        $codigo = $_POST['id'];
        $nome = $_POST['nome'];
        $data = $_POST['data'];
        $email = $_POST['email'];
        $mensagem = $_POST['tx_mensagem'];

        $sql = "UPDATE users SET user_name = '" . $nome . "', user_email = '" . $email . "', user_data ='" . $data . "', user_mensagem = '" . $mensagem . "' WHERE user_id = '" . $codigo . "'";
        
        if (!mysqli_query($conn, $sql)) {
            die('</br> Erro no comando SQL UPDATE' .mysqli_error($conn));
            }else {
            echo"<script language='javascript' type='text/javascript'>
            alert('Dados atualizados com sucesso!')
            windows.location.href='crud.php?acao=selecionar'</script>";
            }
            mysqli_close($conn);

        break;

    case 'deletar':
    $sqlDelete = "DELETE FROM users WHERE user_id = '" . $id . "'";

    if (!mysqli_query($conn, $sqlDelete)){
        die ('Error: '.mysqli_error($conn));
    }   else{
    echo "<script language='javascript' type='text/javascript'>
    alert('Dados excluídos com sucesso!')
    window.location.href='crud.php?acao=selecionar'</script>";
    }
    mysqli_close($conexao);
header("Location:crud.php?acao=selecionar");

break;

case 'selecionar':
date_default_timezone_set('America/Sao_Paulo');

include_once "conexao.php";

echo "<meta charset='UTF-8'>";
echo "<center><table border=1>";
echo "<tr>";
echo "<th>CÓDIGO</th>";
echo "<th>NOME</th>";
echo "<th>EMAIL</th>";
echo "<th>DATA CADASTRO</th>";
echo "<th>MENSAGEM</th>";
echo "<th>AÇÃO</th>";
echo "</tr>";

$sqlSelect = "SELECT * FROM users";
$resultado = mysqli_query($conn, $sqlSelect) or die ("Erro ao retornar dados");

echo "<CENTER>Registro cadastrados na base de dados.</br></CENTER>";
echo "</br>";

while ($registro = mysqli_fetch_array($resultado)){
$id = $registro['user_id'];
$nome = $registro['user_name'];
$email = $registro['user_email'];
$data = $registro['user_date'];
$mensagem = $registro['user_mensagem'];

echo "<tr>";
echo "<td>". $id . "</td>";
echo "<td>". $nome . "</td>";
echo "<td>". $email . "</td>";
echo "<td>". date("d/m/y", strtotime($data)) . "</td>";
echo "<td>". $mensagem . "</td>";
echo "<td><a href='crud.php?acao=deletar&id=$id'><img src='delete.png' alt='Deletar' title='Deletar registro'></a>
<a href='crud.php?acao=montar&id=$id'><img src='update.png' alt='Atualizar' title='Atualizar registro'></a>
<a href='index.php'><img src='insert.png' alt='Inserir' title='Inserir registro'></a>";

echo "</tr>";
}

mysqli_close($conexao);

break;

default:
header("Location:index.php");
break;
}

?>