<?php
include_once ("conexao.php");
$consulta = "SELECT * FROM solicitacoes";
$con = $conn->query($consulta) or die($conn->error);



?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="STYLE.CSS">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>solicitacoes</title>
</head>
<body>
    <img src="image.png" class="image_post" >
   <h1> <p class="frase" > Tabela de Compras </p></h1>
<table align="center" border='1' bordercolor="red">
<tr>
    <td>codigo</td>
    <td>data_solicitacao </td>
    <td>nome_solicitante</td>
    <td>item_comprado</td>
</tr>

<?php while ($dado = $con->fetch_array()){ ?>

<tr>
    <td><?php  echo $dado["id"];?></td>
<td><?php  echo date("d/m/y",strtotime ($dado["data_solicitacao"]));?> </td>
<td><?php  echo $dado["nome_solicitante"];?></td>
<td><?php  echo $dado["item_comprado"];?></td>


</tr>
<?php } ?>


</table>



<nav>
    <a href="index.php"> VOLTAR</a>
</nav>



</body>
</html>
