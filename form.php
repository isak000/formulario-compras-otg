<!DOCTYPE html>
<html lang="en">
<head>


<link rel="stylesheet" href="STYLE.CSS">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inserindo</title>
</head>
<body>
    <h1>Cadastro de solicitacoes </h1>
<img src="image.png" >
<form action="script.php" method="POST">
<p>Data de Solicitacao </p> <input type="text" name="data" size="50">
 
<p >Solicitante </p> <input type="text" name="slc" size="50">

<p>Item Comprado</p> <textarea  name="item" size=100 maxlength="250 " > </textarea>
    
<input type="submit" name="enviar">

<nav>
    <a href="index.php">VOLTAR</a>
</nav>

</form>

</body>
</html>