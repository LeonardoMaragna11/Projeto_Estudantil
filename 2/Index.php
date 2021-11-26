<?php  session_start();    ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <section class="login">
        
		<form method="post" action="processa.php">
			<?php
                if(isset($_SESSION['erro']['informacao'])){
                    echo($_SESSION['erro']['informacao']);
                    }
            ?>
			<div class="text-input-wrapper">
				<label for="usuario">Seu Login:</label>
				<input type="text"  name="usuario">
			</div>
			<div class="">
				<label for="senha">Sua Senha:</label>
				<input type="password" name="senha">
			</div>
			<div class="">
				<button type="submit" class="enviar">Acessar</button>
			</div>
		</form>
	</section>
</body>
</html>