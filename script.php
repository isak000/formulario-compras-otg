<?php
include_once("conexao.php");


$solicitante = $_POST['slc'];
$data = $_POST['data'];
$item = $_POST['item'];

$sql = " INSERT INTO solicitacoes (data_solicitacao,nome_solicitante,item_comprado)  Values ('$data' , '$solicitante' , '$item')";
mysqli_query($conn,$sql) or die("erro ao tenta cadastra o usuario");
mysqli_close($conn);
echo "Compra Realizada Com Sucesso";  ?>

<nav>
    <a href="home.php">Ver Lista</a>
    
</nav>