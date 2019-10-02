<?php

        include "BD/connBD.php";
		if($_SERVER['REQUEST_METHOD'] == "POST"){
		
		$id = $_POST['id'];
		
		$sql="delete from noticia where id='$id'";
			
			if(mysqli_query($conn, $sql)){
				$_SESSION['msg1'] = "Excluido com sucesso!";
				
			}else{
				$_SESSION['msg1'] =  mysqli_error($conn);
			}
			
			header('location: tabelaNoticia.php');
	}		
?>
