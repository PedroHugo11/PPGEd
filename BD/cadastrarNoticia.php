<?php

include "connBD.php";

session_start();
	if($_SERVER['REQUEST_METHOD'] == "POST"){
		$emissor = $_POST['emissor'];
		$dia = $_POST['dia'];
		$mes = $_POST['mes'];
		$ano = $_POST['ano'];
		$tag1 = $_POST['tag1'];
		$tag2 = $_POST['tag2'];
		$tag3 = $_POST['tag3'];
        	$tag4 = $_POST['tag4'];
        	$titulo = $_POST['titulo']; 
		$p1 = $_POST['par1'];
		$p2 = $_POST['par2'];
		$p3 = $_POST['par3'];
		$p4 = $_POST['par4'];
		$p5 = $_POST['par5'];
		$p6 = $_POST['par6'];
		$p7 = $_POST['par7'];
		$p8 = $_POST['par8'];
		$cod = $_POST['cod'];
		$destaque = $_POST['destaque'];
		$legenda = $_POST['legenda'];
        
        ini_set('post_max_size', '50M');
        ini_set('upload_max_filesize', '50M');
        ini_set('max_execution_time', 0);
        ini_set('max_input_time', 0);

        $name = $_FILES['img']['name'];
        $tmp_name = $_FILES['img']['tmp_name'];
        $type= $_FILES['img']['type'];
        $size = $_FILES['img']['size'];
        $error = $_FILES['img']['error'];

        $extensao = pathinfo ( $name, PATHINFO_EXTENSION );
        $extensao = strtolower ( $extensao );

	$novo_nome = md5( time () ) . '.' . $extensao; //define o nome do arquivo
        $diretorio = "uploads/"; //define o diretorio para onde enviaremos o arquivo
        
        move_uploaded_file($tmp_name, $diretorio.$novo_nome);//efetua o upload
     	
	if($destaque == "sim"){

		$sql1 = "insert into destaque (emissor, dia, mes, ano, tag1, tag2, tag3, tag4, titulo,  p1, p2, p3, p4, p5, p6, p7, p8, imagem, legenda, id) 
		values ('$emissor', '$dia', '$mes', '$ano', '$tag1', '$tag2', '$tag3', '$tag4', '$titulo', '$p1', '$p2', '$p3', '$p4', '$p5', '$p6', '$p7', '$p8', '$novo_nome', '$legenda', '$cod');";
		$sql2 = "insert into noticia (emissor, dia, mes, ano, tag1, tag2, tag3, tag4, titulo,  p1, p2, p3, p4, p5, p6, p7, p8, imagem, legenda, id) 
		values ('$emissor', '$dia', '$mes', '$ano', '$tag1', '$tag2', '$tag3', '$tag4', '$titulo', '$p1', '$p2', '$p3', '$p4', '$p5', '$p6', '$p7', '$p8', '$novo_nome', '$legenda', '$cod');";

		if(mysqli_query($conn, $sql1)){
			$_SESSION['msg'] = "Cadastrado com sucesso!";
		} else {
			$_SESSION['msg'] =  mysqli_error($conn);
		}

		if(mysqli_query($conn, $sql2)){
			$_SESSION['msg'] = "Cadastrado com sucesso!";
		} else {
			$_SESSION['msg'] =  mysqli_error($conn);
		}
		header('location: ../areaAdm.php');
	}

	$sql = "insert into noticia (emissor, dia, mes, ano, tag1, tag2, tag3, tag4, titulo,  p1, p2, p3, p4, p5, p6, p7, p8, imagem, legenda, id) 
	values ('$emissor', '$dia', '$mes', '$ano', '$tag1', '$tag2', '$tag3', '$tag4', '$titulo', '$p1', '$p2', '$p3', '$p4', '$p5', '$p6', '$p7', '$p8', '$novo_nome', '$legenda', '$cod');";
			
		if(mysqli_query($conn, $sql)){
			$_SESSION['msg'] = "Cadastrado com sucesso!";
		}else{
			$_SESSION['msg'] =  mysqli_error($conn);
		}
	header('location: ../areaAdm.php');
	}
?>
