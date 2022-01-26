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
	  echo "".$mostrar['nome']."<br>";
  	  echo "".$mostrar['mensagem']."<br>";
  	  echo "".$mostrar['data_msg']."<br><hr>";

  }
  
  ?>
  
  