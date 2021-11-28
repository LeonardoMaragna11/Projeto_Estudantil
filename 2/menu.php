<?php session_start();?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="stylesheet" href="menu_estilo.css">
</head>
<body>
    <?php  if($_SESSION['usuario']['id']==1){   ?>
            <p>Chegou</p>

    <?php  }else{?>
        <p>Nivel baixo</p>
        
        
    <?php }?>
    <a href="index.php">voltar</a>
</body>
</html>