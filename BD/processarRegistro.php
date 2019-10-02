<?php

    include "connBD.php";
    
	session_start();
	if($_SERVER['REQUEST_METHOD'] == "POST"){
			$email = $_POST['email'];
			$nome = $_POST['nome'];
			$senha = $_POST['senha'];
			
			$sql = "insert into funcionario (email, nome, senha) values ( '$email', '$nome', '$senha');";
			
			if($conn->query($sql)){
				$_SESSION['msg'] = "Cadastrado com sucesso!";
			}else{
				$_SESSION['msg'] = $conn->error;
            }
            
			$conn->close;
			header("Location:../index.php");
	}
?>