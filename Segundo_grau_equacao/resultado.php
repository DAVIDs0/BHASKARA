<!DOCTYPE html>
<html>
<head>
    <title>Raízes</title>
    <meta charset="UTF-8">
    <style>
        body {
            background: #7cb342;
            color: white;
            font-family: 'Roboto', 'Arial';
            font-size: 30px;
            text-align: center;
        }

        a{
            color: white.
            text-decoration: none;
        }
        </style>
    </head>
    <body>

<?php
include("Conexao.php");

// Valores
$a = 1;
$b = -5;
$c = 6;
//Delta
$delta = ($b*$b)-((4*$a)*$c);
//Equação
$x1 = (-$b + sqrt ($delta)) / (2 * $a);
$x2 = (-$b - sqrt ($delta)) / (2 * $a);

$sqlinsert = "insert into formula values ( 0, '$a', '$b', '$c', '$delta', '$x1', '$x2')";


//executando instruções sql
$resultado= @mysqli_query($conexao, $sqlinsert);
if(!$resultado){
    die('Query inválida:' . @mysqli_error($conexao));
}else{
    echo"<font size=14 color=white>Cálculo realizado com sucesso!!! <br> ";
}

mysqli_close($conexao);
//Exibindo os valores
echo '<strong>O valor de a é:</strong> '."$a".'<br>';
echo '<strong>O valor de b é:</strong> '."$b".'<br>';
echo '<strong>O valor de c é:</strong> '."$c".'<br>';
echo '<strong>O valor de delta é:</strong> '."$delta".'<br>';
echo '<strong>O valor de x1 é:</strong> '."$x1".'<br>';
echo '<strong>O valor de x2 é:</strong> '."$x2".'<br>';
?>
        <br><a href="index.php">Clique aqui para voltar para a página inicial</a>
    </body>
</html>