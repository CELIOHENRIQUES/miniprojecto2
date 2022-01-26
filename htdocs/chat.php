<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <style>
body{
    background-image: url("imagens/chat.png");
width: 100% ;
background-size: cover;
padding: 0;
margin: 0;
}

div.menu{
background-color: rgba(57, 209, 236, 0.411);
width: 1366px;
height: 3.5rem;
margin-top: 0px;
margin-left: 0px;
text-align: center;

}
div.menu a{
text-decoration:none;
font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
font-size: 40px;
padding:20px;
color:cornsilk;


}
form{
margin-top:35px;
}
div.p{font-family: Arial, Helvetica, sans-serif;
font-size: 40px;
background-color: aquamarine;
}
    </style>
</head>
<body>
<div class="menu">
        <span><a href="home.php">home</a></span>
        
    </div>

<form method="POST" action="insert.php">
		<?php
			if(isset($_SESSION['msg'])){
				echo "<p>".$_SESSION['msg']. "</p>";
				//Destruir sessão
				unset($_SESSION['msg']);
			}
			
		?>
        
    <div class="wrapper">
        <div class="title">Conversa</div>
        <div class="form">
            <div class="bot-inbox inbox">

                <div class="msg-header">
                   <?php

                     //credenciais
  
                     $servidor="localhost";
                     $usuario="root";
                     $senha="";
                     $db="ispcan";
  
                      //conexao
                     $conn=mysqli_connect($servidor, $usuario, $senha, $db);
                     //Select
                       $listar = "SELECT * FROM chat"; 
  
                       //Query
                      $result_listar = mysqli_query($conn, $listar);
  
                      while($mostrar = mysqli_fetch_assoc($result_listar))
                     {
                         echo "<div><p>".$mostrar['nome']."<br>"."</p></div>";
  	                     echo "".$mostrar['mensagem']."<br>";
  	                     echo "".$mostrar['data_msg']."<br><hr>";

                     }
  
                    ?>
  
  
                </div>
            </div>
            
        </div>

        <div class="typing-field">
            <div class="input-data">
			<input type="text" name="nome" placeholder="Escreva o nome " required><br><br>
        </div>
            </div>

		<div class="typing-field">
            <div class="input-data">
			<textarea type="text" name="mensagem" placeholder="Escreva a mensagem aqui.." required></textarea><br><br>
            </div>
        </div>
		<div class="typing-field">
            <div class="input-data">
						<input type="submit" value="Enviar">
            </div>
        </div>
 
    </div>
    <script>
        
    </script>
</form>	
    
</body>
</html>