<?php
session_start();
?>

<?php

  //credenciais
  
  $servidor="localhost";
  $usuario="root";
  $senha="";
  $db="ispcan";
  
  
  
  //conexao
  $conn = mysqli_connect($servidor, $usuario, $senha, $db);
  
  //$nome = "joelson";
  $nome = $_POST['nome'];
  $mensagem = $_POST['mensagem'];

  
  //insert
  $resultado = "INSERT INTO chat(nome, mensagem, data_msg)
  VALUE('$nome','$mensagem',NOW())";

  
  //Query
  $result_listar = mysqli_query($conn, $resultado);
  
  //verificacao de insercao
  if(mysqli_insert_id($conn)){
	 
	echo"perfeito <br>";
    echo"mensagem enviada com sucesso".mysqli_insert_id($conn);	
    header('location:chat.php');
  }else{
	echo"erro de insercao de registro";
   }
  
