<?php
session_start();

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title> App- Cadastrar </title>
		<link rel="stylesheet" href="sele.css">
	</head>
	
	<body>
      		
		<h1> Chat </h1>
		<form method="POST" action="insert.php">
		<fieldset>
        <legend>CHAT</legend>  		
		<?php
			if(isset($_SESSION['msg'])){
				echo "<p>".$_SESSION['msg']. "</p>";
				//Destruir sessão
				unset($_SESSION['msg']);
			}
			
		?>

			

			<div class="n"><input type="text" name="nome" placeholder="Escreva o nome" required ></div><br><br>
			
			<textarea type="text" name="mensagem" placeholder="Escreva a mensagem aqui.." required ></textarea><br><br>
			
			
			<input type="submit" value="Enviar">
			</fieldset>
		</form>
	</body> 
</html>