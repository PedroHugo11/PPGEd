<?php
	include "connBD.php";
	if($_SERVER['REQUEST_METHOD'] == "POST"){
		$email = $_POST['email'];
		$senha = $_POST['senha'];
	}
	
	$sql = "select * from funcionario where email = '$email' and senha = '$senha';";
	session_start();
	$result = $conn->query($sql);
	
	if($row = $result->fetch_assoc()){
		$_SESSION['username'] = $row;
		$_SESSION['adm'] = true;
		header("Location:../areaAdm.php");
	}else{
		header("Location:../index.php");
		$_SESSION['msg'] = "Login e/ou senha incorretos";
	}
?>